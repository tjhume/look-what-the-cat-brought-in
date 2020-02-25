<?php
/**
* Template Name: Cart
*/
get_header(); ?>

<section id="cart" class="top">
    <h1>Cart</h1>
    <?php if(is_user_logged_in()){ ?>
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
    <?php }else{ ?>
    <p style="text-align: center;">Coming soon!</p>
    <?php } ?>
</section>


<?php get_footer(); ?>