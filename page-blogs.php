<?php
/**
 * The template for displaying all pages.
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

$blog_posts = new WP_Query(
	array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
	)
);
$count      = 1;
?>

	<!-- MAIN SECTIONS START FROM HERE -->
	<main class="main_wrapper">

		<!-- BLOG SECTION START FROM HERE -->
		<div class="blog-section default-padding">
			<div class="container">
				<div class="blog-wrapper wow fadeIn">
					<?php if ( $blog_posts->have_posts() ) : ?>
						<div class="row blog-post">
							<?php $count = 1; ?>
							<?php
							while ( $blog_posts->have_posts() ) :
								$blog_posts->the_post();
								?>
								<?php if ( 1 == $count ) { ?>
									<!-- Display the first large post -->
									<div class="col-lg-8 col-md-8">
										<div class="blog-block h-100 d-flex flex-column justify-content-between">
											<div class="image-wrapper mb-4">
												<?php
												if ( has_post_thumbnail() ) {
													the_post_thumbnail( get_the_ID(), 'full' );
												}
												?>
											</div>
											<p class="blog-title big"><?php the_title(); ?></p>
											<?php wp_kses_post( the_excerpt() ); ?>
											<div class="read d-flex gap-3 align-items-center justify-content-between">
												<a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read more', 'endurance' ); ?></a>
												<p><?php the_date(); ?></p>
											</div>
										</div>
									</div>

									<!-- Display the first 2 small posts in the sidebar -->
									<div class="col-lg-4 col-md-4">
										<?php ++$count; ?>
										<?php
										while ( $blog_posts->have_posts() && $count <= 3 ) :
											$blog_posts->the_post();
											?>
											<div class="blog-block mb-4">
												<div class="image-wrapper mb-4">
													<?php
													if ( has_post_thumbnail() ) {
														the_post_thumbnail( get_the_ID(), 'full' );
													}
													?>
												</div>
												<p class="blog-title"><?php the_title(); ?></p>
												<div class="read d-flex gap-3 align-items-center justify-content-between">
													<a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read more', 'endurance' ); ?></a>
													<p><?php the_date(); ?></p>
												</div>
											</div>
											<?php ++$count; ?>
										<?php endwhile; ?>
									</div>
								<?php } else { ?>
									<!-- Hide remaining posts initially -->
									<div class="pt-4 col-lg-4 col-md-4 hidden">
										<div class="blog-block wow fadeInUp">
											<div class="image-wrapper mb-4">
												<?php
												if ( has_post_thumbnail() ) {
													the_post_thumbnail( get_the_ID(), 'full' );
												}
												?>
											</div>
											<p class="blog-title big"><?php the_title(); ?></p>
											<div class="read d-flex gap-3 align-items-center justify-content-between">
												<a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Read more', 'endurance' ); ?></a>
												<p><?php the_date(); ?></p>
											</div>
										</div>
									</div>
								<?php } ?>
								<?php ++$count; ?>
							<?php endwhile; ?>
						</div>
						<?php if ( isset( $blog_posts->found_posts ) && $blog_posts->found_posts > 3 ) { ?>
							<a href="#" class="btn_wrapper mt-sm-5 mt-4 mx-auto" id="load-more">Load more</a>
						<?php } ?>
					<?php else : ?>
						<p class="no-blog-posts">
							<?php esc_html_e( 'We couldn\'t find any posts that match your criteria.', 'endurance' ); ?> 
						</p>
						<?php
						endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<!-- BLOG SECTION END'S FROM HERE -->
	</main>
	<!-- MAIN SECTIONS END'S FROM HERE -->

<?php
get_footer();
