<?php

function custom_post_type() {

  $labels = array(
      'name'                => _x( 'Concepts', 'Post Type General Name', 'bravo' ),
      'singular_name'       => _x( 'Concept', 'Post Type Singular Name', 'bravo' ),
      'menu_name'           => __( 'Concepts', 'bravo' ),
      'parent_item_colon'   => __( 'Parent Concept', 'bravo' ),
      'all_items'           => __( 'All Concepts', 'bravo' ),
      'view_item'           => __( 'View Concepts', 'bravo' ),
      'add_new_item'        => __( 'Add New Concept', 'bravo' ),
      'add_new'             => __( 'Add New', 'bravo' ),
      'edit_item'           => __( 'Edit Concept', 'bravo' ),
      'update_item'         => __( 'Update Concept', 'bravo' ),
      'search_items'        => __( 'Search Concept', 'bravo' ),
      'not_found'           => __( 'Not Found', 'bravo' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'bravo' ),
  );

  $args = array(
      'label'               => __( 'concepts', 'bravo' ),
      'description'         => __( 'Concepts', 'bravo' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'menu_icon'           => 'dashicons-welcome-write-blog',
      'taxonomies'          => array( 'category' ),
  );

  // Registering your Custom Post Type
  register_post_type( 'concepts', $args );

  //Next Custom Post Type
  $labels = array(
    'name'                => _x( 'Members', 'Post Type General Name', 'bravo' ),
    'singular_name'       => _x( 'Member', 'Post Type Singular Name', 'bravo' ),
    'menu_name'           => __( 'Members', 'bravo' ),
    'parent_item_colon'   => __( 'Parent Member', 'bravo' ),
    'all_items'           => __( 'All Members', 'bravo' ),
    'view_item'           => __( 'View Members', 'bravo' ),
    'add_new_item'        => __( 'Add New Member', 'bravo' ),
    'add_new'             => __( 'Add New', 'bravo' ),
    'edit_item'           => __( 'Edit Member', 'bravo' ),
    'update_item'         => __( 'Update Member', 'bravo' ),
    'search_items'        => __( 'Search Member', 'bravo' ),
    'not_found'           => __( 'Not Found', 'bravo' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'bravo' ),
);

$args = array(
    'label'               => __( 'members', 'bravo' ),
    'description'         => __( 'Members', 'bravo' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'menu_icon'           => 'dashicons-admin-users',
    'taxonomies'          => array( 'category' ),
);

// Registering your Custom Post Type
register_post_type( 'members', $args );
}

add_action( 'init', 'custom_post_type', 0 );
