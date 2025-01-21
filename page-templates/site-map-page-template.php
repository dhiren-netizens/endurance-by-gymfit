<?php
/** Template Name: Site Map Page Template
 *
 * @package Endurance_By_GymFit
 */

$theme_option = get_option( 'redux_demo' );
get_header();
?>

<body>
	<main class="main_wrapper">
		<!-- SITE MAP SECTION START FROM HERE -->
		<div class="sitemap-section default-padding">
			<div class="container">
				<div class="sitemap-wrapper">
					<div class="row gy-lg-0 gy-sm-5 gy-4 align-items-center justify-content-center">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="sitemap-block">
								<div class="title">sitemap</div>
									<?php
										wp_nav_menu(
											array(
												'menu' => 'Sitemap',
												'theme_location' => 'sitemap',
												'fallback_cb' => 'fallback_menu_pages',
											)
										);
										?>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="img-wrapper wow fadeInRight">
								<?php if ( isset( $theme_option['endurance_site_map_img']['url'] ) && ! empty( $theme_option['endurance_site_map_img']['url'] ) ) { ?>
									<img src="<?php echo esc_url( $theme_option['endurance_site_map_img']['url'] ); ?>" >
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SITE MAP SECTION END'S FROM HERE -->
		</div>
	</main>
</body>
<?php
get_footer();