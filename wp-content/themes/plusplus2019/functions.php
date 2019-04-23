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


/* ACF Local */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5cb8ecc012c91',
	'title' => 'Homepage Sections',
	'fields' => array(
		array(
			'key' => 'field_5cb8ed19bf577',
			'label' => 'header',
			'name' => 'header',
			'type' => 'text',
			'instructions' => 'Add a main header for the page. The template will take care of formatting it.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => 'Header',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5cb8ed42bf578',
			'label' => 'content1',
			'name' => 'content1',
			'type' => 'wysiwyg',
			'instructions' => 'Add a first content area with sub heads and text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5cb8ed65bf579',
			'label' => 'content2',
			'name' => 'content2',
			'type' => 'wysiwyg',
			'instructions' => 'Add a second content area with sub heads and text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5cb8ed70bf57a',
			'label' => 'content3',
			'name' => 'content3',
			'type' => 'wysiwyg',
			'instructions' => 'Add a third content area',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '885',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'author',
		7 => 'format',
		8 => 'page_attributes',
		9 => 'featured_image',
		10 => 'categories',
		11 => 'tags',
		12 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
));

endif;
/* END ACF Local */

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