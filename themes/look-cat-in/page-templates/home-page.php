<?php
/**
* Template Name: Home
*/
get_header(); ?>

<div class="hero-background" style="background-image: url('<?php the_field('hero_background_image'); ?>')">

    <section class="hero" style="background-image: url('<?php the_field('hero_background_image'); ?>')">
        <div class="cell-wrap">
            <div class="hero-content">
                <img src="<?php the_field('hero_image'); ?>" alt="Look What the Cat Brought In">
                <h1><?php the_field('hero_title'); ?></h1>
                <div class="hero-buttons">
                    <div class="button-wrap">
                        <?php if(have_rows('hero_buttons')): while(have_rows('hero_buttons')):the_row(); ?>
                            <a href="<?php the_sub_field('button_link'); ?>" class="button"><?php the_sub_field('button_text'); ?></a>
                        <?php endwhile; endif; ?>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-social">
            <div class="hero-social-wrap">
                <?php if(have_rows('social_icons', 'option')): while(have_rows('social_icons', 'option')):the_row(); 
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

    <section id="about" class="opacity">
        <div id="about-tabs-wrapper">
            <noscript>Please enable JavaScript to use these tabs!</noscript>
            <ul id="about-tabs">
                <li><a href="#what-we-do" class="active">What we do</a></li><li><a href="#who-we-are">Who we are</a></li><li><a href="#contact-us">Contact us</a></li><li><a href="#visit-us">Visit us</a></li>
            </ul>
        </div>
        <div id="about-display">
            <div id="what-we-do" class="content right active">
            <h2>WHAT WE DO</h2>
                <?php
                    $image = get_field('what_we_do_image');
                    $alt = esc_attr($image['alt']);
                    $src = esc_url($image['url']);
                ?>
                <div class="img">
                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
                </div>
                <div class="text">
                    <p><?php the_field('what_we_do_content'); ?></p>
                </div>
                <div class="clear"></div>
            </div>
            <div id="who-we-are" class="content">
                <h2>WHO WE ARE</h2>
                <?php
                    $image = get_field('who_we_are_image');
                    $alt = esc_attr($image['alt']);
                    $src = esc_url($image['url']);
                ?>
                <div class="img">
                    <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
                </div>
                <div class="text">
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
                <div class="clear"></div>
                <h2 class="sponsors-heading">OUR SPONSORS</h2>
                <div class="sponsors">
                    <?php if(have_rows('who_we_are_sponsors_rep')): while(have_rows('who_we_are_sponsors_rep')):the_row(); 
                        $image = get_sub_field('image');
                        $alt = esc_attr($image['alt']);
                        $src = esc_url($image['url']);
                    ?>
                        <a class="sponsor" href="<?php the_sub_field('link'); ?>" target="_blank"><img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>"></a>
                    <?php endwhile; endif; ?>
                </div>
                <p class="sponsors-bottom-text">
                    <?php the_field('who_we_are_bottom_text'); ?>
                </p>
            </div>
            <div id="contact-us" class="content">
                <div class="text">
                    <h2>CONTACT US</h2>
                    <?php echo do_shortcode('[contact-form-7 id="1091" title="Contact Form"]'); ?>
                </div>
                <div class="clear"></div>
            </div>
            <div id="visit-us" class="content right">
                <div class="text">
                    <h2>VISIT US</h2>
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
        <h1>LATEST NEWS</h1>
        <hr>
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
                        <h2 class="post-title"><?php the_title(); ?></h2>
                        <time class="post-date">
                        <?php if(get_field('use_custom_date')){
                            the_field('date');
                        }else{
                            the_date();
                        }?>
                        </time>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; }else{ 
                    //If no posts are found ?>
                    <div id="latest-content">
                    <h2>No News Found</h2>
                    </div>
                <?php }
                wp_reset_postdata();
            ?>
        </div>
        <a href="/news" id="more-news">More News</a>
    </section>

    <section id="featured-cats" class="opacity">
        <h1>FEATURED CATS</h1>
        <hr class="title-line">
        <div id="featured-cats-wrapper">
            <?php
                $image = get_field('cat_1_image');
                $alt = esc_attr($image['alt']);
                $src = esc_url($image['url']);
            ?>
            <div class="featured-cat-box">
                <a href="/adopt"><img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>"></a>
                <h2><?php the_field('cat_1_name'); ?></h2>
                <p><?php the_field('cat_1_description'); ?></p>
                <p><a href="/adopt">Learn More &rarr;</a></p>
            </div>
            <?php
                $image = get_field('cat_2_image');
                $alt = esc_attr($image['alt']);
                $src = esc_url($image['url']);
            ?>
            <div class="featured-cat-box">
                <a href="/adopt"><img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>"></a>
                <h2><?php the_field('cat_2_name'); ?></h2>
                <p><?php the_field('cat_2_description') ?></p>
                <p><a href="/adopt">Learn More &rarr;</a></p>
            </div>
            <?php
                $image = get_field('cat_3_image');
                $alt = esc_attr($image['alt']);
                $src = esc_url($image['url']);
            ?>
            <div class="featured-cat-box">
                <a href="/adopt"><img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>"></a>
                <h2><?php the_field('cat_3_name'); ?></h2>
                <p><?php the_field('cat_3_description'); ?></p>
                <p><a href="/adopt">Learn More &rarr;</a></p>
            </div>
            <div class="clear"></div>
        </div>
    </section>
</div>

<?php get_footer(); ?>