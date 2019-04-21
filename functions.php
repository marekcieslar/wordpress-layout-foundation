<?php
/**
 * Enqueue scripts and styles.
 */
function mc_foundation_scripts() {
	wp_enqueue_style( 'mc_foundation-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'mc_foundation-style', 'rtl', 'replace' );

	if ( has_nav_menu( 'menu-1' ) ) {
		wp_enqueue_script( 'mc_foundation-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '1.1', true );
		wp_enqueue_script( 'mc_foundation-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '1.1', true );
	}

	wp_enqueue_style( 'mc_foundation-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mc_foundation_scripts' );

/**
 * Register menu
 */
function register_mc_foundation_menu() {
  register_nav_menu('header-menu',__( 'Menu Główne' ));
}
add_action( 'init', 'register_mc_foundation_menu' );
