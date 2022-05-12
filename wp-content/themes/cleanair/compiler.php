<?php

require_once('vendor/autoload.php');

use Handlebars\Handlebars;

return $compiler = new Handlebars(array(
   'loader' => new \Handlebars\Loader\FilesystemLoader(get_template_directory() . '/views'),
   'partials_loader' => new \Handlebars\Loader\FilesystemLoader(
        get_template_directory(). '/views/',
        array(
          ''
        )
    )
));

?>
