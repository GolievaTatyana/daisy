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
/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */

add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('portfolio', array(
	'label'  => null,
	'labels' => array(
			'name'               => 'portfolio', // основное название для типа записи
			'singular_name'      => 'item', // название для одной записи этого типа
			'add_new'            => 'add item', // для добавления новой записи
			'add_new_item'       => 'add new item', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'edit item', // для редактирования типа записи
			'new_item'           => 'new item', // текст новой записи
			'view_item'          => 'view item', // для просмотра записи этого типа.
			'search_items'       => 'search item', // для поиска по этим типам записи
			'not_found'          => 'not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'not found in trash', // если не было найдено в корзине
			'menu_name'          => 'portfolio', // название меню
			),
	'description'         => '',
	'public'              => false,
	'publicly_queryable'  => null,
	'exclude_from_search' => null,
	'show_ui'             => null,
	'show_in_menu'        => null, // показывать ли в меню адмнки
	'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
	'show_in_nav_menus'   => null,
	'show_in_rest'        => null, // добавить в REST API. C WP 4.7
	'rest_base'           => null, // $post_type. C WP 4.7
	'menu_position'       => null,
	'menu_icon'           => null, 
	'hierarchical'        => false,
	'supports'            => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
	'taxonomies'          => array(),
	'has_archive'         => false,
	'rewrite'             => true,
	'query_var'           => true,
	) );
}

function my_custom_excerpt() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action('init', 'my_custom_excerpt');

?>
