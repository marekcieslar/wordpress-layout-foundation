<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage mc_foundation
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<nav>
  <div id="nav" class="nav">
    <div class="container">
      <div class="nav__logo" style="background-image:url(<?php echo get_theme_mod('mc_foundation_nav_logo'); ?>)"></div>
      <div id="nav-hamburger" class="nav__hamburger">
         <div class="nav__hamburger__strip nav__hamburger__strip--mid"></div>
         <div class="nav__hamburger__strip nav__hamburger__strip--top"></div>
         <div class="nav__hamburger__strip nav__hamburger__strip--bot"></div>
      </div>
    </div>
    <div class='nav__list'>
      <div class='nav__list__info'>menu</div>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => '' ) ); ?>
      <div class='nav__list__logo' style="background-image:url(<?php echo get_theme_mod('mc_foundation_nav_logo'); ?>)"></div>
    </div>
    </div>
    <div id="close-background"></div>
</nav>
<div id="distance"></div>
