<?php

function cptui_register_my_cpts_service_prices()
{
	/**
	 * Post Type: Service Prices.
	 */

	$labels = array(
		'name'          => __('Service Prices', 'brainworks'),
		'singular_name' => __('Service Price', 'brainworks'),
	);

	$args = array(
		'label'               => __('Service Prices', 'brainworks'),
		'labels'              => $labels,
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => false,
		'rest_base'           => '',
		'has_archive'         => false,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		'rewrite'             => array('slug' => 'service-prices', 'with_front' => true),
		'query_var'           => true,
		'menu_icon'           => 'dashicons-admin-post',
		'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
	);

	register_post_type('service-prices', $args);
}

add_action('init', 'cptui_register_my_cpts_service_prices');
