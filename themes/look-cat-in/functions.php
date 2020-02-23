<?php
/**
 * Look What the Cat Brought In functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Look_What_the_Cat_Brought_In
 */

if ( ! function_exists( 'look_cat_in_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function look_cat_in_setup() {

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		//Register nav and footer menus
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'look-cat-in' ),
			'footer' => esc_html__( 'Footer', 'look-cat-in' )
		));

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'look_cat_in_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
endif;
add_action( 'after_setup_theme', 'look_cat_in_setup' );

/**
 * Enqueue scripts and styles.
 */
function look_cat_in_scripts() {
	//Styles
	wp_enqueue_style('look-cat-in-style', get_stylesheet_uri()); //Normalize
	wp_enqueue_style('look-cat-in-fonts', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style('look-cat-in-custom-css', get_template_directory_uri() . '/css/custom.css');
	
	//Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'look-cat-in-custom-js', get_template_directory_uri() . '/js/custom.js' );

	//Conditional Scripts/Styles
	$current_page = get_the_title(get_queried_object_id());
	if($current_page == 'Home'){
		wp_enqueue_script( 'look-cat-in-home-js', get_template_directory_uri() . '/js/home.js' );
	}
}
add_action( 'wp_enqueue_scripts', 'look_cat_in_scripts' );

/**
 * Enqueue Admin Styles
 */
function look_cat_in_admin_scripts(){
	wp_enqueue_style( 'look-cat-in-options-css', get_template_directory_uri() . '/css/admin.css' );
}
add_action('admin_enqueue_scripts', 'look_cat_in_admin_scripts');

/**
 * Add Theme Options page
 */
add_action('acf/init', 'look_cat_in_acf_op_init');
function look_cat_in_acf_op_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

/**
 * Cache Shelterluv API calls for 30 min
 */
function get_cats(){

	$transient = get_transient( 'shelterluv_cats' );

	if( !empty( $transient ) ) {
		return $transient;
	}else{
	
		$opts = array(
			'http'=>array(
			'method'=>"GET",
			'header'=>"X-API-KEY: cbc6298d-2f55-455a-a73e-28a3b65ac13d"
			)
		);
		$context = stream_context_create($opts);
		$file = file_get_contents('https://www.shelterluv.com/api/v1/animals&limit=1000', false, $context);
		$animals = json_decode($file)->{'animals'};
		$returnAnimals = [];

		foreach($animals as $animal){
			if($animal->{'Status'} === 'Welfare Assessment'){
				array_push($returnAnimals, $animal);
			}
		}

		set_transient( 'shelterluv_cats', $returnAnimals, (30 * MINUTE_IN_SECONDS) );
		
		return $returnAnimals;
	}
}

/**
 * To get first image from a post
 */
function cat_get_first_image(){
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];

	if(empty($first_img)){ //Defines a default image
		$first_img = "../wp-content/themes/look-cat-in/default.jpg";
	}
	return $first_img;
}

/**
 * Use relative site URL token in custom menu links
 */
function menu_token_replace($items) {
	$url = get_site_url();
	$url = str_replace('https://', '', $url);
	$url = str_replace('http://', '', $url);
  	foreach($items as $item) {
		$item->url = (strpos($item->url, '%SITE%') !== false ) ? str_replace('%SITE%', $url, $item->url) : $item->url;
  	}
	return $items;
}
add_filter('wp_nav_menu_objects', 'menu_token_replace');

/**
 * Removes HTML Spacing above WP Admin Bar
 */
function remove_admin_login_header(){
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

/**
 * Adds quantity option next to Add to Cart button
 */
add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
	if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
		$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
		$html .= '<span class="quanitity-text">Quanitity: </span>';
		$html .= woocommerce_quantity_input( array(), $product, false );
		$html .= '<button type="submit" class="button alt add-to-cart">' . esc_html( $product->add_to_cart_text() ) . '</button>';
		$html .= '</form>';
	}
	return $html;
}

/**
 * Removes add to cart option from shop page
 */
add_action( 'woocommerce_after_shop_loop_item', 'remove_add_to_cart_buttons', 1 );
function remove_add_to_cart_buttons(){
  if(is_shop()){ 
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
  }
}

/**
 * Remove SKUs
 */
add_filter( 'wc_product_sku_enabled', '__return_false' );

/**
 * Remove related products
 */
add_filter('woocommerce_product_related_posts_query', '__return_empty_array', 100);

/**
 * Update header cart count dynamically
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'cat_cart_count_fragments', 10, 1 );
function cat_cart_count_fragments($fragments){
	$cart_count = WC()->cart->get_cart_contents_count();

	if($cart_count == 0){
		$fragments['div.cart-count'] = '<div class="cart-count hidden"></div>';
	}else{
		$fragments['div.cart-count'] = '<div class="cart-count">' . $cart_count . '</div>';   
	} 
    return $fragments;
}
