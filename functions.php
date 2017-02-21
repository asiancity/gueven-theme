<?php
/**
 * gueven functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gueven
 */
 if( !function_exists('adios_after_setup')) {

   function adios_after_setup() {

     add_image_size('ath-small',         270,  270, true );
     add_image_size('ath-small-alt',     370,  370, true );
     add_image_size('ath-small-hor',     350,  242, true );
     add_image_size('ath-small-ver',     270,  570, true );
     add_image_size('ath-small-square',  270,  270, true );
     add_image_size('ath-medium',        570,  570, true );
     add_image_size('ath-medium-alt',    670,  255, true );
     add_image_size('ath-medium-big',    768,  255, true );
     add_image_size('ath-large-hor',     1170, 270, true );
     add_image_size('ath-large-ver',     900,  900, true );
     add_image_size('ath-large-xxl',     1463, 560, true );
     add_image_size('ath-thumb',         80,   80, true );

     add_theme_support('post-thumbnails');
     add_theme_support('custom-background' );
     add_theme_support('automatic-feed-links' );
     add_theme_support('post-formats',   array('video', 'gallery', 'audio') );
     add_theme_support('title-tag' );

     register_nav_menus (array(
       'primary-menu' => esc_html__( 'Main Menu', 'adios' ),
     ) );
   }
   add_action( 'after_setup_theme', 'adios_after_setup' );
 }
if ( ! function_exists( 'gueven_setup' ) ) :
function gueven_setup() {

	load_theme_textdomain( 'gueven', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'gueven' ),
		'menu-footer' => esc_html__( 'Footer', 'gueven' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gueven_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'gueven_setup' );


function gueven_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gueven_content_width', 640 );
}
add_action( 'after_setup_theme', 'gueven_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gueven_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gueven' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gueven' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gueven_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gueven_scripts() {

	wp_register_style('adios-swiper', get_template_directory_uri(). '/assets/css/idangerous.swiper.css');
	wp_register_script( 'adios-swiper', get_template_directory_uri() .'/js/swiper.min.js',array('jquery'), '',true);

	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');
	
	wp_enqueue_script( 'adios-wow', get_template_directory_uri() .'/js/wow.min.js',array('jquery'), '',true);
	wp_enqueue_script( 'adios-isotope', get_template_directory_uri() .'/js/isotope.pkg.min.js',array('jquery'), '',true);
	wp_enqueue_script( 'adios-swipebox',get_template_directory_uri() .'/js/jquery.swipe.box.min.js',array('jquery'), '',true);
	// wp_enqueue_style( 'swiper-2', get_template_directory_uri() .'/assets/css/idangerous.swiper.css');

	wp_enqueue_style( 'shortcode', get_template_directory_uri() .'/assets/css/shortcode.css');
	wp_enqueue_style( 'gueven-style', get_stylesheet_uri() );
	wp_enqueue_style( 'theme', get_template_directory_uri() .'/assets/css/theme.css');
	wp_enqueue_style( 'color', get_template_directory_uri() .'/assets/css/color.css');

	wp_enqueue_style( 'vc_editor', get_template_directory_uri() .'/assets/css/editor.css');

	wp_enqueue_script( 'tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js', '', '', true);
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', 'jquery', '', true );
	wp_enqueue_script( 'main', get_template_directory_uri() .'/js/main.js', '', '', true);


}
add_action( 'wp_enqueue_scripts', 'gueven_scripts' );

function load_fonts() {
  wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Raleway:400,700|Lato:400,300');
  wp_enqueue_style( 'googleFonts');
}
add_action('wp_print_styles', 'load_fonts', 999);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
