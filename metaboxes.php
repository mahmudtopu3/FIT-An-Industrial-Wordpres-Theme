<?php 



add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'fitmeta_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Main Product Settings', 'cmb2' ),
		'object_types'  => array( 'main_product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		   'name'       => __( 'Product Number', 'cmb2' ),
            'desc'             => 'Select an option',
            'id'               => 'pro_num',
            'type'             => 'select',
            'show_option_none' => true,
            'default'          => 'custom',
            'options'          => array(
                'one' => __( 'Product One', 'cmb2' ),
                'two'   => __( 'Product Two', 'cmb2' ),
                'three'   => __( 'Product Three', 'cmb2' ),
                'four'   => __( 'Product Four', 'cmb2' )
            ),
	) );
    $cmb->add_field( array(
		'name'       => __( 'Key Characterristics:01', 'cmb2' ),
		
		'id'         => $prefix . 'char1',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );
    	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Key Characterristics:02', 'cmb2' ),
		'id'         => $prefix . 'char2',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );
    	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Key Characterristics:03', 'cmb2' ),
		'id'         => $prefix . 'char3',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );
    	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Highlighted Text', 'cmb2' ),
		'id'         => $prefix . 'highlight',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
        'desc'        => 'Don\'t Add More Than 30 Words'
	) );
    	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Embed Product Video', 'cmb2' ),
		'id'         => $prefix . 'video',
        'default'       => 'https://www.youtube.com/watch?v=V32eP6G89ng',
		'type'       => 'oembed',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

	
}





add_action( 'cmb2_admin_init', 'banner_box' );
/**
 * Define the metabox and field configurations.
 */
function banner_box() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'fitmeta_';

	/**
	 * Initiate the metabox
	 */
	$banner = new_cmb2_box( array(
		'id'            => 'banner',
		'title'         => __( 'Test Metabox', 'cmb2' ),
		'object_types'  => array( 'banner', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
        // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
      $banner->add_field( array(
		'name'       => __( 'Banner Image', 'cmb2' ),
        'default'    => get_template_directory_uri().'/images/bg2.jpg',
        'desc'       => 'This is a demo image',
		'id'         => $prefix . 'image',
		'type'       => 'file',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );
	$banner->add_field( array(
		'name'       => __( 'Upper Title', 'cmb2' ),
		
		'id'         => $prefix . 'title1',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
        'default'       => 'This is a sample Value'
        // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );
    	$banner->add_field( array(
		'name'       => __( 'Middle Title', 'cmb2' ),
		
		'id'         => $prefix . 'title2',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
        'default'       => 'This is a sample Value'
        // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );
    	$banner->add_field( array(
		'name'       => __( 'Lower Title', 'cmb2' ),
		
		'id'         => $prefix . 'title3',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
        'default'       => 'This is a sample Value'
         // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );
  
	
}












add_action( 'cmb2_admin_init', 'more_product' );
/**
 * Define the metabox and field configurations.
 */
function more_product() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'fitmeta_';

	/**
	 * Initiate the metabox
	 */
	$more = new_cmb2_box( array(
		'id'            => 'more_product',
		'title'         => __( 'Column Selection', 'cmb2' ),
		'object_types'  => array( 'other_product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
        // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$more->add_field( array(
		   'name'       => __( 'Select Column', 'cmb2' ),
            'desc'             => 'Select an option',
            'id'               => 'pro_row',
            'type'             => 'select',
            'default'          => 'custom',
            'options'          => array(
                'one' => __( 'Column One', 'cmb2' ),
                'two'   => __( 'Column Two', 'cmb2' ),
                'three'   => __( 'Column Three', 'cmb2' )
            ),
	) );
	
  
	
}














































?>
