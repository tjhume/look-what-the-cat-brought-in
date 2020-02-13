<?php
/**
* Template Name: Checkout
*/
get_header(); 
$options_id = get_theme_options_id(); ?>

<section id="checkout" class="top">
    <h1>Checkout</h1>
    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
</section>


<?php get_footer(); ?>