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

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menus(
	// 	array(
	// 		'menu-1' => esc_html__( 'Primary', 'endurance-by-gymfit' ),
	// 	)
	// );

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
	
	wp_dequeue_script( 'jquery');
	wp_enqueue_script( 'endurance-by-gymfit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'endurance-jquery-script', get_template_directory_uri() . '/assets/vendors/jquery/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'endurance-bootstrap-script', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'endurance-swiper-script', get_template_directory_uri() . '/assets/vendors/swiper/js/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'endurance-animation-script', get_template_directory_uri() . '/assets/vendors/animation/js/animation.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'endurance-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'endurance_by_gymfit_scripts' );

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
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/redux-framework/redux-framework.php';

//require get_template_directory() . '/redux-framework/sample/sample-config.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function generate_site_nav_menu_item($term_id, $title, $url, $parent_id = 0) {
    wp_update_nav_menu_item($term_id, 0, array(
        'menu-item-title'   => sprintf(__('%s', 'text_domain'), $title),
        'menu-item-url'     => home_url('/' . $url),
        'menu-item-status'  => 'publish',
        'menu-item-parent-id' => $parent_id, // Add parent ID here
    ));
}

function generate_site_nav_menu($menu_name, $menu_items_array, $location_target) {

    $menu_exists = wp_get_nav_menu_object( $menu_name );

    if( !$menu_exists){
        $menu_id = wp_create_nav_menu($menu_name);
    } else {
        $menu_id = $menu_exists->term_id;
    }
    
    $locations_arr = get_theme_mod( 'nav_menu_locations' );
    $locations_arr[$location_target] = $menu_id;
    set_theme_mod( 'nav_menu_locations', $locations_arr );

    foreach ($menu_items_array as $page_name => $page_location) {
        if (is_array($page_location)) {
            // It's a submenu
            $parent_menu_id = generate_site_nav_menu_item($menu_id, $page_name, '#', 0); // Create parent menu item (with a dummy URL)

            foreach ($page_location as $sub_page_name => $sub_page_location) {
                generate_site_nav_menu_item($menu_id, $sub_page_name, $sub_page_location, $parent_menu_id);
            }
        } else {
            // It's a top-level menu item
            generate_site_nav_menu_item($menu_id, $page_name, $page_location, 0);
        }
    }

    update_option('menu_check', true);
}


function my_after_setup_theme() {

    /**
     * Register Navigations
     */
    register_nav_menus( array(
        'primary'   => __('Primary', 'endurance'),
		'secondary' => __('Secondary', 'endurance')
    ) );   
   
}
add_action( 'after_setup_theme', 'my_after_setup_theme');




/**
 * Runs when user switches to your custom theme
 *
 */
function my_after_switch_theme() {
/**
 * Setup the site navigation
 */    
	$run_menu_maker_once = get_option('menu_check');

	if ( ! $run_menu_maker_once ){
		/**
		 * Header Menu
		 */    
		$primary_menu_items = array(
			'Home'  =>  'home',
			'About Us' =>  'about-us',       
			'Pricing'  =>  'pricing',
			'Gallery'   =>  'gallery',
			'Blogs'    =>  'blogs',
			'Contact Us'    =>  'contact-us',
			'Pages'    =>  array(
				'404'    =>  '404',
				'Coming Soon'    =>  'coming-soon',
				'Sitemap'    =>  'sitemap',
			),
		);
		generate_site_nav_menu( 'Primary Menu', $primary_menu_items, 'primary' );

		/**
         * Footer
         */
        $secondary_menu_items = array(
            'Home'  =>  'home',
            'About Us' =>  'about-us',         
            'Contact Us'    =>  'contact-us',
            'Blogs'    =>  'blogs',
			'Gallery'   =>  'gallery',
			'Help Center'   =>  'help-center',
			'Sitemap'    =>  'sitemap',
        );
        generate_site_nav_menu( 'Secondary', $secondary_menu_items, 'secondary' );
		
	}
}
add_action( 'after_switch_theme', 'my_after_switch_theme');


function fallback_menu_pages() {
   
    $list_pages = '';
    $args = array(
        'sort_order' => 'asc',
        'sort_column' => 'post_title',
        'hierarchical' => 1,
        'child_of' => 5,
        'parent' => -1,
        'offset' => 0,
        'number' => 5,
        'post_type' => 'page',
        'post_status' => 'publish'
    ); 
    $pages = get_pages( $args );
       
    foreach( $pages as $key => $page ){
        $list_pages .= '<li><a href = "' . get_permalink( $page->ID ) . '">' . $page->post_title . '</a></li>';
    }
   
    echo $list_pages;
   
}


if (current_user_can('manage_options')) {
    get_template_part('admin/menu', 'panel');
}



function add_webp_upload_mime( $mimes ) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

add_filter( 'mime_types', 'add_webp_upload_mime' );

function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );
        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayabe_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }
  return $result;
}

add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);