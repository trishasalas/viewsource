<?php
	/*
	 * Meta boxes for our theme.
	 *
	 */
	class Start_Time {

		public function __construct() {

			if ( is_admin() ) {
				add_action( 'load-post.php',     array( $this, 'init_metabox' ) );
				add_action( 'load-post-new.php', array( $this, 'init_metabox' ) );
			}

		}

		public function init_metabox() {

			add_action( 'add_meta_boxes', array( $this, 'add_metabox'  )        );
			add_action( 'save_post',      array( $this, 'save_metabox' ), 10, 2 );

		}

		public function add_metabox() {

			add_meta_box(
				'vs_session_start_time',
				__( 'Session Start Time', 'view_source' ),
				array( $this, 'render_metabox' ),
				'session',
				'advanced',
				'default'
			);

		}

		public function render_metabox( $post ) {

			// Retrieve an existing value from the database.
			$vs_vs_session_start_time = get_post_meta( $post->ID, 'vs_vs_session_start_time', true );

			// Set default values.
			if( empty( $vs_vs_session_start_time ) ) $vs_vs_session_start_time = '';

			// Form fields.
			echo '<table class="form-table">';

			echo '	<tr>';
			echo '		<th><label for="vs_vs_session_start_time" class="vs_vs_session_start_time_label">' . __( '', 'view_source' ) . '</label></th>';
			echo '		<td>';
			echo '			<input type="time" id="vs_vs_session_start_time" name="vs_vs_session_start_time" class="vs_vs_session_start_time_field" placeholder="' . esc_attr__( '', 'view_source' ) . '" value="' . esc_attr__( $vs_vs_session_start_time ) . '">';
			echo '		</td>';
			echo '	</tr>';

			echo '</table>';

		}

		public function save_metabox( $post_id, $post ) {

			// Check if it's not an autosave.
			if ( wp_is_post_autosave( $post_id ) )
				return;

			// Check if it's not a revision.
			if ( wp_is_post_revision( $post_id ) )
				return;

			// Sanitize user input.
			$vs_new_vs_session_start_time = isset( $_POST[ 'vs_vs_session_start_time' ] ) ? sanitize_text_field( $_POST[ 'vs_vs_session_start_time' ] ) : '';

			// Update the meta field in the database.
			update_post_meta( $post_id, 'vs_vs_session_start_time', $vs_new_vs_session_start_time );

		}

	}

	new Start_Time;