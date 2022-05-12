<?php

add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

// add_image_size( 'hd', 1920, 1080, false);
// add_image_size( 'md',  800,  600, false);
// add_image_size( 'sq',  300,  300, true);
// add_image_size( 'sm',  300,  200, false);