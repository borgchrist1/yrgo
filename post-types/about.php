<?php
function create_post_about() {
  register_post_type( 'about',
  array(
    'labels'       => array(
      'name'       => __( 'Om Yrgo' ),
    ),
    'public'       => true,
    'hierarchical' => true,
    'has_archive'  => true,
    'supports'     => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
    ),
    'taxonomies'   => array(
      'post_tag',
      'category',
    )
    )
  );
  register_taxonomy_for_object_type( 'category', 'about' );
  register_taxonomy_for_object_type( 'post_tag', 'about' );
}
add_action( 'init', 'create_post_about' );
