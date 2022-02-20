<?php

//Loads header and footer through Wordpress
function set_wp_header_footer() {
  global $data;
  $data['wp_head']   = output_buffer_contents('wp_head');
  $data['wp_footer'] = output_buffer_contents('wp_footer');
}


//Puts all relevant (Wordpress) data into the data variable)
$data = array(

  'wp_title'                  => wp_title('', false),

  'template_directory_uri'    => get_template_directory_uri(),
  'stylesheet_directory'      => get_bloginfo('stylesheet_directory'),
  'ajaxurl'                   => admin_url( 'admin-ajax.php' ),
  'wpurl'                     => get_bloginfo('wpurl'),
  'stylesheet_url'            => get_bloginfo('stylesheet_url'),
  'stylesheet_dir'            => get_bloginfo('stylesheet_directory'),
  'home_url'                  => esc_url( home_url( '/' ) ),
  'blog_title'                => get_bloginfo(),

  // 'option_request_link'       => get_field('option_request_project_link', 'option'),
  // 'option_cookie_link'        => get_field('option_cookie_link', 'option'),
  // 'option_news_disclaimer'    => get_field('option_news_disclaimer', 'option'),
  // 'option_missed_disclaimer'  => get_field('option_missed_disclaimer', 'option'),

  'loggedin' => is_user_logged_in();
);

wp_reset_query();
//Retrieves all menus
global $post;
$currentID = $post->ID;
if($data['menu'] && count($data['menu']) >  0) {
  foreach ( $data['menu'] as $page ) {
    $page->active = (isset( $currentID ) && $page->object_id == $currentID) ? 'current' : '';
  }
}

return $data;
