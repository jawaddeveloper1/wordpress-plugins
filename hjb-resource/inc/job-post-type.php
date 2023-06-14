<?php 

function hjb_custom_posttype() {

	$labels = array(
		'name' => _x( 'Jobs', 'Post Type General Name', 'hello-job-board' ),
		'singular_name' => _x( 'Job', 'Post Type Singular Name', 'hello-job-board' ),
		'menu_name' => _x( 'Jobs', 'Admin Menu text', 'hello-job-board' ),
		'name_admin_bar' => _x( 'Job', 'Add New on Toolbar', 'hello-job-board' ),
		'archives' => __( 'Job Archives', 'hello-job-board' ),
		'attributes' => __( 'Job Attributes', 'hello-job-board' ),
		'parent_item_colon' => __( 'Parent Job:', 'hello-job-board' ),
		'all_items' => __( 'All Jobs', 'hello-job-board' ),
		'add_new_item' => __( 'Add New Job', 'hello-job-board' ),
		'add_new' => __( 'Add New', 'hello-job-board' ),
		'new_item' => __( 'New Job', 'hello-job-board' ),
		'edit_item' => __( 'Edit Job', 'hello-job-board' ),
		'update_item' => __( 'Update Job', 'hello-job-board' ),
		'view_item' => __( 'View Job', 'hello-job-board' ),
		'view_items' => __( 'View Jobs', 'hello-job-board' ),
		'search_items' => __( 'Search Job', 'hello-job-board' ),
		'not_found' => __( 'Not found', 'hello-job-board' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'hello-job-board' ),
		'featured_image' => __( 'Job Featured Image', 'hello-job-board' ),
		'set_featured_image' => __( 'Set job featured image', 'hello-job-board' ),
		'remove_featured_image' => __( 'Remove featured image', 'hello-job-board' ),
		'use_featured_image' => __( 'Use as featured image', 'hello-job-board' ),
		'insert_into_item' => __( 'Insert into Job', 'hello-job-board' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Job', 'hello-job-board' ),
		'items_list' => __( 'Jobs list', 'hello-job-board' ),
		'items_list_navigation' => __( 'Jobs list navigation', 'hello-job-board' ),
		'filter_items_list' => __( 'Filter Jobs list', 'hello-job-board' ),
	);
	$rewrite = array(
		'slug' => 'job',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Hello Job', 'hello-job-board' ),
		'description' => __( '', 'hello-job-board' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => array('title', 'editor'),
		'taxonomies' => array('job-category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'hello-job', $args );

}
add_action( 'init', 'hjb_custom_posttype');