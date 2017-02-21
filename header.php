<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gueven
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gueven' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap-1 bgc-1">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col col-md-4"></div>
					<div class="col col-md-4 col-md-auto">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div>
					<div class="col col-md-4 text-right">
						<?php get_search_form( true ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="header-wrap-2 bdc-1">
			<div class="container clearfix">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gueven' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'clearfix' ) ); ?>
				</nav>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
