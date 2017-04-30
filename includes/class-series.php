<?php
/**
 * SermonPress Series.
 *
 * @since   0.1.0
 * @package SermonPress
 */

require_once dirname( __FILE__ ) . '/../vendor/taxonomy-core/Taxonomy_Core.php';
require_once dirname( __FILE__ ) . '/../vendor/cmb2/init.php';

/**
 * SermonPress Series.
 *
 * @since 0.1.0
 *
 * @see   https://github.com/WebDevStudios/Taxonomy_Core
 */
class SP_Series extends Taxonomy_Core {
	/**
	 * Parent plugin class.
	 *
	 * @var    SermonPress
	 * @since  0.1.0
	 */
	protected $plugin = null;

	/**
	 * Constructor.
	 *
	 * Register Taxonomy.
	 *
	 * See documentation in Taxonomy_Core, and in wp-includes/taxonomy.php.
	 *
	 * @since  0.1.0
	 *
	 * @param  SermonPress $plugin Main plugin object.
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();

		parent::__construct(
			// Should be an array with Singular, Plural, and Registered name.
			array(
				__( 'Series', 'sermonpress' ),
				__( 'Series', 'sermonpress' ),
				'sp-series',
			),
			// Register taxonomy arguments.
			array(
				'hierarchical' => true,
			),
			// Post types to attach to.
			array(
				'sp-sermons',
			)
		);
	}

	/**
	 * Initiate our hooks.
	 *
	 * @since 0.1.0
	 */
	public function hooks() {

	}
}
