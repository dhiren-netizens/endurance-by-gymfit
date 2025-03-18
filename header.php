<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Endurance_By_GymFit
 */

$theme_option = get_option( 'redux_demo' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<!-- PAGE TITLE START HERE -->
	<title>ENDURANCE</title>
	<!-- PAGE TITLE END'S HERE -->

	<!-- META TAG START HERE -->
	<meta charset="UTF-8">
	<meta name="title" content="ENDURANCE"> <!-- ADD THEME TITLE HERE -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5">
	<meta name="format-detection" content="telephone=no">
	<meta name=theme-color content="#FFFFFF"> <!-- ADD THEME COLOR HERE -->
	<meta name="description"
		content="You are welcome to visit our center where every person is treated with high attention">
	<!-- ADD THEME DESCRIPTION HERE -->

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="theme_url"> <!-- ADD THEME URL HERE -->
	<meta property="og:title" content="ENDURANCE"> <!-- ADD THEME TITLE HERE -->
	<meta property="og:description"
		content="You are welcome to visit our center where every person is treated with high attention">
	<!-- ADD THEME DESCRIPTION HERE -->
	<meta property="og:image" content="https://netizensstore.com/gymfit_theme/html/endurance/assets/images/thumbnail.webp">
	<!-- ADD THEME TITLE HERE -->

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="theme_url"> <!-- ADD THEME URL HERE -->
	<meta property="twitter:title" content="ENDURANCE"> <!-- ADD THEME TITLE HERE -->
	<meta property="twitter:description"
		content="You are welcome to visit our center where every person is treated with high attention">
	<!-- ADD THEME DESCRIPTION HERE -->
	<meta property="twitter:image" content="https://netizensstore.com/gymfit_theme/html/endurance/assets/images/thumbnail.webp"> <!-- ADD THUMBNAIL PATH HERE -->
	<!-- META TAG END'S HERE -->

	<!-- FAVICON -->
	<?php if ( isset( $theme_option['endurance_favicon']['url'] ) && ! empty( $theme_option['endurance_favicon']['url'] ) ) { ?>
		<link href="<?php echo esc_url( $theme_option['endurance_favicon']['url'] ); ?>" rel="shortcut icon" type="image/x-icon">
		<?php } ?>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'endurance-by-gymfit' ); ?></a>

	<!-- HEADER START FROM HERE -->
	<div class="default-padding pt-0 header-wrapper">
		<header>
			<div class="container">
				<nav class="navbar navbar-expand-xxxl">
					
					<!-- Logo -->
					<a class="navbar-brand logo lh-0" href="<?php echo esc_url( home_url() ); ?>">
						<?php if ( isset( $theme_option['endurance_header_logo']['url'] ) && ! empty( $theme_option['endurance_header_logo']['url'] ) ) { ?>
							<img src="<?php echo esc_url( $theme_option['endurance_header_logo']['url'] ); ?>" alt="Logo">
						<?php } else { ?>
							<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/logo.svg'; ?>" alt="Logo">
						<?php } ?>
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
							<?php
							if ( isset( $theme_option['endurance_header_menu'] ) && ! empty( $theme_option['endurance_header_menu'] ) ) {
								wp_nav_menu(
									array(
										'menu'           => $theme_option['endurance_header_menu'],
										'theme_location' => 'primary',
										'fallback_cb'    => 'fallback_menu_pages',
									)
								);
							}
							?>
						</ul>
					</div>
					<div class="d-flex align-items-center gap-sm-4 gap-3 header-right">
						<!-- COLLAPSE BUTTON -->
						<button class="hamburger lh-0">
							<span>menu</span>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/toggle-icon.svg" alt="Icon" class="ps-2">
						</button>
						<?php
						if ( isset( $theme_option['endurance_display_contact_btn'] ) && ! empty( $theme_option['endurance_display_contact_btn'] ) ) {
							if ( 1 == $theme_option['endurance_display_contact_btn'] ) {
								?>
								<a href="<?php echo esc_url( home_url() . '/contact-us/' ); ?>" class="btn_wrapper d-lg-flex d-none">Contact us</a>
								<?php
							}
						}
						?>
					</div>
				</nav>
			</div>
		</header>	
	</div>
	<!-- HEADER END'S FROM HERE -->

	<!-- BREADCRUMBS SECTION START FROM HERE -->
	<?php if ( ! is_front_page() ) { ?>
		<div class="default-padding pt-0">
			<div class="breadcrumbs-section">
				<div class="container">
					<div class="breadcrumbs-title title text-lg-start text-center pb-3">
						<?php
						if ( is_category() ) {
							echo esc_url( single_cat_title() );
						} elseif ( is_tag() ) {
							echo esc_url( single_tag_title() );
						} elseif ( is_single() && 'post' === get_post_type() ) {
								echo esc_html( 'Blog Details' );
						} else {
							echo esc_html( get_the_title() );

						}
						?>
					</div>
					<div class="breadcrumbs-block mx-lg-0 mx-auto">
						<a href="<?php echo esc_url( home_url() ); ?>" class="item">home</a>
						<?php
						if ( is_single() && 'post' === get_post_type() ) {
							echo '<a href="' . esc_url( home_url( '/blogs' ) ) . '" class="item">blog</a>';
						}
						?>
						<span class="item active">
							<?php
							$searched_value = isset( $_REQUEST['s'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['s'] ) ) : '';
							if ( is_search() ) {
								echo esc_html( 'Search Results for: ' . $searched_value );
							} elseif ( is_category() ) {
									echo esc_html( single_cat_title() );
							} elseif ( is_single() && 'post' === get_post_type() ) {
									echo esc_html( wp_trim_words( get_the_title(), 10 ) );
							} else {
								echo esc_html( wp_trim_words( get_the_title(), 10 ) );
							}
							?>
						</span>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- BREADCRUMBS SECTION END'S FROM HERE -->
	<!-- LOADER START HERE -->
	<?php if ( isset( $theme_option['endurance_page_loader'] ) && ! empty( $theme_option['endurance_page_loader'] ) && 1 == $theme_option['endurance_page_loader'] ) { ?>
		<div class="page_loader">
			<?php if ( isset( $theme_option['endurance_page_loader_image']['url'] ) && ! empty( $theme_option['endurance_page_loader_image']['url'] ) ) { ?>
				<img src="<?php echo esc_url( $theme_option['endurance_page_loader_image']['url'] ); ?>" alt="Logo" loading="lazy">
			<?php } else { ?>
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/transformation.webp'; ?>" alt="Logo" loading="lazy">
			<?php } ?>
		</div>
	<?php } ?>
	<!-- LOADER END HERE -->
