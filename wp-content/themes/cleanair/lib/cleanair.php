<?php

// function get_members(){
//     else{
        
//     }
//     foreach($results as $result){
//         $projects[] = [
//             'id' => $result->ID,
//             'title' => $result->post_title,
//             'content' => $result->post_content,
//             'permalink' => get_permalink($result->ID),
//             'excerpt' => wp_trim_words($result->post_excerpt, 15, '...'),
//             'image' => wp_get_attachment_image_src( get_post_thumbnail_id($result->ID), 'hd')[0],
//             'company_logo' => get_field('project_company_logo', $result->ID),
//             'goal' => get_field('project_goal', $result->ID),
//             'budget' => get_field('project_budget', $result->ID),
//             'startdate' => format_date(get_field('project_startdate', $result->ID)),
//             'enddate' => format_date(get_field('project_enddate', $result->ID)),
//             'side_note' => get_field('project_side_note', $result->ID)
//         ];
//     }
//     return $projects;
// }