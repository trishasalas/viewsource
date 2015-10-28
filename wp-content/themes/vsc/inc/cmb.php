<?php
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

    $sessions = array(
        array(
            'id'      => 'vs_discussion',
            'name'    => 'Is this a Discussion?',
            'type'    => 'select',
            'default' => 'select_one',
            'options' => array(
                'select_one' => 'Select One',
                'yes' => 'Yes',
                'no' => 'No',
            ),
            'cols' => 2
        ),
        array(
            'id' => 'vs_datetime',
            'name' => 'Session Date',
            'type' => 'datetime_unix',
            'cols' => 3
        ),
        array(
            'id' => 'view_source_speaker',
            'name' => 'Speaker',
            'type' => 'post_select',
            'use_ajax' => true,
            'query' => array( 'post_type' => 'speaker' ),
            'cols' => 7,
            'repeatable' => true
        ),
    );

    $meta_boxes[] = array(
        'title' => 'Session Time/Speaker',
        'pages' => 'session',
        'fields' => $sessions,
    );

	$session_location = array(
		array(
			'id' => 'view_source_session_location',
			'name' => 'Location',
			'type' => 'text'
		)
	);

	$meta_boxes[] = array(
		'title' => 'Session Location',
		'pages' => 'session',
		'fields' => $session_location
	);

    $speakers = array(
        array(
            'id' => 'view_source_speaker_twitter',
            'name' => 'Twitter Handle',
            'type' => 'text',
            'cols' => 6
        ),
        array(
            'id' => 'view_source_speaker_session',
            'name' => 'Session',
            'type' => 'post_select', 'use_ajax' => true,
            'query' => array( 'post_type' => 'session' ),
            'cols' => 6
        ),
    );

    $meta_boxes[] = array(
        'title' => 'Speaker Info',
        'pages' => 'speaker',
        'fields' => $speakers
    );

    return $meta_boxes;

}
add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
