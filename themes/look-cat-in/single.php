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
if('post' == get_post_type()){ ?>

<article id="post-content">
	<div><?php
	while ( have_posts() ) :
		the_post();
		?><h2 class="post-title"><?php the_title(); ?></h2><time class="post-date">
		<?php if(get_field('use_custom_date')){
			the_field('date');
		}else{
			the_date();
		}?>
		</time><?php
		the_content();
	endwhile;
	?></div>
</article>

<?php
//For products
}else if('product' == get_post_type()){ 
	the_post();
?>

<?php if(is_user_logged_in()){ ?>

<section id="product-page" class="top">
	<h1><?php the_title(); ?></h1>
	<div class="content">
		<?php the_content(); ?>
	</div>
</section>

<?php }else{ ?>
	<?php wp_redirect( "/"); ?>
<?php } ?>

<?php 
//Default view
}else{ while ( have_posts() ) :
	the_post();
	the_post_navigation();
endwhile; } ?>

<?php
get_footer();
