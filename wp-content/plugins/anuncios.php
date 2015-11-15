<?php 
/*Plugin Name: Create Anuncios Post Type
Description: This plugin registers the 'Anuncios' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function wpmudev_create_anuncios_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Anuncios',
    	'singular_name' => 'Anuncio',
    	'add_new' => 'Add New Anuncio',
    	'add_new_item' => 'Add New Anuncio',
    	'edit_item' => 'Edit Anuncio',
    	'new_item' => 'New Anuncio',
    	'all_items' => 'All Anuncios',
    	'view_item' => 'View Anuncio',
    	'search_items' => 'Search Anuncios',
    	'not_found' =>  'No Anuncios Found',
    	'not_found_in_trash' => 'No Anuncios found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Anuncios',
    );
    //register post type
	register_post_type( 'anuncio', array(
		'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
		'taxonomies' => array( 'post_tag', 'category' ),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'anuncios' ),
		)
	);
}
add_action( 'init', 'wpmudev_create_anuncios_post_type' );



?>