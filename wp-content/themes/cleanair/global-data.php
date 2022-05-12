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

  'loggedin' => is_user_logged_in()
);

wp_reset_query();

return $data;
