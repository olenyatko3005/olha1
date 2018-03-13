<?php
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_work_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"

function create_work_taxonomies() {

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Work', 'taxonomy general name', 'understrap' ),
		'singular_name'              => _x( 'Work', 'taxonomy singular name', 'understrap' ),
		'search_items'               => __( 'Search Work', 'understrap' ),
		'popular_items'              => __( 'Popular Work', 'understrap' ),
		'all_items'                  => __( 'All Work', 'understrap' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Work', 'understrap' ),
		'update_item'                => __( 'Update Work', 'understrap' ),
		'add_new_item'               => __( 'Add New Work', 'understrap' ),
		'new_item_name'              => __( 'New Work Name', 'understrap' ),
		'separate_items_with_commas' => __( 'Separate Work with commas', 'understrap' ),
		'add_or_remove_items'        => __( 'Add or remove Work', 'understrap' ),
		'choose_from_most_used'      => __( 'Choose from the most used Work', 'understrap' ),
		'not_found'                  => __( 'No Work found.', 'understrap' ),
		'menu_name'                  => __( 'Work', 'understrap' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'work' ),
	);

	register_taxonomy( 'work', array( 'work' ), $args );
}
?>