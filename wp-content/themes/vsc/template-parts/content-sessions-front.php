<?php
	/*
	 * Template part for the front page Speakers section.
	 */
?>
	<h2><?php _e ( 'Schedule', 'view_source' ); ?></h2>
	<p><?php echo esc_html ( get_post_meta ( get_the_ID (), 'vs_schedule_intro_text', true ) ); ?></p>
	<?php
	 $livestream_info = esc_html ( get_post_meta ( get_the_ID (), 'vs_live_stream_info', true ) );
	 if( $livestream_info ) :?>
	<h3><?php _e ( 'Live Stream', 'view_source' ); ?></h3>
	<p><?php echo $livestream_info; ?></p>
		 <?php endif;?>


<?php
	$posts = get_field ( 'vs_scheduled_sessions' );
	//var_dump($posts);
	if ( $posts ):?>
		<?php foreach ( $posts as $post ): // variable must be called $post (IMPORTANT)?>
			<?php setup_postdata ( $post );
			$datetime = get_post_meta ( $post->ID, 'view_source_overview_session_date', true );
			$time     = 'g:i a';
			?>
			<ul>
				<li class="time">
					<time>
						<?php echo $datetime; ?>
					</time>
				</li>
				<li class="session-info">
					<h4>
						<a href="#<?php echo $post->ID; ?>"><?php echo get_the_title ( $post->ID ); ?></a>
					</h4>
					<?php
						$speaker = get_post_meta( $post->ID, 'vs_session_speaker', true ); if( $speaker ) :
						echo '<p class="speaker-name">' . get_the_title( $speaker[0] ) . '</p>'; endif;

						$speaker_company = get_post_meta( $speaker[0], 'company', true ); if( $speaker_company ) :
						echo '<p class="company">' . $speaker_company . '</p>'; endif;
					?>
				</li>
				<li>
					<a href="#<?php echo $post->ID; ?>"><i class="fa fa-plus"></i></a>
				</li>
			</ul>
		<?php endforeach; ?>
		<a class="btn btn-primary" href="/schedule">See Full Schedule</a>
		<?php wp_reset_postdata (); ?>
	<?php endif; ?>
	<?php 
	$sessions = get_posts(
		array(
			'post_type' => 'session',
			'post_status' => 'publish',
			'posts_per_page' => -1,

		));
	foreach ( $sessions as $session ):
			?>
			<div class="remodal" data-remodal-id="<?php echo $session->ID; ?>">
				<button data-remodal-action="close" class="remodal-close"></button>
				<h4><?php echo get_the_title( $session->ID ); ?></h4>
				<p><?php echo wpautop( get_post_field( 'post_content', $session->ID ) );?></p>
			</div>
			<?php endforeach; ?>