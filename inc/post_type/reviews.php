<?php

function cptui_register_my_cpts_reviews()
{
    /**
     * Post Type: Reviews.
     */

    $labels = array(
        'name'          => __('Reviews', 'brainworks'),
        'singular_name' => __('Review', 'brainworks'),
    );

    $args = array(
        'label'               => __('Reviews', 'brainworks'),
        'labels'              => $labels,
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_rest'        => false,
        'rest_base'           => '',
        'has_archive'         => 'reviews',
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'exclude_from_search' => false,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'rewrite'             => array('slug' => 'reviews', 'with_front' => true),
        'query_var'           => true,
        'menu_icon'           => 'dashicons-admin-post',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    );

    register_post_type('reviews', $args);
}

add_action('init', 'cptui_register_my_cpts_reviews');
