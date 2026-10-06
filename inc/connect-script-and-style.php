<?php

/**
 * Enqueue scripts and styles.
 */
function psy_styles()
{
    wp_enqueue_style('psy-style', get_template_directory_uri() . '/assets/css/style.css', [], THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'psy_styles');

function psy_scripts()
{
    // wp_deregister_script('jquery'); // Видаляємо стандартний
    //wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.0.min.js', [], '', true);
    wp_enqueue_script('psy-header', get_template_directory_uri() . '/assets/js/main.js', [], THEME_VERSION, true);
    wp_enqueue_script('psy-header', get_template_directory_uri() . '/assets/js/header.js', [], THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'psy_scripts');
