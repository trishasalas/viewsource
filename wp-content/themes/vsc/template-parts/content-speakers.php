<?php
	/*
	 * Template part for the front page Speakers section.
	 */
?>
<h2><?php _e ( 'Speakers', 'view_source' ); ?></h2>
<p><?php echo esc_html ( get_post_meta ( get_the_ID (), 'vs_speakers_intro_text', true ) ); ?></p>


	<ul class="speakers">
		<?php

		$speakers = get_posts(
			array(
				'post_type' => 'speaker',
				'post_status' => 'publish',
				'posts_per_page' => -1,

			));
		foreach( $speakers as $speaker ) {
			$speaker_session = esc_html( get_post_meta( $speaker->ID, 'view_source_speaker_session', true ) );

			echo '<li class="speaker">';
			echo '<a href="#' . $speaker->ID . '"><i class="fa fa-plus"></i></a>';
			echo '<span class="speaker-info">';
			echo '<a class="speaker-name" href="#' . $speaker->ID . '">' . $speaker->post_title . '</a>';
			echo '<span class="company">' . get_the_title( $speaker_session ) . '</span>';
			echo '</li>';
		}
	?>
</ul>


<?php
	$posts = get_field ( 'vs_speakers_list' );
	if ( $posts ):
		foreach ( $posts as $post ):
			setup_postdata ( $post );
			$session = get_post_meta ( $post->ID, 'vs_speaker_session', true );
			$twitter = esc_html( get_post_meta ( $post->ID, 'vs_speaker_twitter_handle', true ) );
			?>
			<div class="remodal" data-remodal-id="<?php echo $post->ID; ?>">
				<button data-remodal-action="close" class="remodal-close"></button>
				<div class="left">
					<?php echo get_the_post_thumbnail ( $post->ID, 'speaker-photo'); ?>
					<h4><?php the_title (); ?></h4>
					<p class="company"><?php the_field ( 'company' ); ?></p>
					<?php if( $twitter ) :
						echo '<p class="twitter-handle">';
						echo '<a href="https://twitter.com/' . $twitter . '">';
						echo '<i class="fa fa-twitter fa-2x"></i>';
						echo '@' . $twitter . '</a></p>';
						endif;
?>
				</div>
				<div class="right">
					<h5><?php if( $session ) : echo get_the_title ( $session[ 0 ] ); endif; ?></h5>
					<p><?php if( $session ) : echo get_the_content ( $session[ 0 ] ); endif; ?></p>
				</div>

			</div>

		<?php endforeach; ?>

		<?php wp_reset_postdata (); ?>
	<?php endif; ?>

