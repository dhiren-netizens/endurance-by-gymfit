<?php
/** Template Name: 404 Page Template
 *
 * @package Endurance_By_GymFit
 */

$theme_option = get_option( 'redux_demo' );
get_header();
?>
<body>
	<main class="main_wrapper error_404_page">
		<!-- 404 SECTION START FROM HERE -->
		<div class="error-wrapper">
			<div class="container">
				<div class="wrapper image-wrapper text-center">
					<div class="row justify-content-center">
						<div class="col-lg-12 col-sm-10">
							<?php if ( isset( $theme_option['endurance_404_img']['url'] ) && ! empty( $theme_option['endurance_404_img']['url'] ) ) { ?>
								<img src="<?php echo esc_url( $theme_option['endurance_404_img']['url'] ); ?>" alt="error-img" class="error-img">
							<?php } else { ?>
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/background/error-img.webp" alt="error-img" class="error-img">
							<?php } ?>
							<?php if ( isset( $theme_option['endurance_404_description'] ) && ! empty( $theme_option['endurance_404_description'] ) ) { ?>
								<p>
									<?php echo esc_html( $theme_option['endurance_404_description'] ); ?>
								</p>
							<?php } ?>
							<?php if ( isset( $theme_option['endurance_back_home'] ) && ! empty( $theme_option['endurance_back_home'] ) ) { ?>
								<a href=" <?php echo esc_html( $theme_option['endurance_back_to_home_link'] ); ?>" class="btn_wrapper mx-auto">
									<?php echo esc_html( $theme_option['endurance_back_home'] ); ?>
								</a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 404 SECTION END'S FROM HERE -->
	</main>
</body>
<?php
get_footer();
