<?php
/**
* Template Name: Adopt
*/
get_header(); 
$options_id = get_theme_options_id(); ?>

<div id="adopt">
    <div class="hero-background" style="background-image: url('../wp-content/uploads/2020/02/adopt-hero.jpg')">
        
        <section class="hero" style="background-image: url('../wp-content/uploads/2020/02/adopt-hero.jpg')">
            <div class="cell-wrap">
                <div class="hero-content">
                    <h1>ADOPT</h1>
                    <div class="hero-buttons">
                        <div class="button-wrap">
                            <a href="#information" class="button">Information</a>
                            <a href="#application" class="button">Application</a>
                            <a href="#adoptable-cats" class="button">Adoptable Cats</a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-social">
                <div class="hero-social-wrap">
                    <?php if(have_rows('social_icons', $options_id)): while(have_rows('social_icons', $options_id)):the_row(); 
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

        <section id="information">
            <h1>ADOPTION INFORMATION</h1>
            <div class="content">
                
            </div>
        </section>

        <section id="application" class="opacity">
            <h1>APPLICATION</h1>
        </section>

        <section id="adoptable-cats">
            <h1>ADOPTABLE CATS</h1>
        </section>

    </div>
</div>

<?php get_footer(); ?>