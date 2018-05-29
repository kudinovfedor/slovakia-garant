<?php

function bw_post_meta_box($meta_boxes)
{
    $prefix = 'bw-';

    $meta_boxes[] = array(
        'id'         => 'post',
        'title'      => esc_html__('Addition', 'brainworks'),
        'post_types' => array('post'),
        'context'    => 'advanced',
        'priority'   => 'default',
        'autosave'   => true,
        'fields'     => array(
            array(
                'id'   => $prefix . 'post-on-front',
                'name' => esc_html__('Show Post On Front', 'brainworks'),
                'type' => 'checkbox',
                'desc' => esc_html__('Enable/Disable', 'brainworks'),
            ),
        ),
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'bw_post_meta_box');