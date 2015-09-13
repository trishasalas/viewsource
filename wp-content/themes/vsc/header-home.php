<?php
/**
 * The header for our theme.
 *
 * @package view_source
 */
	?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<style>
		<?php file_get_contents( get_template_directory_uri() . '/assets/css/critical-css.css' );?>
	</style>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'view_source' ); ?></a>

	<header id="masthead" class="site-header" role="banner" style="background:url(<?php echo get_template_directory_uri();?>/images/sky.png) no-repeat top center;background-size:cover;height:90vh;width:100%;position:relative;margin-bottom:60px;">
		<div class="header-top" style="width:800px;max-width:100%;margin:0 auto;position:relative;z-index:50;">
			<div class="site-title logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php echo file_get_contents( get_template_directory_uri() . '/images/branding.svg' );?>
				</a>
			</div>
			<a id="responsive-menu" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" href="#sidr"><i class="fa fa-bars fa-2x"></i></a>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php view_source_registration_link()?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'light-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			<ul class="social-media">
				<li><a href="<?php esc_html_e( get_theme_mod( 'twitter' ) );?>"><i class="fa fa-twitter"></i></a></li>
				<li><a href="<?php esc_html_e( get_theme_mod( 'facebook' ) );?>"><i class="fa fa-facebook"></i></a></li>
			</ul>
		</div><!-- .header-top -->
		<h2 class="description"><?php bloginfo( 'description' ); ?></h2>
		<div class="mountains" style="background: url(<?php echo get_template_directory_uri();?>/images/mountains.png) no-repeat top center;background-size:cover;height:90vh;width:100%;position:absolute;top:0;z-index:1;"></div>
	</header><!-- #masthead -->
	<div id="main" class="main remodal-bg">