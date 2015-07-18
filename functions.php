<?php
/**
 * foundation5_s functions and definitions
 *
 * @package foundation5_s
 */


if ( ! function_exists( 'foundation5_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function foundation5_s_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on foundation5_s, use a find and replace
	 * to change 'awp_2015' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'awp_2015', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'awp_2015' ),
		'social'  => __( 'Social Links', 'awp_2015' ),
		'secondary'  => __( 'Secondary Menu', 'awp_2015' ),
	) );

	// Custom Fallback for when wp_nav_menu() is not set
	function default_menu() {
		echo '<h3><a href="/wp-admin/nav-menus.php">' . __( 'Please Setup your Menus', 'awp_2015' ) . '</a></h3>';
	}

	// Enable support for Post Formats.
	// add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'foundation5_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // foundation5_s_setup
add_action( 'after_setup_theme', 'foundation5_s_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function foundation5_s_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'awp_2015' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="columns widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'foundation5_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function foundation5_s_scripts() {
  wp_register_style( 'foundation-style', get_template_directory_uri() . '/bower_components/foundation/css/foundation.css', array(), 'all' );
  wp_enqueue_style( 'foundation-style' );
	wp_enqueue_style( 'foundation5_s-style', get_stylesheet_uri() );
	wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_register_script('foundation-mod',get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', array(), null, false );
  wp_register_script('foundation-main', get_template_directory_uri() . '/bower_components/foundation/js/foundation.js', array('jQuery'), null, true );
  wp_register_script('foundation-app', get_template_directory_uri() . '/assets/js/app.js', array('jQuery'), null, true );
  wp_enqueue_script( 'foundation-mod' );
  wp_enqueue_script( 'foundation-main' );
  wp_enqueue_script( 'foundation-app' );
	wp_enqueue_script( 'foundation5_s-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'foundation5_s-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foundation5_s_scripts' );

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
// require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom widget classes file.
 */
// require get_template_directory() . '/inc/custom-widget-classes.php';
