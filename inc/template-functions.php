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

