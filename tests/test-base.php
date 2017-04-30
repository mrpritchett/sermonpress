<?php
/**
 * SermonPress.
 *
 * @since   0.1.0
 * @package SermonPress
 */
class SermonPress_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  0.1.0
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'SermonPress') );
	}

	/**
	 * Test that our main helper function is an instance of our class.
	 *
	 * @since  0.1.0
	 */
	function test_get_instance() {
		$this->assertInstanceOf(  'SermonPress', sermonpress() );
	}

	/**
	 * Replace this with some actual testing code.
	 *
	 * @since  0.1.0
	 */
	function test_sample() {
		$this->assertTrue( true );
	}
}
