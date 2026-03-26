<?php
/**
 * comfyhvac functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package comfyhvac
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function comfyhvac_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on comfyhvac, use a find and replace
		* to change 'comfyhvac' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'comfyhvac', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'comfyhvac' ),
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
	// add_theme_support(
	// 	'custom-background',
	// 	apply_filters(
	// 		'comfyhvac_custom_background_args',
	// 		array(
	// 			'default-color' => 'ffffff',
	// 			'default-image' => '',
	// 		)
	// 	)
	// );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	// add_theme_support(
	// 	'custom-logo',
	// 	array(
	// 		'height'      => 250,
	// 		'width'       => 250,
	// 		'flex-width'  => true,
	// 		'flex-height' => true,
	// 	)
	// );
}
add_action( 'after_setup_theme', 'comfyhvac_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function comfyhvac_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'comfyhvac_content_width', 640 );
}
add_action( 'after_setup_theme', 'comfyhvac_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function comfyhvac_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'comfyhvac' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'comfyhvac' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'comfyhvac_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function comfyhvac_scripts() {
	// wp_enqueue_style( 'comfyhvac-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'comfyhvac-style', 'rtl', 'replace' );
  	wp_enqueue_style('mobile-min', get_template_directory_uri() . '/assets/css/mobile.min.css', array(), _S_VERSION);
  	wp_enqueue_style('responsive-min', get_template_directory_uri() . '/assets/css/responsive.min.css', array(), _S_VERSION);
  	// wp_enqueue_style('home', get_template_directory_uri() . '/assets/css/home.css', array(), _S_VERSION);


	// wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'comfyhvac_scripts' );

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
	/**
	 * Register theme options page.
	 *
	 * 
	 */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'  => 'Theme Options',
        'menu_title'  => 'Theme Options',
        'menu_slug'   => 'theme-options',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));

}

function comfy_register_menus() {
    register_nav_menus(array(
        'primary_navigation' => __('Primary Navigation'),
    ));
}
add_action('init', 'comfy_register_menus');



class Comfy_Nav_Walker extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul>';
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $level = $depth + 1;

        // Detect children
        $has_children = in_array('menu-item-has-children', $classes);

        $contains = $has_children ? 'contains-1' : 'contains-0';

        $output .= '<li class="nav-level-' . $level . ' ' . esc_attr($contains) . '">';

        $output .= '<a href="' . esc_url($item->url) . '"><span>' . esc_html($item->title) . '</span></a>';

        if ($has_children) {
            $output .= '<div class="expand-nav"><span class="nav-expand"></span></div>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}


function site_breadcrumbs() {
    echo '<div id="breadcrumbs-container">';
    echo '<span class="B_crumbBox">';

    // Home
    echo '<span class="B_firstCrumb"><a class="B_homeCrumb" href="' . home_url() . '">Home</a></span>';

    if (is_category() || is_single()) {
        echo ' / ';
        the_category(' / ');

        if (is_single()) {
            echo ' / <span class="B_lastCrumb"><span class="B_currentCrumb">';
            the_title();
            echo '</span></span>';
        }
    }

    elseif (is_page()) {
        global $post;

        if ($post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = [];

            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a class="B_crumb" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }

            $breadcrumbs = array_reverse($breadcrumbs);

            foreach ($breadcrumbs as $crumb) {
                echo ' / ' . $crumb;
            }
        }

        echo ' / <span class="B_lastCrumb"><span class="B_currentCrumb">';
        echo get_the_title();
        echo '</span></span>';
    }

    echo '</span>';
    echo '</div>';
}


