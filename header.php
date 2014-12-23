<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WOMG
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container" class="hfeed site">

	<header id="header" role="banner">
		
		<nav id="theMainMenu" role="navigation">				
			<?php wp_nav_menu(array(
				'container' => false,          
				'container_class' => 'menu',
				'menu' => __( 'The Main Menu' ),
				'menu_class' => 'nav',
				'theme_location' => 'primary',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'depth' => 0,                          
				'fallback_cb' => ''
			)); ?>
		</nav>
		
	</header><!-- #header -->

	<div id="content" class="site-content">
