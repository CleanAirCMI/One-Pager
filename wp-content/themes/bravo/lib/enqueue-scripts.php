<?php
if (!function_exists('drelofs_scripts')) :
  function drelofs_scripts() {

    // wp_deregister_script( 'jquery' );

    wp_register_script('vendor', get_template_directory_uri().'/js/vendor.min.js?v='.time() , array(), '1.0.3', true);

    wp_register_script('script', get_template_directory_uri().'/js/scripts.min.js?v='.time() , array(), '1.0.1', true);

    $templateUrl = array( 'stylesheet_directory_uri' => get_stylesheet_directory_uri() );
    wp_localize_script( 'script', 'directory_uri', $templateUrl );


      wp_enqueue_script('vendor');
      wp_enqueue_script('script');

    wp_register_style( 'style', get_template_directory_uri() . '/css/main.min.css' );
    wp_enqueue_style( 'style' );
}

  add_action( 'wp_enqueue_scripts', 'drelofs_scripts' ,5);
endif;

