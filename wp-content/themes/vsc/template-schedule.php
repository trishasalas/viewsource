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
        <?php vs_scheduled_sessions( '20151102' );?>
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
        <?php vs_scheduled_sessions( '20151103' );?>

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
        <?php vs_scheduled_sessions( '20151104');?>

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
