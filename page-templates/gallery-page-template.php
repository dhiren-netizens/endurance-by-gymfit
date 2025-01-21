<?php
/** Template Name: Gallery Page Template
 *
 * @package Endurance_By_GymFit
 */

get_header();
$theme_option = get_option( 'redux_demo' );
?>

<body>

	<!-- MAIN SECTIONS START FROM HERE -->
	<main class="main_wrapper">

		<!-- GALLERY DETAILS SECTION START FROM HERE -->
		<div class="gallery-section default-padding">
			<div class="container">
				<div class="gallery-wrapper">
					<div class="row gy-4">
						<?php
						$gallery_images_ids = $theme_option['endurance_gallery_images'];
						$ids                = explode( ',', $gallery_images_ids );
						foreach ( $ids as $attachment_id ) {
							$img = wp_get_attachment_image_src( $attachment_id );
							$alt = wp_prepare_attachment_for_js( $attachment_id );
							$alt = $alt['alt'] ?? '';
							?>
							<div class="col-lg-4 col-sm-6 wow fadeInUp">
								<div class="image-wrapper">
									<img loading="lazy" src="<?php echo esc_url( $img[0] ); ?>" alt="<?php echo esc_attr( $alt ); ?>">
								</div>
							</div>
						<?php } ?>
					</div>
					<a href="#" class="btn_wrapper mt-sm-5 mt-4 mx-auto">load more</a>
				</div>
			</div>
		</div>
		<!-- GALLERY DETAILS SECTION END'S FROM HERE -->

	</main>
	<!-- MAIN SECTIONS END'S FROM HERE -->


</body>

<?php
get_footer();
