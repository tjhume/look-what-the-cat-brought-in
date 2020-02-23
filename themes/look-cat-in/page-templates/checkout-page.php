<?php
/**
* Template Name: Checkout
*/
get_header(); ?>

<section id="checkout" class="top">
    <h1>Checkout</h1>
    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
</section>


<?php get_footer(); ?>