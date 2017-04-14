<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Robogals_Brisbane
 * @author Roy Portas <royportas@gmail.com>
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="author" content="Roy Portas">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'robogals-brisbane' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
    
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">&#9776;</button>
                <?php wp_nav_menu( array( 
                        'theme_location' => 'menu-1', 
                        'menu_id' => 'primary-menu',
                        'link_before' => '',
                        'container' => 'ul',
                        'item_wrap' => '<li id="%1$s" class="%2$s">%3$s</ul>'
                    ) ); ?>
            </nav><!-- #site-navigation -->

            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Robogals<b>Brisbane</b></a></h1>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
