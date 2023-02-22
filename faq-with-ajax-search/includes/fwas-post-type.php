<?php 

// Register FAQ Post Type
function fwas_register_post_type() {
    $labels = array(
        'name' => 'FAQs',
        'singular_name' => 'FAQ',
        'menu_name' => 'FAQs',
        'add_new_item' => 'Add New FAQ',
        'edit_item' => 'Edit FAQ',
        'view_item' => 'View FAQ',
        'search_items' => 'Search FAQs',
        'not_found' => 'No FAQs found',
        'not_found_in_trash' => 'No FAQs found in trash',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'fwas'),
        'menu_icon' => 'dashicons-editor-help',
        'supports' => array('title','editor'),
    );

    register_post_type('fwas', $args);
}
add_action('init', 'fwas_register_post_type');