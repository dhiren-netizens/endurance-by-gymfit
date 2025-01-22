<?php
/**
 * Endurance By GymFit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Endurance_By_GymFit
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function endurance_by_gymfit_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Endurance By GymFit, use a find and replace
		* to change 'endurance-by-gymfit' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'endurance-by-gymfit', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'endurance_by_gymfit_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'endurance_by_gymfit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function endurance_by_gymfit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'endurance_by_gymfit_content_width', 640 );
}
add_action( 'after_setup_theme', 'endurance_by_gymfit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function endurance_by_gymfit_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'endurance-by-gymfit' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'endurance-by-gymfit' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'endurance_by_gymfit_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function endurance_by_gymfit_scripts() {
	wp_enqueue_style( 'endurance-by-gymfit-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'endurance-bootstrap-style', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'endurance-swiper-style', get_template_directory_uri() . '/assets/vendors/swiper/css/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'endurance-animation-style', get_template_directory_uri() . '/assets/vendors/animation/css/animation.css', array(), _S_VERSION );
	wp_enqueue_style( 'endurance-app-style', get_template_directory_uri() . '/assets/css/app.css', array(), _S_VERSION );

	wp_style_add_data( 'endurance-by-gymfit-style', 'rtl', 'replace' );

	wp_dequeue_script( 'jquery' );
	wp_enqueue_script( 'endurance-by-gymfit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'endurance-jquery-script', get_template_directory_uri() . '/assets/vendors/jquery/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'endurance-bootstrap-script', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'endurance-swiper-script', get_template_directory_uri() . '/assets/vendors/swiper/js/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'endurance-animation-script', get_template_directory_uri() . '/assets/vendors/animation/js/animation.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'endurance-main-script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'endurance_by_gymfit_scripts' );

/**
 * Enqueue scripts and styles.
 */
function admin_side_endurance_by_gymfit_scripts() {
	wp_enqueue_style( 'endurance-admin-main-style', get_template_directory_uri() . '/admin/admin-main.css', array(), _S_VERSION );
	wp_enqueue_style( 'endurance-select2-style', get_template_directory_uri() . '/assets/vendors/select2/css/select2.css', array(), _S_VERSION );
	wp_enqueue_script( 'endurance-select2-script', get_template_directory_uri() . '/assets/vendors/select2/js/select2.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'endurance-admin-main-script', get_template_directory_uri() . '/admin/admin-main.js', array( 'jquery' ), _S_VERSION, true );
}
add_action( 'admin_enqueue_scripts', 'admin_side_endurance_by_gymfit_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Add functionality file
*/
require get_template_directory() . '/inc/includes/register-plugins.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/redux-framework/redux-framework.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Add Default Menu Items.
 *
 * @param int    $term_id Term ID.
 *
 * @param string $title Title Name.
 *
 * @param string $url Link.
 *
 * @param string $parent_id Parent ID.
 */
function generate_site_nav_menu_item( $term_id, $title, $url, $parent_id = 0 ) {
	$page = get_page_by_path( $url );
	if ( $page ) {
		$menu_item_id = wp_update_nav_menu_item(
			$term_id,
			0,
			array(
				'menu-item-object-id' => $page->ID,
				'menu-item-object'    => 'page',
				'menu-item-type'      => 'post_type',
				'menu-item-title'     => $title,
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => $parent_id,
			)
		);
	} else {
		$menu_item_id = wp_update_nav_menu_item(
			$term_id,
			0,
			array(
				'menu-item-title'     => sprintf( __( '%s', 'text_domain' ), $title ),
				'menu-item-url'       => home_url( '/' . $url ),
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => $parent_id, // Add parent ID here.
			)
		);
	}
	return $menu_item_id;
}

/**
 * Add Default Menu Name.
 *
 * @param string $menu_name Menu Name.
 *
 * @param string $menu_items_array Items Name.
 *
 * @param string $location_target Traget Location.
 */
function generate_site_nav_menu( $menu_name, $menu_items_array, $location_target ) {

	$menu_exists = wp_get_nav_menu_object( $menu_name );

	if ( ! $menu_exists ) {
		$menu_id = wp_create_nav_menu( $menu_name );
	} else {
		$menu_id = $menu_exists->term_id;
	}

	$locations_arr                     = get_theme_mod( 'nav_menu_locations' );
	$locations_arr[ $location_target ] = $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations_arr );

	foreach ( $menu_items_array as $page_name => $page_location ) {
		if ( is_array( $page_location ) ) {
			// It's a submenu.
			$parent_menu_id = generate_site_nav_menu_item( $menu_id, $page_name, '#', 0 ); // Create parent menu item (with a dummy URL).

			foreach ( $page_location as $sub_page_name => $sub_page_location ) {
				generate_site_nav_menu_item( $menu_id, $sub_page_name, $sub_page_location, $parent_menu_id );
			}
		} else {
			// It's a top-level menu item.
			generate_site_nav_menu_item( $menu_id, $page_name, $page_location, 0 );
		}
	}

	update_option( 'menu_check', true );
}

/**
 * Switch Theme Set Menu.
 */
function my_after_setup_theme() {

	/**
	 * Register Navigations
	 */
	register_nav_menus(
		array(
			'primary'   => __( 'Primary', 'endurance' ),
			'secondary' => __( 'Secondary', 'endurance' ),
			'sitemap'   => __( 'Sitemap', 'endurance' ),
		)
	);
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );




/**
 * Runs when user switches to your custom theme
 */
function my_after_switch_theme() {

	/**
	 * Add a default pages
	 */
	$default_pages = array(
		array(
			'slug'     => 'home',
			'title'    => 'Home',
			'template' => 'page-templates/home-page-template.php',
		),
		array(
			'slug'     => 'about-us',
			'title'    => 'About Us',
			'template' => 'page-templates/about-us-page-template.php',
		),
		array(
			'slug'     => 'gallery',
			'title'    => 'Gallery',
			'template' => 'page-templates/gallery-page-template.php',
		),
		array(
			'slug'     => 'contact-us',
			'title'    => 'Contact Us',
			'template' => 'page-templates/contact-us-page-template.php',
		),
		array(
			'slug'     => '404',
			'title'    => '404',
			'template' => 'page-templates/404-page-template.php',
		),
		array(
			'slug'     => 'coming-soon',
			'title'    => 'Coming Soon',
			'template' => 'page-templates/coming-soon-page-template.php',
		),
		array(
			'slug'     => 'sitemap',
			'title'    => 'Sitemap',
			'template' => 'page-templates/site-map-page-template.php',
		),
		array(
			'slug'     => 'blogs',
			'title'    => 'Blogs',
			'template' => '',
		),
	);
	foreach ( $default_pages as $page ) {
		// Check if the page already exists.
		$existing_page = get_page_by_path( $page['slug'] );
		if ( ! $existing_page ) {
			wp_insert_post(
				array(
					'post_title'     => $page['title'],
					'post_type'      => 'page',
					'post_name'      => $page['slug'],
					'comment_status' => 'closed',
					'ping_status'    => 'closed',
					'post_content'   => '',
					'meta_input'     => array(
						'_wp_page_template' => $page['template'],
					),
					'post_status'    => 'publish',
					'post_author'    => 1,
					'menu_order'     => 0,
				)
			);
		}
	}

	/*
	Add a default Testimonails Reviews posts
	*/
	$default_review = array(
		array(
			'slug'    => 'angela-lipton',
			'title'   => 'Angela Lipton',
			'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum suscipit voluptate aliquam officia voluptatem! Minus dolorem tempora optio quisquam odio. Minima temporibus molestias aspernatur neque veniam ducimus, placeat ratione eligendi!',
			'image'   => get_template_directory_uri() . '/assets/images/background/review-img.webp',
		),
		array(
			'slug'    => 'johnny-depp',
			'title'   => 'Johnny Depp',
			'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum suscipit voluptate aliquam officia voluptatem! Minus dolorem tempora optio quisquam odio. Minima temporibus molestias aspernatur neque veniam ducimus, placeat ratione eligendi!',
			'image'   => get_template_directory_uri() . '/assets/images/background/review-img-2.webp',
		),
	);
	foreach ( $default_review as $post ) {
		// Check if the post already exists.
		$existing_review = get_page_by_path( $post['slug'], OBJECT, 'testimonial-reviews' );
		if ( ! $existing_review ) {
			$post_id = wp_insert_post(
				array(
					'post_title'     => $post['title'],
					'post_type'      => 'testimonial-reviews',
					'post_name'      => $post['slug'],
					'post_content'   => $post['content'],
					'comment_status' => 'closed',
					'ping_status'    => 'closed',
					'post_status'    => 'publish',
					'post_author'    => 1,
					'menu_order'     => 0,
				)
			);
			update_post_meta( $post_id, 'review_name', 'Google Review' );
			update_post_meta( $post_id, 'star_rating', 4 );

			// Add featured image.
			$image_url  = $post['image'];
			$image_data = file_get_contents( $image_url );
			$filename   = basename( $image_url );
			$upload_dir = wp_upload_dir();

			if ( wp_mkdir_p( $upload_dir['path'] ) ) {
				$file = $upload_dir['path'] . '/' . $filename;
			} else {
				$file = $upload_dir['basedir'] . '/' . $filename;
			}

			file_put_contents( $file, $image_data );

			$wp_filetype = wp_check_filetype( $filename, null );

			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title'     => sanitize_file_name( $filename ),
				'post_content'   => '',
				'post_status'    => 'inherit',
			);

			$attachment_id = wp_insert_attachment( $attachment, $file, $post_id );
			require_once ABSPATH . 'wp-admin/includes/image.php';
			$attach_data = wp_generate_attachment_metadata( $attachment_id, $file );
			wp_update_attachment_metadata( $attachment_id, $attach_data );
			set_post_thumbnail( $post_id, $attachment_id );
		}
	}

	/**
	 * Add a default meet our team posts
	 */
	$default_posts = array(
		array(
			'slug'    => 'ivan-petrov',
			'title'   => 'Ivan Petrov',
			'content' => 'Endurance Training Coach',
			'image'   => get_template_directory_uri() . '/assets/images/team/team-1.webp',
		),
		array(
			'slug'    => 'ekaterina-ivanova',
			'title'   => 'Ekaterina Ivanova',
			'content' => 'Cardio Conditioning Specialist',
			'image'   => get_template_directory_uri() . '/assets/images/team/team-2.webp',
		),
		array(
			'slug'    => 'sergey-mikhailov',
			'title'   => 'Sergey Mikhailov',
			'content' => 'Stamina Enhancement Trainer',
			'image'   => get_template_directory_uri() . '/assets/images/team/team-3.webp',
		),
		array(
			'slug'    => 'olga-sokolova',
			'title'   => 'Olga Sokolova',
			'content' => 'Long-Distance Fitness Instructor',
			'image'   => get_template_directory_uri() . '/assets/images/team/team-4.webp',
		),
	);
	foreach ( $default_posts as $post ) {
		// Check if the post already exists.
		$existing_post = get_page_by_path( $post['slug'], OBJECT, 'meet-our-team' );
		if ( ! $existing_post ) {
			$post_id = wp_insert_post(
				array(
					'post_title'     => $post['title'],
					'post_type'      => 'meet-our-team',
					'post_name'      => $post['slug'],
					'post_content'   => $post['content'],
					'comment_status' => 'closed',
					'ping_status'    => 'closed',
					'post_status'    => 'publish',
					'post_author'    => 1,
					'menu_order'     => 0,
				)
			);

			// Add featured image.
			$image_url  = $post['image'];
			$image_data = file_get_contents( $image_url );
			$filename   = basename( $image_url );
			$upload_dir = wp_upload_dir();

			if ( wp_mkdir_p( $upload_dir['path'] ) ) {
				$file = $upload_dir['path'] . '/' . $filename;
			} else {
				$file = $upload_dir['basedir'] . '/' . $filename;
			}

			file_put_contents( $file, $image_data );

			$wp_filetype = wp_check_filetype( $filename, null );

			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title'     => sanitize_file_name( $filename ),
				'post_content'   => '',
				'post_status'    => 'inherit',
			);

			$attachment_id = wp_insert_attachment( $attachment, $file, $post_id );
			require_once ABSPATH . 'wp-admin/includes/image.php';
			$attach_data = wp_generate_attachment_metadata( $attachment_id, $file );
			wp_update_attachment_metadata( $attachment_id, $attach_data );
			set_post_thumbnail( $post_id, $attachment_id );
		}
	}

	/**
	 * Add a default pricing plan posts
	 */
	$default_posts = array(
		array(
			'slug'  => 'ultimate',
			'title' => 'Ultimate',
		),
		array(
			'slug'  => 'pro',
			'title' => 'Pro',
		),
		array(
			'slug'  => 'basic',
			'title' => 'Basic',
		),
		array(
			'slug'  => 'free',
			'title' => 'Free',
		),
	);
	foreach ( $default_posts as $post ) {
		// Check if the post already exists.
		$existing_post = get_page_by_path( $post['slug'], OBJECT, 'pricing-plan' );
		if ( ! $existing_post ) {
			$post_id = wp_insert_post(
				array(
					'post_title'     => $post['title'],
					'post_type'      => 'pricing-plan',
					'post_name'      => $post['slug'],
					'post_content'   => '',
					'comment_status' => 'closed',
					'ping_status'    => 'closed',
					'post_status'    => 'publish',
					'post_author'    => 1,
					'menu_order'     => 0,
				)
			);

			if ( 'Ultimate' == $post['title'] ) {
				$price_data_arr    = array(
					'Weekly'    => array( 'price' => 39.99 ),
					'Monthly'   => array( 'price' => 49.99 ),
					'Quarterly' => array( 'price' => 69.99 ),
					'Annually'  => array( 'price' => 99.99 ),
				);
				$features_data_arr = array(
					'ultimate' => array(
						'features' => array(
							'Workouts'                    => 1,
							'Progress Tracking'           => 1,
							'Nutritional Guidance'        => 1,
							'One-on-One Coaching'         => 1,
							'Priority Event Registration' => 1,
							'Bonus Workshops/Seminars'    => 1,
							'Personalized Support'        => 1,
						),
					),
				);
			}
			if ( 'Pro' == $post['title'] ) {
				$price_data_arr    = array(
					'Weekly'    => array( 'price' => 19.99 ),
					'Monthly'   => array( 'price' => 29.99 ),
					'Quarterly' => array( 'price' => 39.99 ),
					'Annually'  => array( 'price' => 49.99 ),
				);
				$features_data_arr = array(
					'pro' => array(
						'features' => array(
							'Workouts'                    => 1,
							'Progress Tracking'           => 1,
							'Nutritional Guidance'        => 1,
							'One-on-One Coaching'         => 1,
							'Priority Event Registration' => 1,
						),
					),
				);
			}
			if ( 'Free' == $post['title'] ) {
				$price_data_arr    = array(
					'Weekly'    => array( 'price' => '-' ),
					'Monthly'   => array( 'price' => '-' ),
					'Quarterly' => array( 'price' => '-' ),
					'Annually'  => array( 'price' => '-' ),
				);
				$features_data_arr = array(
					'free' => array(
						'features' => array(
							'Workouts' => 1,
						),
					),
				);
			}
			if ( 'Basic' == $post['title'] ) {
				$price_data_arr    = array(
					'Weekly'    => array( 'price' => 9.99 ),
					'Monthly'   => array( 'price' => 19.99 ),
					'Quarterly' => array( 'price' => 29.99 ),
					'Annually'  => array( 'price' => 39.99 ),
				);
				$features_data_arr = array(
					'basic' => array(
						'features' => array(
							'Workouts'             => 1,
							'Progress Tracking'    => 1,
							'Nutritional Guidance' => 1,
						),
					),
				);
			}

			update_post_meta( $post_id, 'endurance_pricing_plan_period', array( 'weekly', 'monthly', 'quarterly', 'annually' ) );
			update_post_meta( $post_id, 'endurance_pricing_plan_price', $price_data_arr );
			update_post_meta( $post_id, 'endurance_pricing_plan_features', $features_data_arr );
		}
	}
	/**
	 * Setup the site navigation
	 */
	$run_menu_maker_once = get_option( 'menu_check' );

	if ( ! $run_menu_maker_once ) {
		/**
		 * Header Menu
		 */
		$primary_menu_items          = array(
			'Home'       => 'home',
			'About Us'   => 'about-us',
			'Pricing'    => '#pricing',
			'Gallery'    => 'gallery',
			'Blogs'      => 'blogs',
			'Contact Us' => 'contact-us',
			'Pages'      => '#',
		);
		$primary_menu_items['Pages'] = array(
			'404'         => '404',
			'Coming Soon' => 'coming-soon',
			'Sitemap'     => 'sitemap',
		);
		generate_site_nav_menu( 'Primary Menu', $primary_menu_items, 'primary' );

		/**
		 * Site Map Menu
		 */
		$primary_menu_items          = array(
			'Home'       => 'home',
			'About Us'   => 'about-us',
			'Pricing'    => '#pricing',
			'Gallery'    => 'gallery',
			'Blogs'      => 'blogs',
			'Contact Us' => 'contact-us',
			'Pages'      => '#',
		);
		$primary_menu_items['Pages'] = array(
			'404'         => '404',
			'Coming Soon' => 'coming-soon',
			'Sitemap'     => 'sitemap',
		);
		generate_site_nav_menu( 'Primary Menu', $primary_menu_items, 'primary' );

		/**
		 * Footer
		 */
		$secondary_menu_items = array(
			'Home'        => 'home',
			'About Us'    => 'about-us',
			'Contact Us'  => 'contact-us',
			'Blogs'       => 'blogs',
			'Gallery'     => 'gallery',
			'Help Center' => 'help-center',
			'Sitemap'     => 'sitemap',
		);
		generate_site_nav_menu( 'Secondary', $secondary_menu_items, 'secondary' );

	}

	/**
	 * Add gallery images to the uploads folder
	 */

	$image_urls = array(
		get_template_directory_uri() . '/assets/images/gallery/gallery-1.webp',
		get_template_directory_uri() . '/assets/images/gallery/gallery-2.webp',
		get_template_directory_uri() . '/assets/images/gallery/gallery-3.webp',
		get_template_directory_uri() . '/assets/images/gallery/gallery-4.webp',
		get_template_directory_uri() . '/assets/images/gallery/gallery-5.webp',
		get_template_directory_uri() . '/assets/images/gallery/gallery-6.webp',
		get_template_directory_uri() . '/assets/images/gallery/gallery-7.webp',
		get_template_directory_uri() . '/assets/images/gallery/gallery-8.webp',
		get_template_directory_uri() . '/assets/images/gallery/gallery-9.webp',
	);

	$upload_dir     = wp_upload_dir();
	$attachment_ids = array();

	foreach ( $image_urls as $image_url ) {
		$image_data = file_get_contents( $image_url );

		$filename = basename( $image_url );

		if ( wp_mkdir_p( $upload_dir['path'] ) ) {
			$file = $upload_dir['path'] . '/' . $filename;
		} else {
			$file = $upload_dir['basedir'] . '/' . $filename;
		}

		file_put_contents( $file, $image_data );

		$wp_filetype = wp_check_filetype( $filename, null );

		$attachment = array(
			'post_mime_type' => $wp_filetype['type'],
			'post_title'     => sanitize_file_name( $filename ),
			'post_content'   => '',
			'post_status'    => 'inherit',
		);

		// Check if the file already exists in the media library.
		$attachment_id = attachment_url_to_postid( $upload_dir['url'] . '/' . $filename );
		if ( ! $attachment_id ) {
			$attachment_id = wp_insert_attachment( $attachment, $file );
			require_once ABSPATH . 'wp-admin/includes/image.php';
			$attach_data = wp_generate_attachment_metadata( $attachment_id, $file );

			// Remove unwanted sizes.
			unset( $attach_data['sizes']['thumbnail'] );
			unset( $attach_data['sizes']['medium'] );

			wp_update_attachment_metadata( $attachment_id, $attach_data );
			$attachment_ids[] = $attachment_id;
			update_option( 'endurance_gallery_images', $attachment_ids );
		}
	}
}
add_action( 'after_switch_theme', 'my_after_switch_theme' );

/**
 * Add Menu.
 */
function fallback_menu_pages() {

	$list_pages = '';
	$args       = array(
		'sort_order'   => 'asc',
		'sort_column'  => 'post_title',
		'hierarchical' => 1,
		'child_of'     => 5,
		'parent'       => -1,
		'offset'       => 0,
		'number'       => 5,
		'post_type'    => 'page',
		'post_status'  => 'publish',
	);
	$pages      = get_pages( $args );

	foreach ( $pages as $key => $page ) {
		$list_pages .= '<li><a href = "' . get_permalink( $page->ID ) . '">' . $page->post_title . '</a></li>';
	}

	echo $list_pages;
}


if ( current_user_can( 'manage_options' ) ) {
	get_template_part( 'admin/menu', 'panel' );
}


/**
 * Add WEBP Image Code.
 *
 * @param array $mimes Images.
 */
function add_webp_upload_mime( $mimes ) {
	$mimes['webp'] = 'image/webp';
	return $mimes;
}

add_filter( 'mime_types', 'add_webp_upload_mime' );

/**
 * Add WEBP Image Type.
 *
 * @param array  $result Images.
 *
 * @param string $path Images Link.
 */
function webp_is_displayable( $result, $path ) {
	if ( $result === false ) {
		$displayable_image_types = array( IMAGETYPE_WEBP );
		$info                    = @getimagesize( $path );
		if ( empty( $info ) ) {
			$result = false;
		} elseif ( ! in_array( $info[2], $displayabe_image_types ) ) {
			$result = false;
		} else {
			$result = true;
		}
	}
	return $result;
}

add_filter( 'file_is_displayable_image', 'webp_is_displayable', 10, 2 );

/**
 * Add Style File.
 */
function endurance_enqueue_dynamic_css() {
	// Include dynamic CSS file.
	require get_template_directory() . '/style.php';
}

add_action( 'wp_head', 'endurance_enqueue_dynamic_css' );

/**
 *
 * Creating a function to create our CPT.
 */
function endurance_custom_post_types() {

	// Meet our team CPT.
	$labels = array(
		'name'               => _x( 'Meet Our Team', 'Post Type General Name', 'endurance' ),
		'singular_name'      => _x( 'Meet Our Team', 'Post Type Singular Name', 'endurance' ),
		'menu_name'          => __( 'Meet Our Team', 'endurance' ),
		'parent_item_colon'  => __( 'Parent Team', 'endurance' ),
		'all_items'          => __( 'All Teams', 'endurance' ),
		'view_item'          => __( 'View Teams', 'endurance' ),
		'add_new_item'       => __( 'Add New Team', 'endurance' ),
		'add_new'            => __( 'Add New', 'endurance' ),
		'edit_item'          => __( 'Edit Team', 'endurance' ),
		'update_item'        => __( 'Update Team', 'endurance' ),
		'search_items'       => __( 'Search Team', 'endurance' ),
		'not_found'          => __( 'Not Found', 'endurance' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'endurance' ),
	);

	$args = array(
		'label'               => __( 'meet-our-team', 'endurance' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		'menu_icon'           => 'dashicons-groups',
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,

	);

	// Registering your Custom Post Type.
	register_post_type( 'meet-our-team', $args );

	// Pricing Plans CPT.
	$labels = array(
		'name'               => _x( 'Pricing Plan', 'Post Type General Name', 'endurance' ),
		'singular_name'      => _x( 'Pricing Plan', 'Post Type Singular Name', 'endurance' ),
		'menu_name'          => __( 'Pricing Plan', 'endurance' ),
		'parent_item_colon'  => __( 'Parent Plan', 'endurance' ),
		'all_items'          => __( 'All Plans', 'endurance' ),
		'view_item'          => __( 'View Plans', 'endurance' ),
		'add_new_item'       => __( 'Add New Plan', 'endurance' ),
		'add_new'            => __( 'Add New', 'endurance' ),
		'edit_item'          => __( 'Edit Plan', 'endurance' ),
		'update_item'        => __( 'Update Plan', 'endurance' ),
		'search_items'       => __( 'Search Plan', 'endurance' ),
		'not_found'          => __( 'Not Found', 'endurance' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'endurance' ),
	);

	$args = array(
		'label'               => __( 'pricing-plan', 'endurance' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		'menu_icon'           => 'dashicons-money-alt',
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,

	);

	// Registering your Custom Post Type.
	register_post_type( 'pricing-plan', $args );

	// Testimonials CPT.
	$labels = array(
		'name'               => _x( 'Testimonial Review', 'Post Type General Name', 'endurance' ),
		'singular_name'      => _x( 'Testimonial Review', 'Post Type Singular Name', 'endurance' ),
		'menu_name'          => __( 'Testimonial Review', 'endurance' ),
		'parent_item_colon'  => __( 'Parent Testimonial Review', 'endurance' ),
		'all_items'          => __( 'All Testimonial Reviews', 'endurance' ),
		'view_item'          => __( 'View Testimonial Review', 'endurance' ),
		'add_new_item'       => __( 'Add New Testimonial Review', 'endurance' ),
		'add_new'            => __( 'Add New', 'endurance' ),
		'edit_item'          => __( 'Edit Testimonial Review', 'endurance' ),
		'update_item'        => __( 'Update Testimonial Review', 'endurance' ),
		'search_items'       => __( 'Search Testimonial Review', 'endurance' ),
		'not_found'          => __( 'Not Found', 'endurance' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'endurance' ),
	);

	$args = array(
		'label'               => __( 'testimonial-reviews', 'endurance' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
		'menu_icon'           => 'dashicons-testimonial',
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,

	);

	// Registering your Custom Post Type.
	register_post_type( 'testimonial-reviews', $args );
}
add_action( 'init', 'endurance_custom_post_types' );

/**
 * Create Meta box Pricing Plan.
 */
function pricing_plan_meta_box() {
	add_meta_box( 'pricing_plan_metabox', 'Pricing Plan', 'display_pricing_plan_meta_box', 'pricing-plan' );
}
add_action( 'add_meta_boxes', 'pricing_plan_meta_box' );

/**
 * Pricing Plan Function.
 *
 * @param array $post Post name.
 */
function display_pricing_plan_meta_box( $post ) {
	wp_nonce_field( 'pricing_plan_nonce_action', 'pricing_plan_nonce' );

	$selected_plans             = get_post_meta( $post->ID, 'endurance_pricing_plan_period', true ) ?: array();
	$pricing_plan_data          = get_post_meta( $post->ID, 'endurance_pricing_plan_price', true ) ?: array();
	$pricing_plan_features_data = get_post_meta( $post->ID, 'endurance_pricing_plan_features', true ) ?: array();

	?>
	<div class="endurance_pricing_plan_period_div">
		<label>Select Pricing Plan:</label>
		<select name="endurance_pricing_plan_period[]" class="endurance_pricing_plan_period" multiple style="width: 100%;">
			<?php
			$plans = array( 'weekly', 'monthly', 'quarterly', 'annually' );
			foreach ( $plans as $plan ) {
				echo '<option value="' . esc_attr( $plan ) . '" selected>' . ucfirst( $plan ) . '</option>';
			}
			?>
		</select>
	</div>

	<div class="endurance_pricing_features_list_div">
		<h3>Features:</h3>
		<div class="features_list">
			<?php
			// Default features.
			$default_features = array(
				'Workouts'                    => 1,
				'Progress Tracking'           => 1,
				'Nutritional Guidance'        => 1,
				'One-on-One Coaching'         => 1,
				'Priority Event Registration' => 1,
				'Bonus Workshops/Seminars'    => 1,
				'Personalized Support'        => 1,
			);
			$features         = $pricing_plan_features_data[ $post->post_name ]['features'] ?? $default_features;
			foreach ( $features as $feature => $checked ) :
				?>
				<div class="feature-item">
					<label>
						<input type="checkbox" name="endurance_pricing_plan_features[<?php echo esc_attr( $post->post_name ); ?>][features][<?php echo esc_attr( $feature ); ?>]" <?php checked( $checked, true ); ?>>
						<?php echo esc_html( ucwords( str_replace( '_', ' ', $feature ) ) ); ?>
					</label>
				</div>
			<?php endforeach; ?>							
		</div>
		<br>
		<label>Add New Feature:</label>
		<input type="text" class="add-new-feature-input" data-plan="<?php echo esc_attr( $post->post_name ); ?>" placeholder="Enter feature name">
		<button type="button" class="add-feature-btn" data-plan="<?php echo esc_attr( $post->post_name ); ?>">Add</button>
	</div>

	<div class="accordion">
		<?php
		foreach ( $selected_plans as $plan ) :
			$plan = ucfirst( $plan );
			?>
			<div class="accordion-item">
				<div class="accordion-item-header"><?php echo esc_html( ucfirst( $plan ) ); ?></div>
				<div class="accordion-item-body">
					<div class="accordion-item-body-content">
						<label>Price:</label>
						<input type="number" name="endurance_pricing_plan_price[<?php echo esc_attr( $plan ); ?>][price]" value="<?php echo esc_attr( $pricing_plan_data[ $plan ]['price'] ?? '' ); ?>" min="0" required> / <?php echo esc_attr( $plan ); ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<?php
}

add_action( 'save_post', 'save_pricing_plan_meta_box_data', 10, 2 );

/**
 * Pricing Plan Auto Save.
 *
 * @param int $post_id Post ID.
 */
function save_pricing_plan_meta_box_data( $post_id ) {
	if ( ! isset( $_POST['pricing_plan_nonce'] ) || ! wp_verify_nonce( $_POST['pricing_plan_nonce'], 'pricing_plan_nonce_action' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( 'pricing-plan' !== get_post_type( $post_id ) ) {
		return;
	}

	$selected_plans = $_POST['endurance_pricing_plan_period'] ?? array();
	update_post_meta( $post_id, 'endurance_pricing_plan_period', $selected_plans );

	// Default features.
	$default_features = array(
		'Workouts'                    => 1,
		'Progress Tracking'           => 1,
		'Nutritional Guidance'        => 1,
		'One-on-One Coaching'         => 1,
		'Priority Event Registration' => 1,
		'Bonus Workshops/Seminars'    => 1,
		'Personalized Support'        => 1,
	);

	$pricing_plan_data          = array();
	$pricing_plan_features_data = array();

	if ( isset( $_POST['endurance_pricing_plan_price'] ) ) {
		foreach ( $_POST['endurance_pricing_plan_price'] as $plan => $data ) {
			// Prepare the pricing plan data.
			$pricing_plan_data[ $plan ] = array(
				'price' => floatval( $data['price'] ?? 0 ),
			);
		}

		foreach ( $_POST['endurance_pricing_plan_features'] as $plan => $data ) {
			// Start with the default features.
			$features_data = $default_features;

			// Add checked features from the submitted data.
			if ( isset( $data['features'] ) ) {
				foreach ( $data['features'] as $feature => $checked ) {
					if ( $checked ) {
						$features_data[ $feature ] = 1; // Add checked feature.
					}
				}
			}

			// Remove features explicitly marked as removed.
			if ( isset( $data['removed_features'] ) ) {
				$removed_features = json_decode( stripslashes( $data['removed_features'] ), true );
				if ( is_array( $removed_features ) ) {
					foreach ( $removed_features as $removed_feature ) {
						unset( $features_data[ $removed_feature ] ); // Remove feature.
					}
				}
			}
			$features_list = get_post_meta( $post_id, 'endurance_pricing_plan_features', true );
			if ( '' != $features_list ) {
				$features_data = array_diff( $data['features'], $features_data );
				foreach ( $features_data as $feature => $checked ) {
					if ( $checked ) {
						$features_data[ $feature ] = 1; // Add checked feature.
					}
				}
			}

			// Prepare the pricing plan features data.
			$pricing_plan_features_data[ strtolower( get_the_title( $post_id ) ) ] = array(
				'features' => $features_data,
			);
		}
	}

	update_post_meta( $post_id, 'endurance_pricing_plan_price', $pricing_plan_data );
	update_post_meta( $post_id, 'endurance_pricing_plan_features', $pricing_plan_features_data );
}


function endurance_allowed_tags() {

	$allowed_tags = array(
		'span' => array(
			'class' => array(),
			'title' => array(),
			'style' => array(),
		),
	);
	
	return $allowed_tags;
}