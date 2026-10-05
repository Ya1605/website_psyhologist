<?php

/**
 * Enqueue scripts and styles.
 */
function theme_styles()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', [], THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_scripts()
{
   // wp_deregister_script('jquery'); // Видаляємо стандартний
    //wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.0.min.js', [], '', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/snow.js', [], THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'theme_scripts');
