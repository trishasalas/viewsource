<?php
	/*
	 * Template part for the front page Speakers section.
	 */
?>
<h2><?php _e ( 'Speakers', 'view_source' ); ?></h2>
<p><?php echo esc_html ( get_post_meta ( get_the_ID (), 'vs_speakers_intro_text', true ) ); ?></p>

<?php
	$posts = get_field ( 'vs_speakers_list' );
	if ( $posts ):
		//	var_dump($posts);
		?>
		<ul>
			<?php foreach ( $posts as $post ): ?>
				<?php setup_postdata ( $post ); ?>
				<li>
					<a href="#<?php echo $post->ID; ?>"><i class="fa fa-plus"></i></a>
					<span class="speaker-info">
						<a class="speaker-name" href="#<?php echo $post->ID; ?>"><?php the_title (); ?></a>
						<span class="company"><?php the_field ( 'company' ); ?></span>
					</span>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php wp_reset_postdata (); ?>
	<?php endif; ?>


<?php
	$posts = get_field ( 'vs_speakers_list' );
	if ( $posts ):
		foreach ( $posts as $post ):
			setup_postdata ( $post );
			$session = get_post_meta ( $post->ID, 'vs_speaker_session', true );
			?>
			<div class="remodal" data-remodal-id="<?php echo $post->ID; ?>">
				<button data-remodal-action="close" class="remodal-close"></button>
				<div class="left">
					<?php echo get_the_post_thumbnail ( $post->ID ); ?>
					<h4><?php the_title (); ?></h4>
					<p class="company"><?php the_field ( 'company' ); ?></p>
				</div>
				<div class="right">
					<h5><?php if( $session ) : echo get_the_title ( $session[ 0 ] ); endif; ?></h5>
					<p><?php if( $session ) : echo get_the_content ( $session[ 0 ] ); endif; ?></p>
				</div>

			</div>

		<?php endforeach; ?>

		<?php wp_reset_postdata (); ?>
	<?php endif; ?>

