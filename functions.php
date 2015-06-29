<?php

/*===================================
Enqueue Styles & Scripts
===================================*/

function wp_load_files() {

	/*=== Compass Compiled Stylesheet ===*/
	
	wp_register_style('custom_styles', get_stylesheet_directory_uri() . '/css/style.css');
	wp_enqueue_style('custom_styles');
}

add_action('wp_enqueue_scripts', 'wp_load_files', 11);
