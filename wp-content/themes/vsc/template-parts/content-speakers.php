<?php
	/*
	 * Template part for the front page Speakers section.
	 */
	?>
	<h2><?php _e( 'Speakers', 'view_source' );?></h2>
	<p><?php echo esc_html( get_post_meta( get_the_ID(), 'vs_speakers_intro_text', true ) );?></p>

	<?php
	$posts = get_field('vs_speakers_list');
	if( $posts ):
		//var_dump($posts);?>
		<ul>
			<?php foreach( $posts as $post ):?>
				<?php setup_postdata( $post ); ?>
				<li>
					<a class="md-trigger" data-modal="modal-5" href="#<?php echo $post->ID; ?>"><i class="fa fa-plus"></i></a>
					<span class="speaker-info">
						<a class="speaker-name" href="#<?php echo $post->ID; ?>"><?php the_title(); ?></a>
						<span class="company"><?php the_field('company'); ?></span>
					</span>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

<div class="md-modal md-effect-1" id="modal-1">
	<div class="md-content">
		<h3>Modal Dialog</h3>
		<div>
			<p>This is a modal window. You can do the following things with it:</p>
			<ul>
				<li><strong>Read:</strong> Modal windows will probably tell you something important so don't forget to read what it says.</li>
				<li><strong>Look:</strong> modal windows enjoy a certain kind of attention; just look at it and appreciate its presence.</li>
				<li><strong>Close:</strong> click on the button below to close the modal.</li>
			</ul>
			<button class="md-close">Close me!</button>
		</div>
	</div>
</div>
<div class="md-overlay"></div>

