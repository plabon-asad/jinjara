<?php
/**
 * Plugin Name:			Vast Demo Import
 * Plugin URI:			https://vast.detheme.com
 * Description:			Import the Vast demo content, widgets and customizer settings with one click.
 * Version:				1.0.8
 * Author:				deTheme
 * Author URI:			https://detheme.com
 * Requires at least:	4.0.0
 * Tested up to:		4.9.1
 *
 * Text Domain: vast-demo-import
 * Domain Path: /languages/
 *
 * @package Vast_Demo_Import
 * @category Core
 * @author deTheme
 * @see This plugin is based on: https://github.com/proteusthemes/one-click-demo-import/
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

$theme = wp_get_theme();
if ( 'Vast' == $theme->name || 'Vast (Premium)' == $theme->name ){

function ocdi_import_files() {
	return array(
		array(
			'import_file_name'           => 'Coaching',
			'categories'                 => array( 'Coaching' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/coaching/vastcoaching.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/coaching/vastcoaching.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/coaching/vastcoaching.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/coaching/coaching.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/coaching',
		),
		array(
			'import_file_name'           => 'Personal Resume',
			'categories'                 => array( 'Personal Resume' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/personalresume/vastpersonalresume.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/personalresume/vastpersonalresume.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/personalresume/vastpersonalresume.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/personalresume/personalresume.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/personalresume',
		),
		array(
			'import_file_name'           => 'Baby Daycare',
			'categories'                 => array( 'Baby Daycare' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/babydaycare/vastbabydaycare.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/babydaycare/vastbabydaycare.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/babydaycare/vastbabydaycare.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/babydaycare/babydaycare.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/babydaycare',
		),
		array(
			'import_file_name'           => 'Politics',
			'categories'                 => array( 'Politics' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/politics/vastpolitics.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/politics/vastpolitics.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/politics/vastpolitics.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/politics/politics.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/politics',
		),
		array(
			'import_file_name'           => 'Fitness',
			'categories'                 => array( 'Fitness' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/fitness/vastfitness.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/fitness/vastfitness.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/fitness/vastfitness.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/fitness/fitness.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/fitness',
		),
		array(
			'import_file_name'           => 'Florist',
			'categories'                 => array( 'Florist' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/florist/vastflorist.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/florist/vastflorist.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/florist/vastflorist.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/florist/florist.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/florist',
		),
		array(
			'import_file_name'           => 'Bakery',
			'categories'                 => array( 'Bakery' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/bakery/vastbakery.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/bakery/vastbakery.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/bakery/vastbakery.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/bakery/bakery.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/bakery',
		),
		array(
			'import_file_name'           => 'Interior Design',
			'categories'                 => array( 'Interior Design' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/interiordesign/vastinteriordesign.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/interiordesign/vastinteriordesign.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/interiordesign/vastinteriordesign.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/interiordesign/interiordesign.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/interiordesign',
		),
		array(
			'import_file_name'           => 'Travel',
			'categories'                 => array( 'Travel' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/travel/vasttravel.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/travel/vasttravel.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/travel/vasttravel.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/travel/travel.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/travel',
		),
	  	array(
			'import_file_name'           => 'Business',
			'categories'                 => array( 'Business' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/business/vastbusiness.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/business/vastbusiness.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/business/vastbusiness.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/business/business.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/business',
  		),
  		array(
			'import_file_name'           => 'Restaurant',
			'categories'                 => array( 'Restaurant' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/restaurant/vastrestaurant.xml',
			'import_widget_file_url'     => 'http://demoimporter.vastthemes.com/restaurant/vastrestaurant.wie',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/restaurant/vastrestaurant.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/restaurant/restaurant.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/restaurant',
  		),
  		array(
			'import_file_name'           => 'Startup',
			'categories'                 => array( 'Startup' ),
			'import_file_url'            => 'http://demoimporter.vastthemes.com/startup/startup.xml',
			'import_customizer_file_url' => 'http://demoimporter.vastthemes.com/startup/startup.dat',
			'import_preview_image_url'   => 'http://demoimporter.vastthemes.com/startup/startup.jpg',
			'import_notice'              => __( 'Before you begin, make sure all the required plugins are activated.<br />No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.<br />Posts, pages, images, widgets, menus and other theme settings will get imported.<br />Please click on the Import button only once and wait, it can take a couple of minutes.', 'pt-ocdi' ),
			'preview_url'                => 'http://demo.vastthemes.com/startup',
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );

function vdi_after_import_setup() {
	$menus = wp_get_nav_menus(); // registered menus
	$locations['main_menu'] = $menus[0]->name;
	set_theme_mod('nav_menu_locations', $locations); // set menus to locations
	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'vdi_after_import_setup' );

function vdi_confirmation_dialog_options ( $options ) {
    return array_merge( $options, array(
        'width'       => 600,
        'dialogClass' => 'wp-dialog',
        'resizable'   => false,
        'height'      => 'auto',
        'modal'       => true,
    ) );
}
add_filter( 'pt-ocdi/confirmation_dialog_options', 'vdi_confirmation_dialog_options', 10, 1 );

function vdi_plugin_intro_text( $default_text ) {
	// Database reset url
	if ( is_plugin_active( 'wordpress-database-reset/wp-reset.php' ) ) {
		$plugin_link 	= admin_url( 'tools.php?page=database-reset' );
	} else {
		$plugin_link 	= admin_url( 'plugin-install.php?s=Wordpress+Database+Reset&tab=search' );
	}
    $default_text .= sprintf(esc_html__( 'Importing demo data allow you to quickly edit everything instead of creating content from scratch. It is recommended uploading sample data on a fresh WordPress install to prevent conflicts with your current content. You can use this plugin to reset your site if needed: %1$sWordpress Database Reset%2$s', 'ocean-extra' ),'<a href="'. $plugin_link .'" target="_blank">','</a>'
						);
    return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'vdi_plugin_intro_text' );
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

/**
 * Main plugin class with initialization tasks.
 */
class OCDI_Plugin {
	/**
	 * Constructor for this class.
	 */
	public function __construct() {
		/**
		 * Display admin error message if PHP version is older than 5.3.2.
		 * Otherwise execute the main plugin class.
		 */
		if ( version_compare( phpversion(), '5.3.2', '<' ) ) {
			add_action( 'admin_notices', array( $this, 'old_php_admin_error_notice' ) );
		}
		else {
			// Set plugin constants.
			$this->set_plugin_constants();

			// Composer autoloader.
			require_once PT_OCDI_PATH . 'vendor/autoload.php';

			// Instantiate the main plugin class *Singleton*.
			$pt_one_click_demo_import = OCDI\OneClickDemoImport::get_instance();

			// Register WP CLI commands
			if ( defined( 'WP_CLI' ) && WP_CLI ) {
				WP_CLI::add_command( 'ocdi list', array( 'OCDI\WPCLICommands', 'list_predefined' ) );
				WP_CLI::add_command( 'ocdi import', array( 'OCDI\WPCLICommands', 'import' ) );
			}
		}
	}


	/**
	 * Display an admin error notice when PHP is older the version 5.3.2.
	 * Hook it to the 'admin_notices' action.
	 */
	public function old_php_admin_error_notice() {
		$message = sprintf( esc_html__( 'The %2$sVast Demo Import%3$s plugin requires %2$sPHP 5.3.2+%3$s to run properly. Please contact your hosting company and ask them to update the PHP version of your site to at least PHP 5.3.2.%4$s Your current version of PHP: %2$s%1$s%3$s', 'pt-ocdi' ), phpversion(), '<strong>', '</strong>', '<br>' );

		printf( '<div class="notice notice-error"><p>%1$s</p></div>', wp_kses_post( $message ) );
	}


	/**
	 * Set plugin constants.
	 *
	 * Path/URL to root of this plugin, with trailing slash and plugin version.
	 */
	private function set_plugin_constants() {
		// Path/URL to root of this plugin, with trailing slash.
		if ( ! defined( 'PT_OCDI_PATH' ) ) {
			define( 'PT_OCDI_PATH', plugin_dir_path( __FILE__ ) );
		}
		if ( ! defined( 'PT_OCDI_URL' ) ) {
			define( 'PT_OCDI_URL', plugin_dir_url( __FILE__ ) );
		}

		// Action hook to set the plugin version constant.
		add_action( 'admin_init', array( $this, 'set_plugin_version_constant' ) );
	}


	/**
	 * Set plugin version constant -> PT_OCDI_VERSION.
	 */
	public function set_plugin_version_constant() {
		if ( ! defined( 'PT_OCDI_VERSION' ) ) {
			$plugin_data = get_plugin_data( __FILE__ );
			define( 'PT_OCDI_VERSION', $plugin_data['Version'] );
		}
	}
}

// Instantiate the plugin class.
$ocdi_plugin = new OCDI_Plugin();
}