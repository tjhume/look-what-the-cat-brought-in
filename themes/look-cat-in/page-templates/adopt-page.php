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
            <h1>ADOPTION APPLICATION</h1>
            <div class="content">
                <div class="left">
                    <img src="" alt="">
                </div>
                <div class="right">
                    <p>Ready to start the adoption process? Fill out an application!</p>
                    <p>Things to keep in mind before you submit an application for adoption:</p>
                    <ul>
                        <li><strong>Submitting an application does not guarantee that you will be accepted as an adopter</strong>. We will contact you after you submit an application to further discuss the possibility of you adopting a cat from us.  We reserve the right to deny adoption to anyone for any reason.</li>
                        <li>Any cat you adopt must be an inside only cat.</li>
                        <li>Any cat you adopt must never be declawed.</li>
                        <li>If you decide that you cannot keep your adopted cat for any reason, you must return them to us. If you adopt a pair of cats together, you must return both.</li>
                        <li>You may not surrender one of our cats to a shelter that employs eutheniasa as a population control.</li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </section>

        <section id="adoptable-cats">
            <h1>ADOPTABLE CATS</h1>
            <p>Coming soon!</p>
        </section>

    </div>
</div>

<?php get_footer(); ?>