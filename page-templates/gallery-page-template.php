<?php 
/* Template Name: Gallery Page Template */

get_header();
$theme_option = get_option('redux_demo');
?>

<body>

	<!-- MAIN SECTIONS START FROM HERE -->
	<main class="main_wrapper">

		<!-- BREADCRUMBS SECTION START FROM HERE -->
		<div class="default-padding">
			<div class="breadcrumbs-section">
				<div class="container">
					<div class="breadcrumbs-title title text-lg-start text-center pb-3">gallery</div>
					<div class="breadcrumbs-block mx-lg-0 mx-auto">
						<a href="index.html" class="item">home</a>
						<span class="item active">gallery</span>
					</div>
				</div>
			</div>
		</div>
		<!-- BREADCRUMBS SECTION END'S FROM HERE -->

        <!-- GALLERY DETAILS SECTION START FROM HERE -->
		<div class="gallery-section default-padding">
			<div class="container">
				<div class="gallery-wrapper">
					<div class="row gy-4">
						<div class="col-lg-4 col-sm-6 wow fadeInUp">
							<div class="image-wrapper">
								<img loading="lazy" src="assets/images/gallery/gallery-1.webp" alt="gallery-1">
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 wow fadeInUp">
							<div class="image-wrapper">
								<img loading="lazy" src="assets/images/gallery/gallery-2.webp" alt="gallery-2">
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 wow fadeInUp">
							<div class="image-wrapper">
								<img loading="lazy" src="assets/images/gallery/gallery-3.webp" alt="gallery-3">
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 wow fadeInUp">
							<div class="image-wrapper">
								<img loading="lazy" src="assets/images/gallery/gallery-4.webp" alt="gallery-4">
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 wow fadeInUp">
							<div class="image-wrapper">
								<img loading="lazy" src="assets/images/gallery/gallery-5.webp" alt="gallery-5">
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 wow fadeInUp">
							<div class="image-wrapper">
								<img loading="lazy" src="assets/images/gallery/gallery-6.webp" alt="gallery-6">
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 wow fadeInUp">
							<div class="image-wrapper">
								<img loading="lazy" src="assets/images/gallery/gallery-7.webp" alt="gallery-7">
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 wow fadeInUp">
							<div class="image-wrapper">
								<img loading="lazy" src="assets/images/gallery/gallery-8.webp" alt="gallery-8">
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 wow fadeInUp">
							<div class="image-wrapper">
								<img loading="lazy" src="assets/images/gallery/gallery-9.webp" alt="gallery-9">
							</div>
						</div>
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