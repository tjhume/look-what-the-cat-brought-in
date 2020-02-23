<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Look_What_the_Cat_Brought_In
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<nav>
			<div id="nav-logo">
				<a href="/"><img src="<?php the_field('site_logo', 'option'); ?>" alt="Look What the Cat Brought In"></a>
			</div>
			<div id="nav-links">
				<?php wp_nav_menu( array(
					'container'       => 'div',
					'container_class' => 'nav-menu',
					'theme_location'  => 'primary'
					));
				?>
			</div>
			<?php if(is_user_logged_in()){ ?>
			<a class ="menu-cart" href="/cart">
				<img src="<?php the_field('cart_icon', 'option'); ?>" alt="Cart">
				<?php
					$cart_count = WC()->cart->get_cart_contents_count();
					if($cart_count > 0){
				?>
				<div class="cart-count"><?php echo $cart_count; ?></div>
				<?php
					}
				?>
			</a>
			<?php } ?>
			<div class="hamburger hamburger--squeeze js-hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
			<div class="clear"></div>
		</nav>
	</header>