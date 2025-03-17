<?php
/** Template Name: Coming Soon Page Template
 *
 * @package Endurance_By_GymFit
 */

$theme_option = get_option( 'redux_demo' );
get_header();
?>

<body>

	<!-- MAIN SECTIONS START FROM HERE -->
	<main class="main_wrapper">

		<!-- COMING SOON SECTION START FROM HERE -->
		<div class="error-wrapper comming-wrapper">
			<div class="container">
				<div class="wrapper">
					<div class="text-block text-center">
						<?php if ( isset( $theme_option['endurance_coming_soon_heading'] ) && ! empty( $theme_option['endurance_coming_soon_heading'] ) ) { ?>
							<div class="title">
							<?php echo esc_html( $theme_option['endurance_coming_soon_heading'] ); ?>
						</div>
						<?php } ?>
						<?php if ( isset( $theme_option['endurance_coming_soon_date_time'] ) && ! empty( $theme_option['endurance_coming_soon_date_time'] ) ) { ?>
							<input type="hidden" id="coming_soon_date" value="<?php echo esc_html( $theme_option['endurance_coming_soon_date_time'] ); ?>">
						<?php } ?>
						<div class="count-section">
							<div class="count-item">
								<span id="days">00</span>
								<p>days</p>
							</div>
							<div class="count-item">
								<span id="hours">00</span>
								<p>hours</p>
							</div>
							<div class="count-item">
								<span id="minutes">00</span>
								<p>minutes</p>
							</div>
							<div class="count-item">
								<span id="seconds">00</span>
								<p>seconds</p>
							</div>
						</div>
					</div>
					<div class="lines py-sm-5 py-4"><span></span>
						<?php if ( isset( $theme_option['endurance_coming_soon_star_img']['url'] ) && ! empty( $theme_option['endurance_coming_soon_star_img']['url'] ) ) { ?>
							<img src="<?php echo esc_url( $theme_option['endurance_coming_soon_star_img']['url'] ); ?>" alt="star-icon" class="px-3">
						<?php } else { ?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/star-icon.svg" alt="star-icon" class="px-3">
						<?php } ?>
					<span></span></div>
					<div class="join-block text-center">
						<div class="row justify-content-center">
							<div class="col-lg-6 col-sm-10">
								<?php if ( isset( $theme_option['endurance_coming_soon_waiting_heading'] ) && ! empty( $theme_option['endurance_coming_soon_waiting_heading'] ) ) { ?>
								<div class="title pb-4">
									<?php echo esc_html( $theme_option['endurance_coming_soon_waiting_heading'] ); ?>
								</div>
								<?php } ?>						
								<div class="fill-up-form">
								<?php 
										if ( isset( $theme_option['sc-comin-soon-form'] ) && ! empty( $theme_option['sc-comin-soon-form'] ) ) { 
											$contact_form_shortcode = $theme_option['sc-comin-soon-form'];
											echo do_shortcode( $contact_form_shortcode );
										} else {
											echo do_shortcode('[contact-form-7 id="48039da" title="Join Waiting List"]');
										}
									?>
								</div>
								<?php if ( isset( $theme_option['endurance_coming_soon_waiting_description'] ) && ! empty( $theme_option['endurance_coming_soon_waiting_description'] ) ) { ?>
									<p>
									<?php echo esc_html( $theme_option['endurance_coming_soon_waiting_description'] ); ?>
								</p>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- COMING SOON SECTION END'S FROM HERE -->

	</main>
	<!-- MAIN SECTIONS END'S FROM HERE -->
</body>
<?php
get_footer();
