<?php

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//tamanho das imagens 

function my_custom_sizes()
{
	add_image_size("large-home", 1400, 420, true);
	add_image_size("large", 1400, 200, true);
	add_image_size("medium", 720, 200, true);
	add_image_size("small", 32, 33, true);
}

add_action('after_setup_theme', 'my_custom_sizes');

// Habilitar Menus
add_theme_support('menus');

//Registrar menus
function register_my_menu()
{
	register_nav_menu('menu-principal', __('Menu Principal'));
}
add_action('init', 'register_my_menu');

// Custom Post Type

function custom_post_type_peixes()
{
	register_post_type('peixes', array(
		'label' => 'Peixes',
		'description' => 'Peixes',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'peixes', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),

		'labels' => array(
			'name' => 'Peixes',
			'singular_name' => 'Peixes',
			'menu_name' => 'Peixes',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Nova Categoria',
			'edit' => 'Editar',
			'edit_item' => 'Editar Produto',
			'new_item' => 'Novo Produto',
			'view' => 'Ver Produto',
			'view_item' => 'Ver Produto',
			'search_items' => 'Procurar Categoria',
			'not_found' => 'Nenhum Produto Encontrado',
			'not_found_in_trash' => 'Nenhum Produto Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_peixes');

function registra_scripts()
{
	//deregistra o jquery do wp
	wp_deregister_script( 'jquery' );

	// Registra o jQuery Novo (true p carregar no footer)
	wp_register_script( 'jquery',get_template_directory_uri(). '/js/libs/jquery-1.11.2.min.js', array(),"1.11.2", true );

	// Registrar Plugins (tem como dependencia o jquery array('jquery'))
	wp_register_script( 'plugins-script',get_template_directory_uri(). '/js/plugins.js', array('jquery'),false, true );

	// Registrar Main
	wp_register_script( 'main-script',get_template_directory_uri(). '/js/main.js', array('jquery','plugins-script' ),false, true );

	// Registrar Modernizr o false é para carregar no header
	wp_register_script( 'modernizr',get_template_directory_uri(). '/js/libs/modernizr.custom.js', array('jquery'),false, false );

	// Carrega o Script
	wp_enqueue_script( 'main-script' );
	wp_enqueue_script( 'modernizr' );

}
add_action('wp_enqueue_scripts', 'registra_scripts');

function registra_css(){
	wp_register_style( 'style', get_template_directory_uri(). '/style.css', array(), false, false );

	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'registra_css');
