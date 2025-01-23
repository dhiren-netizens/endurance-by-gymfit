<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Endurance_By_GymFit
 */

$theme_option = get_option( 'redux_demo' );
get_header();
?>

	<main id="primary" class="site-main blog-single">
<!-- BLOG DETAILS SECTION START FROM HERE -->
<div class="blog-details-section default-padding">
		<div class="container">
			<div class="blogdtls">
				<div class="row gy-4">
					<div class="col-xl-9 col-lg-8">
						<div class="blogdtls-wrapper">
							<div class="mb-3 wow fadeIn">
								<p class="blog-title big"><?php the_title(); ?></p>
								<div class="read">
									<?php if ( isset( $theme_option['endurance_display_date'] ) && ! empty( $theme_option['endurance_display_date'] ) ) { 
										if ( 1 == $theme_option['endurance_display_date'] ) {?>
										<p>
								     		<?php echo get_the_date(); ?>
							     		</p>
									   <?php }
								    } ?>
									
										<p>
										<?php echo the_author(); ?>
							     		</p>
									   
								</div>
							</div>
							<?php echo get_post_field('post_content', $post_id); ?>
						</div>
						<div class="blog-line wow fadeInUp">
							<?php 
							// Get the previous post
							$prev_post = get_previous_post();
							if (!empty($prev_post)): ?>
								<button class="blog-btn prev" onclick="location.href='<?php echo esc_url(get_permalink($prev_post->ID)); ?>'">
									Previous
								</button>
							<?php else: ?>
								<button class="blog-btn prev disabled" disabled>Previous</button>
							<?php endif; ?>

							<?php 
							// Get the next post
							$next_post = get_next_post();
							if (!empty($next_post)): ?>
								<button class="blog-btn next" onclick="location.href='<?php echo esc_url(get_permalink($next_post->ID)); ?>'">
									Next
								</button>
							<?php else: ?>
								<button class="blog-btn next active	 disabled" disabled>Next</button>
							<?php endif; ?>
						</div>
						<div class="comment-wrapper wow fadeInUp">
							<div class="row gy-4 justify-content-center">
								<div class="col-xl-7">
									<div class="comment-block">
										<div class="title">Comments</div>
										<?php
										// Get the comments for the current post
										$comments = get_comments(array(
											'post_id' => get_the_ID(),
											'status' => 'approve' // Only get approved comments
										));

										// Check if there are comments
										if ($comments) {
											foreach ($comments as $comment) {
												?>
												<div class="comment">
													<div class="person-dtls">
														<div class="icon image-wrapper">
															<?php echo get_avatar($comment->comment_author_email, 64); // Display avatar ?>
														</div>
														<div class="dtls">
															<div class="text">
																<span><?php echo esc_html($comment->comment_author); ?></span>
																<p><?php echo esc_html(date('jS F, Y', strtotime($comment->comment_date))); ?></p>
															</div>
															<div class="forward">
																<a href="#!" class="image-wrapper">
																	<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/forward-icon.svg" alt="forward-icon">
																</a>
																<a href="#!" class="image-wrapper">
																	<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/more-icon.svg" alt="more-icon">
																</a>
															</div>
														</div>
													</div>
													<p><?php echo esc_html($comment->comment_content); ?></p>
												</div>
												<?php
											}
										} else {
											echo '<p>No comments yet. Be the first to comment!</p>';
										}
										?>
									</div>
								</div>
								<div class="col-xl-5">
									<div class="fill-up-form comment-form">
										<div class="title text-center pb-4">Leave a comment</div>
										<?php
										// Comment form
										comment_form(array(
											'title_reply' => '',
											'label_submit' => 'Submit Now',
											'fields' => array(
												'author' => '<div class="form-group"><input type="text" name="author" class="user-input" placeholder="FIRST NAME" required></div>',
												'email' => '<div class="form-group"><input type="email" name="email" class="user-input" placeholder="E-MAIL" required></div>',
											),
											'comment_field' => '<div class="form-group"><textarea name="comment" class="user-input" placeholder="WRITE YOUR CONCERN" rows="4" required></textarea></div>',
										));
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4">
						<div class="wrapper">
							<div class="block mb-4 wow fadeInUp">
								<div class="titles">Categories</div>
								<div class="box categorieBlock">
								<?php 
									$categories = get_the_category($id); // Get categories for the post with the specified ID
									if ( ! empty( $categories ) ) : ?>
										<ul>
											<?php foreach ( $categories as $category ) : ?>
												<li>
													<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
														<?php echo esc_html( $category->name ); ?>
													</a>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php else : ?>
										<p>No categories found</p> <!-- Optional: message if no categories -->
									<?php endif; ?>
								</div>
							</div>
							<div class="block mb-4 wow fadeInUp">
								<div class="titles">Search</div>
								<div class="box searchBlock">
									<div class="fill-up-form">
										<div class="form-group mb-0 post-search">
										    <?php get_search_form(); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="block mb-4 wow fadeInUp">
								<div class="titles">Tags</div>
								<div class="box tagsBlock">
									<?php 
									$post_tags = get_the_tags();
									
									if ($post_tags) {
										foreach ($post_tags as $tag) {
											echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a>';
										}
									} else {
										echo '<span>No tags found</span>';
									}
									?>
								</div>
							</div>
							<div class="block wow fadeInUp">
								<div class="titles">Related Posts</div>
								<div class="box postBlock">
									<?php
									$current_post_id = get_the_ID();

									$categories = get_the_category($current_post_id);
									$category_ids = array();

									if ($categories) {
										foreach ($categories as $category) {
											$category_ids[] = $category->term_id;
										}
									}

									$args = array(
										'category__in' => $category_ids,
										'post__not_in' => array($current_post_id),
										'posts_per_page' => 3,
										'orderby' => 'rand'
									);

									$related_posts = get_posts($args);

									if ($related_posts) {
										foreach ($related_posts as $post) {
											setup_postdata($post); 
											?>
											<div class="post">
												<div class="image-wrapper">
													<a href="<?php the_permalink(); ?>">
														<?php if (has_post_thumbnail()) : ?>
															<?php the_post_thumbnail('medium', ['loading' => 'lazy', 'alt' => get_the_title()]); ?>
														<?php else : ?>
															<img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/background/post-img.webp'); ?>" alt="post-img">
														<?php endif; ?>
													</a>
												</div>
												<div class="text">
													<span><?php the_title(); ?></span>
													<p><?php echo get_the_date(); ?></p>
												</div>
											</div>
											<?php
										}
										wp_reset_postdata(); 
									} else {
										echo '<p>No related posts found.</p>'; 
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        <!-- BLOG DETAILS SECTION END'S FROM HERE -->
	</main><!-- #main -->

<?php	
get_footer();
