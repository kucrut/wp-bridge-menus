<?php

class Bridge_Test_Plugin extends WP_UnitTestCase {

	/**
	 * Make sure all needed classes are loaded and actions are added
	 */
	public function test_plugin() {
		$this->assertTrue( class_exists( 'WP_REST_Controller' ) );

		$this->assertTrue( class_exists( 'Bridge_REST_Menus_Controller' ) );

		$this->assertEquals( 10, has_action( 'rest_api_init', 'bridge_menus_register_routes' ) );
	}
}
