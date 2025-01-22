<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Endurance_By_GymFit
 */
  
 get_header(); ?> 
  
 <section id="tag" class="tag-content">
	<div class="container">
	<div class="tag-section">
		
		<?php
		// Check if there are any posts to display
		if ( have_posts() ) : ?>
		<?php
		// The Loop
		while ( have_posts() ) : the_post(); ?>
		<div class="tag-block">
		<img src="<?php echo get_the_post_thumbnail_url($post_id, 'thumbnail'); ?>">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		</div>
		<?php endwhile; 
		
		else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		
		<?php endif; ?>
	</div>
		</div>
 </section>
  
 <?php get_footer(); ?>