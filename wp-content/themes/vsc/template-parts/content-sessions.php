<?php
	/*
	 * Template part for the front page Speakers section.
	 */
?>
	<h2><?php _e( 'Schedule', 'view_source' );?></h2>
	<p><?php echo esc_html( get_post_meta( get_the_ID(), 'vs_sessions_intro_text', true ) );?></p>

<?php
	$posts = get_field( 'vs_scheduled_sessions' );
	//var_dump($posts);
	if( $posts ): ?>
			<?php foreach( $posts as $post ): // variable must be called $post (IMPORTANT)?>
				<?php setup_postdata( $post );?>
				<ul>
					<li class="time">
						<time>
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
		<a class="btn btn-primary" href="/schedule">See Full Schedule</a>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>