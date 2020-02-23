<?php
/**
* Template Name: Cart
*/
get_header(); ?>

<section id="cart" class="top">
    <h1>Cart</h1>
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
</section>


<?php get_footer(); ?>