<?php
/** Template Name: Contact Us Page Template
 *
 * @package Endurance_By_GymFit
 */

$theme_option = get_option( 'redux_demo' );
get_header();
?>
<body>

	<!-- MAIN SECTIONS START FROM HERE -->
	<main class="main_wrapper">

		<!-- CONTACT US SECTION START FROM HERE -->
		<div class="default-padding">
			<div class="contact-section form-section wow fadeIn">
				<div class="container">
					<div class="contact-wrapper">
						<div class="row justify-content-lg-start justify-content-center">
							<div class="col-lg-6 col-sm-10">
								<div class="fill-up-form">
									<?php if ( isset( $theme_option['endurance_contact_us_heading'] ) && ! empty( $theme_option['endurance_contact_us_heading'] ) ) { ?>
										<div class="title text-center"> <?php echo esc_html( $theme_option['endurance_contact_us_heading'] ); ?></div>
									<?php } ?>
									<?php echo do_shortcode( '[contact-form-7 id="dbd37a3" title="Contact form 1"]' ); ?>										
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CONTACT US SECTION END'S FROM HERE -->

		<!-- CONTACT US SECTION START FROM HERE -->
		<div class="contact-section details-section default-padding">
			<div class="container">
				<div class="contact-dtls default-padding">
					<div class="row justify-content-center gy-lg-0 gy-4">
						<div class="col-xl-4 col-lg-6 col-sm-10 wow fadeInLeft">
							<div class="contact-block text-sm-start text-center">
								<div class="icon mx-sm-0 mx-auto image-wrapper">
									<?php if ( isset( $theme_option['endurance_conatct_info_call_img']['url'] ) && ! empty( $theme_option['endurance_conatct_info_call_img']['url'] ) ) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_conatct_info_call_img']['url'] ); ?>" alt="call_icon" width="36px" height="36px">
									<?php } else { ?>
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/call.svg" alt="call_icon">
									<?php } ?>
									</div>
									<?php if ( isset( $theme_option['endurance_conatct_info_call_us_heading'] ) && ! empty( $theme_option['endurance_conatct_info_call_us_heading'] ) ) { ?>
										<span> <?php echo esc_html( $theme_option['endurance_conatct_info_call_us_heading'] ); ?></span>
									<?php } ?>
								<div class="d-sm-flex align-items-center justify-content-between mb-2">
									<?php if ( isset( $theme_option['endurance_conatct_info_call_details']['box1'] ) && ! empty( $theme_option['endurance_conatct_info_call_details']['box1'] ) ) { ?>
										<p> <?php echo esc_html( $theme_option['endurance_conatct_info_call_details']['box1'] ); ?></p>
									<?php } ?>
									<?php if ( isset( $theme_option['endurance_conatct_info_call_details']['box2'] ) && ! empty( $theme_option['endurance_conatct_info_call_details']['box2'] ) ) { ?>
										<a href="tel:<?php echo esc_html( $theme_option['endurance_conatct_info_call_details']['box2'] ); ?>"> <?php echo esc_html( $theme_option['endurance_conatct_info_call_details']['box2'] ); ?></a>
									<?php } ?>
								</div>
								<div class="d-sm-flex align-items-center justify-content-between">
									<?php if ( isset( $theme_option['endurance_conatct_info_call_details']['box3'] ) && ! empty( $theme_option['endurance_conatct_info_call_details']['box3'] ) ) { ?>
										<p> <?php echo esc_html( $theme_option['endurance_conatct_info_call_details']['box3'] ); ?></p>
									<?php } ?>
									<?php if ( isset( $theme_option['endurance_conatct_info_call_details']['box4'] ) && ! empty( $theme_option['endurance_conatct_info_call_details']['box4'] ) ) { ?>
										<a href="tel:<?php echo esc_html( $theme_option['endurance_conatct_info_call_details']['box4'] ); ?>"> <?php echo esc_html( $theme_option['endurance_conatct_info_call_details']['box4'] ); ?></a>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-sm-10 wow fadeInRight">
							<div class="contact-block text-sm-start text-center emailBlock">
								<div class="icon mx-sm-0 mx-auto image-wrapper"><?php if ( isset( $theme_option['endurance_conatct_info_mail_img']['url'] ) && ! empty( $theme_option['endurance_conatct_info_mail_img']['url'] ) ) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_conatct_info_mail_img']['url'] ); ?>" alt="email_icon" width="36px" height="36px">
									<?php } else { ?>
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/mail.svg" alt="email_icon">
									<?php } ?>
									</div>
									<?php if ( isset( $theme_option['endurance_conatct_info_mail_heading'] ) && ! empty( $theme_option['endurance_conatct_info_mail_heading'] ) ) { ?>
										<span> <?php echo esc_html( $theme_option['endurance_conatct_info_mail_heading'] ); ?></span>
									<?php } ?>
								<div class="d-sm-flex align-items-center justify-content-between mb-2">
									<?php if ( isset( $theme_option['endurance_conatct_info_email_details']['box1'] ) && ! empty( $theme_option['endurance_conatct_info_email_details']['box1'] ) ) { ?>
										<p> <?php echo esc_html( $theme_option['endurance_conatct_info_email_details']['box1'] ); ?></p>
									<?php } ?>
									<?php if ( isset( $theme_option['endurance_conatct_info_email_details']['box2'] ) && ! empty( $theme_option['endurance_conatct_info_email_details']['box2'] ) ) { ?>
										<a href="mailto:<?php echo esc_html( $theme_option['endurance_conatct_info_email_details']['box2'] ); ?>"> <?php echo esc_html( $theme_option['endurance_conatct_info_email_details']['box2'] ); ?></a>
									<?php } ?>
								</div>
								<div class="d-sm-flex align-items-center justify-content-between">
									<?php if ( isset( $theme_option['endurance_conatct_info_email_details']['box3'] ) && ! empty( $theme_option['endurance_conatct_info_email_details']['box3'] ) ) { ?>
										<p> <?php echo esc_html( $theme_option['endurance_conatct_info_email_details']['box3'] ); ?></p>
									<?php } ?>
									<?php if ( isset( $theme_option['endurance_conatct_info_email_details']['box4'] ) && ! empty( $theme_option['endurance_conatct_info_email_details']['box4'] ) ) { ?>
										<a href="mailto:<?php echo esc_html( $theme_option['endurance_conatct_info_email_details']['box4'] ); ?>"> <?php echo esc_html( $theme_option['endurance_conatct_info_email_details']['box4'] ); ?></a>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CONTACT US SECTION END'S FROM HERE -->
		
	</main>
	<!-- MAIN SECTIONS END'S FROM HERE -->	

</body>
<?php
get_footer();
