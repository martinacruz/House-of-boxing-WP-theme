<?php

    function hob_files() {
        wp_enqueue_style('custom_google_fonts', '//fonts.googleapis.com/css2?family=Akshar:wght@300;400;600&display=swap');
        wp_enqueue_style('hob_main_style', get_theme_file_uri('/css/style.css'));
        wp_enqueue_style('hob_page_style', get_theme_file_uri('/css/pages/page-style.css'));
    }

    add_action('wp_enqueue_scripts', 'hob_files');

    function hob_features() {
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'hob_features');

    function hob_post_types() {
        register_post_type('coach', array(
            'public' => true,
            'menu_icon' => 'dashicons-groups',
            'labels' => array(
                'name' => 'Coaches'
            )
        ));
    }

    add_action('init', 'hob_post_types');
