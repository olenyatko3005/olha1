<?php

add_action( 'init', 'last_work_register' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function last_work_register() {
	$labels = array(
		'name'               => _x( 'Last work', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Last work item', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Last work', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Last work', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New Last work item', 'Team member', 'understrap' ),
		'add_new_item'       => __( 'Add New Last work item', 'understrap' ),
		'new_item'           => __( 'New Last work item', 'understrap' ),
		'edit_item'          => __( 'Edit Last work item', 'understrap' ),
		'view_item'          => __( 'View Last work item', 'understrap' ),
		'all_items'          => __( 'All Last work item', 'understrap' ),
		'search_items'       => __( 'Search Last work item', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Last work item:', 'understrap' ),
		'not_found'          => __( 'No Last work item found.', 'understrap' ),
		'not_found_in_trash' => __( 'No Last work item found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'This is a list of Last work item.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'work' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail')
	);

	register_post_type( 'work', $args );
}
