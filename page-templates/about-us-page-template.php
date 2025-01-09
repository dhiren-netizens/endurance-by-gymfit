<?php 
/* Template Name: About Us Page Template */
$theme_option = get_option('redux_demo');
get_header();
?>
    <body>

    <!-- LOADER START HERE -->
    <div class="page_loader">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/transformation.webp" alt="img" loading="lazy">
    </div>
    <!-- LOADER END HERE -->

	<!-- MAIN SECTIONS START FROM HERE -->
	<main class="main_wrapper">

		<!-- BREADCRUMBS SECTION START FROM HERE -->
		<div class="default-padding">
			<div class="breadcrumbs-section">
				<div class="container">
					<div class="breadcrumbs-title title text-lg-start text-center pb-3">About us</div>
					<div class="breadcrumbs-block mx-lg-0 mx-auto">
						<a href="<?php echo esc_url( home_url() ); ?>" class="item">Home</a>
						<span class="item active">About Us</span>
					</div>
				</div>
			</div>
		</div>
		<!-- BREADCRUMBS SECTION END'S FROM HERE -->

		<!-- ABOUT SECTION START FROM HERE -->
		<div class="default-padding">
			<div class="about-section">
				<div class="container">
					<div class="about-wrapper">
						<div class="row gy-sm-5 gy-4 justify-content-center align-items-center">
							<div class="col-lg-7 col-sm-10 order-lg-1 order-2">
								<div class="image-wrapper d-flex justify-content-center wow fadeInLeft">
									<?php if(isset( $theme_option['endurance_about_us_img']['url'] ) && !empty( $theme_option['endurance_about_us_img']['url'] )) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_about_us_img']['url'] ); ?>" alt="about-img" id="about_img1">
									<?php } ?>
									<?php if(isset( $theme_option['endurance_about_us_white_img']['url'] ) && !empty( $theme_option['endurance_about_us_white_img']['url'] )) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_about_us_white_img']['url'] ); ?>" alt="white-logo" id="about_img2" class="logo">
									<?php } ?>
									<?php if(isset( $theme_option['endurance_about_us_strips_img']['url'] ) && !empty( $theme_option['endurance_about_us_strips_img']['url'] )) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_about_us_strips_img']['url'] ); ?>" alt="strips" id="strips"  class="strips">
									<?php } ?>
								</div>
							</div>
							<div class="col-lg-5 order-lg-2 order-1">
								<div class="about_-ext text-lg-start text-center wow fadeInRight">
								    <?php if(isset( $theme_option['about_us_heading'] ) && !empty( $theme_option['about_us_heading'] )) { ?>
									  <div class="title"><?php echo esc_html( $theme_option['about_us_heading'] ); ?></div>
									<?php } ?>
									<?php if(isset( $theme_option['about_us_Description'] ) && !empty( $theme_option['about_us_Description'] )) { ?>
									  <p>
									    <?php echo esc_html( $theme_option['about_us_Description'] ); ?>
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
					    	<?php if(isset( $theme_option['stand_out_with'] ) && !empty( $theme_option['stand_out_with'] )) { ?>
								    <h1 class="title p-0">
									    <?php echo esc_html( $theme_option['stand_out_with'] ); ?>
									</h1>
							<?php } ?>  
							<?php if(isset( $theme_option['endurance_stand_out_line']['url'] ) && !empty( $theme_option['endurance_stand_out_line']['url'] )) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_stand_out_line']['url'] ); ?>" alt="Line" class="px-xl-5 px-4 mx-xl-5 mx-4 d-lg-block d-none">
							<?php } ?>
						</div>
						<?php if(isset( $theme_option['high_endurance'] ) && !empty( $theme_option['high_endurance'] )) { ?>
								    <h1 class="title text-lg-end text-center">
									    <?php echo esc_html( $theme_option['high_endurance'] ); ?>
									</h1>
						<?php } ?> 
					</div>
					<div class="row justify-content-end pb-lg-0 pb-4">
						<div class="col-lg-7">
							<div class="text-block d-lg-flex align-items-center text-lg-start text-center wow fadeInLeft">
							<?php if(isset( $theme_option['high_endurance_description'] ) && !empty( $theme_option['high_endurance'] )) { ?>
							    <p class="mb-0 me-lg-3 mb-3">
									    <?php echo esc_html( $theme_option['high_endurance_description'] ); ?>
							    </p>
						    <?php } ?> 
							<?php if(isset( $theme_option['stand_out_button'] ) && 1 == $theme_option['stand_out_button'] && !empty( $theme_option['stand_out_button'] )) { ?>
								    <a href="<?php echo esc_attr( $theme_option['stand_out_button_url'] ); ?>" class="btn_wrapper mx-lg-0 mx-auto">
									    <?php echo esc_html( $theme_option['stand_out_button_text'] ); ?>
							        </a>
						    <?php } ?> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="img-block img-block-2 wow fadeInUpBig">
				<div class="image-wrapper">
				     <?php if(isset( $theme_option['stand_out_with_img']['url'] ) && !empty( $theme_option['stand_out_with_img']['url'] )) { ?>
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
								<?php if(isset( $theme_option['endurance_our_mission'] ) && !empty( $theme_option['endurance_our_mission'] )) { ?>
									<div class="title"><?php echo esc_html( $theme_option['endurance_our_mission'] ); ?></div>
								<?php } ?>  

								<?php if(isset( $theme_option['endurance_mission_decription'] ) && !empty( $theme_option['endurance_mission_decription'] )) { ?>
									<p class="mb-0"><?php echo esc_html( $theme_option['endurance_mission_decription'] ); ?></p>
								<?php } ?>  
							</div>
						</div>
						<div class="col-lg-6 col-sm-8">
							<div class="image-wrapper wow fadeInRight">
							<?php if(isset( $theme_option['endurance_our_mission_image']['url'] ) && !empty( $theme_option['endurance_our_mission_image']['url'] )) { ?>
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
									<?php if(isset( $theme_option['endurance_samrt_app_heading'] ) && !empty( $theme_option['endurance_samrt_app_heading'] )) { ?>
										<div class="title pb-1"><?php echo esc_html( $theme_option['endurance_samrt_app_heading'] ); ?></div>
									<?php } ?>
									<?php if(isset( $theme_option['endurance_smart_app_decription'] ) && !empty( $theme_option['endurance_smart_app_decription'] )) { ?>
								    	<p><?php echo esc_html( $theme_option['endurance_smart_app_decription'] ); ?></p>
								    <?php } ?>    
								</div>
								<div class="image-wrapper d-lg-block d-none">
									<?php if(isset( $theme_option['endurance_smart_app_store_image']['url'] ) && !empty( $theme_option['endurance_smart_app_store_image']['url'] )) { ?>
							    		<img loading="lazy"  src="<?php echo esc_url( $theme_option['endurance_smart_app_store_image']['url'] ); ?>" alt="cta-appstore-img">
									<?php } ?>
								</div>
							</div>
							<div class="image-wrapper mockup mx-lg-0 mx-auto">
								<div class="row justify-content-center">
									<div class="col-xxl-10 col-lg-8 col-sm-10">
										<?php if(isset( $theme_option['endurance_smart_app_bg_image']['url'] ) && !empty( $theme_option['endurance_smart_app_bg_image']['url'] )) { ?>
											<img loading="lazy"  src="<?php echo esc_url( $theme_option['endurance_smart_app_bg_image']['url'] ); ?>" alt="cta-mockup" class="d-block mx-auto">
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
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/client-img.webp" alt="client-img" class="d-block mx-auto">
								<div class="pettern image-wrapper">
									<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/client-pettern.svg" alt="client-pettern">
									<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/client-pettern.svg" alt="client-pettern">
									<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/client-pettern.svg" alt="client-pettern">
								</div>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/strips.svg" alt="strips" class="strips">
							</div>
						</div>
						<div class="col-xxl-5 col-lg-6 order-lg-2 order-1">
							<div class="client-text wow fadeInRight">
								<div class="title text-lg-start text-center">Our Happy Clients</div>
								<div class="swiper ClientSwiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="review-block">
												<div class="text pb-4">
													<p class="mb-3">As an avid fitness enthusiast, I've always sought a platform that could help me push beyond my limits and unlock my true potential. Joining Endurance Unleashes Premium subscription has been a game-changer for me! From the moment I signed up, I knew I was in for an extraordinary journey.</p>
													<p>The mission to fuel the spirit of champions resonates deeply with me. The abundance of finely curated tools, top-notch gear.</p>
												</div>
												<div class="review">
													<div class="image-wrapper pe-4">
														<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/review-img.webp" alt="review-img">
													</div>
													<div class="review-text">
														<span>Angela Lipton</span>
														<p class="mb-1">Google Reviews</p>
														<div class="image-wrapper">
															<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/stars.svg" alt="stars" width="126" height="22">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="review-block">
												<div class="text pb-4">
													<p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum suscipit voluptate aliquam officia voluptatem! Minus dolorem tempora optio quisquam odio. Minima temporibus molestias aspernatur neque veniam ducimus, placeat ratione eligendi!</p>
													<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores minima voluptatum dignissimos vitae repudiandae non vel sint, accusamus excepturi atque dicta, sunt eligendi molestias asperiores sapiente quis provident animi tenetur.</p>
												</div>
												<div class="review">
													<div class="image-wrapper pe-4">
														<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/background/review-img-2.webp" alt="review-img-2">
													</div>
													<div class="review-text">
														<span>Johnny depp</span>
														<p class="mb-1">Person Reviews</p>
														<div class="image-wrapper">
															<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/stars.svg" alt="stars" width="126" height="22">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="btn-block pt-lg-0 pt-3">
										<div class="button prev image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" width="24" height="24" alt="arrow-left"></div>
										<div class="button next image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" width="24" height="24" alt="arrow-right"></div>
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
					<div class="title text-center">Meet our team</div>
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="team-block">
								<div class="image-wrapper">
									<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-1.webp" alt="team-1">
								</div>
								<div class="text-block text-center">
									<span>Ivan Petrov</span>
									<p>Endurance Training Coach</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="team-block">
								<div class="image-wrapper">
									<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-2.webp" alt="team-2">
								</div>
								<div class="text-block text-center">
									<span>Ekaterina Ivanova</span>
									<p>Cardio Conditioning Specialist</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="team-block">
								<div class="image-wrapper">
									<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-3.webp" alt="team-3">
								</div>
								<div class="text-block text-center">
									<span>Sergey Mikhailov</span>
									<p>Stamina Enhancement Trainer</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="team-block">
								<div class="image-wrapper">
									<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-4.webp" alt="team-4">
								</div>
								<div class="text-block text-center">
									<span>Olga Sokolova</span>
									<p>Long-Distance Fitness Instructor</p>
								</div>
							</div>
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
							<div class="title pb-3 text-lg-start text-center"><span>Read Our</span> Articles</div>
							<p class="text-lg-start text-center">Unlock the secrets of endurance and elevate your performance with our insightful articles.</p>
							<div class="btn-block">
								<div class="button prev image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" width="24" height="24" alt="arrow-left"></div>
								<div class="button next image-wrapper"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-right.svg" width="24" height="24" alt="arrow-right"></div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="swiper BlogSwiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="image-wrapper pb-4">
											<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-8.webp" alt="blog-8">
										</div>
										<p>Mastering Cardiovascular Fitness: Your Path to Endurance Excellence</p>
										<div class="read d-flex gap-3 align-items-center justify-content-between">
											<a href="blog-details.html">Read Now</a>
											<p>14th August, 2023</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="image-wrapper pb-4">
											<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-9.webp" alt="blog-9">
										</div>
										<p>Mastering Cardiovascular Fitness: Your Path to Endurance Excellence</p>
										<div class="read d-flex gap-3 align-items-center justify-content-between">
											<a href="blog-details.html">Read Now</a>
											<p>14th August, 2023</p>
										</div>
									</div>
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