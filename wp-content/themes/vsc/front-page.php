<?php
	/**
	 * The Front Page of the site.
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 * Learn more: http://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package _sophie
	 */

	get_header(); ?>

<section class="page-header">

	<div class="branding">
		<?php echo file_get_contents('http://dev-viewsourceconf.pantheon.io/wp-content/themes/vsc/assets/images/branding.svg');?>
	</div>
	<nav id="site-navigation" class="main-navigation dark" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav>
	<hr>
</section>

<section id="registration" class="registration">
	<?php get_template_part( 'template-parts/content', 'registration' );?>

</section>

<section id="speakers" class="speakers">
	<?php get_template_part( 'template-parts/content', 'speakers' );?>

</section>

<section id="schedule" class="schedule">
	<?php get_template_part( 'template-parts/content', 'sessions' );?>

</section>

<section id="venue" class="venue">
	<div id="map-overlay">
		<h3><?php _e( 'Venue', 'viewsource' );?></h3>
		<span class="address"><?php _e( 'Gerding Theater at the Armory', 'view_source' );?></span>
		<span><?php _e( '128 NW Eleventh Avenue', 'view_source' );?></span>
		<span><?php _e( 'Portland, OR 97209', 'view_source' );?></span>
		<a class="button" href="<?php _e( '#' );?>"><?php _e( 'Full Venue Info', 'viewsource' );?></a>
	</div>
	<?php viewsource_venue_google_map();?>
</section>
<?php get_footer(); ?>
