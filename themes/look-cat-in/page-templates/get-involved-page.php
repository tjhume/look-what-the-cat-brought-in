<?php
/**
* Template Name: Get Involved
*/
get_header(); 
$options_id = get_theme_options_id(); ?>

<div id="get-involved">
    <div id="hero-background" class="no-lazy-load" style="background-image: url('http://localhost/wp-content/uploads/2020/02/get-involved-hero.jpg')">
        
        <section id="home-hero">
            <div class="cell-wrap">
                <div id="home-hero-content">
                    <h1>GET INVOLVED</h1>
                    <div id="home-hero-buttons">
                        <div class="button-wrap">
                            <a href="/#donate" class="button">Donate</a>
                            <a href="/#volunteer" class="button">Volunteer</a>
                            <a href="/#foster" class="button">Foster</a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="home-hero-social">
                <div class="hero-social-wrap">
                    <?php if(have_rows('hero_social_icons', 965)): while(have_rows('hero_social_icons', 965)):the_row(); 
                        $image = get_sub_field('image');
                        $alt = esc_attr($image['alt']);
                        $src = esc_url($image['url']);
                        $link = get_sub_field('link'); ?>

                        <a href="<?php echo $link; ?>" class="hero-social-icon" target="_blank"><img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>"></a>
                    <?php endwhile; endif; ?>
                    <div class="clear"></div>
                </div>
            </div>
        </section>

    </div>
</div>

<?php get_footer(); ?>