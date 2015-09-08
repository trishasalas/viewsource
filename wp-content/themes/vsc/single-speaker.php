<?php
	/**
	 * The template for displaying archive pages.
	 *
	 * Learn more: http://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package _sophie
	 */

	get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							               'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_sophie_' ),
							               'after'  => '</div>',
						               ) );
					?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php _sophie__entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

		<?php endif; ?>

	</main><!-- #main -->

</div><!-- #primary -->

<?php get_footer(); ?>
