<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}
add_action( 'init', 'create_cw_hierarchical_taxonomy', 0 );
//create a custom taxonomy name

function create_cw_hierarchical_taxonomy() {

	// taxonomy register
	register_taxonomy('country',array('post'), array(
		'hierarchical' => true,
		'labels' => array( 'menu_name' => 'Country',
		'add_new_item' => __( 'Add New Country' ),
		'new_item_name' => __( 'New Country Name' ),
		'all_items' => __( 'All Country' ),
		'parent_item' => __( 'Parent Country' ),
		'parent_item_colon' => __( 'Parent Country:' ), 
		'edit_item' => __( 'Edit Country' ),
		'update_item' => __( 'Update Country' ),
		'name' => _x( 'Country', 'taxonomy general name' ),
		'singular_name' => _x( 'Country', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Country' ),),
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'country' ),
		'show_in_rest' => true,
		));
	register_taxonomy('genre',array('post'), array(
		'hierarchical' => true,
		'labels' => array( 'menu_name' => 'Genre',
		'add_new_item' => __( 'Add New Genre' ),
		'new_item_name' => __( 'New Genre Name' ),
		'all_items' => __( 'All Genre' ),
		'parent_item' => __( 'Parent Genre' ),
		'parent_item_colon' => __( 'Parent Genre:' ), 
		'edit_item' => __( 'Edit Genre' ),
		'update_item' => __( 'Update Genre' ),
		'name' => _x( 'Genre', 'taxonomy general name' ),
		'singular_name' => _x( 'Genre', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Genre' ),),
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'genre' ),
		'show_in_rest' => true,
		));
	
	register_taxonomy('year',array('post'), array(
		'hierarchical' => true,
		'labels' => array( 'menu_name' => 'Year',
		'add_new_item' => __( 'Add New Year' ),
		'new_item_name' => __( 'New Year Name' ),
		'all_items' => __( 'All Year' ),
		'parent_item' => __( 'Parent Year' ),
		'parent_item_colon' => __( 'Parent Year:' ), 
		'edit_item' => __( 'Edit Year' ),
		'update_item' => __( 'Update Year' ),
		'name' => _x( 'Year', 'taxonomy general name' ),
		'singular_name' => _x( 'Year', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Year' ),),
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'year' ),
		'show_in_rest' => true,
		));
	
	register_taxonomy('actors',array('post'), array(
		'hierarchical' => true,
		'labels' => array( 'menu_name' => 'Actors',
		'add_new_item' => __( 'Add New Actors' ),
		'new_item_name' => __( 'New Actors Name' ),
		'all_items' => __( 'All Actors' ),
		'parent_item' => __( 'Parent Actors' ),
		'parent_item_colon' => __( 'Parent Actors:' ), 
		'edit_item' => __( 'Edit Actors' ),
		'update_item' => __( 'Update Actors' ),
		'name' => _x( 'Actors', 'taxonomy general name' ),
		'singular_name' => _x( 'Actors', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Actors' ),),
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'actors' ),
		'show_in_rest' => true,
		));
	}
	
add_action('init', 'custom_taxonomy_flush_rewrite');
function custom_taxonomy_flush_rewrite() {
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}
?>
