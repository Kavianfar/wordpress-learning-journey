
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




function milad_message_one()
{
    echo '<p>Message One</p>';
}

function milad_message_two()
{
    echo '<p>Message Two</p>';
}

add_action(
    'milad_after_related_projects',
    'milad_message_one',
    20
);

add_action(
    'milad_after_related_projects',
    'milad_message_two',
    5

);


add_action(
    'milad_after_related_projects',
    'milad_project_stats',
    10,
    1
);

function milad_project_archive_pagination($query)
{

    if (is_admin()) {
        return;
    }

    if (
        is_post_type_archive('project')
        &&
        $query->is_main_query()
    ) {

        $query->set(
            'posts_per_page',
            2
        );
    }

    if (
        is_search() && $query->is_main_query()
    ) {
        $query->set(
            'post_type',
            'project'
        );
    }
}


add_action(
    'pre_get_posts',
    'milad_project_archive_pagination'
);
