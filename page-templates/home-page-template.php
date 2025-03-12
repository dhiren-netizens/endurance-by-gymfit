<?php
/** Template Name: Home Page Template
 *
 * @package Endurance_By_GymFit
 */

get_header();
$theme_option = get_option( 'redux_demo' );
?>
	<body>

	<!-- MAIN SECTIONS START FROM HERE -->
	<main class="main_wrapper">

		<!-- BANNER SECTION START FROM HERE -->
		<div class="default-padding">
			<div class="banner-wrapper">
				<?php if ( isset( $theme_option['endurance_general_background_image']['url'] ) && ! empty( $theme_option['endurance_general_background_image']['url'] ) ) { ?>
					<img src="<?php echo esc_url( $theme_option['endurance_general_background_image']['url'] ); ?>" alt="strips" class="strips">
				<?php } else { ?>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/strips.svg" alt="strips" class="strips">
				<?php } ?>
				<div class="container">
					<div class="banner-block wow fadeInDown">
						<div class="textBlock">
							<div class="row">
								<div class="col-12">
									<div class="d-lg-flex d-block align-items-center text-lg-start text-center pb-sm-2 pb-0">
										<?php if ( isset( $theme_option['endurance_banner_title']['box1'] ) && ! empty( $theme_option['endurance_banner_title']['box1'] ) ) { ?>
											<h1 class="title p-0"><?php echo esc_html( $theme_option['endurance_banner_title']['box1'] ); ?></h1>
										<?php } ?>
										<?php if ( isset( $theme_option['endurance_general_pattern_image']['url'] ) && ! empty( $theme_option['endurance_general_pattern_image']['url'] ) ) { ?>
											<img src="<?php echo esc_url( $theme_option['endurance_general_pattern_image']['url'] ); ?>" alt="Line" class="ps-3 d-lg-block d-none" loading="lazy">
										<?php } else { ?>
											<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/line-pettern.svg" alt="Line" class="ps-3 d-lg-block d-none" loading="lazy">
										<?php } ?>
									</div>
									<?php if ( isset( $theme_option['endurance_banner_title']['box2'] ) && ! empty( $theme_option['endurance_banner_title']['box2'] ) ) { ?>
										<h1 class="title text-lg-end text-center"><?php echo esc_html( $theme_option['endurance_banner_title']['box2'] ); ?></h1>
									<?php } ?>
								</div>
								<div class="col-lg-8">
									<div class="d-flex flex-lg-row flex-column-reverse align-items-center text-lg-start text-center">
										<?php
										$endurance_general_gt_link = isset( $theme_option['endurance_general_gt_link'] ) ? $theme_option['endurance_general_gt_link'] : '#';
										if ( isset( $theme_option['endurance_general_gt_text'] ) && ! empty( $theme_option['endurance_general_gt_text'] ) ) {
											?>
											<a href="<?php echo esc_attr( $endurance_general_gt_link ); ?>" class="btn_wrapper"><?php echo esc_html( $theme_option['endurance_general_gt_text'] ); ?></a>
										<?php } ?>
										<?php if ( isset( $theme_option['endurance_banner_description'] ) && ! empty( $theme_option['endurance_banner_description'] ) ) { ?>
											<p class="ps-lg-4 p-0 mb-lg-0 mb-3"><?php echo esc_html( $theme_option['endurance_banner_description'] ); ?></p>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="imgBlock pt-lg-0 pt-sm-5 pt-4">
					<?php if ( isset( $theme_option['endurance_banner_image']['url'] ) && ! empty( $theme_option['endurance_banner_image']['url'] ) ) { ?>
						<img src="<?php echo esc_url( $theme_option['endurance_banner_image']['url'] ); ?>" alt="banner" class="bannerImg wow fadeInLeftBig">
					<?php } else { ?>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/banner-img.webp" alt="banner" class="bannerImg wow fadeInLeftBig">
					<?php } ?>
					<div class="container position-relative wow fadeInUp">
						<div class="members d-lg-flex d-none align-items-center">
							<?php if ( isset( $theme_option['endurance_banner_members_image']['url'] ) && ! empty( $theme_option['endurance_banner_members_image']['url'] ) ) { ?>
								<img src="<?php echo esc_url( $theme_option['endurance_banner_members_image']['url'] ); ?>" alt="Members" class="pe-2">
							<?php } else { ?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/members.webp" alt="Members" class="pe-2">
							<?php } ?>
							<?php
							if ( isset( $theme_option['endurance_banner_members_text'] ) && ! empty( $theme_option['endurance_banner_members_text'] ) ) {
								echo esc_html( $theme_option['endurance_banner_members_text'] );
							}
							?>
						</div>
						<a href="#!" data-bs-toggle="modal" data-bs-target="#myModal" class="btn_wrapper White-btn ms-lg-auto mx-auto mt-lg-0 mt-3">
							<?php
							if ( isset( $theme_option['endurance_general_tutorial_text'] ) && ! empty( $theme_option['endurance_general_tutorial_text'] ) ) {
								echo esc_html( $theme_option['endurance_general_tutorial_text'] );
							}
							?>
							<?php if ( isset( $theme_option['endurance_general_tutorial_play_btn_icon']['url'] ) && ! empty( $theme_option['endurance_general_tutorial_play_btn_icon']['url'] ) ) { ?>
								<img src="<?php echo esc_url( $theme_option['endurance_general_tutorial_play_btn_icon']['url'] ); ?>" alt="Arrow">
							<?php } else { ?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/btn-arrow.svg" alt="Arrow">
							<?php } ?>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- BANNER SECTION END'S FROM HERE -->

		<!-- SUCCESS SECTION START FROM HERE -->
		<div class="default-padding">
			<div class="success-section">
				<div class="container">
					<div class="title text-center">
						<?php if ( isset( $theme_option['endurance_gear_up_heading'] ) && ! empty( $theme_option['endurance_gear_up_heading'] ) ) { ?>
							<?php echo esc_html( $theme_option['endurance_gear_up_heading'] ); ?>
						<?php } ?>
					</div>
					<div class="success-wrapper">
						<div class="row gy-lg-0 gy-4">
							<div class="col-lg-4 col-sm-6 order-2">
								<div class="success-box first-box first_success_box wow fadeIn">
									<div class="image-wrapper">
										<?php if ( isset( $theme_option['endurance_gear_up_learn_image']['url'] ) && ! empty( $theme_option['endurance_gear_up_learn_image']['url'] ) ) { ?>
											<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_gear_up_learn_image']['url'] ); ?>" alt="success-1" class="box_img" width="424px" height="496px">
										<?php } else { ?>
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/success-1.webp" alt="success-1" class="box_img">
										<?php } ?>
									</div>
									<div class="box-text position">
										<?php if ( isset( $theme_option['endurance_gear_up_learn_title'] ) && ! empty( $theme_option['endurance_gear_up_learn_title'] ) ) { ?>
											<span class="white"><?php echo esc_html( $theme_option['endurance_gear_up_learn_title'] ); ?></span>
											<?php
										}
										if ( isset( $theme_option['endurance_gear_up_learn_description'] ) && ! empty( $theme_option['endurance_gear_up_learn_description'] ) ) {
											?>
											<p><?php echo esc_html( $theme_option['endurance_gear_up_learn_description'] ); ?></p>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="col-lg-4 order-lg-2 order-1">
								<div class="row gy-4 justify-content-between wow fadeIn">
									<div class="col-lg-12 col-sm-6">
										<div class="success-box last-box opacity-box icon-box">
											<div class="image-wrapper icon">
												<?php if ( isset( $theme_option['endurance_gear_up_track_image']['url'] ) && ! empty( $theme_option['endurance_gear_up_track_image']['url'] ) ) { ?>
													<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_gear_up_track_image']['url'] ); ?>" alt="success-icon" width="80px" height="80px">
												<?php } else { ?>
													<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/success-icon.svg" alt="success-icon">
												<?php } ?>
											</div>
											<div class="box-text">
												<?php if ( isset( $theme_option['endurance_gear_up_track_title'] ) && ! empty( $theme_option['endurance_gear_up_track_title'] ) ) { ?>
													<span class="gradient"><?php echo esc_html( $theme_option['endurance_gear_up_track_title'] ); ?></span>
												<?php } ?>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6">
										<div class="success-box first-box opacity-box icon-box">
											<div class="image-wrapper icon icon-2">
												<?php if ( isset( $theme_option['endurance_gear_up_improve_image']['url'] ) && ! empty( $theme_option['endurance_gear_up_improve_image']['url'] ) ) { ?>
													<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_gear_up_improve_image']['url'] ); ?>" alt="success-icon" width="80px" height="80px">
												<?php } else { ?>
													<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/success-icon-2.svg" alt="success-icon">
												<?php } ?>
											</div>
											<div class="box-text">
												<?php if ( isset( $theme_option['endurance_gear_up_improve_title'] ) && ! empty( $theme_option['endurance_gear_up_improve_title'] ) ) { ?>
													<span class="gradient gradient-2"><?php echo esc_html( $theme_option['endurance_gear_up_improve_title'] ); ?></span>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 order-3">
								<div class="success-box last-box last_success_box wow fadeIn">
									<div class="image-wrapper">
										<?php if ( isset( $theme_option['endurance_gear_up_motivated_image']['url'] ) && ! empty( $theme_option['endurance_gear_up_motivated_image']['url'] ) ) { ?>
											<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_gear_up_motivated_image']['url'] ); ?>" alt="success-2" class="box_img" width="424px" height="496px">
										<?php } else { ?>
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/success-2.webp" alt="success-2" class="box_img">
										<?php } ?>
									</div>
									<div class="box-text position">
										<?php if ( isset( $theme_option['endurance_gear_up_motivated_title'] ) && ! empty( $theme_option['endurance_gear_up_motivated_title'] ) ) { ?>
											<span class="white"><?php echo esc_html( $theme_option['endurance_gear_up_motivated_title'] ); ?></span>
											<?php
										}
										if ( isset( $theme_option['endurance_gear_up_motivated_description'] ) && ! empty( $theme_option['endurance_gear_up_motivated_description'] ) ) {
											?>
											<p><?php echo esc_html( $theme_option['endurance_gear_up_motivated_description'] ); ?></p>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- SUCCESS SECTION END'S FROM HERE -->

		<!-- ABOUT SECTION START FROM HERE -->
		<div class="default-padding">
			<div class="about-section">
				<div class="container">
					<div class="about-wrapper">
						<div class="row gy-sm-5 gy-4 justify-content-center align-items-center">
							<div class="col-lg-7 col-sm-10 order-lg-1 order-2">
								<div class="image-wrapper d-flex justify-content-center wow fadeInLeft">
									<?php if ( isset( $theme_option['endurance_general_about_us_image']['url'] ) && ! empty( $theme_option['endurance_general_about_us_image']['url'] ) ) { ?>
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_about_us_image']['url'] ); ?>" alt="about-img" id="about_img1" width="427px" height="635px">
										<?php
									} else {
										?>
										<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/about-img.webp" alt="about-img" id="about_img1">
										<?php
									}
									if ( isset( $theme_option['endurance_general_about_us_logo_image']['url'] ) && ! empty( $theme_option['endurance_general_about_us_logo_image']['url'] ) ) {
										?>
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_about_us_logo_image']['url'] ); ?>" alt="white-logo" class="logo" id="about_img2" width="648px" height="96px">
										<?php
									} else {
										?>
										<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/white-logo.webp" alt="white-logo" class="logo" id="about_img2">
										<?php
									}
									if ( isset( $theme_option['endurance_general_background_image']['url'] ) && ! empty( $theme_option['endurance_general_background_image']['url'] ) ) {
										?>
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_background_image']['url'] ); ?>" alt="strips" class="strips" width="1600px" height="821px">
									<?php } else { ?>
										<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/strips.svg" alt="strips" class="strips">
									<?php } ?>
								</div>
							</div>
							<div class="col-lg-5 order-lg-2 order-1">
								<div class="about-text text-lg-start text-center wow fadeInRight">
									<?php if ( isset( $theme_option['endurance_general_about_us_title'] ) && ! empty( $theme_option['endurance_general_about_us_title'] ) ) { ?>
										<div class="title"><?php echo esc_html( $theme_option['endurance_general_about_us_title'] ); ?></div>
										<?php
									}
									if ( isset( $theme_option['endurance_general_about_us_description'] ) && ! empty( $theme_option['endurance_general_about_us_description'] ) ) {
										?>
										<p>
											<?php echo esc_html( $theme_option['endurance_general_about_us_description'] ); ?>
										</p>
										<?php
									}
									$endurance_general_gt_link = isset( $theme_option['endurance_general_gt_link'] ) ? $theme_option['endurance_general_gt_link'] : site_url() . '/about-us/';
									if ( isset( $theme_option['endurance_general_gt_text'] ) && ! empty( $theme_option['endurance_general_gt_text'] ) ) {
										?>
										<a href="<?php echo esc_attr( $endurance_general_gt_link ); ?>" class="btn_wrapper mx-lg-0 mx-auto"><?php echo esc_html( $theme_option['endurance_general_gt_text'] ); ?></a>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ABOUT SECTION END'S FROM HERE -->

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
										<?php
									}
									if ( isset( $theme_option['endurance_general_smart_app_description'] ) && ! empty( $theme_option['endurance_general_smart_app_description'] ) ) {
										?>
										<p><?php echo esc_html( $theme_option['endurance_general_smart_app_description'] ); ?></p>
									<?php } ?>
								</div>
								<div class="image-wrapper d-lg-block d-none">
									<?php if ( isset( $theme_option['endurance_general_smart_app_download_image']['url'] ) && ! empty( $theme_option['endurance_general_smart_app_download_image']['url'] ) ) { ?>
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_smart_app_download_image']['url'] ); ?>" alt="cta-appstore-img" width="204px" height="60px">
									<?php } else { ?>
										<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/cta-appstore-img.svg" alt="cta-appstore-img">
									<?php } ?>
								</div>
							</div>
							<div class="image-wrapper mockup mx-lg-0 mx-auto">
								<div class="row justify-content-center">
									<div class="col-xxl-10 col-lg-8 col-sm-10">
										<?php if ( isset( $theme_option['endurance_general_smart_app_mobile_image']['url'] ) && ! empty( $theme_option['endurance_general_smart_app_mobile_image']['url'] ) ) { ?>
											<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_smart_app_mobile_image']['url'] ); ?>" alt="cta-mockup" class="d-block mx-auto" width="832px" height="492px">
										<?php } else { ?>
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/cta-mockup.webp" alt="cta-mockup" class="d-block mx-auto">
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
		
		<!-- NOTICE SECTION START FROM HERE -->
		<div class="notice-section default-padding wow fadeIn">
			<div class="notice">
				<div class="notice-slide">
					<?php if ( isset( $theme_option['endurance_marquee_notice_image']['url'] ) && ! empty( $theme_option['endurance_marquee_notice_image']['url'] ) ) { ?>
						<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_marquee_notice_image']['url'] ); ?>" alt="marquee-icon" width="1005px" height="31px">
						<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_marquee_notice_image']['url'] ); ?>" alt="marquee-icon" width="1005px" height="31px">
						<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_marquee_notice_image']['url'] ); ?>" alt="marquee-icon" width="1005px" height="31px">
					<?php } else { ?>
						<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/marquee-icon.svg" alt="marquee-icon">
						<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/marquee-icon.svg" alt="marquee-icon">
						<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/marquee-icon.svg" alt="marquee-icon">
					<?php } ?>
				</div>
				<div class="notice-slide">
					<?php if ( isset( $theme_option['endurance_marquee_notice_image']['url'] ) && ! empty( $theme_option['endurance_marquee_notice_image']['url'] ) ) { ?>
						<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_marquee_notice_image']['url'] ); ?>" alt="marquee-icon" width="1005px" height="31px">
						<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_marquee_notice_image']['url'] ); ?>" alt="marquee-icon" width="1005px" height="31px">
						<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_marquee_notice_image']['url'] ); ?>" alt="marquee-icon" width="1005px" height="31px">
					<?php } else { ?>
						<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/marquee-icon.svg" alt="marquee-icon">
						<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/marquee-icon.svg" alt="marquee-icon">
						<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/marquee-icon.svg" alt="marquee-icon">
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- NOTICE SECTION END'S FROM HERE -->
		
		<!-- STAND WITH SECTION START FROM HERE -->
		<div class="stand-with-section strips default-padding">
			<div class="container">
				<div class="stand-with-wrapper">
					<div class="top-block wow fadeIn">
						<div class="d-lg-flex justify-content-end d-block align-items-center text-lg-start text-center pb-sm-2 pb-0">
							<?php if ( isset( $theme_option['endurance_stand_out_title']['box1'] ) && ! empty( $theme_option['endurance_stand_out_title']['box1'] ) ) { ?>
								<h1 class="title p-0"><?php echo esc_html( $theme_option['endurance_stand_out_title']['box1'] ); ?></h1>
								<?php
							}
							if ( isset( $theme_option['endurance_general_pattern_image']['url'] ) && ! empty( $theme_option['endurance_general_pattern_image']['url'] ) ) {
								?>
								<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_pattern_image']['url'] ); ?>" alt="Line" class="px-xl-5 px-4 mx-xl-5 mx-4 d-lg-block d-none" width="133px" height="50px">
							<?php } else { ?>
								<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/line-pettern.svg" alt="Line" class="px-xl-5 px-4 mx-xl-5 mx-4 d-lg-block d-none">
							<?php } ?>
						</div>
						<?php if ( isset( $theme_option['endurance_stand_out_title']['box2'] ) && ! empty( $theme_option['endurance_stand_out_title']['box2'] ) ) { ?>
							<h1 class="title text-lg-end text-center"><?php echo esc_html( $theme_option['endurance_stand_out_title']['box2'] ); ?></h1>
						<?php } ?>
					</div>
					<div class="row pb-lg-0 pb-4">
						<div class="col-lg-4">
							<div class="text-block text-lg-start text-center wow fadeInLeft">
								<?php if ( isset( $theme_option['endurance_stand_out_subtitle'] ) && ! empty( $theme_option['endurance_stand_out_subtitle'] ) ) { ?>
									<span class="mb-2"><?php echo esc_html( $theme_option['endurance_stand_out_subtitle'] ); ?></span>
									<?php
								}
								if ( isset( $theme_option['endurance_stand_out_description'] ) && ! empty( $theme_option['endurance_stand_out_description'] ) ) {
									?>
									<p><?php echo esc_html( $theme_option['endurance_stand_out_description'] ); ?></p>
									<?php
								}
								$endurance_general_gt_link = isset( $theme_option['endurance_general_gt_link'] ) ? $theme_option['endurance_general_gt_link'] : '#';
								if ( isset( $theme_option['endurance_general_gt_text'] ) && ! empty( $theme_option['endurance_general_gt_text'] ) ) {
									?>
									<a href="<?php echo esc_attr( $endurance_general_gt_link ); ?>" class="btn_wrapper mx-lg-0 mx-auto"><?php echo esc_html( $theme_option['endurance_general_gt_text'] ); ?></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="img-block wow fadeInUpBig">
				<div class="container">
					<div class="image-wrapper">
						<?php if ( isset( $theme_option['endurance_stand_out_image']['url'] ) && ! empty( $theme_option['endurance_stand_out_image']['url'] ) ) { ?>
							<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_stand_out_image']['url'] ); ?>" alt="stand-with-img" class="d-block mx-auto" width="1092px" height="467px">
						<?php } else { ?>
							<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/stand-with-img.webp" alt="stand-with-img" class="d-block mx-auto">
						<?php } ?>
						<a href="#!" data-bs-toggle="modal" data-bs-target="#myModal" class="btn_wrapper White-btn ms-lg-auto mx-auto mt-lg-0 mt-3">
							<?php
							if ( isset( $theme_option['endurance_general_tutorial_text'] ) && ! empty( $theme_option['endurance_general_tutorial_text'] ) ) {
								echo esc_html( $theme_option['endurance_general_tutorial_text'] );
							}
							?>
							<?php if ( isset( $theme_option['endurance_general_tutorial_play_btn_icon']['url'] ) && ! empty( $theme_option['endurance_general_tutorial_play_btn_icon']['url'] ) ) { ?>
								<img src="<?php echo esc_url( $theme_option['endurance_general_tutorial_play_btn_icon']['url'] ); ?>" alt="Arrow">
							<?php } else { ?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/btn-arrow.svg" alt="Arrow">
							<?php } ?>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- STAND WITH SECTION END'S FROM HERE -->

		<!-- PRICING SECTION START FROM HERE -->
		<div id="pricing">
			<div class="pricing-section default-padding">
				<div class="container">
					<div class="content">
						<?php if ( isset( $theme_option['endurance_pricing_plan_section_heading'] ) && ! empty( $theme_option['endurance_pricing_plan_section_heading'] ) ) { ?>
							<div class="title text-center pb-sm-5 pb-4"><?php echo esc_html( $theme_option['endurance_pricing_plan_section_heading'] ); ?></div>
						<?php } ?>
						<div class="pricing_nav d-flex justify-content-center">							
							<ul class="nav nav-pills mb-sm-5 mb-4" id="pills-tab" role="tablist">
								<?php
								$pricing_plans         = new WP_Query(
									array(
										'post_type'      => 'pricing-plan',
										'post_status'    => 'publish',
										'posts_per_page' => -1,
									)
								);
								$display_plan_period   = array();
								$post_title_arr        = array();
								$get_plan_price        = array();
								$display_plan_features = array();
								$plan_features         = array();

								if ( $pricing_plans->have_posts() ) :
									while ( $pricing_plans->have_posts() ) :
										$pricing_plans->the_post();
										$get_plan_periods = get_post_meta( get_the_ID(), 'endurance_pricing_plan_period', true );
										$post_title_arr[] = get_the_title();

										$get_plan_prices                   = get_post_meta( get_the_ID(), 'endurance_pricing_plan_price', true );
										$get_plan_price[ get_the_title() ] = $get_plan_prices;

										foreach ( $get_plan_periods as $get_plan_period ) {
											if ( ! in_array( $get_plan_period, $display_plan_period ) ) {
												$display_plan_period[] = $get_plan_period;
												?>
												<li class="nav-item" role="presentation">
													<button class="nav-link" id="pills-<?php echo esc_attr( $get_plan_period ); ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo esc_attr( $get_plan_period ); ?>" type="button" role="tab" aria-controls="pills-<?php echo esc_attr( $get_plan_period ); ?>" aria-selected="true">
														<?php
														echo esc_html( $get_plan_period );
														?>
													</button>
												</li>
												<?php
											}
										}

										$get_plan_features = get_post_meta( get_the_ID(), 'endurance_pricing_plan_features', true );
										$plan_features[]   = $get_plan_features;
										foreach ( $get_plan_features as $get_feature ) {
											foreach ( $get_feature['features'] as $feature_name => $features_checked ) {
												if ( ! in_array( $feature_name, $display_plan_features ) ) {
													$display_plan_features[] = $feature_name;
												}
											}
										}
									endwhile;
								endif;
								?>
							</ul>
						</div>
						<div class="pricingWrapper">
							<?php foreach ( $display_plan_period as $display_period ) { ?>
							<div class="tab-pane fade" id="pills-<?php echo esc_html( $display_period ); ?>" role="tabpanel" aria-labelledby="pills-<?php echo esc_html( $display_period ); ?>-tab" tabindex="0">
								<div class="swiper pricingSwiper">
									<div class="swiper-wrapper">
										<?php foreach ( $post_title_arr as $display_title ) { ?>
										<div class="swiper-slide">
											<div class="pricingtable-inner">
												<div class="pricingtable-title"><?php echo esc_html( $display_title ); ?></div>
												<div class="pricingtable-price">
													<?php if ( 'Free' == $display_title ) { ?>
														<h2>$0 <small></small></h2>
													<?php } else { ?>
														<h2>$<?php echo esc_html( $get_plan_price[ $display_title ][ ucwords( $display_period ) ]['price'] ); ?><small>/ <?php echo esc_html( $display_period ); ?></small></h2>
													<?php } ?>
												</div>
												<ul class="pricingtable-features">
													<?php
														$plan_features_arr = array();
													foreach ( $plan_features as $features ) {
														foreach ( $features as $key => $value ) {
															$plan_features_arr[ $key ] = $value['features'];
														}
													}
													foreach ( $display_plan_features as $display_features ) {
														$plan_features_keys = array_keys( $plan_features_arr[ strtolower( $display_title ) ] );
														if ( isset( $theme_option['endurance_pricing_plan_features_available_image']['url'] ) && ! empty( $theme_option['endurance_pricing_plan_features_available_image']['url'] ) ) {
															$features_available_img = $theme_option['endurance_pricing_plan_features_available_image']['url'];
														} else {
															$features_available_img = get_template_directory_uri() . '/assets/images/icon/pricing-icon.svg';
														}
														if ( isset( $theme_option['endurance_pricing_plan_features_not_available_image']['url'] ) && ! empty( $theme_option['endurance_pricing_plan_features_not_available_image']['url'] ) ) {
															$features_not_available_img = $theme_option['endurance_pricing_plan_features_not_available_image']['url'];
														} else {
															$features_not_available_img = get_template_directory_uri() . '/assets/images/icon/pricing-icon-2.svg';
														}
														$flag               = in_array( $display_features, $plan_features_keys ) ? $features_available_img : $features_not_available_img;
														?>
														
														<li><img loading="lazy" src="<?php echo esc_url( $flag ); ?>" width="30px" height="30px" alt="pricing-icon"><?php echo esc_html( ucwords( str_replace('_', ' ', $display_features ) ) ); ?></li>
													<?php } ?>
												</ul>
												<?php if ( isset( $theme_option['endurance_sign_up_text'] ) && ! empty( $theme_option['endurance_sign_up_text'] ) && ( isset( $theme_option['endurance_sign_up_link'] ) && ! empty( $theme_option['endurance_sign_up_link'] ) ) ) { ?>
													<a href="<?php echo esc_url( $theme_option['endurance_sign_up_link'] ); ?>" class="btn_wrapper mt-2 mx-auto"><?php echo esc_html( $theme_option['endurance_sign_up_text'] ); ?></a>
												<?php } ?>
											</div>
										</div>
										<?php } ?>
									</div>
									<div class="swiper-scrollbar"></div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- PRICING SECTION END'S FROM HERE -->

		<!-- SPECIAL SECTION START FROM HERE -->
		<div class='special-section default-padding wow fadeIn'>
			<div class="container">
				<div class="special-wrapper">
					<?php if ( isset( $theme_option['endurance_special_addons_section_heading'] ) && ! empty( $theme_option['endurance_special_addons_section_heading'] ) ) { ?>
						<div class="title text-center wow fadeInDown"><?php echo esc_html( $theme_option['endurance_special_addons_section_heading'] ); ?></div>
					<?php } ?>
					<div class="row justify-content-center">
						<div class="col-xl-10">
							<div class="row gy-4 justify-content-center">
								<div class="col-lg-6">
									<div class="special-block first-box text-lg-start text-center pb-0 wow fadeInUp">
										<?php if ( isset( $theme_option['endurance_special_addons_box1_title'] ) && ! empty( $theme_option['endurance_special_addons_box1_title'] ) ) { ?>
											<span><?php echo esc_html( $theme_option['endurance_special_addons_box1_title'] ); ?></span>
											<?php
										}
										if ( isset( $theme_option['endurance_special_addons_box1_description'] ) && ! empty( $theme_option['endurance_special_addons_box1_description'] ) ) {
											?>
											<p><?php echo esc_html( $theme_option['endurance_special_addons_box1_description'] ); ?></p>
											<?php
										}
										if ( isset( $theme_option['endurance_special_addons_box1_hashtag_title'] ) && ! empty( $theme_option['endurance_special_addons_box1_hashtag_title'] ) ) {
											?>
											<span class="tags"><?php echo esc_html( $theme_option['endurance_special_addons_box1_hashtag_title'] ); ?></span>
										<?php } ?>
										<div class="image-wrapper mt-4 wow fadeInUpBig">
											<?php if ( isset( $theme_option['endurance_special_addons_box1_image']['url'] ) && ! empty( $theme_option['endurance_special_addons_box1_image']['url'] ) ) { ?>
												<img loading="lazy" src="<?php echo esc_html( $theme_option['endurance_special_addons_box1_image']['url'] ); ?>" alt="special-1" width="536px" height="316px">
											<?php } else { ?>
												<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/special-1.webp" alt="special-1">
											<?php } ?>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="special-block second-box text-lg-start text-center mt-lg-5 mt-0 pt-0 wow fadeInUp">
										<div class="image-wrapper mb-4 wow fadeInDownBig">
											<?php if ( isset( $theme_option['endurance_special_addons_box2_image']['url'] ) && ! empty( $theme_option['endurance_special_addons_box2_image']['url'] ) ) { ?>
												<img loading="lazy" src="<?php echo esc_html( $theme_option['endurance_special_addons_box2_image']['url'] ); ?>" alt="special-2" width="536px" height="316px">
											<?php } else { ?>
												<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/special-2.webp" alt="special-2">
											<?php } ?>
										</div>
										<?php if ( isset( $theme_option['endurance_special_addons_box2_title'] ) && ! empty( $theme_option['endurance_special_addons_box2_title'] ) ) { ?>
											<span><?php echo esc_html( $theme_option['endurance_special_addons_box2_title'] ); ?></span>
											<?php
										}
										if ( isset( $theme_option['endurance_special_addons_box2_description'] ) && ! empty( $theme_option['endurance_special_addons_box2_description'] ) ) {
											?>
											<p><?php echo esc_html( $theme_option['endurance_special_addons_box2_description'] ); ?></p>
											<?php
										}
										if ( isset( $theme_option['endurance_special_addons_box2_hashtag_title'] ) && ! empty( $theme_option['endurance_special_addons_box2_hashtag_title'] ) ) {
											?>
											<span class="tags"><?php echo esc_html( $theme_option['endurance_special_addons_box2_hashtag_title'] ); ?></span>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- SPECIAL SECTION END'S FROM HERE -->
		
		<!-- CLIENT SECTION START FROM HERE -->
		<div class="client-section default-padding">
			<div class="container">
				<div class="client-wrapper">
					<div class="row gy-sm-5 gy-4 align-items-center justify-content-between">
						<div class="col-lg-6 order-lg-1 order-2">
							<div class="image-wrapper clientImg wow fadeInLeft">
								<?php if ( isset( $theme_option['endurance_general_person_img']['url'] ) && ! empty( $theme_option['endurance_general_person_img']['url'] ) ) { ?>
									<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_person_img']['url'] ); ?>" alt="client-img" class="d-block mx-auto" width="357px" height="585px">
								<?php } else { ?>
									<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/client-img.webp" alt="client-img" class="d-block mx-auto">
								<?php } ?>
								<div class="pettern image-wrapper">
									<?php if ( isset( $theme_option['endurance_general_gymfit_white_img']['url'] ) && ! empty( $theme_option['endurance_general_gymfit_white_img']['url'] ) ) { ?>
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_gymfit_white_img']['url'] ); ?>" alt="client-pettern" width="593px" height="544px">
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_gymfit_white_img']['url'] ); ?>" alt="client-pettern" width="593px" height="544px">
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_gymfit_white_img']['url'] ); ?>" alt="client-pettern" width="593px" height="544px">
									<?php } else { ?>
										<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/client-pettern.svg" alt="client-pettern">
										<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/client-pettern.svg" alt="client-pettern">
										<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/client-pettern.svg" alt="client-pettern">
									<?php } ?>
								</div>
								<?php if ( isset( $theme_option['endurance_general_background_image']['url'] ) && ! empty( $theme_option['endurance_general_background_image']['url'] ) ) { ?>
									<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_background_image']['url'] ); ?>" alt="strips" class="strips" width="1600px" height="821px">
								<?php } else { ?>
									<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/strips.svg" alt="strips" class="strips">
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
																			<a class="star-<?php echo esc_attr( $i ); ?> <?php echo isset( $start_rating[0] ) && ( $i <= $start_rating[0] ) ? 'active' : ''; ?>"></a>
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
											<?php if ( isset( $theme_option['endurance_general_articles_left_arrow_icon']['url'] ) && ! empty( $theme_option['endurance_general_articles_left_arrow_icon']['url'] ) ) { ?>
												<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_articles_left_arrow_icon']['url'] ); ?>" width="24px" height="24px" alt="arrow-left">
											<?php } else { ?> 
												<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/arrow-left.svg" width="24px" height="24px" alt="arrow-left">
											<?php } ?>
										</div>
										<div class="button next image-wrapper"> 
											<?php if ( isset( $theme_option['endurance_general_articles_right_arrow_icon']['url'] ) && ! empty( $theme_option['endurance_general_articles_right_arrow_icon']['url'] ) ) { ?>
												<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_articles_right_arrow_icon']['url'] ); ?>" width="24px" height="24px" alt="arrow-right">
											<?php } else { ?> 
												<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/arrow-right.svg" width="24px" height="24px" alt="arrow-right">
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

		<!-- BLOG SECTION START FROM HERE -->
		<div class="blog-section default-padding">
			<div class="container">
				<div class="blog-wrapper wow fadeInUp">
					<div class="row gy-lg-0 gy-4">
						<div class="col-lg-4">
							<?php if ( isset( $theme_option['endurance_general_articles_title'] ) && ! empty( $theme_option['endurance_general_articles_title'] ) ) { ?>
								<div class="title pb-3 text-lg-start text-center"><?php echo wp_kses( $theme_option['endurance_general_articles_title'], endurance_allowed_tags() ); ?></div>
								<?php
							}
							if ( isset( $theme_option['endurance_general_articles_description'] ) && ! empty( $theme_option['endurance_general_articles_description'] ) ) {
								?>
								<p class="text-lg-start text-center"><?php echo esc_html( $theme_option['endurance_general_articles_description'] ); ?></p>
							<?php } ?>
							<div class="btn-block">
								<div class="button prev image-wrapper">
									<?php if ( isset( $theme_option['endurance_general_articles_left_arrow_icon']['url'] ) && ! empty( $theme_option['endurance_general_articles_left_arrow_icon']['url'] ) ) { ?>
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_articles_left_arrow_icon']['url'] ); ?>" width="24px" height="24px" alt="arrow-left">
									<?php } else { ?> 
										<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/arrow-left.svg" width="24px" height="24px" alt="arrow-left">
									<?php } ?>
								</div>
								<div class="button next image-wrapper">
									<?php if ( isset( $theme_option['endurance_general_articles_right_arrow_icon']['url'] ) && ! empty( $theme_option['endurance_general_articles_right_arrow_icon']['url'] ) ) { ?>
										<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_general_articles_right_arrow_icon']['url'] ); ?>" width="24px" height="24px" alt="arrow-right">
									<?php } else { ?> 
										<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/arrow-right.svg" width="24px" height="24px" alt="arrow-right">
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

		<!-- INSTAGRAM SECTION START FROM HERE -->
		<div class="instagram-section default-padding wow fadeIn" data-wow-duration="1.2s">
			<div class="instagram-wrapper">
				<div class="image-wrapper">
					<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/paper-texture.webp" alt="papper-texture">
					<div class="img-block">
						<div class="row g-0 h-100 justify-content-between">
							<div class="col-6">
								<div class="row g-0 h-100">
									<div class="col-4">
										<div class="image-wrapper h-100 d-flex flex-column justify-content-between">
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/instagram/instagram-img-1.webp" alt="img-1" class="img-1 z-1" id="floatingImage1">
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/instagram/instagram-img-2.webp" alt="img-2" class="img-2" id="floatingImage2">
										</div>
									</div>
									<div class="col-4">
										<div class="image-wrapper h-100 d-flex flex-column justify-content-center">
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/instagram/instagram-img-3.webp" alt="img-3" class="img-3" id="floatingImage3">
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/instagram/instagram-img-4.webp" alt="img-4" class="img-4" id="floatingImage4">
										</div>
									</div>
									<div class="col-2">
										<div class="image-wrapper h-100">
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/instagram/instagram-img-5.webp" alt="img-5" class="img-5" id="floatingImage5">
										</div>
									</div>
								</div>
							</div>
							<div class="col-4">
								<div class="row g-0 h-100">
									<div class="col-6">
										<div class="image-wrapper h-100 d-flex flex-column justify-content-center">
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/instagram/instagram-img-6.webp" alt="img-6" class="img-6" id="floatingImage6">
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/instagram/instagram-img-7.webp" alt="img-7" class="img-7" id="floatingImage7">
										</div>
									</div>
									<div class="col-6">
										<div class="image-wrapper h-100">
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/instagram/instagram-img-8.webp" alt="img-8" class="img-8" id="floatingImage8">
											<img loading="lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/instagram/instagram-img-9.webp" alt="img-9" class="img-9" id="floatingImage9">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-block text-center">
					<p>Follow Us on Instagram</p>
					<a href="#!">@Gymfit</a>
				</div>
			</div>
		</div>
		<!-- INSTAGRAM SECTION END'S FROM HERE -->

	</main>
	<!-- MAIN SECTIONS END'S FROM HERE -->

	<!-- VIDEO MODAL START FROM HERE -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn-close d-block ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
					<video controls="" id="video1">
						<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/video/video.mp4" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</div>
	<!-- VIDEO MODAL END'S FROM HERE -->
	

	<!-- FLOATING IMG JS -->
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


		/* ========= INSTAGRAM FLOATING IMAGES ========= */
		/* Img 1 */
		const floatingImage1 = document.getElementById('floatingImage1');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			floatingImage1.style.transform = `translate(${offsetX * 10}px, ${offsetY * 10}px)`;
		});

		/* Img 2 */
		const floatingImage2 = document.getElementById('floatingImage2');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			floatingImage2.style.transform = `translate(${offsetX * -10}px, ${offsetY * -10}px)`;
		});

		/* Img 3 */
		const floatingImage3 = document.getElementById('floatingImage3');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			floatingImage3.style.transform = `translate(${offsetX * -10}px, ${offsetY * -10}px)`;
		});

		/* Img 4 */
		const floatingImage4 = document.getElementById('floatingImage4');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			floatingImage4.style.transform = `translate(${offsetX * 5}px, ${offsetY * 5}px)`;
		});

		/* Img 5 */
		const floatingImage5 = document.getElementById('floatingImage5');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			floatingImage5.style.transform = `translate(${offsetX * 5}px, ${offsetY * 5}px)`;
		});

		/* Img 6 */
		const floatingImage6 = document.getElementById('floatingImage6');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			floatingImage6.style.transform = `translate(${offsetX * -5}px, ${offsetY * -5}px)`;
		});

		/* Img 7 */
		const floatingImage7 = document.getElementById('floatingImage7');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			floatingImage7.style.transform = `translate(${offsetX * 20}px, ${offsetY * 20}px)`;
		});

		/* Img 8 */
		const floatingImage8 = document.getElementById('floatingImage8');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			floatingImage8.style.transform = `translate(${offsetX * 15}px, ${offsetY * 15}px)`;
		});

		/* Img 9 */
		const floatingImage9 = document.getElementById('floatingImage9');

		document.addEventListener('mousemove', (e) => {
			const mouseX = e.clientX;
			const mouseY = e.clientY;

			// Calculate percentage offsets
			const offsetX = (mouseX / window.innerWidth - 0.5) * 2; // Normalize to [-1, 1]
			const offsetY = (mouseY / window.innerHeight - 0.5) * 2;

			// Apply the transform
			floatingImage9.style.transform = `translate(${offsetX * -20}px, ${offsetY * -20}px)`;
		});
		/* ========= INSTAGRAM FLOATING IMAGES ========= */
	</script>

	</body>
<?php
get_footer();
