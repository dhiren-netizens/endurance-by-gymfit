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
					<div class="row gy-4" id="gallery-items">
						<?php
						$gallery_images_ids = $theme_option['endurance_gallery_images'];
						$ids                = explode( ',', $gallery_images_ids );
						$initial_display    = 6;
						$additional_display = 3;

						foreach ( $ids as $index => $attachment_id ) {
							$img = wp_get_attachment_image_src( $attachment_id );
							$alt = wp_prepare_attachment_for_js( $attachment_id );
							$alt = $alt['alt'] ?? '';

							$hidden_class = $index >= $initial_display ? 'gallery-hidden' : '';
							?>
							<div class="col-lg-4 col-sm-6 <?php echo $hidden_class; ?>">
								<div class="image-wrapper wow fadeInUp">
									<img loading="lazy" src="<?php echo isset( $img[0] ) ? esc_url( $img[0] ) : ''; ?>" alt="<?php echo esc_attr( $alt ); ?>">
								</div>
							</div>
						<?php } ?>
					</div>
					<?php if ( ! empty( $gallery_images_ids ) ) { ?>
						<a href="#" class="btn_wrapper mt-sm-5 mt-4 mx-auto" id="gallery-load-more">Load More</a>
					<?php } else { ?>
						<p class="no_img_found text-center">No gallery images found.</p>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- GALLERY DETAILS SECTION END'S FROM HERE -->

	</main>


</body>

<?php
get_footer();
