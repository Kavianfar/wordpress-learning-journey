<?php
/*
Plugin Name: Milad Tools
Description: Custom tools for Milad Theme
Version: 1.0
Author: Milad Kavianfar
*/

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


function milad_register_taxonomies()
{

  register_taxonomy('project_type', 'project', array(

    'labels' => array(
      'name' => 'Project Types',
      'singular_name' => 'Project Type',
    ),

    'public' => true,

    'hierarchical' => true,

  ));
}

add_action('init', 'milad_register_taxonomies');
