<?php
/**
 * Enqueue scripts and styles.
 */
function mc_foundation_scripts() {
	wp_enqueue_style( 'mc_foundation-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', array(), '' , true); 
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array(), '' , true); 
}
add_action( 'wp_enqueue_scripts', 'mc_foundation_scripts' );

/**
 * Register menu
 */
function register_mc_foundation_menu() {
  register_nav_menu('header-menu',__( 'Menu Główne' ));
}
add_action( 'init', 'register_mc_foundation_menu' );
