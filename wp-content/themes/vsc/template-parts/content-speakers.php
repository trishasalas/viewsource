<?php
	/*
	 * Template part for the front page Speakers section.
	 */
	?>
	<h2><?php _e( 'Speakers', 'view_source' );?></h2>
	<p><?php echo esc_html( get_post_meta( get_the_ID(), 'vs_speakers_intro_text', true ) );?></p>

	<?php
	$posts = get_field('vs_speakers_list');
	if( $posts ): ?>
		<ul>
			<?php foreach( $posts as $post ):?>
				<?php setup_postdata( $post ); ?>
				<li>
					<a href="<?php the_permalink(); ?>"><i class="fa fa-plus"></i></a>
					<span class="speaker-info">
						<a class="speaker-name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<span class="company"><?php the_field('company'); ?></span>
					</span>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>