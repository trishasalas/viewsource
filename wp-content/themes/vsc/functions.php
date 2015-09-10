<?php
/**
 * view_source functions and definitions
 *
 * @package view_source
 */

if ( ! function_exists( 'view_source_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function view_source_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on view_source, use a find and replace
	 * to change 'view_source' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'view_source', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'view_source' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // view_source_setup
add_action( 'after_setup_theme', 'view_source_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function view_source_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'view_source_content_width', 810 );
}
add_action( 'after_setup_theme', 'view_source_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function view_source_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'view_source' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'view_source_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function view_source_scripts() {
	//wp_enqueue_style( 'view_source-style', get_stylesheet_uri() );
	wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'vsc-style', get_template_directory_uri() . '/style.min.css' );

	wp_enqueue_script( 'view_source-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'sidr', get_template_directory_uri() . '/assets/js/sidr.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'touch-swipe', get_template_directory_uri() . '/assets/js/touchswipe.min.js', array( 'jquery' ), '1.6', true );
	wp_enqueue_script( 'view_source-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'lettering-js', get_template_directory_uri() . '/assets/js/lettering.js', array( 'jquery' ), '.7', false );
	wp_enqueue_script( 'vs-js', get_template_directory_uri() . '/assets/js/vs-functions.js', array( 'jquery', 'lettering-js' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'view_source_scripts' );


require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';

	// Fixes Chrome Slim Paint Bug in WordPress Admin Panel
	function chromefix_inline_css() {
		wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
	}
	add_action('admin_enqueue_scripts', 'chromefix_inline_css');