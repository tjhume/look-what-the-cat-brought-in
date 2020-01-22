<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Look_What_the_Cat_Brought_In
 */

get_header();
?>

<?php while ( have_posts() ) :
	the_post();
	the_post_navigation();
endwhile; ?>

<?php
get_footer();
