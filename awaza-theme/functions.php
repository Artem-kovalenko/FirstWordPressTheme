<?php 
	
add_action( 'wp_enqueue_scripts', 'awaza_styles' );
add_action( 'wp_enqueue_scripts', 'awaza_scripts' );

function awaza_styles() {
	wp_enqueue_style( 'slick-style', 		get_template_directory_uri() . '/assets/libs/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-style', 	get_template_directory_uri() . '/assets/libs/slick/slick-theme.css' );
	wp_enqueue_style( 'google-fonts-style', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Open+Sans:400,700&display=swap' );
	wp_enqueue_style( 'bootstrap-style', 	get_template_directory_uri() . '/assets/libs/bootstrap/bootstrap-grid.min.css' );
	wp_enqueue_style( 'main-style', 		get_stylesheet_uri() );
}



function awaza_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('slider', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script('waypoints', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), null, true);
	wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/libs/counterUp/counterup.min.js', array('jquery', 'waypoints'), null, true);
	wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/common.js', array('jquery'), null, true);
}

	
add_filter('show_admin_bar', '__return_false');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
} 

add_theme_support( 'menus' );