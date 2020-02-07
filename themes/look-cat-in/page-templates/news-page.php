<?php
/**
* Template Name: News
*/
get_header(); 
$options_id = get_theme_options_id(); ?>

<section class="top" id="news">
    <div class="news-wrapper">
        <?php
            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

            $args = array(
                'posts_per_page' => 9,
                'post_type' => 'post',
                'order' => "DESC",
                'paged' => $paged
            );

            $news = new WP_Query($args);

            if ($news -> have_posts()){ while($news -> have_posts()) : $news -> the_post();
                //Post Content ?>

            <div class="news-box">
                <div class="news-content">
                    <p><?php the_title(); ?></p>
                </div>
            </div>

            <?php endwhile; ?>
            <div class="clear"></div>
            <div class="pagination">
                <?php
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $news->max_num_pages,
                        'current'      => max( 1, get_query_var( 'paged' ) ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => true,
                        'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'look-cat-in' ) ),
                        'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'look-cat-in' ) ),
                        'add_args'     => false,
                        'add_fragment' => '',
                    ) );
                ?>
            </div>

            <?php }else{
                //If no posts are found ?>
                <div id="latest-content">
                <h2>No News Found</h2>
                </div>
            <?php } wp_reset_postdata();
        ?>
    </div>
</section>

<?php get_footer(); ?>