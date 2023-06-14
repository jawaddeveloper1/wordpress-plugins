<?php 


function hjb_jobcategory_taxomony(){

	$labels = array(
		'name'                       => _x( 'Job Categories', 'Taxonomy General Name', 'hello-job-board' ),
		'singular_name'              => _x( 'Job Category', 'Taxonomy Singular Name', 'hello-job-board' ),
		'menu_name'                  => __( 'Categories', 'hello-job-board' ),
		'all_items'                  => __( 'All Categories', 'hello-job-board' ),
		'parent_item'                => __( 'Parent Job Category', 'hello-job-board' ),
		'parent_item_colon'          => __( 'Parent Job Category:', 'hello-job-board' ),
		'new_item_name'              => __( 'New Job Category Name', 'hello-job-board' ),
		'add_new_item'               => __( 'Add Job Category', 'hello-job-board' ),
		'edit_item'                  => __( 'Edit Job Category', 'hello-job-board' ),
		'update_item'                => __( 'Update Job Category', 'hello-job-board' ),
		'view_item'                  => __( 'View Job Category', 'hello-job-board' ),
		'separate_items_with_commas' => __( 'Separate categoriess with commas', 'hello-job-board' ),
		'add_or_remove_items'        => __( 'Add or remove categoriess', 'hello-job-board' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'hello-job-board' ),
		'popular_items'              => __( 'Popular Categories', 'hello-job-board' ),
		'search_items'               => __( 'Search Categories', 'hello-job-board' ),
		'not_found'                  => __( 'Not Found', 'hello-job-board' ),
		'no_terms'                   => __( 'No Categories', 'hello-job-board' ),
		'items_list'                 => __( 'Categories list', 'hello-job-board' ),
		'items_list_navigation'      => __( 'Categories list navigation', 'hello-job-board' ),
	);
	
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_tagcloud'              => true,
        'rewrite'                    => true,
	);
	register_taxonomy( 'job-category', array( 'hello-job' ), $args );

}
add_action('init','hjb_jobcategory_taxomony',0);