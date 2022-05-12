<?php

if (!function_exists('drelofs_theme_support')) :
function drelofs_theme_support() {
    // Add menu support
    add_theme_support('menus');

    // Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');


    //rremove admin blog_charset
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
}

add_action('after_setup_theme', 'drelofs_theme_support');
endif;
