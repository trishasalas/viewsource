<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package view_source
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
<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'view_source' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-top">
			<div class="site-title logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php echo file_get_contents( get_template_directory_uri() . '/assets/images/branding.svg' );?>
				</a>
			</div>
			<a id="responsive-menu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" href="#sidr"><i class="fa fa-bars fa-2x"></i></a>
			<nav id="mobile-navigation" class="main-navigation" role="navigation">
				<?php view_source_registration_link()?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'light-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php view_source_registration_link()?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'light-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div><!-- .header-top -->
		<h2 class="description"><?php bloginfo('description'); ?></h2>
		<div class="mountains"></div>
	</header><!-- #masthead -->
	<div id="main" class="main">