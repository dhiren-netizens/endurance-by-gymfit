<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Endurance_By_GymFit
 */

$theme_option = get_option( 'redux_demo' );
?>

<!-- BACK TOP TOP BUTTON START FROM HERE -->
<?php if ( isset( $theme_option['endurance_enable_top_to_btn'] ) && ! empty( $theme_option['endurance_enable_top_to_btn'] ) && 1 == $theme_option['endurance_enable_top_to_btn'] ) { ?>
	<a href="#!" id="button"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/arrow-up.svg" width="22" height="22" alt="arrow-up"></a>
<?php } ?>
<!-- BACK TOP TOP BUTTON END'S FROM HERE -->

	<!-- FOOTER START FROM HERE -->
	<footer>
		<div class="footer-wrapper wow fadeIn" >
			<div class="container">
				<div class="footer-block">
					<div class="top-block">
						<a href="<?php echo esc_url( home_url() ); ?>" class="logo image-wrapper">
						<?php if ( isset( $theme_option['endurance_footer_logo']['url'] ) && ! empty( $theme_option['endurance_footer_logo']['url'] ) ) { ?>
							<img src="<?php echo esc_url( $theme_option['endurance_footer_logo']['url'] ); ?>" alt="Logo">
						<?php } ?>
						</a>
						<div class="icon-wrapper">
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
					<div class="footer-content">
						<ul>
							<?php
							if ( isset( $theme_option['endurance_footer_menu'] ) && ! empty( $theme_option['endurance_footer_menu'] ) ) {
								wp_nav_menu(
									array(
										'menu'           => $theme_option['endurance_footer_menu'],
										'theme_location' => 'secondary',
										'fallback_cb'    => 'fallback_menu_pages',
									)
								);
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright wow fadeIn">
			<div class="container">
				<div class="d-flex gap-4 align-items-center justify-content-lg-between justify-content-center">
					<p>
						<?php
						if ( isset( $theme_option['endurance_copyright_content'] ) && ! empty( $theme_option['endurance_copyright_content'] ) ) {
							echo esc_html( $theme_option['endurance_copyright_content'] );
						}
						?>
					</p>
					<?php if ( isset( $theme_option['endurance_footer_bank_cards']['url'] ) && ! empty( $theme_option['endurance_footer_bank_cards']['url'] ) ) { ?>
							<img loading="lazy" src="<?php echo esc_url( $theme_option['endurance_footer_bank_cards']['url'] ); ?>" alt="Logo" width="295" height="27" alt="visa-card" class="image-wrapper d-lg-block d-none">
						<?php } ?>
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END'S FROM HERE -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
