<?php
	/*
	 * Template part for Latest News.
	 */
?>
<h2><?php _e ( 'Latest News', 'view_source' ); ?></h2>
	<div class="bxslider">
		<?php

		$posts = get_posts(
			array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,

			));
		foreach( $posts as $post ) {
			if( $posts ) :
			?>

			<div class="article" style="visibility:hidden;">
			<div class="featured-image"><?php echo get_the_post_thumbnail( $post->ID, 'posts-front' ); ?>
			</div>
				<div class="excerpt">
					<h3><a href="<?php echo the_permalink( $post->ID );?>"><?php echo $post->post_title;?></a></h3>
					<p><?php echo wp_trim_words( $post->post_content, 30 );?>
					<a class="read-more-button" href="<?php echo the_permalink( $post->ID );?>"><?php _e( 'More', 'viewsource' );?></a></p>
				</div>
			</div>
			<?php
				endif;
		}

		wp_reset_postdata(); ?>
	</div>
