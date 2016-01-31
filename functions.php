<?php

/*===================================
Enqueue Styles & Scripts
===================================*/

function wp_load_main_script() {

	/*=== Load Custom Scripts First so they initialize first over other scripts ===*/

	wp_enqueue_script('_s-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', '', '', true);

}

add_action('wp_enqueue_scripts','wp_load_main_script',1);

function wp_load_files() {

	/*=== Compass Compiled Stylesheet ===*/
	
	wp_register_style('custom_styles', get_stylesheet_directory_uri() . '/css/style.min.css');
	wp_enqueue_style('custom_styles');

	/*=== FitVids ===*/

	wp_enqueue_script('_s-fitvids', get_stylesheet_directory_uri() . '/js/fitvids/fitvids.min.js', '', '', true);
	
}

add_action('wp_enqueue_scripts', 'wp_load_files', 11);

/*===================================
Overwrite Bridge Includes
===================================*/

// Overwrite custom post types created by Bridge theme

// require_once( get_stylesheet_directory() . '/includes/qode-custom-post-types.php' );

/*=============================================
YOAST
=============================================*/

/*=== Adjust Metabox Priority

add_filter( 'wpseo_metabox_prio', function() { return 'low';});

===*/

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
    wp_enqueue_style('login-styles', get_stylesheet_directory_uri() . '/css/login.min.css');
}
add_action('login_enqueue_scripts', 'my_logincustomCSSfile');

