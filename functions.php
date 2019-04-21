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

function mc_foundation_customize_register( $wp_customize )
{

    //footer section
    $wp_customize->add_section('mc_foundation_footer', array(
        'title' => __('Footer', 'mc_foundation'),
        'description' => 'editing footer data',
        'priority' => 2
    ));
    $wp_customize->add_setting('mc_foundation_footer_title', array(
        'default' => 'mc-foundation footer title'
    ));
    $wp_customize->add_control('mc_foundation_footer_title', array(
        'label' => __('Footer title', 'mc_foundation'),
        'section' => 'mc_foundation_footer',
        'setting' => 'mc_foundation_footer_title'
    ));
    $wp_customize->add_setting('mc_foundation_footer_contact', array(
        'default' => 'Contact<br>Data<br>is<br>here'
    ));
    $wp_customize->add_control('mc_foundation_footer_contact', array(
        'label' => __('Header description', 'mc_foundation'),
        'section' => 'mc_foundation_footer',
        'setting' => 'mc_foundation_footer_contact',
        'type' => 'textarea'
		));
	}

	add_action( 'customize_register', 'mc_foundation_customize_register' );