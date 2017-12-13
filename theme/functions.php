<?php
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

// Default size of thumbnails
if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 240, 240 );
}
// Register post type
add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('portfolio', array(
	'label'  => null,
	'labels' => array(
	'name'               => 'Portfolio',
	'singular_name'      => 'Item',
	'add_new'            => 'Add item',
	'add_new_item'       => 'Add new item',
	'edit_item'          => 'Edit item',
	'new_item'           => 'New item',
	'view_item'          => 'View item',
	'search_items'       => 'Search item',
	'not_found'          => 'Not found',
	'not_found_in_trash' => 'Not found in trash',
	'menu_name'          => 'Portfolio',
	),
	'description'         => '',
	'public'              => true,
	'publicly_queryable'  => true,
	'exclude_from_search' => null,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'menu_position'       => 20,
	'menu_icon'           => 'dashicons-format-gallery',
	'hierarchical'        => false,
	'supports'            => array(
								'title',
								'editor',
								'author',
								'thumbnail',
								'excerpt',
								'trackbacks',
								'custom-fields',
								'comments',
								'revisions',
								'page-attributes',
								'post-formats'
								),
	'taxonomies'          => array('portfolio_category'),
	'has_archive'         => true,
	'rewrite'             => true,
	'query_var'           => true,
	'permalink_epmask' => EP_PERMALINK,
	) );
}

// function prefix_pre_get_posts($query) {
//      if ($query->is_category) {
//           $query->set('post_type', 'any');
//      }
//      return $query;
// }
add_action( 'init', 'wptp_register_taxonomy' );
function wptp_register_taxonomy() {
	register_taxonomy( 'portfolio_category', 'portfolio',
	array(
	'labels' => array(
	'name'              => 'Portfolio Categories',
	'singular_name'     => 'Portfolio Category',
	'search_items'      => 'Search Portfolio Categories',
	'all_items'         => 'All Portfolio Categories',
	'edit_item'         => 'Edit Portfolio.php Categories',
	'update_item'       => 'Update Portfolio.php Category',
	'add_new_item'      => 'Add New Portfolio Category',
	'new_item_name'     => 'New Portfolio Category Name',
	'menu_name'         => 'Portfolio Category',
	),
	'hierarchical' => true,
	'sort' => true,
	'args' => array( 'orderby' => 'term_order' ),
	'rewrite' => array( 'slug' => 'portfolio-category' ),
	'show_admin_column' => true
	)
	);
}




function my_custom_excerpt() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action('init', 'my_custom_excerpt');

?>
