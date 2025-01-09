<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Endurance_By_GymFit
 */

get_header();

$blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1 ) );
$count = 1;
?>

	<!-- MAIN SECTIONS START FROM HERE -->
	<main class="main_wrapper">

		<!-- BLOG SECTION START FROM HERE -->
		<div class="blog-section default-padding">
			<div class="container">
				<div class="blog-wrapper wow fadeIn">
					<div class="row pt-4 gy-4">
						<?php if ( $blog_posts->have_posts() ) : ?>
							<?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post();
								if( 1 == $count ) {
									?>
									<div class="col-lg-8 col-md-8">
										<div class="blog-block h-100 d-flex flex-column justify-content-between">
											<div class="image-wrapper mb-4">
												<?php if ( has_post_thumbnail() ) { 
													the_post_thumbnail( get_the_ID(), 'full' );
												} ?>
											</div>
											<p class="blog-title big"><?php the_title(); ?></p>
											<?php wp_kses_post( the_excerpt() ) ?>
											<div class="read d-flex gap-3 align-items-center justify-content-between">
												<a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read more', 'endurance' ) ?></a>
												<p><?php the_date(); ?></p>
											</div>
										</div>
									</div>
									<?php } ?>
									<div class="col-lg-4 col-md-4">
										<div class="blog-block">
											<div class="image-wrapper mb-4">
												<?php if ( has_post_thumbnail() ) { 
													the_post_thumbnail( get_the_ID(), 'full' );
												} ?>
											</div>
											<p class="blog-title big"><?php the_title(); ?></p>
											<div class="read d-flex gap-3 align-items-center justify-content-between">
												<a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read more', 'endurance' ) ?></a>
												<p><?php the_date(); ?></p>
											</div>
										</div>
									</div>
							<?php $count++;
							endwhile; ?>
						<?php else: ?>
							<p class="no-blog-posts">
								<?php esc_html_e('Sorry, no posts matched your criteria.', 'endurance'); ?> 
							</p>
						<?php endif; 
						wp_reset_postdata(); ?>
					</div>
					<a href="#" class="btn_wrapper mt-sm-5 mt-4 mx-auto">load more</a>
				</div>
			</div>
		</div>
		<!-- BLOG SECTION END'S FROM HERE -->

		<div class="sidebar default-padding">
			<?php get_sidebar(); ?>
		</div>
	</main>
	<!-- MAIN SECTIONS END'S FROM HERE -->

<?php
get_footer();
