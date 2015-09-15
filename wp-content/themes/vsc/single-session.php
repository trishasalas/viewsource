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
				</div><!-- .entry-content -->


				<div class="session-meta">
					<div class="date">
						<?php $date = get_post_meta( get_the_ID(), 'session', true ); $format =  'm-d-Y';?>
						<h3><span class="date-date"><?php _e('Date ', 'view_source' );?></span><span class="actual-date"><?php echo date( $format, $date );?></span></h3>


					</div>
					<div class="time">
						<h3><?php _e('Time', 'view_source' );?></h3>
						<?php $date = get_post_meta( get_the_ID(), 'session', true ); $format =  'h:i a';?>
						<p><?php echo date( $format, $date );?></p>
					</div>
					<div class="speaker">
						<h3><?php _e('Speaker', 'view_source' );?></h3>
						<?php $speaker_id = get_post_meta( get_the_ID(), 'speaker', true ); ?>
						<p><?php echo get_the_title( $speaker_id );?></p>
					</div>

				</div>

				<footer class="entry-footer">
					<?php view_source_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

			<?php the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
