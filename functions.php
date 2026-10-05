<?php
/*
current theme version
*/
define('THEME_VERSION', wp_get_theme()->get('Version'));

/*Theme setting */

add_action('after_setup_theme', 'psy_setup');
function psy_setup()
{

    add_theme_support('title-tag'); //динамічні заголовки вкладки
    add_theme_support('post-thumbnails'); //фото для постів
    add_theme_support('custom-logo'); // підтримка меню
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets'
        )
    );

    register_nav_menus(
        array(
            'main'   => 'Головне меню',
            'footer' => 'Меню у футері',
        )
    );
}


/**
 * connect script and style
 */

require_once get_template_directory() . '/inc/connect-script-and-style.php'


?>