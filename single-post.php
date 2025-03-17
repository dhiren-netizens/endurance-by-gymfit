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
									<?php
									if ( isset( $theme_option['endurance_display_date'] ) && ! empty( $theme_option['endurance_display_date'] ) ) {
										if ( 1 === (int) $theme_option['endurance_display_date'] ) {
											?>
											<a href="<?php echo esc_url( get_day_link( get_post_time( 'Y' ), get_post_time( 'm' ), get_post_time( 'j' ) ) ); ?>" class="entry-date"><?php the_time( 'jS F, Y' ); ?></a>
											<?php
										}
									}
									?>
									<?php
									if ( isset( $theme_option['endurance_display_author'] ) && ! empty( $theme_option['endurance_display_author'] ) ) {
										if ( 1 === (int) $theme_option['endurance_display_author'] ) {
											?>
											<a href="<?php echo esc_url( get_author_posts_url( get_post_field( 'post_author', get_the_ID() ) ) ); ?>">
												Posts by: <?php echo esc_html( get_the_author_meta( 'display_name', get_post_field( 'post_author', get_the_ID() ) ) ); ?>
											</a>
											<?php
										}
									}
									?>
									<?php
									if ( isset( $theme_option['endurance_display_comment_count'] ) && ! empty( $theme_option['endurance_display_comment_count'] ) ) {
										if ( 1 === (int) $theme_option['endurance_display_comment_count'] ) {
											?>
											<p>
												Comments: <?php echo esc_html( get_comments_number() ); ?>
											</p>
											<?php
										}
									}
									?>
								</div>
									
							</div>
							<div class="image-wrapper pb-4">
								<?php
								if ( has_post_thumbnail() ) :
									the_post_thumbnail(
										'medium',
										array(
											'loading' => 'lazy',
											'class'   => 'w-100',
											'alt'     => get_the_title(),
										)
									);
									?>
								<?php else : ?>
									<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/background/post-img.webp' ); ?>" alt="post-img">
								<?php endif; ?>
							</div>
							<?php echo wp_kses( get_post_field( 'post_content', $post_id ), endurance_allowed_tags() ); ?>
							<div class="endurance_display_categories_tags">
								<?php
								if ( isset( $theme_option['endurance_display_categories'] ) && ! empty( $theme_option['endurance_display_categories'] ) ) {
									if ( 1 === (int) $theme_option['endurance_display_categories'] ) {
										$categories = get_the_category();
										foreach ( $categories as $category ) :
											?>
										<span class="endurance_single_blog_categories">Categories: 
											<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
												<?php echo esc_html( $category->name ); ?>
											</a>
										</span>
										<?php endforeach; ?>
										<?php
									}
								}
								?>
								<?php
								if ( isset( $theme_option['endurance_display_tags'] ) && ! empty( $theme_option['endurance_display_tags'] ) ) {
									if ( 1 === (int) $theme_option['endurance_display_tags'] ) {
										$post_tags = get_the_tags();
										foreach ( $post_tags as $tag ) :
											?>
										<span class="endurance_single_blog_tags">Tags: 
											<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">
												<?php echo esc_html( $tag->name ); ?>
											</a>
										</span>
										<?php endforeach; ?>
										<?php
									}
								}
								?>
							</div>
							<div class="social wow fadeInUp">
								<?php if ( isset( $theme_option['endurance_social_profile'] ) && ! empty( $theme_option['endurance_social_profile'] ) ) { ?>
									<span>
									<?php echo esc_html( $theme_option['endurance_social_profile'] ); ?>
								</span>
								<?php } ?>
									<?php
									if ( isset( $theme_option['endurance_social_profiles'] ) && is_array( $theme_option['endurance_social_profiles'] ) ) {
										foreach ( $theme_option['endurance_social_profiles'] as $social_profiles ) {
											if ( 1 == $social_profiles['enabled'] ) {
												?>
													<a href="<?php echo esc_url( $social_profiles['url'] ); ?>" class="icon image-wrapper">
														<i class="fa <?php echo esc_attr( $social_profiles['icon'] ); ?>"></i>
													</a>
													<?php
											}
										}
									}
									?>
							</div>
						</div>
						<div class="blog-line wow fadeInUp">
							<?php
							// Get the previous post.
							$prev_post = get_previous_post();
							if ( ! empty( $prev_post ) ) :
								?>
								<?php if ( isset( $theme_option['endurance_pre_text'] ) && ! empty( $theme_option['endurance_pre_text'] ) ) { ?>
									<button class="blog-btn prev" onclick="location.href='<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>'">
									<?php echo esc_html( $theme_option['endurance_pre_text'] ); ?>
									</button>
								<?php } ?>
							<?php endif; ?>

							<?php
							// Get the next post.
							$next_post = get_next_post();
							if ( ! empty( $next_post ) ) :
								?>
								<?php if ( isset( $theme_option['endurance_next_text'] ) && ! empty( $theme_option['endurance_next_text'] ) ) { ?>
									<button class="blog-btn next" onclick="location.href='<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>'">
									<?php echo esc_html( $theme_option['endurance_next_text'] ); ?>
									</button>
								<?php } ?>
							<?php endif; ?>
						</div>
						<div class="comment-wrapper wow fadeInUp">
							<div class="row gy-4 justify-content-center">
								<div class="col-xl-7">
									<div class="comment-block">
									<?php if ( isset( $theme_option['endurance_comment_title'] ) && ! empty( $theme_option['endurance_social_profile'] ) ) { ?>
										<div class="title">
										<?php echo esc_html( $theme_option['endurance_comment_title'] ); ?>
									</div>
									<?php } ?>
										
										<?php
										// Get the comments for the current post.
										$comments = get_comments(
											array(
												'post_id' => get_the_ID(),
												'status'  => 'approve', // Only get approved comments.
											)
										);

										// Check if there are comments.
										if ( $comments ) {
											foreach ( $comments as $comment ) {
												?>
												<div class="comment">
													<div class="person-dtls">
														<div class="icon image-wrapper">
															<?php echo get_avatar( $comment->comment_author_email, 64 ); // Display avatar. ?>
														</div>
														<div class="dtls">
															<div class="text">
																<span><?php echo esc_html( $comment->comment_author ); ?></span>
																<p><?php echo esc_html( gmdate( 'jS F, Y', strtotime( $comment->comment_date ) ) ); ?></p>
															</div>
														</div>
													</div>
													<p><?php echo esc_html( $comment->comment_content ); ?></p>
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
									<div class="title text-center pb-4"><?php if ( isset( $theme_option['endurance_leave_comment'] ) && ! empty( $theme_option['endurance_leave_comment'] ) ) { ?>
										<?php echo esc_html( $theme_option['endurance_leave_comment'] ); ?>
									</div>
									<?php } ?>
										<?php
										// Comment form.
										comment_form(
											array(
												'title_reply' => '',
												'label_submit' => 'Submit Now',
												'fields' => array(
													'author' => '<div class="form-group"><input type="text" name="author" class="user-input" placeholder="FIRST NAME" required></div>',
													'email'  => '<div class="form-group"><input type="email" name="email" class="user-input" placeholder="E-MAIL" required></div>',
												),
												'comment_field' => '<div class="form-group"><textarea name="comment" class="user-input" placeholder="WRITE YOUR CONCERN" rows="4" required></textarea></div>',
											)
										);
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4">
						<div class="wrapper">
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
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
