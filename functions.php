<?php 

//Call Redux & FITWORK
require_once('redux/ReduxCore/framework.php'); 
require_once('redux/sample/barebones-config.php'); 
require_once __DIR__ . '/cmb2/init.php';
require_once('cmb2/metaboxes.php'); 
/*Wordpress Dashboard Widgets Removal*/
function remove_dashboard_meta() {
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); //Removes the 'incoming links' widget
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); //Removes the 'plugins' widget
    remove_meta_box('dashboard_primary', 'dashboard', 'normal'); //Removes the 'WordPress News' widget
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); //Removes the secondary widget
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side'); //Removes the 'Quick Draft' widget
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side'); //Removes the 'Recent Drafts' widget
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); //Removes the 'Activity' widget
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal'); //Removes the 'At a Glance' widget
    remove_meta_box('dashboard_activity', 'dashboard', 'normal'); //Removes the 'Activity' widget (since 3.8)
}
add_action('admin_init', 'remove_dashboard_meta');
remove_action('admin_notices', 'update_nag');
remove_action('welcome_panel', 'wp_welcome_panel');

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'About FITStudio', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '<p>Welcome to FITStudio ! Explore the wide range of available options . Customization now becomes easier . </p>';
    
   echo "The time is " . date("h:i:sa");
}
function annointed_admin_bar_remove() {
        global $wp_admin_bar;

        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);
function removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'removeDemoModeLink');
//* Remove default post type from WordPress Dashboard
add_action('admin_menu','customprefix_remove_default_post_type_menu_item');
function customprefix_remove_default_post_type_menu_item() {
	remove_menu_page('edit.php');
}
/*Disable Theme Options*/
add_action('admin_menu','appearence');
function appearence() {
	remove_menu_page('themes.php');
	
}

/*Disable Theme Edit Option*/
define( 'DISALLOW_FILE_EDIT', true );
/*Custom post type*/ 
add_theme_support( 'post-thumbnails' );
/*Auto Activate Plugin*/
function run_activate_plugin( $plugin ) {
    $current = get_option( 'active_plugins' );
    $plugin = plugin_basename( trim( $plugin ) );

    if ( !in_array( $plugin, $current ) ) {
        $current[] = $plugin;
        sort( $current );
        do_action( 'activate_plugin', trim( $plugin ) );
        update_option( 'active_plugins', $current );
        do_action( 'activate_' . trim( $plugin ) );
        do_action( 'activated_plugin', trim( $plugin) );
    }

    return null;
}
run_activate_plugin( 'contact-form-7/wp-contact-form-7.php' );
// Register Custom Post Type
function main_product() {

	$labels = array(
		'name'                  => _x( 'Main Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Main Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Main Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Main Productse', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Main Product', 'text_domain' ),
		'description'           => __( 'Main Product Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'menu_icon'               => 'dashicons-screenoptions'
	);
	register_post_type( 'main_product', $args );

}
add_action( 'init', 'main_product', 0 );
/*Secondary Products*/
function other_product() {

	$labels = array(
		'name'                  => _x( 'Secondary Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Secondary Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Secondary Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Secondary Productse', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Secondary Product', 'text_domain' ),
		'description'           => __( 'Secondary Product Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'menu_icon'               => 'dashicons-cart'
	);
	register_post_type( 'other_product', $args );

}
add_action( 'init', 'other_product', 0 );
/*Portfolio Post Type*/
function portfolio() {

	$labels = array(
		'name'                  => _x( 'Portfolio', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Portfolio', 'text_domain' ),
		'name_admin_bar'        => __( 'Portfolio', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Portfolio', 'text_domain' ),
		'add_new_item'          => __( 'Add New Portfolio', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Portfolio', 'text_domain' ),
		'edit_item'             => __( 'Edit Portfolio', 'text_domain' ),
		'update_item'           => __( 'Update Portfolio', 'text_domain' ),
		'view_item'             => __( 'View Portfolio', 'text_domain' ),
		'view_items'            => __( 'View Portfolio', 'text_domain' ),
		'search_items'          => __( 'Search Portfolio', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'text_domain' ),
		'description'           => __( 'Portfolio Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail','comments'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'menu_icon'               => 'dashicons-shield-alt'
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio', 0 );
///*Banner Post Type*/
//function banner() {
//
//	$labels = array(
//		'name'                  => _x( 'Banner', 'Post Type General Name', 'text_domain' ),
//		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'text_domain' ),
//		'menu_name'             => __( 'Banner', 'text_domain' ),
//		'name_admin_bar'        => __( 'Banner', 'text_domain' ),
//		'archives'              => __( 'Banner Archives', 'text_domain' ),
//		'attributes'            => __( 'Banner Attributes', 'text_domain' ),
//		'parent_item_colon'     => __( 'Parent Banner:', 'text_domain' ),
//		'all_items'             => __( 'All Banner', 'text_domain' ),
//		'add_new_item'          => __( 'Add New Banner', 'text_domain' ),
//		'add_new'               => __( 'Add New', 'text_domain' ),
//		'new_item'              => __( 'New Banner', 'text_domain' ),
//		'edit_item'             => __( 'Edit Banner', 'text_domain' ),
//		'update_item'           => __( 'Update Banner', 'text_domain' ),
//		'view_item'             => __( 'View Banner', 'text_domain' ),
//		'view_items'            => __( 'View Banner', 'text_domain' ),
//		'search_items'          => __( 'Search Banner', 'text_domain' ),
//		'not_found'             => __( 'Not found', 'text_domain' ),
//		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
//		'featured_image'        => __( 'Featured Image', 'text_domain' ),
//		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
//		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
//		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
//		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
//		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
//		'items_list'            => __( 'Banner list', 'text_domain' ),
//		'items_list_navigation' => __( 'Banner list navigation', 'text_domain' ),
//		'filter_items_list'     => __( 'Filter Banner list', 'text_domain' ),
//	);
//	$args = array(
//		'label'                 => __( 'Banner', 'text_domain' ),
//		'description'           => __( 'Banner Description', 'text_domain' ),
//		'labels'                => $labels,
//		'supports'              => array( 'title', 'thumbnail',),
//		'hierarchical'          => false,
//		'public'                => true,
//		'show_ui'               => true,
//		'show_in_menu'          => true,
//		'menu_position'         => 5,
//		'show_in_admin_bar'     => true,
//		'show_in_nav_menus'     => true,
//		'can_export'            => true,
//		'has_archive'           => true,		
//		'exclude_from_search'   => false,
//		'publicly_queryable'    => true,
//		'capability_type'       => 'page',
//        'menu_icon'               => 'dashicons-format-gallery'
//	);
//	register_post_type( 'banner', $args );
//
//}
//add_action( 'init', 'banner', 0 );


/*About Products*/
function about_us() {

	$labels = array(
		'name'                  => _x( 'About Us (Allowed Only A Single Post)', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'About Us', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'About Us', 'text_domain' ),
		'name_admin_bar'        => __( 'About Us', 'text_domain' ),
		'archives'              => __( 'About Us', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add One Post Only', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'About Us', 'text_domain' ),
		'description'           => __( 'About Us Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail',),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 3,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
        'menu_icon'               => 'dashicons-groups'
    
	);
	register_post_type( 'about_us', $args );

}
add_action( 'init', 'about_us', 0 );



function __block_caps( $caps, $cap )
{
    if ( $cap === 'install_themes' )
        $caps[] = 'do_not_allow';
    return $caps;
}
add_filter( 'map_meta_cap', '__block_caps', 10, 2 );











?>