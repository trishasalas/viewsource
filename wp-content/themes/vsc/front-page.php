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

<section id="page-header-front-page" class="page-header sticky">
	<?php get_template_part( 'template-parts/content', 'secondary-header' );?>
</section>

<section id="latest-news" class="latest-news">
<?php get_template_part( 'template-parts/content', 'post' );?>
</section>

<section id="registration" class="registration">
	<?php get_template_part( 'template-parts/content', 'registration' );?>
</section>

<section id="speakers" class="speakers speakers-front">
	<?php get_template_part( 'template-parts/content', 'speakers' );?>
</section>

<section id="schedule" class="schedule schedule-front"  style="padding:0 80px;">
	<?php get_template_part( 'template-parts/content', 'sessions-front' );?>
</section>

<section id="venue" class="venue">
	<?php get_template_part( 'template-parts/content', 'map' );?>
</section>

<section id="twitter" class="twitter">
	<h2><?php _e( 'Twitter' );?></h2>
	<div class="content-wrap">
		<div class="tweets">
			<?php if ( function_exists( "display_tweets" ) ) { display_tweets(); };?>
		</div>
	</div>
</section>


<?php get_footer(); ?>
