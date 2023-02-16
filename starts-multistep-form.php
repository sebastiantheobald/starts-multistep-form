<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://starts.design
 * @since             1.0.0
 * @package           Starts_Multistep_Form
 *
 * @wordpress-plugin
 * Plugin Name:       STARTS Multistep From
 * Plugin URI:        https://starts.design
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Sebastian Theobald
 * Author URI:        https://starts.design
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       starts-multistep-form
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	//die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'STARTS_MULTISTEP_FORM_VERSION', '1.0.0' );

function my_vue_app_shortcode() {
	return 'Hier geht die App los<div id="app"></div>';
}
add_shortcode( 'my_vue_app', 'my_vue_app_shortcode' );

function my_vue_app_enqueue_scripts() {
	// Live bundle
	//wp_enqueue_script( 'my-vue-app', plugin_dir_url( __FILE__ ) . 'assets/js/main.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'my_vue_app_enqueue_scripts' );