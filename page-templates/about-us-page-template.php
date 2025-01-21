<?php
/** Template Name: About Us Page Template
 *
 * @package Endurance_By_GymFit
 */

$theme_option = get_option( 'redux_demo' );
get_header();
?>
	<body>
	<!-- MAIN SECTIONS START FROM HERE -->
	<main class="main_wrapper">

		<!-- ABOUT SECTION START FROM HERE -->
		<div class="default-padding">
			<div class="about-section">
				<div class="container">
					<div class="about-wrapper">
						<div class="row gy-sm-5 gy-4 justify-content-center align-items-center">
							<div class="col-lg-7 col-sm-10 order-lg-1 order-2">
								<div class="image-wrapper d-flex justify-content-center wow fadeInLeft">
									<?php if ( isset( $theme_option['endurance_general_about_us_image']['url'] ) && ! empty( $theme_option['endurance_general_about_us_image']['url'] ) ) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_general_about_us_image']['url'] ); ?>" alt="about-img" id="about_img1">
									<?php } ?>
									<?php if ( isset( $theme_option['endurance_general_about_us_logo_image']['url'] ) && ! empty( $theme_option['endurance_general_about_us_logo_image']['url'] ) ) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_general_about_us_logo_image']['url'] ); ?>" alt="white-logo" id="about_img2" class="logo">
									<?php } ?>
									<?php if ( isset( $theme_option['endurance_general_background_image']['url'] ) && ! empty( $theme_option['endurance_general_background_image']['url'] ) ) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_general_background_image']['url'] ); ?>" alt="strips" id="strips"  class="strips">
									<?php } ?>
								</div>
							</div>
							<div class="col-lg-5 order-lg-2 order-1">
								<div class="about_-ext text-lg-start text-center wow fadeInRight">
									<?php if ( isset( $theme_option['endurance_general_about_us_title'] ) && ! empty( $theme_option['endurance_general_about_us_title'] ) ) { ?>
										<div class="title"><?php echo esc_html( $theme_option['endurance_general_about_us_title'] ); ?></div>
									<?php } ?>
									<?php if ( isset( $theme_option['endurance_general_about_us_description'] ) && ! empty( $theme_option['endurance_general_about_us_description'] ) ) { ?>
										<p>
										<?php echo esc_html( $theme_option['endurance_general_about_us_description'] ); ?>
										</p>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ABOUT SECTION END'S FROM HERE -->
		
		<!-- STAND WITH SECTION START FROM HERE -->
		<div class="stand-with-section strips strips-2 default-padding">
			<div class="container">
				<div class="stand-with-wrapper">
					<div class="top-block wow fadeIn">
						<div class="d-lg-flex justify-content-start d-block align-items-center text-lg-start text-center pb-sm-2 pb-0">
							<?php if ( isset( $theme_option['stand_out_with'] ) && ! empty( $theme_option['stand_out_with'] ) ) { ?>
									<h1 class="title p-0">
										<?php echo esc_html( $theme_option['stand_out_with'] ); ?>
									</h1>
							<?php } ?>  
							<?php if ( isset( $theme_option['endurance_general_pattern_image']['url'] ) && ! empty( $theme_option['endurance_general_pattern_image']['url'] ) ) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_general_pattern_image']['url'] ); ?>" alt="Line" class="px-xl-5 px-4 mx-xl-5 mx-4 d-lg-block d-none">
							<?php } ?>
						</div>
						<?php if ( isset( $theme_option['high_endurance'] ) && ! empty( $theme_option['high_endurance'] ) ) { ?>
									<h1 class="title text-lg-end text-center">
										<?php echo esc_html( $theme_option['high_endurance'] ); ?>
									</h1>
						<?php } ?> 
					</div>
					<div class="row justify-content-end pb-lg-0 pb-4">
						<div class="col-lg-7">
							<div class="text-block d-lg-flex align-items-center text-lg-start text-center wow fadeInLeft">
							<?php if ( isset( $theme_option['high_endurance_description'] ) && ! empty( $theme_option['high_endurance'] ) ) { ?>
								<p class="mb-0 me-lg-3 mb-3">
										<?php echo esc_html( $theme_option['high_endurance_description'] ); ?>
								</p>
							<?php } ?> 
							<?php if ( isset( $theme_option['endurance_general_gt_button'] ) && 1 == $theme_option['endurance_general_gt_button'] && ! empty( $theme_option['endurance_general_gt_button'] ) ) { ?>
									<a href="<?php echo esc_attr( $theme_option['endurance_general_gt_link'] ); ?>" class="btn_wrapper mx-lg-0 mx-auto">
										<?php echo esc_html( $theme_option['endurance_general_gt_text'] ); ?>
									</a>
							<?php } ?> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="img-block img-block-2 wow fadeInUpBig">
				<div class="image-wrapper">
					<?php if ( isset( $theme_option['stand_out_with_img']['url'] ) && ! empty( $theme_option['stand_out_with_img']['url'] ) ) { ?>
						<img src="<?php echo esc_url( $theme_option['stand_out_with_img']['url'] ); ?>" alt="stand-with-img" class="d-block" id="stand_with_img">
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- STAND WITH SECTION END'S FROM HERE -->
		
		<!-- MISSION SECTION START FROM HERE -->
		<div class="mission-section default-padding">
			<div class="container">
				<div class="mission-wrapper">
					<div class="row gy-4 align-items-center justify-content-lg-between justify-content-center">
						<div class="col-lg-5">
							<div class="text-block text-lg-start text-center wow fadeInLeft">
								<?php if ( isset( $theme_option['endurance_our_mission'] ) && ! empty( $theme_option['endurance_our_mission'] ) ) { ?>
									<div class="title"><?php echo esc_html( $theme_option['endurance_our_mission'] ); ?></div>
								<?php } ?>  

								<?php if ( isset( $theme_option['endurance_mission_decription'] ) && ! empty( $theme_option['endurance_mission_decription'] ) ) { ?>
									<p class="mb-0"><?php echo esc_html( $theme_option['endurance_mission_decription'] ); ?></p>
								<?php } ?>  
							</div>
						</div>
						<div class="col-lg-6 col-sm-8">
							<div class="image-wrapper wow fadeInRight">
							<?php if ( isset( $theme_option['endurance_our_mission_image']['url'] ) && ! empty( $theme_option['endurance_our_mission_image']['url'] ) ) { ?>
								<img loading="lazy"  src="<?php echo esc_url( $theme_option['endurance_our_mission_image']['url'] ); ?>" alt="mission-img" id="mission_img">
							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- MISSION SECTION END'S FROM HERE -->

		<!-- CTA SECTION END'S FROM HERE -->
		<div class="cta-section default-padding pb-0 wow fadeInUp">
			<div class="container">
				<div class="cta-wrapper">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="cta-text text-lg-start text-center d-flex align-items-center gap-4">
								<div>
									<?php if ( isset( $theme_option['endurance_general_smart_app_title'] ) && ! empty( $theme_option['endurance_general_smart_app_title'] ) ) { ?>
										<div class="title pb-1"><?php echo esc_html( $theme_option['endurance_general_smart_app_title'] ); ?></div>
									<?php } ?>
									<?php if ( isset( $theme_option['endurance_general_smart_app_description'] ) && ! empty( $theme_option['endurance_general_smart_app_description'] ) ) { ?>
										<p><?php echo esc_html( $theme_option['endurance_general_smart_app_description'] ); ?></p>
									<?php } ?>    
								</div>
								<div class="image-wrapper d-lg-block d-none">
									<?php if ( isset( $theme_option['endurance_general_smart_app_download_image']['url'] ) && ! empty( $theme_option['endurance_general_smart_app_download_image']['url'] ) ) { ?>
										<img loading="lazy"  src="<?php echo esc_url( $theme_option['endurance_general_smart_app_download_image']['url'] ); ?>" alt="cta-appstore-img">
									<?php } ?>
								</div>
							</div>
							<div class="image-wrapper mockup mx-lg-0 mx-auto">
								<div class="row justify-content-center">
									<div class="col-xxl-10 col-lg-8 col-sm-10">
										<?php if ( isset( $theme_option['endurance_general_smart_app_mobile_image']['url'] ) && ! empty( $theme_option['endurance_general_smart_app_mobile_image']['url'] ) ) { ?>
											<img loading="lazy"  src="<?php echo esc_url( $theme_option['endurance_general_smart_app_mobile_image']['url'] ); ?>" alt="cta-mockup" class="d-block mx-auto">
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CTA SECTION END'S FROM HERE -->
		
		<!-- CLIENT SECTION START FROM HERE -->
		<div class="client-section default-padding">
			<div class="container">
				<div class="client-wrapper">
					<div class="row gy-sm-5 gy-4 align-items-center justify-content-between">
						<div class="col-lg-6 order-lg-1 order-2">
								<div class="image-wrapper clientImg wow fadeInLeft">
									<?php if ( isset( $theme_option['endurance_general_person_img']['url'] ) && ! empty( $theme_option['endurance_general_person_img']['url'] ) ) { ?>
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_person_img']['url'] ); ?>" alt="client-img" class="d-block mx-auto">
									<?php } ?>
									<div class="pettern image-wrapper">
										<?php if ( isset( $theme_option['endurance_general_gymfit_white_img']['url'] ) && ! empty( $theme_option['endurance_general_gymfit_white_img']['url'] ) ) { ?>
											<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_gymfit_white_img']['url'] ); ?>" alt="client-pettern">
											<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_gymfit_white_img']['url'] ); ?>" alt="client-pettern">
											<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_gymfit_white_img']['url'] ); ?>" alt="client-pettern">
										<?php } ?>
										</div>
									<?php if ( isset( $theme_option['endurance_general_background_image']['url'] ) && ! empty( $theme_option['endurance_general_background_image']['url'] ) ) { ?>
										<img loading="lazy"  src="<?php echo esc_url( $theme_option['endurance_general_background_image']['url'] ); ?>" alt="strips" class="strips">
									<?php } ?>
							</div>
						</div>
						<div class="col-xxl-5 col-lg-6 order-lg-2 order-1">
						<div class="client-text wow fadeInRight">
								<?php if ( isset( $theme_option['endurance_testimonial_heading'] ) && ! empty( $theme_option['endurance_testimonial_heading'] ) ) { ?>
									<div class="title text-lg-start text-center"><?php echo esc_html( $theme_option['endurance_testimonial_heading'] ); ?></div>
								<?php } ?>
								<?php
								$testimonials_posts = new WP_Query(
									array(
										'post_type'      => 'testimonial-reviews',
										'post_status'    => 'publish',
										'posts_per_page' => -1,
									)
								);
								?>
								<div class="swiper ClientSwiper">
									<div class="swiper-wrapper">
										<?php if ( $testimonials_posts->have_posts() ) : ?>
											<?php
											while ( $testimonials_posts->have_posts() ) :
												$testimonials_posts->the_post();
												?>
											<div class="swiper-slide">
												<div class="review-block">
													<div class="text pb-4">
														<p class="mb-3"><?php the_content(); ?></p>
													</div>
													<div class="review">
														<div class="image-wrapper pe-4">
															<?php
															if ( has_post_thumbnail() ) {
																the_post_thumbnail( get_the_ID(), 'full' );
															}
															?>
														</div>
														<div class="review-text">
															<span><?php the_title(); ?></span>
														<p class="mb-1">  
														<?php
														$review_title = get_post_meta( get_the_ID(), 'review_name' );
														?>
															</p>
															<!-- <p class="mb-1">Google Reviews</p> -->
															<div class="image-wrapper">
															<?php
																$start_rating = get_post_meta( get_the_ID(), 'star_rating' );
																$max_stars    = 5;
															?>
																<p class="stars">
																	<span class="star-rate">
																		<?php for ( $i = 1; $i <= $max_stars; $i++ ) : ?>
																			<a class="star-<?php echo $i; ?> <?php echo esc_html( ( $i <= $start_rating[0] ) ) ? 'active' : ''; ?>"></a>
																		<?php endfor; ?>
																	</span>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
												<?php
										endwhile;
									endif;
										?>
									</div>
									<div class="btn-block pt-lg-0 pt-3">
										<div class="button prev image-wrapper">                            
											<?php if ( isset( $theme_option['endurance_general_articles_left_arrow_icont']['url'] ) && ! empty( $theme_option['endurance_general_articles_left_arrow_icont']['url'] ) ) { ?>
												<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_articles_left_arrow_icont']['url'] ); ?>" width="24" height="24" alt="arrow-left">
											<?php } ?> 
										</div>
										<div class="button next image-wrapper"> 
											<?php if ( isset( $theme_option['endurance_general_articles_right_arrow_icont']['url'] ) && ! empty( $theme_option['endurance_general_articles_right_arrow_icont']['url'] ) ) { ?>
												<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_articles_right_arrow_icont']['url'] ); ?>" width="24" height="24" alt="arrow-right">
											<?php } ?> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CLIENT SECTION END'S FROM HERE -->
		
		<!-- TEAM SECTION START FROM HERE -->
		<div class="team-section default-padding wow fadeInUp">
			<div class="container">
				<div class="team-wrapper">
					<?php if ( isset( $theme_option['endurance_general_team_title'] ) && ! empty( $theme_option['endurance_general_team_title'] ) ) { ?>
						<div class="title text-center"><?php echo esc_html( $theme_option['endurance_general_team_title'] ); ?></div>
					<?php } ?>
						<?php
						$meet_our_team_posts = new WP_Query(
							array(
								'post_type'      => 'meet-our-team',
								'post_status'    => 'publish',
								'posts_per_page' => -1,
								'orderby'        => 'date',
								'order'          => 'ASC',
							)
						);
						?>
						<div class="row">
							<?php if ( $meet_our_team_posts->have_posts() ) : ?>
								<?php
								while ( $meet_our_team_posts->have_posts() ) :
									$meet_our_team_posts->the_post();
									?>
									<div class="col-lg-3 col-sm-6">
										<div class="team-block">
											<div class="image-wrapper">
												<?php
												if ( has_post_thumbnail() ) {
													the_post_thumbnail( get_the_ID(), 'full' );
												}
												?>
											</div>
											<div class="text-block text-center">
												<span><?php the_title(); ?></span>
												<?php the_content(); ?>
											</div>
										</div>
									</div>
									<?php
								endwhile;
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- TEAM SECTION END'S FROM HERE -->

		<!-- BLOG SECTION START FROM HERE -->
		<div class="blog-section default-padding">
			<div class="container">
				<div class="blog-wrapper wow fadeInUp">
					<div class="row gy-lg-0 gy-4">
					<div class="col-lg-4">
							<?php if ( isset( $theme_option['endurance_general_articles_title'] ) && ! empty( $theme_option['endurance_general_articles_title'] ) ) { ?>
								<div class="title pb-3 text-lg-start text-center"><?php echo $theme_option['endurance_general_articles_title']; ?></div>
								<?php
							}
							if ( isset( $theme_option['endurance_general_articles_description'] ) && ! empty( $theme_option['endurance_general_articles_description'] ) ) {
								?>
								<p class="text-lg-start text-center"><?php echo esc_html( $theme_option['endurance_general_articles_description'] ); ?></p>
							<?php } ?>
							<div class="btn-block">
								<div class="button prev image-wrapper">
									<?php if ( isset( $theme_option['endurance_general_articles_left_arrow_icon']['url'] ) && ! empty( $theme_option['endurance_general_articles_left_arrow_icon']['url'] ) ) { ?>
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_articles_left_arrow_icon']['url'] ); ?>" width="24" height="24" alt="arrow-left">
									<?php } ?>
								</div>
								<div class="button next image-wrapper">
									<?php if ( isset( $theme_option['endurance_general_articles_right_arrow_icon']['url'] ) && ! empty( $theme_option['endurance_general_articles_right_arrow_icon']['url'] ) ) { ?>
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_articles_right_arrow_icon']['url'] ); ?>" width="24" height="24" alt="arrow-right">
									<?php } ?>
								</div>
							</div>
						</div>
						<?php
						$blog_posts = new WP_Query(
							array(
								'post_type'      => 'post',
								'post_status'    => 'publish',
								'posts_per_page' => -1,
							)
						);
						?>
						<div class="col-lg-8">
							<div class="swiper BlogSwiper">
								<div class="swiper-wrapper">
									<?php if ( $blog_posts->have_posts() ) : ?>
										<?php
										while ( $blog_posts->have_posts() ) :
											$blog_posts->the_post();
											?>
											<div class="swiper-slide">
												<div class="blog-block">
													<div class="image-wrapper pb-4">
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
											</div>
											<?php
										endwhile;
									endif;
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- BLOG SECTION END'S FROM HERE -->

	</main>
	<!-- MAIN SECTIONS END'S FROM HERE -->

	<script>
		/* ========= ABOUT US FLOATING IMAGES ========= */
		/* IMG 1 */
		const about_img1 = document.getElementById('about_img1');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			about_img1.style.transform = `translate(${offsetX * 10}px, ${offsetY * 10}px)`;
		});
		/* IMG 2 */
		const about_img2 = document.getElementById('about_img2');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			about_img2.style.transform = `translate(calc(-50% + ${offsetX * -10}px), calc(-50% + ${offsetY * -10}px))`;
		});
		/* ========= ABOUT US FLOATING IMAGES ========= */

	
		/* ========= MISSION FLOATING IMAGES ========= */
		const mission_img = document.getElementById('mission_img');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			mission_img.style.transform = `translate(${offsetX * 10}px, ${offsetY * 10}px)`;
		});

		/* ========= MISSION FLOATING IMAGES ========= */
	</script>

	</body>
<?php
get_footer();
