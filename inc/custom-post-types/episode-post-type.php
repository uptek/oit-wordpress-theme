<?php

/**
 * Episode post type
 */
function episode_post_type()
{
  $labels = [
    'name'                  => _x('Episodes', 'Post Type General Name', 'one-in-ten'),
    'singular_name'         => _x('Episode', 'Post Type Singular Name', 'one-in-ten'),
    'menu_name'             => __('Episodes', 'one-in-ten'),
    'name_admin_bar'        => __('Episode', 'one-in-ten'),
    'archives'              => __('Episode Archives', 'one-in-ten'),
    'attributes'            => __('Episode Attributes', 'one-in-ten'),
    'parent_item_colon'     => __('Parent Episode:', 'one-in-ten'),
    'all_items'             => __('All Episodes', 'one-in-ten'),
    'add_new_item'          => __('Add New Episode', 'one-in-ten'),
    'add_new'               => __('Add New Episode', 'one-in-ten'),
    'new_item'              => __('New Episode', 'one-in-ten'),
    'edit_item'             => __('Edit Episode', 'one-in-ten'),
    'update_item'           => __('Update Episode', 'one-in-ten'),
    'view_item'             => __('View Episode', 'one-in-ten'),
    'view_items'            => __('View Episodes', 'one-in-ten'),
    'search_items'          => __('Search Episode', 'one-in-ten'),
    'not_found'             => __('Not found', 'one-in-ten'),
    'not_found_in_trash'    => __('Not found in Trash', 'one-in-ten'),
    'featured_image'        => __('Featured Image', 'one-in-ten'),
    'set_featured_image'    => __('Set featured image', 'one-in-ten'),
    'remove_featured_image' => __('Remove featured image', 'one-in-ten'),
    'use_featured_image'    => __('Use as featured image', 'one-in-ten'),
    'insert_into_item'      => __('Insert into Episode', 'one-in-ten'),
    'uploaded_to_this_item' => __('Uploaded to this Episode', 'one-in-ten'),
    'items_list'            => __('Episodes list', 'one-in-ten'),
    'items_list_navigation' => __('Episodes list navigation', 'one-in-ten'),
    'filter_items_list'     => __('Filter Episodes list', 'one-in-ten'),
  ];

  $args = [
    'label'               => __('Episode', 'one-in-ten'),
    'description'         => __('Episode post type for one-in-ten theme.', 'one-in-ten'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'permalink', 'thumbnail'),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 15,
    'menu_icon'           => 'dashicons-playlist-audio',
    'show_in_admin_bar'   => true,
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'rewrite'             => [ 'slug' => 'episodes'],
    'capability_type'     => 'post',
    'show_in_rest'        => true,
  ];

  register_post_type('episode', $args);

  // register episode category taxonomy
  $labels = [
    'name'                       => _x('Categories', 'Taxonomy General Name', 'one-in-ten'),
    'singular_name'              => _x('Category', 'Taxonomy Singular Name', 'one-in-ten'),
    'menu_name'                  => __('Categories', 'one-in-ten'),
    'all_items'                  => __('All Categories', 'one-in-ten'),
    'parent_item'                => __('Parent Category', 'one-in-ten'),
    'parent_item_colon'          => __('Parent Category:', 'one-in-ten'),
    'new_item_name'              => __('New Category Name', 'one-in-ten'),
    'add_new_item'               => __('Add New Category', 'one-in-ten'),
    'edit_item'                  => __('Edit Category', 'one-in-ten'),
    'update_item'                => __('Update Category', 'one-in-ten'),
    'view_item'                  => __('View Category', 'one-in-ten'),
    'separate_items_with_commas' => __('Separate categories with commas', 'one-in-ten'),
    'add_or_remove_items'        => __('Add or remove categories', 'one-in-ten'),
    'choose_from_most_used'      => __('Choose from the most used', 'one-in-ten'),
    'popular_items'              => __('Popular Categories', 'one-in-ten'),
    'search_items'               => __('Search Categories', 'one-in-ten'),
    'not_found'                  => __('Not Found', 'one-in-ten'),
    'no_terms'                   => __('No categories', 'one-in-ten'),
    'items_list'                 => __('Categories list', 'one-in-ten'),
    'items_list_navigation'      => __('Categories list navigation', 'one-in-ten'),
  ];

  $args = [
    'labels'            => $labels,
    'hierarchical'      => true,
    'public'            => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => false,
  ];

  register_taxonomy('episode-category', 'episode', $args);


  // register episode tags taxonomy
  $labels = [
    'name'                       => _x('Tags', 'Taxonomy General Name', 'one-in-ten'),
    'singular_name'              => _x('Tag', 'Taxonomy Singular Name', 'one-in-ten'),
    'menu_name'                  => __('Tags', 'one-in-ten'),
    'all_items'                  => __('All Tags', 'one-in-ten'),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'new_item_name'              => __('New tag Name', 'one-in-ten'),
    'add_new_item'               => __('Add New tag', 'one-in-ten'),
    'edit_item'                  => __('Edit tag', 'one-in-ten'),
    'update_item'                => __('Update tag', 'one-in-ten'),
    'view_item'                  => __('View tag', 'one-in-ten'),
    'separate_items_with_commas' => __('Separate Tags with commas', 'one-in-ten'),
    'add_or_remove_items'        => __('Add or remove Tags', 'one-in-ten'),
    'choose_from_most_used'      => __('Choose from the most used', 'one-in-ten'),
    'popular_items'              => __('Popular Tags', 'one-in-ten'),
    'search_items'               => __('Search Tags', 'one-in-ten'),
    'not_found'                  => __('Not Found', 'one-in-ten'),
    'no_terms'                   => __('No Tags', 'one-in-ten'),
    'items_list'                 => __('Tags list', 'one-in-ten'),
    'items_list_navigation'      => __('Tags list navigation', 'one-in-ten'),
  ];

  $args = [
    'labels'            => $labels,
    'hierarchical'      => false,
    'public'            => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => false,
  ];

  register_taxonomy('episode-tag', 'episode', $args);
}
add_action('init', 'episode_post_type', 0);
