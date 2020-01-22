<?php
/**
* Template Name: Home
*/
get_header(); 
$options_id = get_theme_options_id(); ?>

<div id="hero-background" style="background-image: url('<?php echo CFS()->get( 'hero_background_image' ); ?>')">

    <section id="home-hero">
        <div class="cell-wrap">
            <div id="home-hero-content">
                <!--<img src="<?php //echo CFS()->get( 'site_logo', $options_id ); ?>" alt="Look What the Cat Brought In">-->
                <h1 style="text-align:center; color:white;">Look What the Cat Brought In</h1>
                <div id="home-hero-buttons">
                    <div class="button-wrap">
                        <?php $hero_buttons = CFS()->get( 'hero_buttons' );
                        foreach ( $hero_buttons as $button ) { ?>
                            <a href="<?php echo $button['link']; ?>" class="button"><?php echo $button['text']; ?></a>
                        <?php } ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="home-hero-social">
            <div class="hero-social-wrap">
                <?php $social_icons = CFS()->get( 'hero_social_icons' );
                foreach ( $social_icons as $icon ) { 
                    $icon_id = $icon['icon'];
                    $icon_alt = get_post_meta($icon_id, '_wp_attachment_image_alt', true);
                    $icon_src = wp_get_attachment_image_src( $icon_id, 'full', false ); ?>
                    <a href="<?php echo $icon['url']; ?>" class="hero-social-icon"><img src="<?php echo $icon_src[0]; ?>" alt="<?php echo $icon_alt; ?>" target="_blank"></a>
                <?php } ?>
                <div class="clear"></div>
            </div>
        </div>
    </section>

    <section id="featured-cats">
        <div>
            
        </div>
    </section>
</div>

<?php get_footer(); ?>