<?php
/* Template Name: Onepager */
$compiler = include('compiler.php');
$data     = include('global-data.php');

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
        $data['title'] = get_the_title();
        if( have_rows('title_main') ):
            while ( have_rows('title_main') ) : the_row();
                $data['title_main'] = [
                    'title' => get_sub_field('title'),
                    'subtitle' => get_sub_field('subtitle')
                ];
            endwhile;
        endif;
    endwhile;
endif;

// print_r($data['title_main']);

set_wp_header_footer();
echo $compiler->render('index', $data);
