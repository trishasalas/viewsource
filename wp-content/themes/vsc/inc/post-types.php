<?php
	/*
	 * Custom post types for the theme.
	 */

	// Register Custom Post Type
	function vs_speakers_custom_post_type() {

		$labels = array(
			'name'                => _x( 'Speakers', 'Post Type General Name', 'view_source' ),
			'singular_name'       => _x( 'Speaker', 'Post Type Singular Name', 'view_source' ),
			'menu_name'           => __( 'Speakers', 'view_source' ),
			'name_admin_bar'      => __( 'Speaker', 'view_source' ),
			'parent_item_colon'   => __( 'Parent Item:', 'view_source' ),
			'all_items'           => __( 'All Items', 'view_source' ),
			'add_new_item'        => __( 'Add New Item', 'view_source' ),
			'add_new'             => __( 'Add New', 'view_source' ),
			'new_item'            => __( 'New Item', 'view_source' ),
			'edit_item'           => __( 'Edit Item', 'view_source' ),
			'update_item'         => __( 'Update Item', 'view_source' ),
			'view_item'           => __( 'View Item', 'view_source' ),
			'search_items'        => __( 'Search Item', 'view_source' ),
			'not_found'           => __( 'Not found', 'view_source' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'view_source' ),
		);
		$args = array(
			'label'               => __( 'Speaker', 'view_source' ),
			'description'         => __( 'Speakers for the Event.', 'view_source' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-microphone',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'speaker', $args );

	}
	add_action( 'init', 'vs_speakers_custom_post_type', 0 );

	// Register Custom Post Type
	function vs_sponsors_custom_post_type() {

		$labels = array(
			'name'                => _x( 'Sponsors', 'Post Type General Name', 'view_source' ),
			'singular_name'       => _x( 'Sponsor', 'Post Type Singular Name', 'view_source' ),
			'menu_name'           => __( 'Sponsors', 'view_source' ),
			'name_admin_bar'      => __( 'Sponsors', 'view_source' ),
			'parent_item_colon'   => __( 'Parent Item:', 'view_source' ),
			'all_items'           => __( 'All Items', 'view_source' ),
			'add_new_item'        => __( 'Add New Item', 'view_source' ),
			'add_new'             => __( 'Add New', 'view_source' ),
			'new_item'            => __( 'New Item', 'view_source' ),
			'edit_item'           => __( 'Edit Item', 'view_source' ),
			'update_item'         => __( 'Update Item', 'view_source' ),
			'view_item'           => __( 'View Item', 'view_source' ),
			'search_items'        => __( 'Search Item', 'view_source' ),
			'not_found'           => __( 'Not found', 'view_source' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'view_source' ),
		);
		$args = array(
			'label'               => __( 'Sponsor', 'view_source' ),
			'description'         => __( 'Speakers for the Event.', 'view_source' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-thumbs-up',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'sponsor', $args );

	}
	add_action( 'init', 'vs_sponsors_custom_post_type', 0 );

	// Register Custom Post Type
	function vs_session_custom_post_type() {

		$labels = array(
			'name'                => _x( 'Sessions', 'Post Type General Name', 'view_source' ),
			'singular_name'       => _x( 'Session', 'Post Type Singular Name', 'view_source' ),
			'menu_name'           => __( 'Sessions', 'view_source' ),
			'name_admin_bar'      => __( 'Session', 'view_source' ),
			'parent_item_colon'   => __( 'Parent Item:', 'view_source' ),
			'all_items'           => __( 'All Items', 'view_source' ),
			'add_new_item'        => __( 'Add New Item', 'view_source' ),
			'add_new'             => __( 'Add New', 'view_source' ),
			'new_item'            => __( 'New Item', 'view_source' ),
			'edit_item'           => __( 'Edit Item', 'view_source' ),
			'update_item'         => __( 'Update Item', 'view_source' ),
			'view_item'           => __( 'View Item', 'view_source' ),
			'search_items'        => __( 'Search Item', 'view_source' ),
			'not_found'           => __( 'Not found', 'view_source' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'view_source' ),
		);
		$args = array(
			'label'               => __( 'Session', 'view_source' ),
			'description'         => __( 'Conference sessions.', 'view_source' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-lightbulb',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'session', $args );

	}
	add_action( 'init', 'vs_session_custom_post_type', 0 );


	// Register Custom Taxonomy
	function vs_sponsors_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Sponsor Types', 'Taxonomy General Name', 'view_source' ),
			'singular_name'              => _x( 'Sponsor Type', 'Taxonomy Singular Name', 'view_source' ),
			'menu_name'                  => __( 'Sponsor Types', 'view_source' ),
			'all_items'                  => __( 'All Items', 'view_source' ),
			'parent_item'                => __( 'Parent Item', 'view_source' ),
			'parent_item_colon'          => __( 'Parent Item:', 'view_source' ),
			'new_item_name'              => __( 'New Sponsor Type', 'view_source' ),
			'add_new_item'               => __( 'Add New Sponsor Type', 'view_source' ),
			'edit_item'                  => __( 'Edit Item', 'view_source' ),
			'update_item'                => __( 'Update Item', 'view_source' ),
			'view_item'                  => __( 'View Item', 'view_source' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'view_source' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'view_source' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'view_source' ),
			'popular_items'              => __( 'Popular Items', 'view_source' ),
			'search_items'               => __( 'Search Items', 'view_source' ),
			'not_found'                  => __( 'Not Found', 'view_source' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
		);
		register_taxonomy( 'sponsor_type', array( 'sponsor' ), $args );

	}
	add_action( 'init', 'vs_sponsors_taxonomy', 0 );