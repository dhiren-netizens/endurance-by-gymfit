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
$theme_option = get_option('redux_demo');
?>

	<!-- FOOTER START FROM HERE -->
	<footer>
		<div class="footer-wrapper wow fadeIn" >
			<div class="container">
				<div class="footer-block">
					<div class="top-block">
						<a href="index.html" class="logo image-wrapper">
							<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.svg" alt="footer-logo">
						</a>
						<div class="icon-wrapper">
							<?php if( isset( $theme_option['endurance_social_profiles'] ) && is_array( $theme_option['endurance_social_profiles'] )) {
								foreach( $theme_option['endurance_social_profiles'] as $social_profiles ) {
									if( 1 == $social_profiles['enabled'] ) { ?>
										<a href="<?php echo esc_url( $social_profiles['url'] ); ?>" class="icon image-wrapper">
											<i class="fa <?php echo esc_attr( $social_profiles['icon'] ); ?>"></i>
										</a>
									<?php }
								}
							} ?>
						</div>
					</div>
					<div class="footer-content">
						<ul>
							<?php wp_nav_menu( array('theme_location' => 'secondary', 'fallback_cb' => 'fallback_menu_pages' ) ); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright wow fadeIn">
			<div class="container">
				<div class="d-flex gap-4 align-items-center justify-content-lg-between justify-content-center">
					<p>Copyright © 2024. All rights reserved</p>
					<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/visa-card.svg" width="295" height="27" alt="visa-card" class="image-wrapper d-lg-block d-none">
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END'S FROM HERE -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
