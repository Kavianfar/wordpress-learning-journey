
<?php

function milad_theme_assets() {
    wp_enqueue_style(
        'milad-main-style',
        get_template_directory_uri() . '/assets/css/main.css'
    );
}

add_action('wp_enqueue_scripts', 'milad_theme_assets');


function milad_theme_setup() {

    register_nav_menus(array(
        'primary' => 'Primary Menu',

        'footer' => 'Footer Menu',
        'mobile' => 'Mobile Menu',
));

}

add_action('after_setup_theme', 'milad_theme_setup');