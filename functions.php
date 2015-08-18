<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * @package WordPress
 * @subpackage Zombie
 * @since Zombie 1.0
 */
 //Load the theme CSS
 function theme_styles() {
     wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
     wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
     wp_enqueue_style( 'style', get_stylesheet_uri());
 }
 //Load the theme JS
 function theme_js() {
     wp_deregister_script('jquery');
     wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', false, null);
     wp_enqueue_script('jquery');
     wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
     wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
}

 add_action( 'wp_enqueue_scripts', 'theme_styles' );
 add_action( 'wp_enqueue_scripts', 'theme_js' );
 add_theme_support( 'post-thumbnails' ); 
?>
