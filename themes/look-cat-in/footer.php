<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Look_What_the_Cat_Brought_In
 */
?>

<footer>
    <div class="content">
        <div class="footer-box">
            <div class="social-icons">
                <?php
                $i = 1;
                $rowCount = count(get_field('social_icons', 'option'));
                if(have_rows('social_icons', 'option')): while(have_rows('social_icons', 'option')):the_row(); 
                    $image = get_sub_field('image');
                    $alt = esc_attr($image['alt']);
                    $src = esc_url($image['url']);
                    $link = get_sub_field('link'); ?>

                    <a href="<?php echo $link; ?>" class="social-icon<?php if($i == $rowCount){echo ' last';} ?>" target="_blank"><img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>"></a>
                <?php $i++; endwhile; endif; ?>
            </div>
            <div>&copy; <?php echo date('Y'); ?> - Look What the Cat Brought In Cat Rescue and Shelter</div>
        </div>
        <div class="footer-box middle">
            <div class="normal"><strong>Office Hours:</strong></div>
            <div>Saturday 1-4PM</div>
            <div>Sunday 1-4PM</div>
            <br>
            <div><strong>Phone:</strong> (719) 331-6852</div>
        </div>
        <div class="footer-box right">
            <?php wp_nav_menu( array(
                'container'       => 'div',
                'container_class' => 'footer-menu',
                'theme_location'  => 'footer'
                ));
            ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
