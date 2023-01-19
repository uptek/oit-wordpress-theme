<?php
/**
 * Custom post types
 *
 * @since 1.0
 */

$post_types = array( 'episode' );

foreach ( $post_types as $post_type ) {
    require get_parent_theme_file_path( '/inc/custom-post-types/' . $post_type . '-post-type.php');
}
