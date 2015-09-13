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
	<!--
             _.-~-.
           7''  Q..\
        _7         (_
      _7  _/    _q.  /
    _7 . ___  /VVvv-'_                                            .
   7/ / /~- \_\\      '-._     .-'                      /       //
  ./ ( /-~-/||'=.__  '::. '-~'' {             ___   /  //     ./{
 V   V-~-~| ||   __''_   ':::.   ''~-~.___.-'' _/  // / {_   /  {  /
  VV/-~-~-|/ \ .'__'. '.    '::                     _ _ _        ''.
  / /~~~~||VVV/ /  \ )  \        _ __ ___   ___ ___(_) | | __ _   .::'
 / (~-~-~\\.-' /    \'   \::::. | '_ ` _ \ / _ \_  / | | |/ _` | :::'
/..\    /..\__/      '     '::: | | | | | | (_) / /| | | | (_| | ::'
vVVv    vVVv                 ': |_| |_| |_|\___/___|_|_|_|\__,_| ''

Hi there, nice to meet you!

Interested in having a direct impact on hundreds of millions of users? Join
Mozilla, and become part of a global community that’s helping to build a
brighter future for the Web.

Visit https://careers.mozilla.org to learn about our current job openings.
Visit https://www.mozilla.org/contribute for more ways to get involved and
help support Mozilla.
-->
	<meta http-equiv="expires" content="tue, 01 jan 2016 19:30:00 GMT">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<script type="text/javascript">
		function deferJSWordPress() {
			var element = document.createElement("script");
			element.src = "<?php echo get_template_directory_uri();?>/assets/js/defer.js";
			document.body.appendChild(element);
		}
		if (window.addEventListener)
			window.addEventListener("load", deferJSWordPress, false);
		else if (window.attachEvent)
			window.attachEvent("onload", deferJSWordPress);
		else window.onload = deferJSWordPress;
	</script>
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