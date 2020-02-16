<?php
/**
* Template Name: Shop
*/
get_header(); ?>

<?php //if(is_user_logged_in()){ ?>
    <section class="top" id="shop">
        <h1>Shop</h1>
        <?php echo do_shortcode('[products limit="9" columns="3" paginate="true"]'); ?>
    </section>
<?php //}else{ ?>
<!--<section class="top" id="shop">
    <p class="soon">Coming Soon</p>
</section>-->
<?php //} ?>

<?php
get_footer();
