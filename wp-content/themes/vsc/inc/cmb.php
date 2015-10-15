<?php
	/**
	 * Define the metabox and field configurations.
	 *
	 * @param  array $meta_boxes
	 * @return array
	 */
	function cmb_sample_metaboxes( array $meta_boxes ) {

		$session_overview = array(
			array( 
				'id' => 'view_source_overview_session_date', 
				'name' => 'Date', 
				'desc' => 'Use this date input for the overview posts on the front page.',
				'type' => 'date' 
				),
		);

		$meta_boxes[] = array(
			'title' => 'Overview Session Date',
			'pages' => 'session',
			'priority' => 'high',
			'fields' => $session_overview,
		);

		$sessions = array(
			array( 'id' => 'vs_datetime', 'name' => 'Session Date', 'type' => 'datetime_unix',  'cols' => 4 ),
			//array( 'id' => 'view_source_session_time', 'name' => 'Session Time', 'type' => 'time',  'cols' => 4 ),
			array( 'id' => 'view_source_speaker', 'name' => 'Speaker', 'type' => 'post_select', 'use_ajax' => true, 'query' => array( 'post_type' => 'speaker' ),  'cols' => 4, 'repeatable' => 'true' ),
		);

		$meta_boxes[] = array(
			'title' => 'Session Time/Speaker',
			'pages' => 'session',
			'fields' => $sessions,
		);

        return $meta_boxes;

	}
	add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
