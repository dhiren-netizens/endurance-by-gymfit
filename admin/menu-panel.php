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
	'admin_bar_icon'            => get_template_directory_uri() . '/assets/images/endurance_favicon.svg',

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
	'menu_icon'                 => '',

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

// Header Settings
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Header', 'endurance' ),
		'id'               => 'endurance_header',
		'desc'             => esc_html__( 'Header Options', 'endurance' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
		'fields'           => array(
            array(
                'id'       => 'endurance_header_menu',
                'type'     => 'select',
                'data'     => 'menus',
                'title'    => esc_html__( 'Header Menu', 'endurance' ),
                'desc'     => esc_html__( 'Select the header menu.', 'endurance' ),
            ),
			array(
				'id'           => 'endurance_header_logo',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Header Logo', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Upload Header Logo', 'endurance' ),
				'preview_size' => 'full',
			),
			array(
				'id'           => 'endurance_favicon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Favicon', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Upload Favicon', 'endurance' ),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'endurance_display_contact_btn',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Contact us button', 'endurance' ),
				'default'  => true,
			),
        ),
	)
);

// Footer Settings
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Footer', 'endurance' ),
		'id'               => 'endurance_footer',
		'desc'             => esc_html__( 'Footer Options', 'endurance' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
		'fields'           => array(
            array(
                'id'       => 'endurance_footer_menu',
                'type'     => 'select',
                'data'     => 'menus',
                'title'    => esc_html__( 'Footer Menu', 'endurance' ),
                'desc'     => esc_html__( 'Select the footer menu.', 'endurance' ),
            ),
			array(
				'id'           => 'endurance_footer_logo',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Footer Logo', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Upload Footer Logo', 'endurance' ),
				'preview_size' => 'full',
			),
			array(
				'id'       => 'endurance_copyright_content',
				'type'     => 'editor',
				'title'    => esc_html__( 'Copyright Text', 'endurance' ),
				'subtitle' => esc_html__( 'Enter your copyright text'),
			),
			array(
				'id'           => 'endurance_footer_bank_cards',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Bank Cards', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Upload Bank Cards', 'endurance' ),
				'preview_size' => 'full',
			),
			array(
				'id'              => 'endurance_social_profiles',
				'type'            => 'social_profiles',
				'title'           => esc_html__( 'Social Profiles', 'endurance' ),
				'subtitle'        => esc_html__( 'Click an icon to activate it, drag and drop to change the icon order.', 'endurance' ),
				'hide_widget_msg' => true,
			),
        ),
	)
);


// About Us Page Settings
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'About', 'endurance' ),
		'id'               => 'endurance_about_section',
		'desc'             => esc_html__( 'About Options', 'endurance' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
	),
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'About Us', 'endurance' ),
		'id'               => 'endurance_about_us',
		'desc'             => esc_html__( 'About  Options', 'endurance' ),
		'customizer_width' => '400px',
		'subsection' => true,
		'icon'             => 'el el-home',
		'fields'           => array(
			array(
				'id'           => 'endurance_about_us_first_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'About Us Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Upload About Us Image', 'endurance' ),
				'preview_size' => 'full',
				'default' => array(
					'url' => get_template_directory_uri() . '/assets/images/background/about-img.webp'
				),
			),
			array(
                'id'           => 'endurance_about_us_second_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'About Us Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Upload About Us Image', 'endurance' ),
				'preview_size' => 'full',
				'default' => array(
					'url' => get_template_directory_uri() . '/assets/images/white-logo.webp'
				),
            ),
			array(
                'id'           => 'endurance_about_us_third_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'About Us Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Upload About Us Image', 'endurance' ),
				'preview_size' => 'full',
            ),
			array(
				'id'       => 'about_us_heading',
				'type'     => 'editor',
				'title'    => esc_html__( 'About Us Heading', 'endurance' ),
				'subtitle' => esc_html__( 'Enter your Heading'),
				'default'  => 'About Us'
			),
			array(
			'id'       => 'about_us_Description',
				'type'     => 'editor',
				'title'    => esc_html__( 'About Us Description', 'endurance' ),
				'subtitle' => esc_html__( 'Enter your Description'),
				'default'  => 'Welcome to Endurance Unleashed, where we fuel the spirit of champions. Our mission is to equip you with the finest tools, gear, and resources to conquer your limits and achieve extraordinary feats. Embrace the thrill of pushing beyond boundaries, stay motivated through the toughest challenges, and track your progress as you embark on a relentless journey to greatness.'
			),
			
        ),
	)
);
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Stand Out ', 'endurance' ),
		'id'               => 'endurance_stand_out',
		'desc'             => esc_html__( 'Stand Out Options', 'endurance' ),
		'customizer_width' => '400px',
		'subsection' => true,
		'icon'             => 'el el-home',
		'fields'           => array(
			array(
		    	'id'           => 'endurance_stand_out_line',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Stand Out Line Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Upload Line Image', 'endurance' ),
				'preview_size' => 'full',
				'default' => array(
					'url' => get_template_directory_uri() . '/assets/images/background/line-pettern.svg'
				),
		    ),
		    array(
			    'id'       => 'stand_out_with',
				'type'     => 'editor',
				'title'    => esc_html__( 'Stand Out With', 'endurance' ),
				'subtitle' => esc_html__( 'Enter your Title'),
				'default'  => 'Stand Out With'
			),
			array(
			    'id'       => 'high_endurance',
				'type'     => 'editor',
				'title'    => esc_html__( 'High Endurance', 'endurance' ),
				'subtitle' => esc_html__( 'Enter your Title'),
				'default'  => 'High Endurance'
			),
			array(
			    'id'       => 'high_endurance_description',
				'type'     => 'editor',
				'title'    => esc_html__( 'Description', 'endurance' ),
				'subtitle' => esc_html__( 'Enter your Description'),
				'default'  => 'We are the ultimate destination for those seeking to push their boundaries, elevate their endurance, and achieve greatness.'
			),
			array(
				'id'       => 'stand_out_button',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Get Started Button', 'endurance' ),
				'default'  => true,
				'on'       => 'Enabled',
				'off'      => 'Disabled',
			),
			array(
			    'id'       => 'stand_out_button_text',
				'type'     => 'text',
				'required' => array( 'stand_out_button', '=', true ),
				'title'    => esc_html__( 'Button Text', 'endurance' ),
				'default'  => 'Get Started'
			),
			array(
			    'id'       => 'stand_out_button_url',
				'type'     => 'text',
				'required' => array( 'stand_out_button', '=', true ),
				'title'    => esc_html__( 'Button URL', 'endurance' ),
				'validate'  => 'url'
			),
			array(
				'id'           => 'stand_out_with_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Stand Out Image', 'endurance' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Upload Stnad Out Image', 'endurance' ),
				'preview_size' => 'full',
				'default' => array(
					'url' => get_template_directory_uri() . '/assets/images/background/stand-with-img-2.webp'
				),
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
	 * Custom function for the callback validation referenced above
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
