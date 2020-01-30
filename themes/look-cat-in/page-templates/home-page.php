<?php
/**
* Template Name: Home
*/
get_header(); 
$options_id = get_theme_options_id(); ?>

<div id="hero-background" style="background-image: url('<?php the_field('hero_background_image'); ?>')">

    <section id="home-hero">
        <div class="cell-wrap">
            <div id="home-hero-content">
                <h1><?php the_field('hero_title'); ?></h1>
                <div id="home-hero-buttons">
                    <div class="button-wrap">
                        <?php if(have_rows('hero_buttons')): while(have_rows('hero_buttons')):the_row(); ?>
                            <a href="<?php the_sub_field('button_link'); ?>" class="button"><?php the_sub_field('button_text'); ?></a>
                        <?php endwhile; endif; ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="home-hero-social">
            <div class="hero-social-wrap">
                <?php if(have_rows('hero_social_icons')): while(have_rows('hero_social_icons')):the_row(); 
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
                <div class="text">
                    <h2>What we do</h2>
                    <p>In tincidunt massa sed eros laoreet, sed vehicula orci vulputate. Curabitur consequat mauris sed varius tempor. Integer lacinia nulla tincidunt metus porttitor, sed condimentum magna sollicitudin. Donec sed dui dignissim nulla aliquam tristique eu sit amet elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eget ante egestas, euismod ipsum eu, vulputate odio. Proin mattis mauris dignissim arcu tempus, ut commodo sem ullamcorper. Duis tincidunt molestie diam nec porttitor. Nunc tincidunt diam in velit imperdiet, in lacinia quam rutrum. Integer ullamcorper luctus imperdiet. Cras ac massa mollis, interdum lacus in, euismod metus.</p>
                </div>
                <div class="img">
                    <img src="https://static.wixstatic.com/media/61d72f_b1c57b14d9ed4fc9a3676296a2604d0f~mv2.jpg/v1/fill/w_292,h_325,al_c,q_80,usm_0.66_1.00_0.01/kitten2.webp" alt="some-image">
                </div>
                <div class="clear"></div>
            </div>
            <div id="who-we-are" class="content right">
                <div class="text">
                    <h2>Who we are</h2>
                    <div class="left-list">
                        <p class="list-heading">Directors and Officers</p>
                        <hr>
                        <ul>
                            <li>Jennifer Nosler, President</li>
                            <li>Cecilia Richardson, Vice President</li>
                            <li>Megan Krieger, Treasurer</li>
                            <li>Megan Phillips, Secretary</li>
                            <li>Shari Thorne, Director</li>
                            <li>Deborah Morin, Director</li>
                            <li>Kathryn Neugent, Director</li>
                            <li>Ariel Heart, Director</li>
                            <li>Lee Richards, Director</li>
                            <li>Amelia Mellett Keith, Director</li>
                            <li>Cecily Harsh de Gutierrez, Director</li>
                        </ul>
                    </div>
                    
                    <div class="right-list">
                        <p class="list-heading">Veterinary Advisors</p>
                        <hr>
                        <ul>
                            <li>Patrick Vall, DVM</li>
                            <li>Amelia Mellett, DVM, Diplomat American College of Veterinary Internal Medicine</li>
                            <li>Chris McReynolds, DVM, Diplomat American College  of Veterinary Internal Medicine</li>
                            <li>Kelly McCarty, DVM</li>
                        </ul>
                    </div>

                    <div class="clear"></div>
                </div>
                <div class="img">
                    <img src="https://static.wixstatic.com/media/61d72f_b1c57b14d9ed4fc9a3676296a2604d0f~mv2.jpg/v1/fill/w_292,h_325,al_c,q_80,usm_0.66_1.00_0.01/kitten2.webp" alt="some-image">
                </div>
                <div class="clear"></div>
            </div>
            <div id="contact-us" class="content">
                <div class="text">
                    <h2>Contact Us</h2>
                    <?php echo do_shortcode('[contact-form-7 id="1091" title="Contact Form"]'); ?>
                </div>
                <div class="clear"></div>
            </div>
            <div id="visit-us" class="content right">
                <div class="text">
                    <h2>Visit Us</h2>
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