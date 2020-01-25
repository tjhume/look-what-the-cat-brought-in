<?php
/**
* Template Name: Home
*/
get_header(); 
$options_id = get_theme_options_id(); ?>

<div id="hero-background" style="background-image: url('<?php echo CFS()->get('hero_background_image'); ?>')">

    <section id="home-hero">
        <div class="cell-wrap">
            <div id="home-hero-content">
                <h1><?php echo CFS()->get('hero_title'); ?></h1>
                <div id="home-hero-buttons">
                    <div class="button-wrap">
                        <?php $hero_buttons = CFS()->get('hero_buttons');
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
                <?php $social_icons = CFS()->get('hero_social_icons');
                foreach ( $social_icons as $icon ) { 
                    $icon_id = $icon['icon'];
                    $icon_alt = get_post_meta($icon_id, '_wp_attachment_image_alt', true);
                    $icon_src = wp_get_attachment_image_src($icon_id, 'full', false); ?>
                    <a href="<?php echo $icon['url']; ?>" class="hero-social-icon"><img src="<?php echo $icon_src[0]; ?>" alt="<?php echo $icon_alt; ?>" target="_blank"></a>
                <?php } ?>
                <div class="clear"></div>
            </div>
        </div>
    </section>

    <section id="about">
        <div id="about-tabs-wrapper">
            <noscript>Please enable JavaScript to use these tabs!</noscript>
            <ul id="about-tabs">
                <li><a href="#what-we-do" class="active">What we do</a></li>
                <li><a href="#who-we-are">Who we are</a></li>
                <li><a href="#contact-us">Contact us</a></li>
                <li><a href="#visit-us">Visit us</a></li>
            </ul>
        </div>
        <div id="about-display">
            <div id="what-we-do" class="content active">
                <h2>What we do</h2>
                <div class="text">
                    <p>In tincidunt massa sed eros laoreet, sed vehicula orci vulputate. Curabitur consequat mauris sed varius tempor. Integer lacinia nulla tincidunt metus porttitor, sed condimentum magna sollicitudin. Donec sed dui dignissim nulla aliquam tristique eu sit amet elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eget ante egestas, euismod ipsum eu, vulputate odio. Proin mattis mauris dignissim arcu tempus, ut commodo sem ullamcorper. Duis tincidunt molestie diam nec porttitor. Nunc tincidunt diam in velit imperdiet, in lacinia quam rutrum. Integer ullamcorper luctus imperdiet. Cras ac massa mollis, interdum lacus in, euismod metus.</p>
                </div>
                <div class="img">
                    <img src="https://static.wixstatic.com/media/61d72f_b1c57b14d9ed4fc9a3676296a2604d0f~mv2.jpg/v1/fill/w_292,h_325,al_c,q_80,usm_0.66_1.00_0.01/kitten2.webp" alt="some-image">
                </div>
                <div class="clear"></div>
            </div>
            <div id="who-we-are" class="content">
                <h2>Who we are</h2>
                <div class="text">
                    <p>In tincidunt massa sed eros laoreet, sed vehicula orci vulputate. Curabitur consequat mauris sed varius tempor. Integer lacinia nulla tincidunt metus porttitor, sed condimentum magna sollicitudin. Donec sed dui dignissim nulla aliquam tristique eu sit amet elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eget ante egestas, euismod ipsum eu, vulputate odio. Proin mattis mauris dignissim arcu tempus, ut commodo sem ullamcorper. Duis tincidunt molestie diam nec porttitor. Nunc tincidunt diam in velit imperdiet, in lacinia quam rutrum. Integer ullamcorper luctus imperdiet. Cras ac massa mollis, interdum lacus in, euismod metus.</p>
                </div>
                <div class="img">
                    <img src="https://static.wixstatic.com/media/61d72f_b1c57b14d9ed4fc9a3676296a2604d0f~mv2.jpg/v1/fill/w_292,h_325,al_c,q_80,usm_0.66_1.00_0.01/kitten2.webp" alt="some-image">
                </div>
                <div class="clear"></div>
            </div>
            <div id="contact-us" class="content">
                <h2>Contact Us</h2>
                <div class="text">
                    <p>In tincidunt massa sed eros laoreet, sed vehicula orci vulputate. Curabitur consequat mauris sed varius tempor. Integer lacinia nulla tincidunt metus porttitor, sed condimentum magna sollicitudin. Donec sed dui dignissim nulla aliquam tristique eu sit amet elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eget ante egestas, euismod ipsum eu, vulputate odio. Proin mattis mauris dignissim arcu tempus, ut commodo sem ullamcorper. Duis tincidunt molestie diam nec porttitor. Nunc tincidunt diam in velit imperdiet, in lacinia quam rutrum. Integer ullamcorper luctus imperdiet. Cras ac massa mollis, interdum lacus in, euismod metus.</p>
                </div>
                <div class="img">
                    <img src="https://static.wixstatic.com/media/61d72f_b1c57b14d9ed4fc9a3676296a2604d0f~mv2.jpg/v1/fill/w_292,h_325,al_c,q_80,usm_0.66_1.00_0.01/kitten2.webp" alt="some-image">
                </div>
                <div class="clear"></div>
            </div>
            <div id="visit-us" class="content">
                <h2>Visit Us</h2>
                <div class="text">
                    <p>In tincidunt massa sed eros laoreet, sed vehicula orci vulputate. Curabitur consequat mauris sed varius tempor. Integer lacinia nulla tincidunt metus porttitor, sed condimentum magna sollicitudin. Donec sed dui dignissim nulla aliquam tristique eu sit amet elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eget ante egestas, euismod ipsum eu, vulputate odio. Proin mattis mauris dignissim arcu tempus, ut commodo sem ullamcorper. Duis tincidunt molestie diam nec porttitor. Nunc tincidunt diam in velit imperdiet, in lacinia quam rutrum. Integer ullamcorper luctus imperdiet. Cras ac massa mollis, interdum lacus in, euismod metus.</p>
                </div>
                <div class="img">
                    <img src="https://static.wixstatic.com/media/61d72f_b1c57b14d9ed4fc9a3676296a2604d0f~mv2.jpg/v1/fill/w_292,h_325,al_c,q_80,usm_0.66_1.00_0.01/kitten2.webp" alt="some-image">
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>