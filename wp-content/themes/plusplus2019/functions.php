<?php
function plusplus_theme_support(){

	add_theme_support('post-thumbnails');
	
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer'  => __('Footer Menu')
	));
}

add_action('after_setup_theme', 'plusplus_theme_support');

// Excerpt Length
function plusplus_excerpt_length(){
	return 55;
}

add_filter('excerpt_length', 'plusplus_excerpt_length');

// Custom read more link
function modify_read_more_link() {
    return '<p><a class="more-link" href="' . get_permalink() . '">Read more...</a></p>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );



/*
========================================
Document Custom Post Type
========================================
*/
function documents_post_type (){
	$labels = array (
		'name' => 'Documents',
		'singular_name' => 'Document',
		'add_new' => 'Add Document',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Documents',
		'not_found' => 'No Items Found',
		'not_found_in_trash' => 'No Items Found in Trash',
		'parent_item_colo' => 'Parent Item'
	);
	$args = array (
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'show_in_rest' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revision',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 20,
		'exclude_from_search' => false
	);
	register_post_type('docs', $args);
}

add_action('init', 'documents_post_type');

?>