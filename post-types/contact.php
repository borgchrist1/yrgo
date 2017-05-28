<?php
function create_post_contact() {
  register_post_type( 'contact',
  array(
    'labels'       => array(
      'name'       => __( 'Kontakt' ),
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
  register_taxonomy_for_object_type( 'category', 'contact' );
  register_taxonomy_for_object_type( 'post_tag', 'contact' );
}
add_action( 'init', 'create_post_contact' );
