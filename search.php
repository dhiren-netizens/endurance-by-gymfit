<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Endurance_By_GymFit
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
		<div class="search-section">
		<?php
		// Check if there are any posts to display.
		if ( have_posts() ) :
			?>
			<?php
			// The Loop.
			while ( have_posts() ) :
				the_post();
				?>
		<div class="search-block">
		<img src="<?php echo esc_url( get_the_post_thumbnail_url( $post_id, 'thumbnail' ) ); ?>">
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		</div>
				<?php
		endwhile;

		else :
			?>
		<p>We couldn't find any posts that match your criteria.</p>
		
		<?php endif; ?>
		</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
