<?php

/*===================================
Enqueue Styles & Scripts
===================================*/

function wp_load_files() {

	/*=== Compass Compiled Stylesheet ===*/
	
	wp_register_style('custom_styles', get_stylesheet_directory_uri() . '/css/style.css');
	wp_enqueue_style('custom_styles');

	/*=== Custom Scripts ===*/

	wp_enqueue_script('_s-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', '', '', true);

	/*=== FitVids ===*/

	wp_enqueue_script('_s-fitvids', get_stylesheet_directory_uri() . '/js/fitvids/fitvids.min.js', '', '', true);
	
}

add_action('wp_enqueue_scripts', 'wp_load_files', 11);

/*=============================================
CUSTOM LOGIN SCREEN
=============================================*/

// Change the login logo URL

function my_loginURL() {
    return 'http://loginurl.com';
}
add_filter('login_headerurl', 'my_loginURL');

// Enque the login specific stylesheet for design customizations. CSS file is compiled through compass.

function my_logincustomCSSfile() {
    wp_enqueue_style('login-styles', get_stylesheet_directory_uri() . '/css/login.css');
}
add_action('login_enqueue_scripts', 'my_logincustomCSSfile');

