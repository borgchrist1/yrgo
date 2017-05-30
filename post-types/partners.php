<?php
function create_post_partners() {
  register_post_type( 'partners',
  array(
    'labels'       => array(
      'name'       => __( 'Sammarbetspartners' ),
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
  register_taxonomy_for_object_type( 'category', 'partners' );
  register_taxonomy_for_object_type( 'post_tag', 'partners' );
}
add_action( 'init', 'create_post_partners' );
