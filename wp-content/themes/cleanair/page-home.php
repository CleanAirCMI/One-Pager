<?php
/* Template Name: Onepager */
$compiler = include('compiler.php');
$data     = include('global-data.php');

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
        $data['title'] = get_the_title();
        $data['header'] = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'hd')[0];
        if( have_rows('title_main') ):
            while ( have_rows('title_main') ) : the_row();
                $data['title_main'] = [
                    'title' => get_sub_field('title'),
                    'subtitle' => get_sub_field('subtitle')
                ];
            endwhile;
        endif;
        $data['main_description'] = get_field('main_description');
        $data['mvp']['title'] = get_field('mvp-title');
        $data['mvp']['image'] = get_field('mvp-image');
        $data['mvp']['content'] = get_field('mvp-content');

        $args = array(
            'post_type' => 'members',
            'order' => 'ASC'
        );
        $results = get_posts($args);
        foreach($results as $result){
            $data['members'][] = [
                'name' => $result->post_title,
                'image' => wp_get_attachment_image_src( get_post_thumbnail_id($result->ID), 'hd')[0],
                'role' => get_field('member_role', $result->ID)
            ];
        }

        $args = array(
            'post_type' => 'concepts',
            'order' => 'ASC'
        );
        $results = get_posts($args);
        $slideindex = 0;
        foreach($results as $result){
            $data['concepts'][] = [
                'name' => $result->post_title,
                'index' => $slideindex,
                'slide' => $slideindex+1,
                'image' => wp_get_attachment_image_src( get_post_thumbnail_id($result->ID), 'hd')[0],
                'slideshow' => acf_photo_gallery('concept_slideshow', $result->ID),
                'content' => $result->post_content
            ];
            $slideindex++;
        }
    endwhile;
endif;

set_wp_header_footer();
echo $compiler->render('index', $data);
