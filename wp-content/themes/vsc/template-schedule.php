<?php
	/**
	 * Template Name: Schedule
	 *
	 * Learn more: http://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package view_source
	 */

	get_header(); ?>
<?php
	$reg_time_one = get_field( 'vs_day_one_registration_time' );
	$reg_time_two = get_field( 'vs_day_one_registration_time' );
	$reg_time_three = get_field( 'vs_day_one_registration_time' );
	$time = 'g:i a';?>

<section id="schedule" class="schedule-inner">

<h2><?php _e( 'Schedule', 'view_source' );?></h2>
<p><?php echo esc_html( get_post_meta( get_the_ID(), 'vs_sessions_intro_text', true ) );?></p>


	<ul class="day">
		<li><?php the_field ( 'vs_day_one_date' );;?> </li>
		<li><?php the_field ( 'vs_day_one_heading' );?> </li>
	</ul>
	<ul class="header">
		<li><?php echo date ( $time, $reg_time_one ); ?></li>
		<li><?php _e( 'Registration Opens' );?></li>
	</ul>

	<?php view_source_session_times( 20151102 );?>


	<ul class="day">
		<li><?php the_field ( 'vs_day_two_date' );?> </li>
		<li><?php the_field ( 'vs_day_two_heading' );?> </li>
	</ul>
	<ul class="header">
		<li><?php echo date ( $time, $reg_time_two ); ?></li>
		<li><?php _e( 'Registration Opens');?></li>
	</ul>

	<?php view_source_session_times( 20151103 );?>
</section>
<?php get_footer(); ?>
