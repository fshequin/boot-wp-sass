<?php
/**
 * Boot WP functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage grace-store
 * @since grace-store 1.0
 */

// link in the lib files

	//require TEMPLATEPATH.'/libs/post_types.php';
	//require TEMPLATEPATH.'/libs/taxonomies.php';

	//add_action('init', 'require_grace_metaboxes');

	/**
	 * Initialize the metabox class.
	 */
	function require_boot_metaboxes() {
	    require TEMPLATEPATH.'/libs/metaboxes.php';
	    
	    if( ! class_exists('cmb_Meta_Box'))
	    {
	        require TEMPLATEPATH.'/libs/metabox/init.php';
	    }
	}

function boot_setup() {
	
	//load_theme_textdomain( 'btc', get_template_directory() . '/languages' );
	//add_editor_style( array( 'css/editor-style.css', 'fonts/genericons.css', btc_fonts_url() ) );
	
	

	// Remove some stuff we don't need
	
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');

	function remove_dashboard_widgets() {
		global $wp_meta_boxes;
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
		//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
		//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	}

	add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	/*add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );*/

	// Register Custom Navigation Walker
	require_once('bootstrap-navwalker/wp_bootstrap_navwalker.php');

	// Register Custom Comment Walker
	//require_once('custom_comment_walker.php');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'main_menu', __( 'main_menu', 'boot-wp' ) );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 604, 270, true );

	// Custom image sizes
	//add_image_size( 'side-thumbnail', 40, 40, true ); // 40px square crop
	
	// This theme uses its own gallery styles.
	//add_filter( 'use_default_gallery_style', '__return_false' );
}
add_action( 'after_setup_theme', 'boot_setup' );

	// Custom image sizes
	//add_image_size( 'sidebar', 40, 40, true ); // 40px square crop


// Sidebars

function boot_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'News Sidebar', 'boot' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in left sidebar of Site.', 'boot' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'boot' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears in left sidebar of Pages', 'boot' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	

}
add_action( 'widgets_init', 'boot_widgets_init' );

// Register some javascript files, because we love javascript files. Enqueue a couple as well 

function boot_load_javascript_files() {

  //wp_register_script( 'info-caroufredsel', get_template_directory_uri() . '/js/jquery.carouFredSel-5.5.0-packed.js', array('jquery'), '5.5.0', true );
  //wp_register_script( 'info-carousel-instance', get_template_directory_uri() . '/js/info-carousel-instance.js', array('info-caroufredsel'), '1.0', true );
  //wp_register_script( 'imagesLoaded', get_template_directory_uri().'/js/imagesLoaded.min.js', array('jquery'), false, true );
  //wp_register_script( 'masonry', get_template_directory_uri().'/js/masonry.min.js', array('jquery'), false, true);
  wp_register_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '3.0.2', true );
  //wp_register_script( 'vegas', get_template_directory_uri().'/js/vegas/jquery.vegas.min.js', array('jquery'), false, true );
  //wp_register_script( 'ddsmoothmenu-init', get_template_directory_uri().'/js/ddsmoothmenu-init.js', array('ddsmoothmenu'), '', true);
  //wp_register_script( 'pinterest', '//assets.pinterest.com/js/pinit.js', false, false, true );
  wp_register_script( 'site-js', get_template_directory_uri().'/js/site.min.js', array('jquery'), false, true );
  //wp_register_script( 'home-page-main-flex-slider', get_template_directory_uri().'/js/home-page-main-flex-slider.js', array('jquery.flexslider'), '1.0', true );

  //wp_enqueue_script( 'jquery' );
  //wp_enqueue_script( 'jquery-ui-core' );
  //wp_enqueue_script( 'imagesLoaded' );
  //wp_enqueue_script( 'masonry' );
  //wp_enqueue_script( 'thickbox' );
  wp_enqueue_script( 'bootstrap-js' );
  //wp_enqueue_script( 'vegas' );
  //wp_enqueue_script( 'pinterest' );
  wp_enqueue_script( 'site-js' );

}

add_action( 'wp_enqueue_scripts', 'boot_load_javascript_files' );




