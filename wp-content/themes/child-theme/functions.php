<?php
add_action('wp_enqueue_scripts', 'add_child_theme');

function add_child_theme()
	{
	wp_enqueue_style('parent_stlye', get_template_directory_uri() . '/style.css');

	}



function add_child_stylesheet()
	{
	if (is_front_page())
		{
		wp_enqueue_style('child_style', get_stylesheet_directory_uri() . '/child_style.css');
		wp_enqueue_script( 'functions', get_stylesheet_directory_uri() . '/js/functions.js', array('jquery'), '20140602', false);
		}
	}

add_action('wp_enqueue_scripts', 'add_child_stylesheet');


add_action( 'wp_enqueue_scripts', 'menu_scripts' );
function menu_scripts() {
wp_enqueue_script( 'functions', get_bloginfo( 'stylesheet_directory' ) . '/js/functions.js', array( 'jquery' ), '1.0.0' );
}

?>