<?php 
/*Plugin Name: Create Videos Post Type
Description: This plugin registers the 'videos' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function wpmudev_create_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Videos',
    	'singular_name' => 'Video',
    	'add_new' => 'Add New Video',
    	'add_new_item' => 'Add New Video',
    	'edit_item' => 'Edit Video',
    	'new_item' => 'New Video',
    	'all_items' => 'All Videos',
    	'view_item' => 'View Video',
    	'search_items' => 'Search Videos',
    	'not_found' =>  'No Videos Found',
    	'not_found_in_trash' => 'No Videos found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Videos',
    );
    //register post type
	register_post_type( 'video', array(
		'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
		'taxonomies' => array( 'post_tag', 'category' ),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'videos' ),
		)
	);
}
add_action( 'init', 'wpmudev_create_post_type' );



?>