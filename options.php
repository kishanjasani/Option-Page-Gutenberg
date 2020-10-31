<?php
/**
 * Plugin Name:       Options Using Gutenberg
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the options api with gutenberg.
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      7.2
 * Author:            Kishan Jasani
 * Author URI:        https://kishanjasani.wordpress.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       options
 * Domain Path:       /languages
 */

define( 'OPTION_PLUGIN_VERSION', '1.0.0' );

function option_options_assets() {
	wp_enqueue_script( 'option-plugin-script', plugins_url( '/', __FILE__ ) . 'build/build.js', array( 'wp-api', 'wp-i18n', 'wp-components', 'wp-element' ), OPTION_PLUGIN_VERSION, true );
	wp_enqueue_style( 'codeinwp-awesome-plugin-style', plugins_url( '/', __FILE__ ) . 'build/build.css', array( 'wp-components' ), OPTION_PLUGIN_VERSION );
}

function option_add_option_menu() {
	$page_hook_suffix = add_options_page(
		__( 'Options Awesome Plugin', 'option' ),
		__( 'Options Awesome Plugin', 'option' ),
		'manage_options',
		'awesome_option',
		'option_menu_callback'
	);

	add_action( "admin_print_scripts-{$page_hook_suffix}", 'option_options_assets' );
}

add_action( 'admin_menu', 'option_add_option_menu' );

function option_menu_callback() {
	echo '<div id="option-awesome-plugin"></div>';
}
