<?php

/**
 * Plugin Name: Bridge: Menus
 * Description: WP REST API endpoint for menus.
 * Version: 0.3.1
 * Author: Dzikri Aziz
 * Author URI: http://kucrut.org
 * Plugin URI: https://github.com/kucrut/wp-bridge-menus
 * License: GPLv2
 */


/**
 * Register our custom routes.
 *
 * @wp_action hook rest_api_init
 */
function bridge_menus_register_routes() {
	require_once dirname( __FILE__ ) . '/includes/bridge-rest-menus-controller.php';

	$menu_items_controller = new Bridge_REST_Menus_Controller;
	$menu_items_controller->register_routes();
}
add_action( 'rest_api_init', 'bridge_menus_register_routes' );
