<?php
/*
Plugin Name: Kasidy
Plugin URI: http://www.jimfloss.com/contact
Description: A base WordPress Plugin used to extend the capabilities of any WordPress Theme.
Author: Jim
Version: 1.0.0
Author URI: http://www.jimfloss.com
*/

defined('ABSPATH') or die();
define('PLUGIN_NAME', "Kasidy");
define('PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define('PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define('SHORTCODE_DIRECTORY', PLUGIN_PATH.'inc/modules/' );

function kas_scripts() {
	
	//The version of the .js file is made from the time of it’s last update.
	$js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'dependencies/js/kasidy.js' ));
	wp_enqueue_script( 'kasidy-js', plugins_url( 'dependencies/js/kasidy.js', __FILE__ ), array('jquery'), $js_ver, true );

	wp_enqueue_style( 'bootstrap-grid', plugins_url( 'dependencies/css/bootstrap-grid-4.css', __FILE__ ), '1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'kas_scripts' );

include 'inc/cpts.php';
//include 'inc/ajax.php';
//include 'inc/modules.php';
?>
