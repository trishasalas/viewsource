<?php
	/**
	 * The template for displaying all single posts.
	 *
	 * @package view_source
	 */

	get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
					$speaker = esc_html( get_post_meta( $post->ID, 'view_source_speaker', true ) );
					$slides = esc_url( get_post_meta( $post->ID, 'view_source_session_slides_link', true ) );
					if( $speaker ) : echo '<p>Speaker: ' . get_the_title( $speaker ) . '</p>'; endif;
					if ( $slides ) : echo '<a class="session-slides" href="' . $slides . '">Session Slides</a>'; endif;
					?>

				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php view_source_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

			<?php //the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
