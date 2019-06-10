<?php
function plusplus_theme_support(){

	add_theme_support('post-thumbnails');
	
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer1'  => __('Footer Menu Col 1'),
		'footer2'  => __('Footer Menu Col 2'),
		'footer3'  => __('Footer Menu Col 3'),
		'footer4'  => __('Footer Menu Col 4')
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

/*
========================================
Release Custom Post Type
========================================
*/
function releases_post_type (){
	$labels = array (
		'name' => 'Releases',
		'singular_name' => 'Release',
		'add_new' => 'Add Release',
		'all_items' => 'All Releases',
		'add_new_item' => 'Add Release',
		'edit_item' => 'Edit Release',
		'new_item' => 'New Release',
		'view_item' => 'View Release',
		'search_item' => 'Search Releases',
		'not_found' => 'No Releases Found',
		'not_found_in_trash' => 'No Releases Found in Trash',
		'parent_item_colo' => 'Parent Release'
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
	register_post_type('releases', $args);
}

add_action('init', 'releases_post_type');


// Include the Google Analytics Tracking Code (ga.js)
// @ https://developers.google.com/analytics/devguides/collection/gajs/
function google_analytics_tracking_code(){

	$propertyID = 'UA-74501443-1'; // GA Property ID

	if ($options['ga_enable']) { ?>

		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', '<?php echo $propertyID; ?>']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>

<?php }
}


// include GA tracking code before the closing body tag
add_action('wp_footer', 'google_analytics_tracking_code');

?>