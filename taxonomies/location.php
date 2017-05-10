<?php

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy('location', ['employee'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Location'),
            'edit_item' => __('Edit Location'),
            'name' => __('Locations'),
            'search_items' => __('Search Locations'),
            'singular_name' => __('Location'),
        ],
        'query_var' => true,
        'rewrite' => ['slug' => 'location'],
        'show_admin_column' => true,
        'show_ui' => true,
    ]);
});
