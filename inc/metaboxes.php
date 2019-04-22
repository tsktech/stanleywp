
<?php
add_action( 'cmb2_admin_init', 'cmb2_stanleywp_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_stanleywp_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_stanleywp_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Test Metabox', 'stanelywp' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/about.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Text Area for Left Column
	$cmb->add_field( array(
		'name'       => __( 'Left Column', 'stanelywp' ),
		'desc'       => __( 'Content for Left Column', 'stanelywp' ),
		'id'         => $prefix . 'left',
		'type'       => 'textarea',
	) );

	// Text Area for Right Column
	$cmb->add_field( array(
		'name'       => __( 'Right Column', 'stanelywp' ),
		'desc'       => __( 'Content for Right Column', 'stanelywp' ),
		'id'         => $prefix . 'right',
		'type'       => 'textarea',
	) );

	/**
	 * metabox for project
	 */
	$cmb_project = new_cmb2_box( array(
		'id'            => 'project_metabox',
		'title'         => __( 'Images', 'stanleywp' ),
		'object_types'  => array( 'project', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Images for project
	$cmb_project->add_field( array(
		'name'       => __( 'Images', 'stanleywp' ),
		'desc'       => __( 'Upload images', 'stanleywp' ),
		'id'         => $prefix . 'images',
		'type'       => 'file_list',
	) );




	// 'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	// 	// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
	// 	// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
	// 	// 'on_front'        => false, // Optionally designate a field to wp-admin only
	// 	// 'repeatable'      => true,

	// // URL text field
	// $cmb->add_field( array(
	// 	'name' => __( 'Website URL', 'stanelywp' ),
	// 	'desc' => __( 'field description (optional)', 'stanelywp' ),
	// 	'id'   => $prefix . 'url',
	// 	'type' => 'text_url',
	// 	// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
	// 	// 'repeatable' => true,
	// ) );

	// // Email text field
	// $cmb->add_field( array(
	// 	'name' => __( 'Test Text Email', 'stanelywp' ),
	// 	'desc' => __( 'field description (optional)', 'stanelywp' ),
	// 	'id'   => $prefix . 'email',
	// 	'type' => 'text_email',
	// 	// 'repeatable' => true,
	// ) );

	// Add other metaboxes as needed

}
