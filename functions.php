<?php
/**
 * designdew functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package designdew
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'dd_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dd_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on designdew, use a find and replace
		 * to change 'dd' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dd', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'dd' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'dd_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'dd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dd_content_width', 640 );
}
add_action( 'after_setup_theme', 'dd_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dd_widgets_init() {
	// First footer widget area, located in the footer. Empty by default.
	register_sidebar(
		array(
			'name' => __( 'First Footer Widget Area', 'compass' ),
			'id' => 'first-footer-widget-area',
			'description' => __( 'The first footer widget area', 'compass' ),
			'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
					'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>'
		)
	);
	
	// Second Footer Widget Area, located in the footer. Empty by default.
	register_sidebar(
		array(
			'name' => 'Second Footer Widget Area',
			'id' => 'second-footer-widget-area',
			'description' => 'The second footer widget area',
			'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
					'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>',
		)
	);
	
	// Third Footer Widget Area, located in the footer. Empty by default.
	register_sidebar(
		array(
			'name' => 'Third Footer Widget Area',
			'id' => 'third-footer-widget-area',
			'description' => 'The third footer widget area',
			'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
					'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>',
		)
	);
	
	// Fourth Footer Widget Area, located in the footer. Empty by default.
	register_sidebar(
		array(
			'name' => 'Fourth Footer Widget Area',
			'id' => 'fourth-footer-widget-area',
			'description' => 'The fourth footer widget area',
			'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
					'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
					'after_title' => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'dd_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dd_scripts() {
	wp_enqueue_style( 'dd-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dd-style', 'rtl', 'replace' );

	wp_enqueue_script( 'dd-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// // Adding Bootstrap to the Theme - Start

	// wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	// wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery') );

	// // Adding Bootstrap to the Theme - Start

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dd_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function register_assets()
{
    // Scripts
    wp_enqueue_script(
        'main-scripts',
        get_template_directory_uri() . '/dist/scripts/main.js',
        array('jquery'),
        filemtime(get_template_directory() . '/dist/scripts/main.js'),
        true
    );

    // Styles
    wp_enqueue_style(
        'main-styles',
        get_template_directory_uri() . '/dist/styles/main.css',
        array(),
        filemtime(get_template_directory() . '/dist/styles/main.css')
    );
}
add_action('wp_enqueue_scripts', 'register_assets');

define('THEMEDIR', get_template_directory_uri());

//PROJECTEN CPT
function projecten_cpt() {
	$labels = array(
	  'name'               => _x( 'Projecten', 'post type general name' ),
	  'singular_name'      => _x( 'Projecten', 'post type singular name' ),
	  'add_new'            => _x( 'Nieuw project', 'project' ),
	  'add_new_item'       => __( 'Voeg nieuw project toe' ),
	  'edit_item'          => __( 'Bewerk Project' ),
	  'new_item'           => __( 'Nieuw Project' ),
	  'all_items'          => __( 'Alle Projecten' ),
	  'view_item'          => __( 'Bekijk Projecten' ),
	  'search_items'       => __( 'Zoek Projecten' ),
	  'not_found'          => __( 'Geen project gevonden' ),
	  'not_found_in_trash' => __( 'Geen projecten gevonden in prullenbak' ),
	  'menu_name'          => 'Projecten',
	  'rewrite'     => array( 'slug' => 'project' )
	);
	$args = array(
	  'labels'        => $labels,
	  'description'   => 'Hier bevinden zich alle projecten van Designdew',
	  'public'        => true,
	  'menu_position' => 4,
	  'supports'      => array( 'title', 'thumbnail','page-attributes'),
	  'hierarchical'  => true,
	  'has_archive'   => true,
	  'show_in_rest' => true,
	);
	register_post_type( 'project', $args );
  }
  add_action( 'init', 'projecten_cpt' );