<?php
/**
 * SermonPress Sermons.
 *
 * @since   0.1.0
 * @package SermonPress
 */

require_once dirname( __FILE__ ) . '/../vendor/cpt-core/CPT_Core.php';
require_once dirname( __FILE__ ) . '/../vendor/cmb2/init.php';

/**
 * SermonPress Sermons post type class.
 *
 * @since 0.1.0
 *
 * @see   https://github.com/WebDevStudios/CPT_Core
 */
class SP_Sermons extends CPT_Core {
	/**
	 * Parent plugin class.
	 *
	 * @var SermonPress
	 * @since  0.1.0
	 */
	protected $plugin = null;

	/**
	 * Constructor.
	 *
	 * Register Custom Post Types.
	 *
	 * See documentation in CPT_Core, and in wp-includes/post.php.
	 *
	 * @since  0.1.0
	 *
	 * @param  SermonPress $plugin Main plugin object.
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();

		// Register this cpt.
		// First parameter should be an array with Singular, Plural, and Registered name.
		parent::__construct(
			array(
				esc_html__( 'Sermon', 'sermonpress' ),
				esc_html__( 'Sermons', 'sermonpress' ),
				'sp-sermons',
			),
			array(
				'supports' => array(
					'title',
					'editor',
					'excerpt',
					'thumbnail',
				),
				'menu_icon' => 'dashicons-book-alt', // https://developer.wordpress.org/resource/dashicons/
				'public'    => true,
				'archive'   => true,
				'rewrite'   => array( 'slug' => __( 'sermons', 'sermonpress' ) ),
			)
		);
	}

	/**
	 * Initiate our hooks.
	 *
	 * @since  0.1.0
	 */
	public function hooks() {
		add_action( 'cmb2_init', array( $this, 'fields' ) );
	}

	/**
	 * Add custom fields to the CPT.
	 *
	 * @since  0.1.0
	 */
	public function fields() {

		// Set our prefix.
		$prefix = 'sp_sermons_';

		// Define our metaboxes and fields.
		$cmb = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => esc_html__( 'SermonPress Sermons Meta Box', 'sermonpress' ),
			'object_types'  => array( 'sp-sermons' ),
		) );

		$cmb->add_field( array(
			'name' => 'Sermon Date',
			'id'   => $prefix . 'sermon_date',
			'type' => 'text_date',
		) );
	}

	/**
	 * Registers admin columns to display. Hooked in via CPT_Core.
	 *
	 * @since  0.1.0
	 *
	 * @param  array $columns Array of registered column names/labels.
	 * @return array          Modified array.
	 */
	public function columns( $columns ) {
		$new_column = array();
		return array_merge( $new_column, $columns );
	}

	/**
	 * Handles admin column display. Hooked in via CPT_Core.
	 *
	 * @since  0.1.0
	 *
	 * @param array   $column   Column currently being rendered.
	 * @param integer $post_id  ID of post to display column for.
	 */
	public function columns_display( $column, $post_id ) {
		switch ( $column ) {
		}
	}
}
