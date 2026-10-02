<?php
/*
current theme version
*/
define('THEME_VERSION', wp_get_theme()->get('Version'))

/*Theme setting */

add_action('after_setup_theme', 'psy_setup');
function theme setup()
{

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support ('names');

    register_nav_menu(
        array(
            'main'   => 'Головне меню',
            'footer' => 'Меню у футері',
        )
    )
}

add_theme_support(
    'html5',
    array(
        
    )
)




?>