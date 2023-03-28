<?php
/**
 * Plugin Name: Grow Animation Button Addon
 * Description: Grow Animation Button Custom Elementor addon.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Jh Fahim Developer
 * Author URI:  https://jhfahim.com/
 * Text Domain: jhfahim
 * 
 * Elementor tested up to: 3.7.0
 * Elementor Pro tested up to: 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function softtech_grow_animation_button() {
	
	// Load plugin file
	require_once( __DIR__ . '/elementor/plugin.php' );
	
	// Run the plugin
	\Softtech_Grow_Animation_Button\Plugin::instance();

}
add_action( 'plugins_loaded', 'softtech_grow_animation_button' );