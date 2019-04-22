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
  //nav section
  $wp_customize->add_section('mc_foundation_nav', array(
    'title' => __('nav', 'mc_foundation'),
    'description' => 'editing nav data',
    'priority' => 1
  ));
  $wp_customize->add_setting('mc_foundation_nav_logo', array(
    'default' => get_template_directory_uri().'/img/logo.png'
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'nav_logo',
      array(
        'label'      => __( 'Nav logo', 'mc_foundation' ),
        'section'    => 'mc_foundation_nav',
        'description' => '100px height',
        'settings'   => 'mc_foundation_nav_logo',
        'context'    => '' 
      )
    )
  );

  //footer section
  $wp_customize->add_section('mc_foundation_footer', array(
    'title' => __('Footer', 'mc_foundation'),
    'description' => 'editing footer data',
    'priority' => 6
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
    'label' => __('footer contact', 'mc_foundation'),
    'section' => 'mc_foundation_footer',
    'setting' => 'mc_foundation_footer_contact',
    'type' => 'textarea'
  ));
  $wp_customize->add_setting('mc_foundation_footer_phone', array(
    'default' => 'Marek Cieślar: 605 239 947<br>'
  ));
  $wp_customize->add_control('mc_foundation_footer_phone', array(
    'label' => __('footer phone', 'mc_foundation'),
    'section' => 'mc_foundation_footer',
    'setting' => 'mc_foundation_footer_phone',
    'type' => 'textarea'
  ));
  $wp_customize->add_setting('mc_foundation_footer_mail', array(
    'default' => '<a href="mailto:marek.cieslar@gmail.com">marek.cieslar@gmail.com</a>'
  ));
  $wp_customize->add_control('mc_foundation_footer_mail', array(
    'label' => __('footer mail', 'mc_foundation'),
    'section' => 'mc_foundation_footer',
    'setting' => 'mc_foundation_footer_mail',
    'type' => 'textarea'
  ));
}

add_action( 'customize_register', 'mc_foundation_customize_register' );
