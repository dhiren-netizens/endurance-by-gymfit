<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: https://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'redux_demo';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = __DIR__ . DIRECTORY_SEPARATOR;

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

// Background Patterns Reader.
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();

if ( is_dir( $sample_patterns_path ) ) {
	$sample_patterns_dir = opendir( $sample_patterns_path );

	if ( $sample_patterns_dir ) {

		// phpcs:ignore Generic.CodeAnalysis.AssignmentInCondition.FoundInWhileCondition
		while ( false !== ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) ) {
			if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
				$name              = explode( '.', $sample_patterns_file );
				$name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
				$sample_patterns[] = array(
					'alt' => $name,
					'img' => $sample_patterns_url . $sample_patterns_file,
				);
			}
		}
	}
}

// Used to except HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
	'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL → Change these values as you need/desire.
$args = array(
	// This is where your data is stored in the database and also becomes your global variable name.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	// The text to appear in the admin menu.
	'menu_title'                => esc_html__( 'Endurance', 'endurance' ),

	// The text to appear on the page title.
	'page_title'                => esc_html__( 'Endurance By GymFit', 'endurance' ),

	// Disable to create your own Google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Icon for the admin bar menu.
	'admin_bar_icon'            => '',

	// Priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Sets a different name for your global variable other than the opt_name.
	'global_variable'           => $opt_name,

	// Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode'                  => true,

	// Enable basic customizer support.
	'customizer'                => true,

	// Allow the panel to open expanded.
	'open_expanded'             => false,

	// Disable the save warning when a user changes a field.
	'disable_save_warn'         => false,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => 4,

	// For a full list of options, visit: https://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => get_template_directory_uri() . '/assets/images/endurance_favicon.svg',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
	'page_slug'                 => $opt_name,

	// On load save the defaults to DB before user clicks save.
	'save_defaults'             => true,

	// Display the default value next to each field when not set to the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default.
	'default_mark'              => '*',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// Shows the Options Object for debugging purposes. Show be set to false before deploying.
	'show_options_object'       => true,

	// The time transients will expire when the 'database' arg is set.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts,
	// but stops the dynamic CSS from going to the page head.
	'output_tag'                => true,

	// Disable the footer credit of Redux. Please leave if you can help it.
	'footer_credit'             => '',

	// If you prefer not to use the CDN for ACE Editor.
	// You may download the Redux Vendor Support plugin to run locally or embed it in your code.
	'use_cdn'                   => true,

	// Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
	'admin_theme'               => 'wp',

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),

	// FUTURE → Not in use yet, but reserved or partially implemented.
	// Use at your own risk.
	// Possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',
	'network_admin'             => true,
	'search'                    => true,
);


// ADMIN BAR LINKS → Set up custom links in the admin bar menu as external items.
// PLEASE CHANGE THESE SETTINGS IN YOUR THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['admin_bar_links'][] = array(
	'id'    => 'redux-docs',
	'href'  => '//devs.redux.io/',
	'title' => __( 'Documentation', 'endurance' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-support',
	'href'  => '//github.com/ReduxFramework/redux-framework/issues',
	'title' => __( 'Support', 'endurance' ),
);

// SOCIAL ICONS → Set up custom links in the footer for quick links in your panel footer icons.
// PLEASE CHANGE THESE SETTINGS IN YOUR THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['share_icons'][] = array(
	'url'   => '//github.com/ReduxFramework/ReduxFramework',
	'title' => 'Visit us on GitHub',
	'icon'  => 'el el-github',
);
$args['share_icons'][] = array(
	'url'   => '//www.facebook.com/pages/Redux-Framework/243141545850368',
	'title' => 'Like us on Facebook',
	'icon'  => 'el el-facebook',
);
$args['share_icons'][] = array(
	'url'   => '//twitter.com/reduxframework',
	'title' => 'Follow us on Twitter',
	'icon'  => 'el el-twitter',
);
$args['share_icons'][] = array(
	'url'   => '//www.linkedin.com/company/redux-framework',
	'title' => 'Find us on LinkedIn',
	'icon'  => 'el el-linkedin',
);

// Panel Intro text → before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}

	// translators:  Panel opt_name.
	$args['intro_text'] = '<p>' . sprintf( esc_html__( 'Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: $%1$s', 'endurance' ), '<strong>' . $v . '</strong>' ) . '<p>';
} else {
	$args['intro_text'] = '<p>' . esc_html__( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'endurance' ) . '</p>';
}

// Add content after the form.
$args['footer_text'] = '<p>' . esc_html__( 'This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.', 'endurance' ) . '</p>';

Redux::set_args( $opt_name, $args );

$opt_name = 'redux_demo';

// Header Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Header', 'endurance' ),
		'id'               => 'endurance_header',
		'customizer_width' => '400px',
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'      => 'endurance_header_menu',
				'type'    => 'select',
				'data'    => 'menus',
				'title'   => esc_html__( 'Header Menu', 'endurance' ),
				'desc'    => esc_html__( 'Select the header menu.', 'endurance' ),
				'default' => get_nav_menu_locations()['primary'],
			),
			array(
				'id'           => 'endurance_header_logo',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Header Logo', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 130 x 20 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/logo.svg',
				),
			),
			array(
				'id'           => 'endurance_favicon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Favicon', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 32 x 32 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/favicon.svg',
				),
			),
			array(
				'id'      => 'endurance_display_contact_btn',
				'type'    => 'switch',
				'title'   => esc_html__( 'Display Contact us button', 'endurance' ),
				'default' => true,
			),
			array(
				'id'      => 'endurance_enable_top_to_btn',
				'type'    => 'switch',
				'title'   => esc_html__( 'Want to display Top To Button?', 'endurance' ),
				'default' => true,
				'on'      => 'Enabled',
				'off'     => 'Disabled',
			),
			array(
				'id'      => 'endurance_page_loader',
				'type'    => 'switch',
				'title'   => esc_html__( 'Want to display Page Loader?', 'endurance' ),
				'default' => true,
				'on'      => 'Enabled',
				'off'     => 'Disabled',
			),
			array(
				'id'           => 'endurance_page_loader_image',
				'type'         => 'media',
				'url'          => true,
				'required'     => array( 'endurance_page_loader', '=', true ),
				'title'        => esc_html__( 'Page Loader Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 150 x 150 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/transformation.webp',
				),
			),
		),
	)
);

// Footer Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Footer', 'endurance' ),
		'id'               => 'endurance_footer',
		'customizer_width' => '400px',
		'icon'             => 'el el-th',
		'fields'           => array(
			array(
				'id'      => 'endurance_footer_menu',
				'type'    => 'select',
				'data'    => 'menus',
				'title'   => esc_html__( 'Footer Menu', 'endurance' ),
				'desc'    => esc_html__( 'Select the footer menu.', 'endurance' ),
				'default' => get_nav_menu_locations()['secondary'],
			),
			array(
				'id'           => 'endurance_footer_logo',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Footer Logo', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 200 x 30 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/footer-logo.svg',
				),
			),
			array(
				'id'       => 'endurance_copyright_content',
				'type'     => 'editor',
				'title'    => esc_html__( 'Copyright Text', 'endurance' ),
				'subtitle' => esc_html__( 'Enter your copyright text' ),
				'default'  => 'Copyright © 2025. All rights reserved',
			),
			array(
				'id'           => 'endurance_footer_bank_cards',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Bank Cards', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 295 x 27 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/visa-card.svg',
				),
			),
			array(
				'id'              => 'endurance_social_profiles',
				'type'            => 'social_profiles',
				'title'           => esc_html__( 'Social Profiles', 'endurance' ),
				'subtitle'        => esc_html__( 'Click an icon to activate it, drag and drop to change the icon order.', 'endurance' ),
				'hide_widget_msg' => true,
				'icons'           => array(
					array(
						'id'         => 'facebook',
						'icon'       => 'fa-facebook',
						'enabled'    => true,
						'name'       => __( 'Facebook', 'endurance' ),
						'background' => '',
						'color'      => 'rgb(59, 89, 152)',
						'url'        => 'https://facebook.com',
						'validate'   => 'url',
					),
					array(
						'id'         => 'instagram',
						'icon'       => 'fa-instagram',
						'enabled'    => true,
						'name'       => __( 'Instagram', 'endurance' ),
						'background' => '',
						'color'      => 'rgb(160,57,162)',
						'url'        => 'https://instagram.com',
						'validate'   => 'url',
					),
					array(
						'id'         => 'twitter',
						'icon'       => 'fa-twitter',
						'enabled'    => true,
						'name'       => __( 'Twitter', 'endurance' ),
						'background' => '',
						'color'      => 'rgb(0, 0, 0)',
						'url'        => 'https://x.com',
						'validate'   => 'url',
					),
					array(
						'id'         => 'youtube',
						'icon'       => 'fa-youtube',
						'enabled'    => true,
						'name'       => __( 'Youtube', 'endurance' ),
						'background' => '',
						'color'      => 'rgb(229, 45, 39)',
						'url'        => 'https://youtube.com',
						'validate'   => 'url',
					),
					array(
						'id'         => 'linkedin',
						'icon'       => 'fa-linkedin',
						'enabled'    => true,
						'name'       => __( 'LinkedIn', 'endurance' ),
						'background' => '',
						'color'      => 'rgb(9, 118, 180)',
						'url'        => 'https://linkedin.com',
						'validate'   => 'url',
					),
				),
			),
		),
	)
);

// General Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'General', 'endurance' ),
		'id'               => 'endurance_general_settings',
		'customizer_width' => '400px',
		'icon'             => 'el el-wrench',
		'fields'           => array(
			array(
				'id'           => 'endurance_general_background_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Background Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 1600 x 821 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/strips.svg',
				),
			),
			array(
				'id'          => 'endurance_general_background_color1',
				'type'        => 'color',
				'title'       => esc_html__( 'Background Color 1', 'endurance' ),
				'default'     => '#234ee7',
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'          => 'endurance_general_background_color2',
				'type'        => 'color',
				'title'       => esc_html__( 'Background Color 2', 'endurance' ),
				'default'     => '#16cc3e',
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'           => 'endurance_general_pattern_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Pattern Image (Between the title)', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 133 x 50 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/line-pettern.svg',
				),
			),
			array(
				'id'           => 'endurance_general_articles_left_arrow_icon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Left Arrow Icon', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 24 x 24 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/arrow-left.svg',
				),
			),
			array(
				'id'           => 'endurance_general_articles_right_arrow_icon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Right Arrow Icon', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 24 x 24 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/arrow-right.svg',
				),
			),
			array(
				'id'     => 'endurance_general_tutorial_button',
				'type'   => 'section',
				'title'  => esc_html__( 'Watch Tutorial Button', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'      => 'endurance_general_tutorial_text',
				'type'    => 'text',
				'title'   => esc_html__( 'Tutorial Button Text', 'endurance' ),
				'default' => 'Watch Tutorial',
			),
			array(
				'id'           => 'endurance_general_tutorial_play_btn_icon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Watch Tutorial Play Button Icon', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 16 x 16 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/btn-arrow.svg',
				),
			),
			array(
				'id'     => 'endurance_general_tutorial_button_end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'     => 'endurance_general_gt_button',
				'type'   => 'section',
				'title'  => esc_html__( 'Get Started Button', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'      => 'endurance_general_gt_text',
				'type'    => 'text',
				'title'   => esc_html__( 'Button Text', 'endurance' ),
				'default' => 'Get Started',
			),
			array(
				'id'       => 'endurance_general_gt_link',
				'type'     => 'text',
				'validate' => 'url',
				'title'    => esc_html__( 'Button Link', 'endurance' ),
				'default'  => '#',
			),
			array(
				'id'     => 'endurance_general_gt_button_end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'     => 'endurance_general_articles_button',
				'type'   => 'section',
				'title'  => esc_html__( 'Read Our Articles', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'      => 'endurance_general_articles_title',
				'type'    => 'text',
				'title'   => esc_html__( 'Title', 'endurance' ),
				'default' => '<span>Read Our</span> Articles',
			),
			array(
				'id'       => 'endurance_general_articles_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'Unlock the secrets of endurance and elevate your performance with our insightful articles.',
			),
			array(
				'id'     => 'endurance_general_articles_button_end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'     => 'endurance_general_team_button',
				'type'   => 'section',
				'title'  => esc_html__( 'Meet Our Team', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'      => 'endurance_general_team_title',
				'type'    => 'text',
				'title'   => esc_html__( 'Title', 'endurance' ),
				'default' => 'Meet Our Team',
			),
			array(
				'id'     => 'endurance_general_team_button_end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'     => 'endurance_about_us_section',
				'title'  => esc_html__( 'About Us', 'endurance' ),
				'type'   => 'section',
				'indent' => true,
			),
			array(
				'id'           => 'endurance_general_about_us_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 427 x 635 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/about-img.webp',
				),
			),
			array(
				'id'           => 'endurance_general_about_us_logo_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Logo Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 648 x 96 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/white-logo.webp',
				),
			),
			array(
				'id'          => 'endurance_general_about_us_title',
				'type'        => 'text',
				'title'       => esc_html__( 'Title', 'endurance' ),
				'placeholder' => 'Enter your title ',
				'default'     => 'About Us',
			),
			array(
				'id'       => 'endurance_general_about_us_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'Welcome to Endurance Unleashed, where we fuel the spirit of champions. Our mission is to equip you with the finest tools, gear, and resources to conquer your limits and achieve extraordinary feats. Embrace the thrill of pushing beyond boundaries, stay motivated through the toughest challenges, and track your progress as you embark on a relentless journey to greatness.let\'s redefine the power of perseverance and triumph in the face of every obstacle. Unleash your full potential with Endurance.',
			),
			array(
				'id'     => 'endurance_testimonial',
				'type'   => 'section',
				'title'  => esc_html__( 'Our Happy Clients', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'      => 'endurance_testimonial_heading',
				'type'    => 'text',
				'title'   => esc_html__( 'Our Happy Clients', 'endurance' ),
				'default' => 'Our Happy Clients',
			),
			array(
				'id'           => 'endurance_general_gymfit_white_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'White Logo Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 593 x 544 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/client-pettern.svg',
				),
			),
			array(
				'id'           => 'endurance_general_person_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Person Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 357 x 585 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/clients/client-img.webp',
				),
			),
			array(
				'id'     => 'endurance_smart_app_Section',
				'title'  => esc_html__( 'Smart App Section', 'endurance' ),
				'type'   => 'section',
				'indent' => true,
			),
			array(
				'id'          => 'endurance_general_smart_app_title',
				'type'        => 'text',
				'title'       => esc_html__( 'Title', 'endurance' ),
				'placeholder' => 'Enter your title ',
				'default'     => 'Smart App For All',
			),
			array(
				'id'       => 'endurance_general_smart_app_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'We are the ultimate destination for those seeking to push their boundaries, elevate their endurance, and achieve greatness.',
			),
			array(
				'id'           => 'endurance_general_smart_app_download_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Download Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 204 x 60 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/cta-appstore-img.svg',
				),
			),
			array(
				'id'           => 'endurance_general_smart_app_mobile_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Mobile Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 832 x 498 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/cta-mockup.webp',
				),
			),
			array(
				'id'           => 'endurance_general_smart_app_line_background_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Line Background Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 1600 x 542 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/cta-line.svg',
				),
			),
			array(
				'id'             => 'endurance_general_smart_app_background_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Background Color', 'endurance' ),
				'gradient-type'  => 'radial',
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'gradient-type'  => 'radial',
					'from'           => '#05F6F9',
					'to'             => '#F907FC',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => 0,
					),
				),
			),
		),
	)
);

// Home Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Home', 'endurance' ),
		'id'               => 'endurance_home_section',
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
	),
);

// Banner Section - Home Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Banner Section', 'endurance' ),
		'id'               => 'endurance_banner_section',
		'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-website',
		'fields'           => array(
			array(
				'id'     => 'endurance_banner_data',
				'type'   => 'section',
				'title'  => esc_html__( 'Banner Section Text & Image', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'          => 'endurance_banner_title',
				'type'        => 'text',
				'title'       => esc_html__( 'Title', 'endurance' ),
				'placeholder' => array(
					'box1' => 'Enter your banner title 1',
					'box2' => 'Enter your banner title 2',
				),
				'data'        => array(
					'box1' => '',
					'box2' => '',
				),
				'default'     => array(
					'box1' => 'BE UNSTOPPABLE',
					'box2' => 'Embrace Endurance',
				),
			),
			array(
				'id'       => 'endurance_banner_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'We are the ultimate destination for those seeking to push their boundaries, elevate their endurance, and achieve greatness.',
			),
			array(
				'id'           => 'endurance_banner_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 1599 x 597 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/banner-img.webp',
				),
			),
			array(
				'id'           => 'endurance_banner_line_pattern_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Line Pattern Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 1600 x 451 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/banner-pettern.svg',
				),
			),
			array(
				'id'      => 'endurance_banner_members_text',
				'type'    => 'text',
				'title'   => esc_html__( 'Members Text', 'endurance' ),
				'default' => 'members',
			),
			array(
				'id'           => 'endurance_banner_members_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Members Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 132 x 54 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/members.webp',
				),
			),
			array(
				'id'     => 'endurance_banner_data_end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
		),
	)
);

// Gear Up For Success Section - Home Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Gear Up Section', 'endurance' ),
		'id'               => 'endurance_gear_up_section',
		'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-heart',
		'fields'           => array(
			array(
				'id'          => 'endurance_gear_up_heading',
				'type'        => 'text',
				'title'       => esc_html__( 'Heading', 'endurance' ),
				'placeholder' => 'Enter your title',
				'default'     => 'Gear Up for Success',
			),
			// Learn From the best.
			array(
				'id'     => 'endurance_gear_up_learn_data',
				'type'   => 'section',
				'title'  => esc_html__( 'Learn From The Best', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'           => 'endurance_gear_up_learn_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 424 x 496 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/success-1.webp',
				),
			),
			array(
				'id'          => 'endurance_gear_up_learn_title',
				'type'        => 'text',
				'title'       => esc_html__( 'Title', 'endurance' ),
				'placeholder' => 'Enter your title ',
				'default'     => 'Learn From The Best',
			),
			array(
				'id'       => 'endurance_gear_up_learn_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'Fuel your drive with unwavering motivation. Embrace the power of perseverance for endless possibilities.',
			),
			array(
				'id'             => 'endurance_gear_up_learn_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Gradient Color', 'endurance' ),
				'gradient-type'  => true,
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'from'           => '#16cc3e',
					'to'             => '#049023',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => 0,
					),
				),
			),
			array(
				'id'     => 'endurance_gear_up_learn_data_end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			// Track your progress.
			array(
				'id'     => 'endurance_gear_up_track_data',
				'type'   => 'section',
				'title'  => esc_html__( 'Track Your Progress', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'           => 'endurance_gear_up_track_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 80 x 80 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/success-icon.svg',
				),
			),
			array(
				'id'          => 'endurance_gear_up_track_title',
				'type'        => 'text',
				'title'       => esc_html__( 'Title', 'endurance' ),
				'placeholder' => 'Enter your title ',
				'default'     => 'Track Your Progress',
			),
			array(
				'id'             => 'endurance_gear_up_track_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Gradient Color', 'endurance' ),
				'gradient-type'  => true,
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'from'           => '#05f6f933',
					'to'             => '#f907fc33',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => 0,
					),
				),
			),
			array(
				'id'             => 'endurance_gear_up_track_title_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Title Gradient Color', 'endurance' ),
				'gradient-type'  => true,
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'from'           => '#05f6f9',
					'to'             => '#f907fc',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => -80,
					),
				),
			),
			array(
				'id'     => 'endurance_gear_up_track_data_end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			// Improve With Routine.
			array(
				'id'     => 'endurance_gear_up_improve_data',
				'type'   => 'section',
				'title'  => esc_html__( 'Improve With Routine', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'           => 'endurance_gear_up_improve_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 80 x 80 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/success-icon-2.svg',
				),
			),
			array(
				'id'          => 'endurance_gear_up_improve_title',
				'type'        => 'text',
				'title'       => esc_html__( 'Title', 'endurance' ),
				'placeholder' => 'Enter your title ',
				'default'     => 'Improve With Routine',
			),
			array(
				'id'             => 'endurance_gear_up_improve_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Gradient Color', 'endurance' ),
				'gradient-type'  => true,
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'from'           => '#16cc3e33',
					'to'             => '#04902333',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => 0,
					),
				),
			),
			array(
				'id'             => 'endurance_gear_up_improve_title_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Title Gradient Color', 'endurance' ),
				'gradient-type'  => true,
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'from'           => '#16cc3e',
					'to'             => '#049023',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => -80,
					),
				),
			),
			array(
				'id'     => 'endurance_gear_up_improve_data_end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
			// Stay Movtivated.
			array(
				'id'     => 'endurance_gear_up_motivated_data',
				'type'   => 'section',
				'title'  => esc_html__( 'Stay Movtivated', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'           => 'endurance_gear_up_motivated_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 424 x 496 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/success-2.webp',
				),
			),
			array(
				'id'          => 'endurance_gear_up_motivated_title',
				'type'        => 'text',
				'title'       => esc_html__( 'Title', 'endurance' ),
				'placeholder' => 'Enter your title ',
				'default'     => 'Stay Movtivated.',
			),
			array(
				'id'       => 'endurance_gear_up_motivated_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'Fuel your drive with unwavering motivation. Embrace the power of perseverance for endless possibilities.',
			),
			array(
				'id'             => 'endurance_gear_up_motivated_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Gradient Color', 'endurance' ),
				'gradient-type'  => true,
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'from'           => '#05f6f9',
					'to'             => '#f907fc',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => -80,
					),
				),
			),
			array(
				'id'     => 'endurance_gear_up_motivated_data_end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
		),
	)
);

// Marquee Notice Section - Home Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Marquee Notice Section', 'endurance' ),
		'id'               => 'endurance_marquee_notice_section',
		'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-idea',
		'fields'           => array(
			array(
				'id'             => 'endurance_marquee_notice_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Notice Slide Gradient Color', 'endurance' ),
				'gradient-type'  => true,
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'from'           => '#16cc3e',
					'to'             => '#234ee7',
					'gradient-angle' => '90',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => 0,
					),
				),
			),
			array(
				'id'           => 'endurance_marquee_notice_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Marquee Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 1005 x 31 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/marquee-icon.svg',
				),
			),
		),
	)
);

// Stand Out Section - Home Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Stand Out Section', 'endurance' ),
		'id'               => 'endurance_stand_out_section',
		'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-opensource',
		'fields'           => array(
			array(
				'id'     => 'endurance_stand_out_data',
				'type'   => 'section',
				'title'  => esc_html__( 'Stand Out Section Text & Image', 'endurance' ),
				'indent' => true, // Indent all options below until the next 'section' option is set.
			),
			array(
				'id'           => 'endurance_stand_out_line_pattern_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Line Pattern Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 1599 x 319 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/stand-with-pettern.svg',
				),
			),
			array(
				'id'          => 'endurance_stand_out_title',
				'type'        => 'text',
				'title'       => esc_html__( 'Title', 'endurance' ),
				'placeholder' => array(
					'box1' => 'Enter your stand out title 1',
					'box2' => 'Enter your stand out title 2',
				),
				'data'        => array(
					'box1' => '',
					'box2' => '',
				),
				'default'     => array(
					'box1' => 'Stand out with',
					'box2' => 'High Endurance',
				),
			),
			array(
				'id'      => 'endurance_stand_out_subtitle',
				'type'    => 'text',
				'title'   => esc_html__( 'Sub Title', 'endurance' ),
				'default' => 'Defy The Limits',
			),
			array(
				'id'       => 'endurance_stand_out_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'We are the ultimate destination for those seeking to push their boundaries, elevate their endurance, and achieve greatness.',
			),
			array(
				'id'           => 'endurance_stand_out_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 1092 x 467 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/stand-with-img.webp',
				),
			),
			array(
				'id'     => 'endurance_stand_out_end',
				'type'   => 'section',
				'indent' => false, // Indent all options below until the next 'section' option is set.
			),
		),
	)
);

// Special Addons Section - Home Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Special Addons Section', 'endurance' ),
		'id'               => 'endurance_special_addons_section',
		'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-puzzle',
		'fields'           => array(
			array(
				'id'      => 'endurance_special_addons_section_heading',
				'type'    => 'text',
				'title'   => esc_html__( 'Heading', 'endurance' ),
				'default' => 'Special Addons',
			),
			array(
				'id'           => 'endurance_special_addons_section_background_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Background Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 1600 x 542 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/special-line.svg',
				),
			),

			array(
				'id'       => 'endurance_special_addons_box1_data',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Special Addons Box 1', 'endurance' ),
				'position' => 'start',
			),
			array(
				'id'      => 'endurance_special_addons_box1_title',
				'type'    => 'text',
				'title'   => esc_html__( 'Title', 'endurance' ),
				'default' => 'Workouts & Training',
			),
			array(
				'id'       => 'endurance_special_addons_box1_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'We focus on building cardiovascular endurance, muscular stamina, and mental resilience, enabling athletes and fitness enthusiasts to sustain physical effort over extended periods.',
			),
			array(
				'id'      => 'endurance_special_addons_box1_hashtag_title',
				'type'    => 'text',
				'title'   => esc_html__( 'HashTag Title', 'endurance' ),
				'default' => '#EndureDrills',
			),
			array(
				'id'           => 'endurance_special_addons_box1_pattern_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Pattern Image for Box', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 535 x 585 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/special-pettern.svg',
				),
			),
			array(
				'id'           => 'endurance_special_addons_box1_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 536 x 316 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/special-1.webp',
				),
			),
			array(
				'id'             => 'endurance_special_addons_box1_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Gradient Color', 'endurance' ),
				'gradient-type'  => true,
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'from'           => '#05f6f9',
					'to'             => '#f907fc',
					'gradient-angle' => '180',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => -80,
					),
				),
			),
			array(
				'id'       => 'endurance_special_addons_box1_data_end',
				'type'     => 'accordion',
				'position' => 'end',
			),
			array(
				'id'       => 'endurance_special_addons_box2_data',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Special Addons Box 2', 'endurance' ),
				'position' => 'start',
				'open'     => false,
			),
			array(
				'id'      => 'endurance_special_addons_box2_title',
				'type'    => 'text',
				'title'   => esc_html__( 'Title', 'endurance' ),
				'default' => 'Workouts & Training',
			),
			array(
				'id'       => 'endurance_special_addons_box2_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'We focus on building cardiovascular endurance, muscular stamina, and mental resilience, enabling athletes and fitness enthusiasts to sustain physical effort over extended periods.',
			),
			array(
				'id'      => 'endurance_special_addons_box2_hashtag_title',
				'type'    => 'text',
				'title'   => esc_html__( 'HashTag Title', 'endurance' ),
				'default' => '#EndureDrills',
			),
			array(
				'id'           => 'endurance_special_addons_box2_pattern_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Pattern Image for Box2', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 572 x 585 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/special-pettern-2.svg',
				),
			),
			array(
				'id'           => 'endurance_special_addons_box2_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 481 x 346 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/special-2.webp',
				),
			),
			array(
				'id'             => 'endurance_special_addons_box2_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Gradient Color', 'endurance' ),
				'gradient-type'  => true,
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'from'           => '#16cc3e',
					'to'             => '#049023',
					'gradient-angle' => '180',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => 0,
					),
				),
			),
			array(
				'id'       => 'endurance_special_addons_box2_data_end',
				'type'     => 'accordion',
				'position' => 'end',
			),
		),
	)
);

// Pricing Plan Section - Home Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Pricing Plan Section', 'endurance' ),
		'id'               => 'endurance_pricing_plan_section',
		'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-eur',
		'fields'           => array(
			array(
				'id'           => 'endurance_pricing_plan_background_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Background Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 1600 x 787 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/pricing-paper-texture.webp',
				),
			),
			array(
				'id'      => 'endurance_pricing_plan_section_heading',
				'type'    => 'text',
				'title'   => esc_html__( 'Heading', 'endurance' ),
				'default' => 'Pricing Plan',
			),
			array(
				'id'          => 'endurance_pricing_plan_background_color',
				'type'        => 'color',
				'title'       => esc_html__( 'Price Background Color', 'endurance' ),
				'default'     => '#ebeffc',
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'           => 'endurance_pricing_plan_features_available_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Features Available Image (For specific plan)', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 30 x 30 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/pricing-icon.svg',
				),
			),
			array(
				'id'           => 'endurance_pricing_plan_features_not_available_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Features Not Available Image (For specific plan)', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => wp_kses( '<strong>Recommended Size: 30 x 30 px</strong>', endurance_allowed_tags() ),
				'preview_size' => 'full',
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/pricing-icon-2.svg',
				),
			),
			array(
				'id'             => 'endurance_features_background_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Features Background Color', 'endurance' ),
				'gradient-type'  => 'radial',
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'gradient-type'  => 'radial',
					'from'           => '#05F6F9',
					'to'             => '#F907FC',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => -80,
					),
				),
			),
			array(
				'id'      => 'endurance_sign_up_text',
				'type'    => 'text',
				'title'   => esc_html__( 'Button Text', 'endurance' ),
				'default' => 'Sign Up',
			),
			array(
				'id'       => 'endurance_sign_up_link',
				'type'     => 'text',
				'validate' => 'url',
				'title'    => esc_html__( 'Button Link', 'endurance' ),
				'default'  => '#',
			),
			array(
				'id'             => 'endurance_sign_up_background_color',
				'type'           => 'color_gradient',
				'title'          => esc_html__( 'Button Background Color', 'endurance' ),
				'gradient-type'  => 'linear',
				'gradient-reach' => true,
				'gradient-angle' => true,
				'preview'        => true,
				'default'        => array(
					'gradient-type'  => 'linear',
					'from'           => '#05F6F9',
					'to'             => '#F907FC',
					'gradient-reach' => array(
						'to'   => 100,
						'from' => -80,
					),
				),
			),
		),
	)
);

// About Us Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'About Us', 'endurance' ),
		'id'               => 'endurance_about_section',
		'desc'             => esc_html__( 'About Options', 'endurance' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-adult',
	),
);

// Stand Out section - About Us Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Stand Out Section', 'endurance' ),
		'id'               => 'endurance_stand_out_settings',
		'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-hand-up',
		'fields'           => array(
			array(
				'id'          => 'endurance_stand_out_with_title',
				'type'        => 'text',
				'title'       => esc_html__( 'Heading', 'endurance' ),
				'placeholder' => array(
					'box1' => 'Enter your title 1',
					'box2' => 'Enter your title 2',
				),
				'data'        => array(
					'box1' => '',
					'box2' => '',
				),
				'default'     => array(
					'box1' => 'Stand Out With',
					'box2' => 'High Endurance',
				),
			),
			array(
				'id'       => 'endurance_stand_out_with_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'We are the ultimate destination for those seeking to push their boundaries, elevate their endurance, and achieve greatness.',
			),
			array(
				'id'           => 'endurance_stand_out_with_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 1067 x 517 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/stand-with-img-2.webp',
				),
			),
			array(
				'id'           => 'endurance_stand_out_with_pattern',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Background Image Pattern', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 1599 x 319 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/stand-with-pettern.svg',
				),
			),
		),
	),
);
// Our Mission section - About Us Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Our Mission Section', 'endurance' ),
		'id'               => 'endurance_our_mission_settings',
		'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-idea',
		'fields'           => array(
			array(
				'id'           => 'endurance_our_mission_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Image', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 761 x 571 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/mission-img.webp',
				),
			),
			array(
				'id'      => 'endurance_our_mission_heading',
				'type'    => 'text',
				'title'   => esc_html__( 'Heading', 'endurance' ),
				'default' => 'Our Mission',
			),
			array(
				'id'       => 'endurance_our_mission_description',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'validate' => 'no_html',
				'default'  => 'We believe in the power of pushing boundaries, staying motivated through challenges, and tracking your progress as you embark on an unwavering journey to greatness.',
			),
		),
	),
);

// Gallery Page Settings.
$gallery_images_ids = get_option( 'endurance_gallery_images' );
if ( is_array( $gallery_images_ids ) && ! empty( $gallery_images_ids ) ) {
	$gallery_images_ids = implode( ',', $gallery_images_ids );
} else {
	$gallery_images_ids = '';
}
$gallery_images = $gallery_images_ids;
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Gallery', 'endurance' ),
		'id'               => 'endurance_gallery_page_settings',
		'customizer_width' => '400px',
		'icon'             => 'el el-picture',
		'fields'           => array(
			array(
				'id'      => 'endurance_gallery_images',
				'type'    => 'gallery',
				'title'   => esc_html__( 'Add/Edit Gallery Images', 'endurance' ),
				'desc'    => esc_html__( 'Upload Images', 'endurance' ),
				'desc'    => wp_kses( '<strong>Recommended Size: 424 x 424 px</strong>', endurance_allowed_tags() ),
				'default' => $gallery_images,
			),
		),
	)
);

// Contact Us Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Contact Us', 'endurance' ),
		'id'               => 'endurance_contact_us_section',
		'customizer_width' => '400px',
		'icon'             => 'el el-envelope',
		'fields'           => array(
			array(
				'id'           => 'endurance_contact_us_bg_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Background Image', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 1600 x 361 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/contact-lines.svg',
				),
			),
			array(
				'id'      => 'endurance_contact_us_heading',
				'type'    => 'text',
				'title'   => esc_html__( 'Heading', 'endurance' ),
				'default' => 'Write Us',
			),
			array(
				'id'           => 'endurance_contact_us_location_geocode',
				'type'         => 'google_maps',
				'title'        => esc_html__( 'Google Maps', 'endurance' ),
				'subtitle'     => esc_html__( 'This map is set using only latitude and longitude with a zoom factor of 7.  When setting a Google map using lat/long, address information will not be returned.', 'endurance' ),
				'full_width'   => true,
				'show_api_key' => true,
				'default'      => array(
					'latitude'  => 38.8976758,
					'longitude' => - 77.03648229999999,
					'zoom'      => 7,
				),
			),
		),
	),
);

// Contact Information section - Contact Us Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Conatct Information Section', 'endurance' ),
		'id'               => 'endurance_conatct_info_settings',
		'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-info-circle',
		'fields'           => array(
			array(
				'id'      => 'endurance_conatct_info_call_us_heading',
				'type'    => 'text',
				'title'   => esc_html__( 'Call Us Heading', 'endurance' ),
				'default' => 'Call Us',
			),
			array(
				'id'         => 'sc-contct-form',
				'title'      => esc_html__( 'Add Shortcode Contact Form 7', 'endurance' ),
				'type'       => 'text',
				'full_width' => false,
				'default'    => '[contact-form-7 id="dbd37a3" title="Contact form 1"]',  
			),						
			array(
				'id'           => 'endurance_conatct_info_call_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Call Us Icon', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 36 x 36 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/call.svg',
				),
			),
			array(
				'id'      => 'endurance_conatct_info_mail_heading',
				'type'    => 'text',
				'title'   => esc_html__( 'E-mail Heading', 'endurance' ),
				'default' => 'Email',
			),
			array(
				'id'           => 'endurance_conatct_info_mail_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'E-mail Icon', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 36 x 36 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/mail.svg',
				),
			),
			array(
				'id'      => 'endurance_conatct_info_call_details',
				'type'    => 'text',
				'title'   => esc_html__( 'Call Details', 'endurance' ),
				'data'    => array(
					'box1' => '',
					'box2' => '',
					'box3' => '',
					'box4' => '',
				),
				'default' => array(
					'box1' => 'Business Inquiry',
					'box2' => '12567852551',
					'box3' => 'Customer Support',
					'box4' => '12567852551',
				),
			),
			array(
				'id'      => 'endurance_conatct_info_email_details',
				'type'    => 'text',
				'title'   => esc_html__( 'Email Details', 'endurance' ),
				'data'    => array(
					'box1' => '',
					'box2' => '',
					'box3' => '',
					'box4' => '',
				),
				'default' => array(
					'box1' => 'Business Inquiry',
					'box2' => 'businessinfo@gymfit.email',
					'box3' => 'Customer Support',
					'box4' => 'customer@gymfit.email',
				),
			),
		),
	)
);

// Coming Soon Page Settingss.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Coming Soon', 'endurance' ),
		'id'               => 'endurance_coming_soon_settings',
		'customizer_width' => '400px',
		'icon'             => 'el el-check-empty',
		'fields'           => array(
			array(
				'id'      => 'endurance_coming_soon_heading',
				'type'    => 'text',
				'title'   => esc_html__( 'Heading', 'endurance' ),
				'default' => 'Coming Soon',
			),
			array(
				'id'         => 'sc-comin-soon-form',
				'title'      => esc_html__( 'Add Shortcode Contact Form 7', 'endurance' ),
				'type'       => 'text',
				'full_width' => false,
				'default'    => '[contact-form-7 id="48039da" title="Join Waiting List"]',  
			array(
				'id'           => 'endurance_coming_soon_date_time',
				'type'         => 'datetime',
				'title'        => esc_html__( 'Date & Time', 'endurance' ),
				'split'        => false,
				'control-type' => 'slider',
				'separator'    => ' @ ',
				'default'      => '06-01-2025 @ 12:00 AM +0000',
			),
			array(
				'id'           => 'endurance_coming_soon_star_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Star Image', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 24 x 24 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/icon/star-icon.svg',
				),
			),
			array(
				'id'           => 'endurance_coming_soon_bg1_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Background Image', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 338 x 394 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/error-img-1.webp',
				),
			),
			array(
				'id'           => 'endurance_coming_soon_bg2_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Background Image', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 322 x 324 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/error-img-2.webp',
				),
			),
			array(
				'id'      => 'endurance_coming_soon_waiting_heading',
				'type'    => 'text',
				'title'   => esc_html__( 'Join Waiting List Heading', 'endurance' ),
				'default' => 'Join Waiting List',
			),
			array(
				'id'      => 'endurance_coming_soon_waiting_description',
				'type'    => 'text',
				'title'   => esc_html__( 'Join Waiting List Description', 'endurance' ),
				'default' => 'You’ll get instant notification through mail',
			),
		),
	),
);

// 404 Page Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( '404 Page', 'endurance' ),
		'id'               => 'endurance_404_page',
		'customizer_width' => '400px',
		'icon'             => 'el el-error',
		'fields'           => array(
			array(
				'id'      => 'endurance_404_description',
				'type'    => 'text',
				'title'   => esc_html__( 'Description', 'endurance' ),
				'default' => 'The page you’re looking for is exercising so try again or...',
			),
			array(
				'id'           => 'endurance_404_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( '404 Image', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 642 x 280 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/error-img.webp',
				),
			),
			array(
				'id'           => 'endurance_404_line_bg_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( '404 Background Line Image', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 1600 x 772 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/error-page-lines.svg',
				),
			),
			array(
				'id'           => 'endurance_404_background_image1',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( '404 Background Image 1', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 338 x 394 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/error-img-1.webp',
				),
			),
			array(
				'id'           => 'endurance_404_background_image2',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( '404 Background Image 2', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 322 x 324 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/error-img-2.webp',
				),
			),
			array(
				'id'      => 'endurance_back_home',
				'type'    => 'text',
				'title'   => esc_html__( 'Back To Home Text', 'endurance' ),
				'default' => 'Back To Home',
			),
			array(
				'id'       => 'endurance_back_to_home_link',
				'type'     => 'text',
				'validate' => 'url',
				'title'    => esc_html__( 'Back To Home Button Link', 'endurance' ),
				'default'  => '#',
			),
		),
	),
);

// Site Map Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Site Map', 'endurance' ),
		'id'               => 'endurance_site_map_section',
		'customizer_width' => '400px',
		'icon'             => 'el el-network',
		'fields'           => array(
			array(
				'id'           => 'endurance_site_map_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Site Map Image', 'endurance' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'desc'         => wp_kses( '<strong>Recommended Size: 747 x 572 px</strong>', endurance_allowed_tags() ),
				'default'      => array(
					'url' => get_template_directory_uri() . '/assets/images/background/sitemap-img.webp',
				),
			),
		),
	),
);

// Post Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Blog', 'endurance' ),
		'id'               => 'endurance_blog_section',
		'customizer_width' => '400px',
		'icon'             => 'el el-adult',
	),
);



// Single Blog section - Blog Settings.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Single Blog', 'endurance' ),
		'id'               => 'endurance_display_post',
		'customizer_width' => '400px',
		'subsection'       => true,
		'icon'             => 'el el-tags',
		'fields'           => array(
			array(
				'id'      => 'endurance_display_categories',
				'type'    => 'switch',
				'title'   => esc_html__( 'Want to display Categories?', 'endurance' ),
				'default' => true,
				'on'      => 'Yes',
				'off'     => 'No',
			),
			array(
				'id'      => 'endurance_display_tags',
				'type'    => 'switch',
				'title'   => esc_html__( 'Want to display Tags?', 'endurance' ),
				'default' => true,
				'on'      => 'Yes',
				'off'     => 'No',
			),
			array(
				'id'      => 'endurance_display_author',
				'type'    => 'switch',
				'title'   => esc_html__( 'Want to display Author Name?', 'endurance' ),
				'default' => true,
				'on'      => 'Yes',
				'off'     => 'No',
			),
			array(
				'id'      => 'endurance_display_comment_count',
				'type'    => 'switch',
				'title'   => esc_html__( 'Want to display Comment Count?', 'endurance' ),
				'default' => true,
				'on'      => 'Yes',
				'off'     => 'No',
			),
			array(
				'id'      => 'endurance_display_date',
				'type'    => 'switch',
				'title'   => esc_html__( 'Want to display Date?', 'endurance' ),
				'default' => true,
				'on'      => 'Yes',
				'off'     => 'No',
			),
			array(
				'id'      => 'endurance_pre_text',
				'type'    => 'text',
				'title'   => esc_html__( 'Previous Text', 'endurance' ),
				'default' => 'Previous',
			),
			array(
				'id'      => 'endurance_next_text',
				'type'    => 'text',
				'title'   => esc_html__( 'Next Text', 'endurance' ),
				'default' => 'Next',
			),
			array(
				'id'      => 'endurance_comment_title',
				'type'    => 'text',
				'title'   => esc_html__( 'Comment Title', 'endurance' ),
				'default' => 'Comment',
			),
			array(
				'id'      => 'endurance_leave_comment',
				'type'    => 'text',
				'title'   => esc_html__( 'Leave a comment', 'endurance' ),
				'default' => 'Leave a comment',
			),
		),
	),
);


if ( ! function_exists( 'compiler_action' ) ) {
	/**
	 * This is a test function that will let you see when the compiler hook occurs.
	 * It only runs if a field's value has changed and compiler => true is set.
	 *
	 * @param array  $options        Options values.
	 * @param string $css            Compiler selector CSS values  compiler => array( CSS SELECTORS ).
	 * @param array  $changed_values Any values that have changed since last save.
	 */
	function compiler_action( array $options, string $css, array $changed_values ) {
		echo '<h1>The compiler hook has run!</h1>';
		echo '<pre>';
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions
		print_r( $changed_values ); // Values that have changed since the last save.
		// echo '<br/>';
		// print_r($options); //Option values.
		// echo '<br/>';
		// print_r($css); // Compiler selector CSS values compiler => array( CSS SELECTORS ).
		echo '</pre>';
	}
}

if ( ! function_exists( 'redux_validate_callback_function' ) ) {
	/**
	 * Custom function for the callback validation referenced above.
	 *
	 * @param array $field          Field array.
	 * @param mixed $value          New value.
	 * @param mixed $existing_value Existing value.
	 *
	 * @return array
	 */
	function redux_validate_callback_function( array $field, $value, $existing_value ): array {
		$error   = false;
		$warning = false;

		// Do your validation.
		if ( 1 === (int) $value ) {
			$error = true;
			$value = $existing_value;
		} elseif ( 2 === (int) $value ) {
			$warning = true;
			$value   = $existing_value;
		}

		$return['value'] = $value;

		if ( true === $error ) {
			$field['msg']    = 'your custom error message';
			$return['error'] = $field;
		}

		if ( true === $warning ) {
			$field['msg']      = 'your custom warning message';
			$return['warning'] = $field;
		}

		return $return;
	}
}


if ( ! function_exists( 'dynamic_section' ) ) {
	/**
	 * Custom function for filtering the section array.
	 * Good for child themes to override or add to the sections.
	 * Simply include this function in the child themes functions.php file.
	 * NOTE: the defined constants for URLs and directories will NOT be available at this point in a child theme,
	 * so you must use get_template_directory_uri() if you want to use any of the built-in icons.
	 *
	 * @param array $sections Section array.
	 *
	 * @return array
	 */
	function dynamic_section( array $sections ): array {
		$sections[] = array(
			'title'  => esc_html__( 'Section via hook', 'endurance' ),
			'desc'   => '<p class="description">' . esc_html__( 'This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.', 'endurance' ) . '</p>',
			'icon'   => 'el el-paper-clip',

			// Leave this as a blank section, no options just some intro text set above.
			'fields' => array(),
		);

		return $sections;
	}
}

if ( ! function_exists( 'change_arguments' ) ) {
	/**
	 * Filter hook for filtering the args.
	 * Good for child themes to override or add to the args array.
	 * It can also be used in other functions.
	 *
	 * @param array $args Global arguments array.
	 *
	 * @return array
	 */
	function change_arguments( array $args ): array {
		$args['dev_mode'] = true;

		return $args;
	}
}

if ( ! function_exists( 'change_defaults' ) ) {
	/**
	 * Filter hook for filtering the default value of any given field. Very useful in development mode.
	 *
	 * @param array $defaults Default value array.
	 *
	 * @return array
	 */
	function change_defaults( array $defaults ): array {
		$defaults['str_replace'] = esc_html__( 'Testing filter hook!', 'endurance' );

		return $defaults;
	}
}

if ( ! function_exists( 'redux_custom_sanitize' ) ) {
	/**
	 * Function to be used if the field sanitizes argument.
	 * Return value MUST be formatted or cleaned text to display.
	 *
	 * @param string $value Value to evaluate or clean.  Required.
	 *
	 * @return string
	 */
	function redux_custom_sanitize( string $value ): string {
		$return = '';

		foreach ( explode( ' ', $value ) as $w ) {
			foreach ( str_split( $w ) as $k => $v ) {
				if ( ( $k + 1 ) % 2 !== 0 && ctype_alpha( $v ) ) {
					$return .= mb_strtoupper( $v );
				} else {
					$return .= $v;
				}
			}

			$return .= ' ';
		}

		return $return;
	}
}
