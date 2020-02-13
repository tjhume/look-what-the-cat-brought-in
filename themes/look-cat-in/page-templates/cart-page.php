<?php
/**
* Template Name: Cart
*/
get_header(); 
$options_id = get_theme_options_id(); ?>

<section id="cart" class="top">
    <h1>Cart</h1>
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
</section>


<?php get_footer(); ?>