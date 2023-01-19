<?php

/**
 * One in ten functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package One_in_ten
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('one_in_ten_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function one_in_ten_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on One in ten, use a find and replace
		 * to change 'one-in-ten' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('one-in-ten', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'header-menu' => esc_html__('Header Navigation', 'one-in-ten'),
				'footer-menu' => esc_html__('Footer Navigation', 'one-in-ten'),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'one_in_ten_setup');

/**
 * Add Support for Custom Image sizes
 */

 add_image_size('host', 1660, 1660, true);
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function one_in_ten_content_width()
{
	$GLOBALS['content_width'] = apply_filters('one_in_ten_content_width', 640);
}
add_action('after_setup_theme', 'one_in_ten_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function one_in_ten_scripts()
{
  wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );
  wp_enqueue_script( 'jquery', includes_url( '/js/jquery/jquery.min.js' ), false, NULL, true );
	$assets = array(
		array(
			'type' => 'script',
			'handle' => 'custom',
			'url' => asset_path('js/custom.js'),
			'dep' => [],
		),
	);

	foreach ($assets as $asset)
		$asset['type'] == 'style'
			?	wp_enqueue_style($asset['handle'], $asset['url'], $asset['dep'], wp_get_theme()->version, false)
			: wp_enqueue_script($asset['handle'], $asset['url'], $asset['dep'], wp_get_theme()->version, true);

	wp_enqueue_style('one-in-ten-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('one-in-ten-style', 'rtl', 'replace');

}

add_action('wp_enqueue_scripts', 'one_in_ten_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/custom-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter('next_posts_link_attributes', function () {
  return 'class="next-link"';
});

add_filter('previous_posts_link_attributes', function () {
  return 'class="prev-link"';
});

/**
 * Remove Gutenberg Block Library CSS from loading on the frontend
 */
function oit_remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'oit_remove_wp_block_library_css', 100 );

/**
 * Disabled Plugin and Theme Editor
 */
define( 'DISALLOW_FILE_EDIT', true );

/**
 * Hook for fixing og:url for pagination pages in yoast
 */
function gb_wpseo_canonical( $canonical ) {
	global $post;

	$paged = get_query_var( 'paged' );

	if ( isset( $paged ) && (int) $paged > 0 ) {
			return trailingslashit( trailingslashit( $canonical ) . 'page/' . $paged );
	}

	return $canonical;
}

add_filter( 'wpseo_opengraph_url', 'gb_wpseo_canonical' );