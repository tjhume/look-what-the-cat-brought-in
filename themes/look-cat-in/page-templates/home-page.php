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
                <li><a href="#what-we-do" class="active">What we do</a></li><li><a href="#who-we-are">Who we are</a></li><li><a href="#contact-us">Contact us</a></li><li><a href="#visit-us">Visit us</a></li>
            </ul>
        </div>
        <div id="about-display">
            <div id="what-we-do" class="content active">
                <div class="text">
                    <h2>What we do</h2>
                    <p><?php the_field('what_we_do_content'); ?></p>
                </div>
                <?php
                    $image = get_field('what_we_do_image');
                    $alt = esc_attr($image['alt']);
                    $src = esc_url($image['url']);
                ?>
                <div class="img">
                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
                </div>
                <div class="clear"></div>
            </div>
            <div id="who-we-are" class="content right">
                <div class="text">
                    <h2>Who we are</h2>
                    <div class="left-list">
                        <p class="list-heading"><?php the_field('who_we_are_column_1_title'); ?></p>
                        <hr>
                        <ul>
                        <?php if(have_rows('who_we_are_column_1_list')): while(have_rows('who_we_are_column_1_list')):the_row(); ?>
                            <li><?php the_sub_field('member_name'); ?></li>
                        <?php endwhile; endif; ?>
                        </ul>
                    </div>
                    
                    <div class="right-list">
                        <p class="list-heading"><?php the_field('who_we_are_column_2_title'); ?></p>
                        <hr>
                        <ul>
                        <?php if(have_rows('who_we_are_column_2_list')): while(have_rows('who_we_are_column_2_list')):the_row(); ?>
                            <li><?php the_sub_field('member_name'); ?></li>
                        <?php endwhile; endif; ?>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php
                    $image = get_field('who_we_are_image');
                    $alt = esc_attr($image['alt']);
                    $src = esc_url($image['url']);
                ?>
                <div class="img">
                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
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
                    <div id="visit-hours">
                        <div class="hours">
                            <?php the_field('visit_us_hours'); ?>
                        </div>
                        <p class="appointment">All other days by appointment only</p>
                    </div>
                    <?php the_field('visit_us_google_map'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="latest-news">
        <h1>Latest News</h1>
        <div id="news-container">
            <?php
                $latest_args = array(
                    "posts_per_page" => 1,
                    'post_type' => 'post',
                    "orderby"        => "date",
                    "order"          => "DESC"
                );      
                
                $latest_news = new WP_Query($latest_args);

                if ($latest_news -> have_posts()){ while($latest_news -> have_posts()) : $latest_news -> the_post();
                    //Post Content ?>
                    <div id="latest-content">
                        <h2><?php the_title(); ?></h2>
                        <?php the_field('post_content'); ?>
                    </div>
                <?php endwhile; }else{ 
                    //If no posts are found ?>
                    <div id="latest-content">
                    <h2>No News Found</h2>
                    </div>
                <?php }
            ?>
        </div>
    </section>

    <section id="featured-cats">
        <h1>Featured Cats</h1>
        <div id="featured-cats-wrapper">
            <div class="featured-cat-box">
                <div>
                    <img src="http://localhost/wp-content/uploads/2020/02/Timmy.jpg" alt="">
                    <h2>Timmy</h2>
                    <p>My name is Timmy I am a kitty and I am pretty and my brothers name is Melvin the Melon and I like pets and stuff</p>
                </div>
            </div>
            <div class="featured-cat-box">
                <div>
                    <img src="http://localhost/wp-content/uploads/2020/02/Timmy.jpg" alt="">
                    <h2>Timmy</h2>
                    <p>My name is Timmy I am a kitty and I am pretty and my brothers name is Melvin the Melon and I like pets and stuff</p>
                </div>
            </div>
            <div class="featured-cat-box">
                <div>
                    <img src="http://localhost/wp-content/uploads/2020/02/Timmy.jpg" alt="">
                    <h2>Timmy</h2>
                    <p>My name is Timmy I am a kitty and I am pretty and my brothers name is Melvin the Melon and I like pets and stuff</p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
</div>

<?php get_footer(); ?>