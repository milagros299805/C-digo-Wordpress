<?php

function encolar_estilos_y_js(){
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0');
	wp_enqueue_script( 'app', get_template_directory_uri().'/js/app.js', array(),'1.0', true );
}
add_action( 'wp_enqueue_scripts','encolar_estilos_y_js');

function register_menus(){
	register_nav_menu( 'primary', 'Menú Principal');
}

add_action( 'init', 'register_menus'  );

add_theme_support( 'post-thumbnails' );
?>