<?php

function bw_reviews_meta_box($meta_boxes)
{
    $prefix = 'bw-';

    $meta_boxes[] = array(
        'id'         => 'reviews',
        'title'      => esc_html__('Addition', 'brainworks'),
        'post_types' => array('reviews'),
        'context'    => 'advanced',
        'priority'   => 'default',
        'autosave'   => true,
        'fields'     => array(
            array(
                'id'   => $prefix . 'review-on-front',
                'name' => esc_html__('Show On Front', 'brainworks'),
                'type' => 'checkbox',
                'desc' => esc_html__('Enable/Disable', 'brainworks'),
            ),
            array(
                'id'   => $prefix . 'review-name',
                'type' => 'text',
                'name' => esc_html__('Name Surname', 'brainworks'),
            ),
            array(
                'id'   => $prefix . 'review-position',
                'type' => 'text',
                'name' => esc_html__('Position', 'brainworks'),
            ),
        ),
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'bw_reviews_meta_box');
