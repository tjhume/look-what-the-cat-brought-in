<?php
/**
* Template Name: Get Involved
*/
get_header(); ?>

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

        <section id="donate">
            <h1>DONATE</h1>
            <div class="content">
                <p>We are a 501(c)(3) organization so your contributions are tax deductible and there are many ways you can make a donation. Our cats sincerely thank you for giving them a second chance.</p>
                <div class="donate-row">
                    <div class="donate-box">
                        <a href="http://smile.amazon.com/ch/26-2397025" class="box-content" target="_blank">
                            <div class="box-table">
                                <div class="overlay">
                                    <div class="box-table">
                                        <div class="box-cell overlay-content">
                                            <span>Have an Amazon account? Support us through Amazon Smile!</span>
                                            <div class="action">Shop</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-cell">
                                    <img src="../wp-content/uploads/2020/02/amazon-smile.jpg" alt="Amazon Smile">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="donate-box">
                        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H3DDTGMXPR5CJ" class="box-content" target="_blank">
                            <div class="box-table">
                                <div class="overlay">
                                    <div class="box-table">
                                        <div class="box-cell overlay-content">
                                            <span>Give an old-fashioned cash donation through PayPal.</span>
                                            <div class="action">Donate</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-cell">
                                    <img src="../wp-content/uploads/2020/02/paypal.jpg" alt="PayPal">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="donate-box">
                        <a href="https://engage.ppunitedway.org/comm/ArticleArchive.jsp?ArticleType=ShoppingPages#AgencySearchSection" class="box-content" target="_blank">
                            <div class="box-table">
                                <div class="overlay">
                                    <div class="box-table">
                                        <div class="box-cell overlay-content">
                                            <span>Pikes Peak United Way is another way to directly donate to us.</span>
                                            <div class="note">Search "Look What the Cat Brought In" at the bottom of the page, click the "Donate $100" button, then scroll up and click "View Cart." The total can be changed in the cart.</div>
                                            <div class="action">Donate</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-cell">
                                    <img src="../wp-content/uploads/2020/02/united-way.jpg" alt="Pikes Peak United Way">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>


                <div class="donate-row">
                    <div class="donate-box">
                    <a href="https://www.pointworthy.com/view/shownpo.xhtml?product=2210563830833035" class="box-content" target="_blank">
                            <div class="box-table">
                                <div class="overlay">
                                    <div class="box-table">
                                        <div class="box-cell overlay-content">
                                            <span>Do you have a rewards or loyalty card from a merchant or airline? You can donate your points to us and they will translate into money for our shelter.</span>
                                            <div class="action">Donate</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-cell">
                                    <img src="../wp-content/uploads/2020/02/point-worthy.jpg" alt="Point Worthy">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>

                <h1>Wish List</h1>
                <div class="content wish-list">
                    <p>Monetary donations are preferred, but Look What the Cat Brought in also appreciates donations of goods. These are our current needs:</p>
                    <ul>
                        <li>Towels</li>
                        <li>Paper towels</li>
                        <li>Trash bags</li>
                        <li>Batteries - triple A, double A, D</li>
                        <li>Laundry detergent - any</li>
                        <li>Liquid hand soap</li>
                        <li>Dishwashing gloves</li>
                        <li>Cat carriers - in good repair</li>
                        <li>Cat Beds</li>
                        <li>Small cat trees (for individual cats)</li>
                        <li>A working laptop</li>
                        <li>A sandwich board sign</li>
                        <div class="clear"></div>
                    </ul>
                </div>
        </section>

        <section id="volunteer" class="opacity">
            <h1>VOLUNTEER</h1>
            <div class="content">
                <p>If you’re looking for a way to help out local cats in need, please consider volunteering at Look What The Cat Brought In. We need volunteers to help clean, feed, and water the cats on a daily basis. Throughout the year we have special events and a few extra hands to both transport the animals and staff the events is always helpful. Love cats but looking for something a little less “hands-on?” We always have a need for volunteers with basic office skills to help keep track of all our cats up for adoption.</p>
            </div>
        </section>

        <section id="foster">
            <h1>FOSTER</h1>
            <div class="content">
                <p>If you have a place in your heart and home for kitties-but you’re not prepared to adopt—consider fostering for us. You’ll make a life-changing difference to one of our homeless kitties by taking them into your home on a temporary basis until they are ready for adoption.</p>
            </div>
        </section>

    </div>
</div>

<?php get_footer(); ?>