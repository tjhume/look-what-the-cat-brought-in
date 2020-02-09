<?php
/**
* Template Name: Get Involved
*/
get_header(); 
$options_id = get_theme_options_id(); ?>

<div id="get-involved">
    <div class="hero-background" style="background-image: url('../wp-content/uploads/2020/02/get-involved-hero.jpg')">
        
        <section class="hero" style="background-image: url('../wp-content/uploads/2020/02/get-involved-hero.jpg')">
            <div class="cell-wrap">
                <div class="hero-content">
                    <h1>GET INVOLVED</h1>
                    <div class="hero-buttons">
                        <div class="button-wrap">
                            <a href="#donate" class="button">Donate</a>
                            <a href="#volunteer" class="button">Volunteer</a>
                            <a href="#foster" class="button">Foster</a>
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

        <section id="donate">
            <h1>DONATE</h1>
            <div class="content">
                <p>We are a 501(c)(3) organization so your contributions are tax deductible and there are many ways you can make a donation. Our cats sincerely thank you for giving them a second chance.</p>
                <div class="donate-row">
                    <div class="donate-box">
                        <a href="#" class="box-content">

                        </a>
                    </div>
                    <div class="donate-box">
                        <a href="#" class="box-content">

                        </a>
                    </div>
                    <div class="donate-box">
                        <a href="#" class="box-content">

                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="donate-row">
                    <div class="donate-box">
                        <a href="#" class="box-content">

                        </a>
                    </div>
                    <div class="donate-box">
                        <a href="#" class="box-content">

                        </a>
                    </div>
                    <div class="donate-box">
                        <a href="#" class="box-content">

                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="donate-row">
                    <div class="donate-box">
                        <a href="#" class="box-content">

                        </a>
                    </div>
                    <div class="donate-box">
                        <a href="#" class="box-content">

                        </a>
                    </div>
                    <div class="donate-box">
                        <a href="#" class="box-content">

                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </section>

        <section id="volunteer" class="opacity">
            <h1>VOLUNTEER</h1>
        </section>

        <section id="foster">
            <h1>FOSTER</h1>
        </section>

    </div>
</div>

<?php get_footer(); ?>