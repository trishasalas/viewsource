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
	 * @package view_source
	 */

	get_header( 'home' ); ?>

<section id="page-header" class="page-header">
	<div class="branding">
		<?php echo file_get_contents( get_template_directory_uri() . '/assets/images/branding.svg' );?>
	</div>
	<nav id="site-navigation" class="main-navigation dark" role="navigation">
		<?php view_source_registration_link();?>
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
	<?php get_template_part( 'template-parts/content', 'sessions-front' );?>
</section>

<section id="venue" class="venue">
	<?php get_template_part( 'template-parts/content', 'map' );?>
</section>

<?php get_footer(); ?>
