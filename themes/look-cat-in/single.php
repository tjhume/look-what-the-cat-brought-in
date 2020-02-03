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

<?php
//Custom view for default posts
if('post' == get_post_type()){
?>

<article id="post-content">
	<h1><?php the_title(); ?></h1>
	<div><?php the_field('post_content'); ?></div>
</article>

<?php 
//Default view
}else{ while ( have_posts() ) :
	the_post();
	the_post_navigation();
endwhile; } ?>

<?php
get_footer();
