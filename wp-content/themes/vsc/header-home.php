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
		.fa{display:inline-block}.remodal{outline:0}.main-navigation a,.remodal h4,h2{text-transform:uppercase}.screen-reader-text{overflow:hidden}.main-navigation:after,.site-header .header-top:after,.site-header:after{clear:both}@font-face{font-family:FontAwesome;src:url(<?php echo get_template_directory_uri();?>)/assets/fonts/fontawesome-webfont.eot?v=4.4.0);src:url(<?php echo get_template_directory_uri();?>)/assets/fonts/fontawesome-webfont.eot?#iefix&v=4.4.0) format("embedded-opentype"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/fontawesome-webfont.woff2?v=4.4.0) format("woff2"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/fontawesome-webfont.woff?v=4.4.0) format("woff"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/fontawesome-webfont.ttf?v=4.4.0) format("truetype"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/fontawesome-webfont.svg?v=4.4.0#fontawesomeregular) format("svg");font-weight:400;font-style:normal}.fa{font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-2x{font-size:2em}body,html{height:100%}.fa-plus:before{content:"\f067"}.fa-twitter:before{content:"\f099"}.fa-facebook:before{content:"\f09a"}.fa-bars:before{content:"\f0c9"}@font-face{font-family:moonbold;src:url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_bold-webfont.eot);src:url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_bold-webfont.eot?#iefix) format("embedded-opentype"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_bold-webfont.woff2) format("woff2"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_bold-webfont.woff) format("woff"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_bold-webfont.ttf) format("truetype"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_bold-webfont.svg#moonbold) format("svg");font-weight:400;font-style:normal}@font-face{font-family:moonlight;src:url(<?php echo get_template_directory_uri();?>)/assets/fonts/assets/fonts/moon_light-webfont.eot);src:url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_light-webfont.eot?#iefix) format("embedded-opentype"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_light-webfont.woff2) format("woff2"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_light-webfont.woff) format("woff"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_light-webfont.ttf) format("truetype"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/moon_light-webfont.svg#moonlight) format("svg");font-weight:400;font-style:normal}@font-face{font-family:montserratbold;src:url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-bold-webfont.eot);src:url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-bold-webfont.eot?#iefix) format("embedded-opentype"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-bold-webfont.woff2) format("woff2"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-bold-webfont.woff) format("woff"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-bold-webfont.ttf) format("truetype"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-bold-webfont.svg#montserratbold) format("svg");font-weight:400;font-style:normal}@font-face{font-family:montserratregular;src:url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-regular-webfont.eot);src:url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-regular-webfont.eot?#iefix) format("embedded-opentype"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-regular-webfont.woff2) format("woff2"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-regular-webfont.woff) format("woff"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-regular-webfont.ttf) format("truetype"),url(<?php echo get_template_directory_uri();?>)/assets/fonts/montserrat-regular-webfont.svg#montserratregular) format("svg");font-weight:400;font-style:normal}a,body,div,h2,h4,h5,header,html,i,img,label,li,nav,p,section,span,ul{margin:0;padding:0;border:0;font:inherit;vertical-align:baseline}header,nav,section{display:block}html{box-sizing:border-box}*,:after,:before{box-sizing:inherit}body{background:#fff;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased}ul{margin:0 0 1.5em 3em}ul{list-style:disc}body,button{color:#000;font-family:montserratregular,sans-serif;font-size:14px;line-height:1.5}h2,h4,h5{clear:both;font-family:moonlight,sans-serif;line-height:1.2;margin-bottom:20px}h2{font-size:24px}h4{font-size:18px}p{margin-bottom:1.5em}i{font-style:italic}button{border:1px solid #00aa86;border-radius:1px;background:#00aa86;color:#fff;font-size:9pt;font-size:.75rem;line-height:1;padding:.6em 1em .4em;text-transform:uppercase}a{color:#00aa86}.main-navigation{display:none;font-family:montserratregular,sans-serif;position:relative}.site-header h2.description{font-family:moonlight,sans-serif}.main-navigation:after,.main-navigation:before{content:'';display:table}@media screen and (min-width:768px){.main-navigation{display:block}}.main-navigation ul{display:none;list-style:none;margin:0;padding-left:0}.main-navigation li{float:left;position:relative;padding:5px 10px}.main-navigation a{color:#fff;display:inline-block;letter-spacing:.5px;text-decoration:none}.main-navigation .registration-link{padding:5px 10px;background:#00aa86;position:absolute;right:15px}@media screen and (min-width:768px){#mobile-navigation,#mobile-navigation .registration-link{display:none}}.menu-toggle{display:block;margin:0;text-align:center}@media screen and (min-width:480px){.menu-toggle{display:inline-block;float:right;margin-top:20px}}@media screen and (min-width:768px){.menu-toggle{display:none}.main-navigation ul{display:block}}.screen-reader-text{clip:rect(1px,1px,1px,1px);position:absolute !important;height:1px;width:1px}.site-header:after,.site-header:before{content:"";display:table}.site-header .header-top:after,.site-header .header-top:before{content:'';display:table}.site-header .logo{width:200px;position:absolute;top:10px;left:0}@media screen and (min-width:768px){.site-header .logo{width:243px;display:inline-block;left:0;padding-top:30px;position:relative;-webkit-transform:none;-ms-transform:none;transform:none}.site-header h2.description .word3:after{content:'';display:table}}.site-header h2.description{-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%)}.site-header .logo svg path{fill:#fff}.site-header .main-navigation{width:50%;float:right;padding:40px 60px 0 0}.site-header .menu-toggle{position:absolute;top:0;right:0}.site-header .fa{color:#fff;line-height:2;padding:0 10px}.site-header h2.description{color:#fff;letter-spacing:1px;text-align:center;font-size:40px;line-height:1.2;position:absolute;top:20%;left:50%;transform:translateX(-50%)}.site-header h2.description .word1,.site-header h2.description .word2,.site-header h2.description .word3{letter-spacing:3px}@media screen and (min-width:768px){.site-header h2.description .word5:after{content:'';display:table}}.main{max-width:800px;width:100%;margin:0 auto}nav .menu{display:inline-block;float:right}#masthead .social-media{display:none}@media screen and (min-width:768px){#masthead .social-media{display:block;position:absolute;margin:0;padding:0;top:40px;right:0}}#page-header{position:relative}#masthead .social-media li{list-style:none;float:left;display:inline-block}section{padding:30px 0}.remodal h4,.remodal h5{font-family:montserratbold,sans-serif}#page-header{padding-bottom:0;background:#fff;width:100%;z-index:100}.remodal h4{font-size:15px;text-align:left}.remodal h5{font-size:11px;text-align:left;text-transform:uppercase}.remodal p{font-size:9pt;text-align:left;margin-bottom:10px}.remodal img{float:left;margin-bottom:10px}.remodal .fa{color:#00a7e0}.remodal .left,.remodal .right{display:block;width:98%;margin-left:1%}@media screen and (min-width:768px){.remodal .left,.remodal .right{display:inline-block;width:48%}}.remodal .left{float:left;margin-right:2%}.remodal .right{float:right}.schedule ul .fa{display:none}@media screen and (min-width:768px){.schedule ul .fa{padding-top:30px;width:5%}}.sidr{display:none;position:absolute;position:fixed;top:0;height:100%;z-index:999999;width:260px;overflow-x:none;overflow-y:auto;font-family:montserratregular,sans-serif;font-size:15px;background:#1d4388;color:#fff}.sidr .sidr-inner{padding:0 0 15px}.sidr .sidr-inner a svg{width:100%;height:auto;fill:#fff;padding:20px}.sidr.right{left:auto;right:-260px;width:260px}.sidr ul{display:block;margin:0 0 15px;padding:0;border-top:1px solid #142e5e;border-bottom:1px solid #2658b2}.sidr ul li{display:block;margin:0;line-height:3;border-top:1px solid #2658b2;border-bottom:1px solid #142e5e;width:100%}.sidr ul li a{padding:0 15px;display:block;text-decoration:none;text-align:center;color:#fff}.sidr-class-registration-link{background:#00aa86;border-top:1px solid #00ddae;border-bottom:1px solid #00775e;display:block !important;text-align:center;padding:15px}@media screen and (min-width:768px){.sidr-class-registration-link{display:inline-block}}.remodal,[data-remodal-id]{display:none}.remodal-overlay{position:fixed;z-index:9999;top:-5000px;right:-5000px;bottom:-5000px;left:-5000px;display:none;background:rgba(255,255,255,.8)}.remodal-wrapper{position:fixed;z-index:10000;top:0;right:0;bottom:0;left:0;display:none;overflow:auto;text-align:center;-webkit-overflow-scrolling:touch;padding:10px 10px 0}.remodal-wrapper:after{display:inline-block;height:100%;margin-left:-.05em;content:""}.remodal-overlay,.remodal-wrapper{-webkit-backface-visibility:hidden;backface-visibility:hidden}.remodal{position:relative;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;text-size-adjust:100%;box-sizing:border-box;width:100%;margin-bottom:10px;padding:35px;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);color:#2b2e38;background:#f0efe8}.remodal-close{overflow:visible;margin:0;cursor:pointer;text-decoration:none;outline:0;border:0}.remodal-is-initialized{display:inline-block}.remodal-close,.remodal-close:before{position:absolute;top:0;display:block;width:35px}.remodal,.remodal-wrapper:after{vertical-align:middle}.remodal-close{right:0;height:35px;padding:0;transition:color .2s;color:#95979c;background:0}.remodal-close:before{font-family:Arial,"Helvetica CY","Nimbus Sans L",sans-serif !important;font-size:25px;line-height:35px;left:0;content:"\00d7";text-align:center}.remodal-close::-moz-focus-inner{padding:0;border:0}@media only screen and (min-width:641px){.remodal{max-width:500px}}
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
		<div class="header-top" style="width:900px;max-width:100%;margin:0 auto;position:relative;z-index:50;">
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