<?php 
/* Template Name: Contact Us Page Template */
$theme_option = get_option('redux_demo');
get_header();
?>
<body>

	<!-- LOADER START HERE -->
	<div class="page_loader">
		<img src="/assets/images/transformation.webp" alt="img" loading="lazy">
	</div>
	<!-- LOADER END HERE -->

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
								    <?php if(isset( $theme_option['endurance_write_us'] ) && !empty( $theme_option['endurance_write_us'] )) { ?>
									  <div class="title text-center"> <?php echo esc_html( $theme_option['endurance_write_us'] ); ?></div>
									<?php } ?>
                                    <?php echo do_shortcode('[contact-form-7 id="dbd37a3" title="Contact form 1"]'); ?>										
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
									<?php if(isset( $theme_option['endurance_call_img']['url'] ) && !empty( $theme_option['endurance_call_img']['url'] )) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_call_img']['url'] ); ?>" alt="call_icon">
									<?php } ?></div>
									<?php if(isset( $theme_option['call_us_heading'] ) && !empty( $theme_option['call_us_heading'] )) { ?>
									  <span> <?php echo esc_html( $theme_option['call_us_heading'] ); ?></span>
									<?php } ?>
								<div class="d-sm-flex align-items-center justify-content-between mb-2">
								    <?php if(isset( $theme_option['endurance_bussiness_inquiry'] ) && !empty( $theme_option['endurance_bussiness_inquiry'] )) { ?>
									  <p> <?php echo esc_html( $theme_option['endurance_bussiness_inquiry'] ); ?></p>
									<?php } ?>
									<?php if(isset( $theme_option['endurance_call_us_link'] ) && !empty( $theme_option['endurance_call_us_link'] )) { ?>
									  <a href="tel:<?php echo esc_html( $theme_option['endurance_call_us_link'] ); ?>"> <?php echo esc_html( $theme_option['endurance_call_us_link'] ); ?></a>
									<?php } ?>
								</div>
								<div class="d-sm-flex align-items-center justify-content-between">
								    <?php if(isset( $theme_option['endurance_coustomer_support'] ) && !empty( $theme_option['endurance_coustomer_support'] )) { ?>
									  <p> <?php echo esc_html( $theme_option['endurance_coustomer_support'] ); ?></p>
									<?php } ?>
									<?php if(isset( $theme_option['endurance_call_us_customer_link'] ) && !empty( $theme_option['endurance_call_us_customer_link'] )) { ?>
									  <a href="tel:<?php echo esc_html( $theme_option['endurance_call_us_customer_link'] ); ?>"> <?php echo esc_html( $theme_option['endurance_call_us_customer_link'] ); ?></a>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-sm-10 wow fadeInRight">
							<div class="contact-block text-sm-start text-center emailBlock">
								<div class="icon mx-sm-0 mx-auto image-wrapper"><?php if(isset( $theme_option['endurance_mail_img']['url'] ) && !empty( $theme_option['endurance_mail_img']['url'] )) { ?>
										<img src="<?php echo esc_url( $theme_option['endurance_mail_img']['url'] ); ?>" alt="call_icon">
									<?php } ?></div>
									<?php if(isset( $theme_option['mail_heading'] ) && !empty( $theme_option['mail_heading'] )) { ?>
									  <span> <?php echo esc_html( $theme_option['mail_heading'] ); ?></span>
									<?php } ?>
								<div class="d-sm-flex align-items-center justify-content-between mb-2">
								    <?php if(isset( $theme_option['endurance_bussiness_inquiry_mail_text'] ) && !empty( $theme_option['endurance_bussiness_inquiry_mail_text'] )) { ?>
									  <p> <?php echo esc_html( $theme_option['endurance_bussiness_inquiry_mail_text'] ); ?></p>
									<?php } ?>
									<?php if(isset( $theme_option['endurance_bussiness_email'] ) && !empty( $theme_option['endurance_bussiness_email'] )) { ?>
									  <a href="mailto:<?php echo esc_html( $theme_option['endurance_bussiness_email'] ); ?>"> <?php echo esc_html( $theme_option['endurance_bussiness_email'] ); ?></a>
									<?php } ?>
								</div>
								<div class="d-sm-flex align-items-center justify-content-between">
								    <?php if(isset( $theme_option['endurance_coustomer_support_email'] ) && !empty( $theme_option['endurance_coustomer_support_email'] )) { ?>
									  <p> <?php echo esc_html( $theme_option['endurance_coustomer_support_email'] ); ?></p>
									<?php } ?>
									<?php if(isset( $theme_option['endurance_customer_email_link'] ) && !empty( $theme_option['endurance_customer_email_link'] )) { ?>
									  <a href="mailto<?php echo esc_html( $theme_option['endurance_customer_email_link'] ); ?>"> <?php echo esc_html( $theme_option['endurance_customer_email_link'] ); ?></a>
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