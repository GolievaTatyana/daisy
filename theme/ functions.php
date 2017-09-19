<?php
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

function my_add_excerpts_to_pages () {
     Add_post_type_support ('page', 'excerpt');
}
Add_action ('init', 'my_add_excerpts_to_pages');

add_theme_support( 'post-thumbnails', array('post','page') );
function my_custom_init() {
	add_post_type_support( 'page', 'excerpt' );
        add_post_type_support( 'post', 'excerpt' );
}
add_action('init', 'my_custom_init');

// Default size of thumbnails
if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
        set_post_thumbnail_size( 240, 240 );
}

add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('post_type_name', array(
		'labels' => array(
			'name'               => 'Thumbnails',
			'singular_name'      => 'Thumbnail',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new thumbnail',
			'edit_item'          => 'Edit Thumbnail',
			'new_item'           => 'New thumnail',
			'view_item'          => 'Wiew thumnail',
			'search_items'       => 'Search thumnails',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in trach',
			'menu_name'          => 'Gallery',
		),
		'description'  => '',
		'public' => true,
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments'),

		'exclude_from_search' => true,
		'menu_icon' => 'dashicons-format-gallery',
		'query_var' => true
	) );
}

 ?>
