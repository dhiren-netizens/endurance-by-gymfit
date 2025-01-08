<?php 
/* Template Name: Contact Us Page Template */
$theme_option = get_option('redux_demo');
get_header();
?>

<body>

	<!-- LOADER START HERE -->
	<div class="page_loader">
		<img src="assets/images/transformation.webp" alt="img" loading="lazy">
	</div>
	<!-- LOADER END HERE -->

	<!-- HEADER START FROM HERE -->
	<header>
		<div class="container">
			<nav class="navbar navbar-expand-xxxl">

				<!-- Logo -->
				<a class="navbar-brand logo lh-0" href="index.html">
					<img src="assets/images/logo.svg" alt="Logo">
				</a>

				<!-- COLLAPSE MENU -->
				<div class="header_block">
					<div class="MobileView lh-0 mb-sm-5 mb-4 d-flex align-items-center justify-content-end">
						<a href="#!" class="closeBtn d-flex align-items-center">
							<p class="mb-0 pe-sm-3 pe-2">close</p>
							<div class="close-icon d-flex align-items-center justify-content-center">
								<span></span>
								<span></span>
							</div>
						</a>
					</div>
					<ul class="tabActive">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about-us.html">About us</a>
						</li>
						<li>
							<a href="index.html#pricing">Pricing</a>
						</li>
						<li>
							<a href="gallery.html">Gallery</a>
						</li>
						<li>
							<a href="blog.html">Blogs</a>
						</li>
						<li>
							<a href="contact-us.html">Contact Us</a>
						</li>
						<li class="dropdown">
							<a href="#!" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
								Pages
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="404.html">404</a></li>
								<li><a class="dropdown-item" href="coming-soon.html">cooming soon</a></li>
								<li><a class="dropdown-item" href="site-map.html">sitemap</a></li>
							</ul>
						</li>
						
						<li class="d-lg-none d-flex">
							<a href="#!" class="btn_wrapper">get started</a>
						</li>
					</ul>
				</div>
				<div class="d-flex align-items-center gap-sm-4 gap-3">
					<!-- COLLAPSE BUTTON -->
					<button class="hamburger lh-0">
						<span>menu</span>
						<img src="assets/images/icon/toggle-icon.svg" alt="Icon" class="ps-2">
					</button>
					<a href="contact-us.html" class="btn_wrapper d-lg-flex d-none">Contact us</a>
				</div>
			</nav>
		</div>
	</header>
	<!-- HEADER END'S FROM HERE -->

	<!-- MAIN SECTIONS START FROM HERE -->
	<main class="main_wrapper">

		<!-- BREADCRUMBS SECTION START FROM HERE -->
		<div class="default-padding">
			<div class="breadcrumbs-section">
				<div class="container">
					<div class="breadcrumbs-title title text-lg-start text-center pb-3">contact us</div>
					<div class="breadcrumbs-block mx-lg-0 mx-auto">
						<a href="index.html" class="item">home</a>
						<span class="item active">contact us</span>
					</div>
				</div>
			</div>
		</div>
		<!-- BREADCRUMBS SECTION END'S FROM HERE -->

        <!-- CONTACT US SECTION START FROM HERE -->
		<div class="default-padding">
			<div class="contact-section form-section wow fadeIn">
				<div class="container">
					<div class="contact-wrapper">
						<div class="row justify-content-lg-start justify-content-center">
							<div class="col-lg-6 col-sm-10">
								<div class="fill-up-form">
									<div class="title text-center">Write Us</div>
									<form class="form">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<input type="text" name="firstname" class="user-input" placeholder="FIRST NAME" required="">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<input type="text" name="lastname" class="user-input" placeholder="LAST NAME" required="">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<input type="email" name="email" class="user-input" placeholder="E-MAIL" required="">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<input type="text" name="telephone" class="user-input" placeholder="PHONE NO." required="">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<!-- <input type="text" name="subject" class="user-input" placeholder="SUBJECT"> -->
													<select class="user-input" required=''>
														<option value="0">SELECT SUBJECT</option>
														<option value="1">AEROBIC EXERCISE</option>
														<option value="2">BODYBUILDING</option>
														<option value="3">PHYSICAL EXERCISE</option>
													</select>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<textarea type="text" name="massage" class="user-input" placeholder="WRITE YOUR CONSERN" rows="6" required=""></textarea>
												</div>
											</div>
										</div>
										<button type="submit" class="btn_wrapper w-100 justify-content-center">CONTACT US</button>
									</form>
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
								<div class="icon mx-sm-0 mx-auto image-wrapper"><img loading="lazy" src="assets/images/icon/call.svg" alt="call_icon"></div>
								<span>Call us</span>
								<div class="d-sm-flex align-items-center justify-content-between mb-2">
									<p>Business Inquiry :</p>
									<a href="tel:+1 256 (7852) 551">+1 256 (7852) 551</a>
								</div>
								<div class="d-sm-flex align-items-center justify-content-between">
									<p>Customer Support :</p>
									<a href="tel:+1 256 (7852) 551">+1 256 (7852) 551</a>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-6 col-sm-10 wow fadeInRight">
							<div class="contact-block text-sm-start text-center emailBlock">
								<div class="icon mx-sm-0 mx-auto image-wrapper"><img loading="lazy" src="assets/images/icon/mail.svg" alt="mail_icon"></div>
								<span>E-mail</span>
								<div class="d-sm-flex align-items-center justify-content-between mb-2">
									<p>Business Inquiry :</p>
									<a href="mailto:businessinfo@gymfit.email">businessinfo@gymfit.email</a>
								</div>
								<div class="d-sm-flex align-items-center justify-content-between">
									<p>Customer Support :</p>
									<a href="mailto:customer@gymfit.email">customer@gymfit.email</a>
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

	<!-- FOOTER START FROM HERE -->
	<footer class="default-padding pb-0">
		<div class="footer-wrapper wow fadeIn" >
			<div class="container">
				<div class="footer-block">
					<div class="top-block">
						<a href="index.html" class="logo image-wrapper">
							<img loading="lazy" src="assets/images/footer-logo.svg" alt="footer-logo">
						</a>
						<div class="icon-wrapper">
							<a href="#!" class="icon image-wrapper">
								<img loading="lazy" src="assets/images/icon/facebook.svg" width="24" height="24" alt="facebook">
							</a>
							<a href="#!" class="icon image-wrapper">
								<img loading="lazy" src="assets/images/icon/instagram.svg" width="24" height="24" alt="instagram">
							</a>
							<a href="#!" class="icon image-wrapper">
								<img loading="lazy" src="assets/images/icon/twitter.svg" width="24" height="24" alt="twitter">
							</a>
							<a href="#!" class="icon image-wrapper">
								<img loading="lazy" src="assets/images/icon/youtube.svg" width="24" height="24" alt="youtube">
							</a>
							<a href="#!" class="icon image-wrapper">
								<img loading="lazy" src="assets/images/icon/linkedln.svg" width="24" height="24" alt="linkedln">
							</a>
						</div>
					</div>
					<div class="footer-content">
						<ul>
							<li><a href="index.html">home</a></li>
							<li><a href="about-us.html">about us</a></li>
							<li><a href="contact-us.html">contact us</a></li>
							<li><a href="blog.html">blogs</a></li>
							<li><a href="gallery.html">gallery</a></li>
							<li><a href="#">help center</a></li>
							<li><a href="site-map.html">sitemap</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright wow fadeIn" >
			<div class="container">
				<div class="d-flex gap-4 align-items-center justify-content-lg-between justify-content-center">
					<p>Copyright © 2024. All rights reserved</p>
					<img loading="lazy" src="assets/images/icon/visa-card.svg" width="295" height="27" alt="visa-card" class="image-wrapper d-lg-block d-none">
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END'S FROM HERE -->

	<!-- BACK TOP TOP BUTTON START FROM HERE -->
	<a href="#!" id="button"><img loading="lazy" src="assets/images/icon/arrow-up.svg" width="22" height="22" alt="arrow-up"></a>
	<!-- BACK TOP TOP BUTTON END'S FROM HERE -->

	<!-- LOCAL JS SCRIPT -->
	<script src="assets/vendors/jquery/jquery.min.js"></script> <!-- JQUERY -->
	<script src="assets/vendors/bootstrap/js/bootstrap.js"></script> <!-- BOOTSTRAP JS -->
	<script src="assets/vendors/swiper/js/swiper-bundle.min.js"></script> <!-- SWIPER JS -->
	<script src="assets/vendors/animation/js/animation.js"></script> <!-- ANIMATION JS -->
	<script src="assets/vendors/nice-select/js/jquery.nice-select.min.js"></script> <!-- NICE SELECT JS -->
	<script src="assets/js/main.js"></script> <!-- MAIN JS -->

	<script>
		$(document).ready(function() {
			$('select').niceSelect();
		});
	</script>

</body>
<?php
get_footer();