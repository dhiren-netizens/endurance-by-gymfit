<?php 
/* Template Name: Coming Soon Page Template */
$theme_option = get_option('redux_demo');
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
                        <?php if(isset( $theme_option['endurance_coming_soon'] ) && !empty( $theme_option['endurance_coming_soon'] )) { ?>
			 			  <div class="title">
                            <?php echo esc_html( $theme_option['endurance_coming_soon'] ); ?>
                        </div>
						<?php } ?>
						<div class="count-section">
							<div class="count-item">
                                <?php if(isset( $theme_option['endurance_day_number'] ) && !empty( $theme_option['endurance_day_number'] )) { ?>
								  <span id="days">
									    <?php echo esc_html( $theme_option['endurance_day_number'] ); ?>
                                </span>
								<?php } ?>
                                <?php if(isset( $theme_option['endurance_day_text'] ) && !empty( $theme_option['endurance_day_text'] )) { ?>
								  <p>
								    <?php echo esc_html( $theme_option['endurance_day_text'] ); ?>
                                 </p>
								<?php } ?>
							</div>
							<div class="count-item">
                                <?php if(isset( $theme_option['endurance_hours_number'] ) && !empty( $theme_option['endurance_hours_number'] )) { ?>
								  <span id="hours">
									    <?php echo esc_html( $theme_option['endurance_hours_number'] ); ?>
                                </span>
								<?php } ?>
                                <?php if(isset( $theme_option['endurance_hours_text'] ) && !empty( $theme_option['endurance_hours_text'] )) { ?>
								  <p>
								    <?php echo esc_html( $theme_option['endurance_hours_text'] ); ?>
                                 </p>
								<?php } ?>
							</div>
							<div class="count-item">
                                <?php if(isset( $theme_option['endurance_minutes_number'] ) && !empty( $theme_option['endurance_minutes_number'] )) { ?>
								  <span id="minutes">
									    <?php echo esc_html( $theme_option['endurance_minutes_number'] ); ?>
                                </span>
								<?php } ?>
                                <?php if(isset( $theme_option['endurance_minutes_text'] ) && !empty( $theme_option['endurance_minutes_text'] )) { ?>
								  <p>
								    <?php echo esc_html( $theme_option['endurance_minutes_text'] ); ?>
                                 </p>
								<?php } ?>
							</div>
							<div class="count-item">
                                <?php if(isset( $theme_option['endurance_second_number'] ) && !empty( $theme_option['endurance_second_number'] )) { ?>
								  <span id="seconds">
									    <?php echo esc_html( $theme_option['endurance_second_number'] ); ?>
                                </span>
								<?php } ?>
                                <?php if(isset( $theme_option['endurance_second_text'] ) && !empty( $theme_option['endurance_second_text'] )) { ?>
								  <p>
								    <?php echo esc_html( $theme_option['endurance_second_text'] ); ?>
                                 </p>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="lines py-sm-5 py-4"><span></span>
                        <?php if(isset( $theme_option['endurance_star_img']['url'] ) && !empty( $theme_option['endurance_star_img']['url'] )) { ?>
							<img src="<?php echo esc_url( $theme_option['endurance_star_img']['url'] ); ?>" alt="star-icon" class="px-3">
						<?php } ?>
                    <span></span></div>
					<div class="join-block text-center">
						<div class="row justify-content-center">
							<div class="col-lg-6 col-sm-10">
                               <?php if(isset( $theme_option['endurance_join_waiting_text'] ) && !empty( $theme_option['endurance_join_waiting_text'] )) { ?>
                                 <div class="title pb-4">
								    <?php echo esc_html( $theme_option['endurance_join_waiting_text'] ); ?>
                                 </div>
								<?php } ?>						
								<div class="fill-up-form">
                                <?php echo do_shortcode('[contact-form-7 id="6186708" title="Join Form - Coming Soon Page"]'); ?>
								</div>
                                <?php if(isset( $theme_option['endurance_mail_text'] ) && !empty( $theme_option['endurance_mail_text'] )) { ?>
								  <p>
								    <?php echo esc_html( $theme_option['endurance_mail_text'] ); ?>
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