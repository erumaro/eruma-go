<?php
/**
* Custom Taxonomy and Post Type
**/
add_action( 'init', 'projects_post_type', 0 );
function projects_post_type() {
	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'eruma-go' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'eruma-go' ),
		'menu_name'             => __( 'Projects', 'eruma-go' ),
		'name_admin_bar'        => __( 'Project', 'eruma-go' ),
		'archives'              => __( 'Item Archives', 'eruma-go' ),
		'attributes'            => __( 'Item Attributes', 'eruma-go' ),
		'parent_item_colon'     => __( 'Parent Item:', 'eruma-go' ),
		'all_items'             => __( 'All Items', 'eruma-go' ),
		'add_new_item'          => __( 'Add New Item', 'eruma-go' ),
		'add_new'               => __( 'Add New', 'eruma-go' ),
		'new_item'              => __( 'New Item', 'eruma-go' ),
		'edit_item'             => __( 'Edit Item', 'eruma-go' ),
		'update_item'           => __( 'Update Item', 'eruma-go' ),
		'view_item'             => __( 'View Item', 'eruma-go' ),
		'view_items'            => __( 'View Items', 'eruma-go' ),
		'search_items'          => __( 'Search Item', 'eruma-go' ),
		'not_found'             => __( 'Not found', 'eruma-go' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'eruma-go' ),
		'featured_image'        => __( 'Featured Image', 'eruma-go' ),
		'set_featured_image'    => __( 'Set featured image', 'eruma-go' ),
		'remove_featured_image' => __( 'Remove featured image', 'eruma-go' ),
		'use_featured_image'    => __( 'Use as featured image', 'eruma-go' ),
		'insert_into_item'      => __( 'Insert into item', 'eruma-go' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'eruma-go' ),
		'items_list'            => __( 'Items list', 'eruma-go' ),
		'items_list_navigation' => __( 'Items list navigation', 'eruma-go' ),
		'filter_items_list'     => __( 'Filter items list', 'eruma-go' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'eruma-go' ),
		'description'           => __( 'Web dev projects', 'eruma-go' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', ),
		'taxonomies'            => array( 'technology', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'projects', $args );
}
// Register Custom Taxonomy
add_action( 'init', 'technologies', 0 );
function technologies() {
	$labels = array(
		'name'                       => _x( 'Technologies', 'Taxonomy General Name', 'eruma-go' ),
		'singular_name'              => _x( 'Technology', 'Taxonomy Singular Name', 'eruma-go' ),
		'menu_name'                  => __( 'Technology', 'eruma-go' ),
		'all_items'                  => __( 'All Items', 'eruma-go' ),
		'parent_item'                => __( 'Parent Item', 'eruma-go' ),
		'parent_item_colon'          => __( 'Parent Item:', 'eruma-go' ),
		'new_item_name'              => __( 'New Item Name', 'eruma-go' ),
		'add_new_item'               => __( 'Add New Item', 'eruma-go' ),
		'edit_item'                  => __( 'Edit Item', 'eruma-go' ),
		'update_item'                => __( 'Update Item', 'eruma-go' ),
		'view_item'                  => __( 'View Item', 'eruma-go' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'eruma-go' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'eruma-go' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'eruma-go' ),
		'popular_items'              => __( 'Popular Items', 'eruma-go' ),
		'search_items'               => __( 'Search Items', 'eruma-go' ),
		'not_found'                  => __( 'Not Found', 'eruma-go' ),
		'no_terms'                   => __( 'No items', 'eruma-go' ),
		'items_list'                 => __( 'Items list', 'eruma-go' ),
		'items_list_navigation'      => __( 'Items list navigation', 'eruma-go' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'technology', array( 'projects' ), $args );
}