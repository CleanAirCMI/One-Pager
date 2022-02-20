<?php
/* Template Name: Onepager */
$compiler = include('compiler.php');
$data     = include('global-data.php');

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
        $data['title'] = get_the_title();
        if( have_rows('home_introduction') ):
            while ( have_rows('home_introduction') ) : the_row();
                $data['home_introduction'] = [
                    'quote' => get_sub_field('home_quote')
                ];
            endwhile;
        endif;
        if( have_rows('home_live') ):
            while ( have_rows('home_live') ) : the_row();
                $data['home_live'] = [
                    'tv_text' => get_sub_field('home_live_tv_text'),
                    'radio_text' => get_sub_field('home_live_radio_text')
                ];
            endwhile;
        endif;
        $data['news'] = get_news(6);
        if( have_rows('home_route') ):
            while ( have_rows('home_route') ) : the_row();
                $data['home_route'] = [
                    'title' => get_sub_field('home_route_title'),
                    'subtext' => get_sub_field('home_route_subtext'),
                    'files' => [] 
                ];
                if( have_rows('home_route_files') ):
                    while ( have_rows('home_route_files') ) : the_row();
                        $files[] = [
                            'name' => get_sub_field('file_name'),
                            'file' => get_sub_field('file')
                        ];
                        $data['home_route']['files'] = $files;
                    endwhile;
                endif;
            endwhile;
        endif;
    endwhile;
endif;

// print_r($data['home_route']);

set_wp_header_footer();
echo $compiler->render('index', $data);
