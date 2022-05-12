<?php

include_once 'lib/acf.php';
include_once 'lib/enqueue-scripts.php';
include_once 'lib/theme-support.php';
include_once 'lib/media.php';
include_once 'lib/custom-pt.php';
include_once 'lib/cleanair.php';

function output_buffer_contents($function, $args = array()){
    ob_start();
    $function($args);
    $contents = ob_get_contents();
    ob_end_clean();
    return $contents;
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Algemene opties');

}

add_filter( 'gform_init_scripts_footer', '__return_true' );

remove_filter( 'the_content', 'wpautop' );