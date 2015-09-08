<?php
	/**
	 * Template Name: Schedule
	 *
	 * Learn more: http://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package _sophie
	 */

	get_header(); ?>

<section id="schedule" class="schedule">
	<?php
		$posts = get_field( 'vs_scheduled_sessions', 1031 );
		//var_dump($posts);
		if( $posts ): ?>
			<?php foreach( $posts as $post ): // variable must be called $post (IMPORTANT)?>
				<?php setup_postdata( $post );
				$date = get_field('date', 1031);?>
				<ul>
					<li class="time">
						<time>
							<?php echo $date;?>
							<?php the_field('vs_session_time'); ?>
						</time>
					</li>
					<li class="featured-image">
						<?php echo get_the_post_thumbnail( $post->ID );?>
					</li>
					<li class="session-info">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
					<li>
						<a href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i></a>
					</li>
				</ul>
			<?php endforeach; ?>
			<a class="btn primary" href="/schedule">See Full Schedule</a>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
</section>

<?php get_footer(); ?>
