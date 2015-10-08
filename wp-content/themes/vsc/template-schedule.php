<?php
	/**
	 * Template Name: Schedule
	 *
	 * Learn more: http://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package view_source
	 */

	get_header(); ?>

	<section id="schedule" class="schedule-inner">

		<h2><?php _e( 'Schedule', 'view_source' );?></h2>
		<p><?php echo esc_html( get_post_meta( get_the_ID(), 'vs_sessions_intro_text', true ) );?></p>
		<!-- First Day -->
		<div class="day-one">
			<!-- Day Header -->
			<div class="day-header">
				<div class="day-header-date">
					<h3><?php _e( 'November 2', 'view_source' );?></h3>
				</div>	
			</div>

			<!-- Time Header -->
			<div class="time-header">
				<div class="time-header-time">
					<h3>
						<?php _e( '4:30 pm', 'view_source' );?>
					</h3>
				</div>
				<div class="time-header-title">
					<h3>
						<?php _e( 'Registration Opens', 'view_source' );?>
					</h3>
				</div>
			</div>
			<?php
			$posts = get_posts( array(
				'post_type' => 'session',
				'post_status' => 'publish',
				'meta_key' => strtotime( 'view_source_session_time' ),
				'order_by' => 'meta_key',
				'order' => 'DESC',
				'posts_per_page' => -1,
				'meta_query' => array(
					array(
						'key' => 'view_source_session_date',
						'value' => '11/02/2015',
						'compare' => '=',
						)
					))
			);
			if( $posts ):
				foreach( $posts as $post ) {
					$time = strtotime( get_post_meta( $post->ID, 'view_source_session_time', true ) );
					$speaker = get_post_meta( $post->ID, 'view_source_speaker', true );

					echo '<div class="single-session">';

					if( '' != $time ) :
						echo '<div class="time">' . date( 'g:i a', $time ) . '</div>';
					endif;

					if( '' != $speaker ) :
						echo '<div class="headshot">' . get_the_post_thumbnail( $speaker, 'speaker-photo' ) . '</div>';
					endif;

					if( '' != $speaker ) :
						echo '<a href="' . get_permalink( $speaker ) . '">';
					echo '<i class="fa fa-plus"></i>';
					echo '<div class="speaker">' . get_the_title( $speaker ) . '</div>';
					echo '</a>';
					endif;

					if( '' != $post->post_title ) :
						echo '<a href="' . get_permalink( $post->ID ) . '">';
					echo '<div class="title">' . $post->post_title . '</div>';
					echo '</a>';
					endif;

					echo '</div>';
				}
				endif;?>
			</div>

			<div class="day-two">

				<div class="day-header">
					<div class="day-header-date">
						<h3>
							<?php _e( 'November 3', 'view_source' );?>
						</h3>
					</div>
				</div>

				<!-- Time Header -->
				<div class="time-header">
					<div class="time-header-time">
						<h3>
							<?php _e( '8:00 am', 'view_source' );?>
						</h3>
					</div>
					<div class="time-header-title">
						<h3>
							<?php _e( 'Registration Opens', 'view_source' );?>
						</h3>
					</div>
				</div>
				<?php

				$posts = get_posts(
					array(
					'post_type' => 'session',
        			'order' => 'ASC',
        			'orderby' => 'meta_value',
        			'meta_key' => 'vs_datetime',
        			'posts_per_page' => -1,
        			)
					);
					//$sessions = new WP_Query( $args );
					// echo '<pre>';
					// var_dump($posts);
					// echo '</pre>';
				
					foreach( $posts as $post ) {
						$timestamp = get_post_meta( $post->ID, 'vs_datetime', true );
						$date = gmdate("Ymd", $timestamp);
						$time = gmdate("g:i a", $timestamp);
						$speaker = get_post_meta( $post->ID, 'view_source_speaker', true );
						if( $date == '20151103' ) :

						echo '<div class="single-session">';

						if( '' != $time ) :
							echo '<div class="time">' . $time  . '</div>';
						endif;

						if( '' != $speaker ) :
							echo '<div class="headshot">' . get_the_post_thumbnail( $speaker, 'speaker-photo' ) . '</div>';
						endif;

						if( '' != $speaker ) :
							echo '<a href="' . get_permalink( $speaker ) . '">';
							echo '<i class="fa fa-plus"></i>';
							echo '<div class="speaker">' . get_the_title( $speaker ) . '</div>';
						echo '</a>';
						endif;

						if( '' != $post->post_title ) :
							echo '<a href="' . get_permalink( $post->ID ) . '">';
						echo '<div class="title">' . $post->post_title . '</div>';
						echo '</a>';
						endif;

						echo '</div>';
						endif;
					}
					?>
				</div>

				<div class="day-three">

					<div class="day-header">
						<div class="day-header-date">
							<h3>
								<?php _e( 'November 4', 'view_source' );?>
							</h3>
						</div>
					</div>

					<!-- Time Header -->
					<div class="time-header">
						<div class="time-header-time">
							<h3>
								<?php _e( '8:00 am', 'view_source' );?>
							</h3>
						</div>
						<div class="time-header-title">
							<h3>
								<?php _e( 'Registration Opens', 'view_source' );?>
							</h3>
						</div>
					</div>
					<?php
					$posts = get_posts(
					array(
					'post_type' => 'session',
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'meta_key'    => 'vs_datetime',
					'order_by' => 'meta_value_num',
					'order' => ASC
						        )
				);
			
				if( $posts ):
					foreach( $posts as $post ) {
						$timestamp = get_post_meta( $post->ID, 'vs_datetime', true );
						$date = gmdate("Ymd", $timestamp);
						$time = gmdate("g:i a", $timestamp);
						$speaker = get_post_meta( $post->ID, 'view_source_speaker', true );
						if( $date == '20151104' ) :

							echo '<div class="single-session">';

							if( '' != $time ) :
								echo '<div class="time">' . $time . '</div>';
							endif;

							if( '' != $speaker ) :
								echo '<div class="headshot">' . get_the_post_thumbnail( $speaker, 'speaker-photo' ) . '</div>';
							endif;

							if( '' != $speaker ) :
								echo '<a href="#' . $speaker . '">';
							echo '<i class="fa fa-plus"></i>';
							echo '<div class="speaker">' . get_the_title( $speaker ) . '</div>';
							echo '</a>';
							endif;

							if( '' != $post->post_title ) :
								echo '<a href="#' . $post->ID . '">';
							echo '<div class="title">' . $post->post_title . '</div>';
							echo '</a>';
							endif;

							echo '</div>';
							endif;
						}
						endif;?>
					</div>
				</section>
				<!-- Begin Modals -->
				<?php 
					$speakers = get_posts(
						array(
							'post_type' => 'speaker',
							'post_status' => 'publish',
							'posts_per_page' => -1,

						));
					foreach ( $speakers as $speaker ):
			?>
			<div class="remodal" data-remodal-id="<?php echo $speaker->ID; ?>">
				<button data-remodal-action="close" class="remodal-close"></button>
				<h4><?php echo get_the_title( $speaker->ID ); ?></h4>
				<div class="featured-image">
					<?php echo get_the_post_thumbnail( $speaker->ID, 'speaker-photo' );?>
				</div>
				<p><?php echo wpautop( get_post_field( 'post_content', $speaker->ID ) );?></p>
			</div>
			<?php endforeach; ?>


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

				<?php get_footer(); ?>
