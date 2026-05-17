
<?php

function milad_theme_assets()
{
    wp_enqueue_style(
        'milad-main-style',
        get_template_directory_uri() . '/assets/css/main.css'
    );
}

add_action('wp_enqueue_scripts', 'milad_theme_assets');


function milad_theme_setup()
{

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => 'Primary Menu',

        'footer' => 'Footer Menu',
        'mobile' => 'Mobile Menu',
    ));
}

add_action('after_setup_theme', 'milad_theme_setup');


function milad_register_post_types()
{

    register_post_type('project', array(

        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
        ),

        'public' => true,

        'has_archive' => true,

        'menu_icon' => 'dashicons-portfolio',

        'supports' => array('title', 'editor', 'thumbnail'),

    ));
}

add_action('init', 'milad_register_post_types');
