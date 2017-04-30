<?php
/**
 * SermonPress Scripture Tests.
 *
 * @since   0.1.0
 * @package SermonPress
 */
class SP_Scripture_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  0.1.0
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'SP_Scripture') );
	}

	/**
	 * Test that we can access our class through our helper function.
	 *
	 * @since  0.1.0
	 */
	function test_class_access() {
		$this->assertInstanceOf( 'SP_Scripture', sermonpress()->scripture );
	}

	/**
	 * Test that our taxonomy now exists.
	 *
	 * @since  0.1.0
	 */
	function test_taxonomy_exists() {
		$this->assertTrue( taxonomy_exists( 'sp-scripture' ) );
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
