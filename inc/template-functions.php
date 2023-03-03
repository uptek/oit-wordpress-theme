<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package One_in_ten
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function one_in_ten_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'one_in_ten_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function one_in_ten_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'one_in_ten_pingback_header' );

/**
 * one-in-ten Support Theme Settings Menu. Theme Setting
 */
if ( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
  'page_title'    => __( 'Theme Settings', 'one-in-ten'),
  'menu_title'    => __( 'Theme Settings', 'one-in-ten'),
  'capability'    => 'manage_options',
  'position'      => 59
));
}


/**
 * Changes ACF JSON directory
 *
 * @param  string $path Default ACF JSON directory
 * @return string
 */
function ja_acf_json_save_point($path) {
	return get_stylesheet_directory() . '/inc/acf-json';
}
add_filter('acf/settings/save_json', 'ja_acf_json_save_point');

/**
 * Loads ACF JSON
 *
 * @param array $paths ACF JSON directory paths
 * @return array
 */
function ja_acf_json_load_point($paths) {
	unset($paths[0]);
	$paths[] = get_stylesheet_directory() . '/inc/acf-json';

	return $paths;
}
add_filter('acf/settings/load_json', 'ja_acf_json_load_point');

/**
 * Avoid pushing page content below when WP Admin Bar is visible
 */
add_theme_support( 'admin-bar', array( 'callback' => '__return_false') );


/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
// function cf_search_join( $join ) {
//   global $wpdb;

//   if ( is_search() ) {
//       $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
//   }

//   return $join;
// }
// add_filter('posts_join', 'cf_search_join' );

// /**
//  * Modify the search query with posts_where
//  *
//  * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
//  */
// function cf_search_where( $where ) {
//   global $pagenow, $wpdb;

//   if ( is_search() ) {
//       $where = preg_replace(
//           "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
//           "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
//   }

//   return $where;
// }
// add_filter( 'posts_where', 'cf_search_where' );

// /**
//  * Prevent duplicates
//  *
//  * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
//  */
// function cf_search_distinct( $where ) {
//   global $wpdb;

//   if ( is_search() ) {
//       return "DISTINCT";
//   }

//   return $where;
// }
// add_filter( 'posts_distinct', 'cf_search_distinct' );

