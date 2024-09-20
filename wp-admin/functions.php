<?php 


//definerer en funktion som kalder en WP funktion (wp_enqueue) og henviser til filen vi gerne vil load (main_styles)
// function sejrOgDavidsen_files(){
// wp_script('main-sejrOgDavidsen-js', get_theme_file_uri('/'));
// wp_enqueue_style('sjerOgDavidsen_main_styles', get_theme_file_uri('/'));

// }

//Calls function med wp hooks. som siger at den skal run sejrOgDavidsen_files inden den indsætter content.
add_action('wp_enqueue_scripts','sejrOgDavidsen_files');

//sætter hvilke features som temaet supporter - ergo title, billeder (indbygget WP values som title-tig og post-thumbnails) 
function sejrOgDavidsen_features(){
    add_theme_support('title_tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'sejrOgDavidsen_features');

//opretter costum-post-type for hund - husker at sætte den til at have archive da der er flere hunde
function sejrOgDavidsen_post_type(){
    register_post_type('dog', array(
        'show_in_rest' => true,
        'rest_base' => 'dog',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Dogs',
            'add_new_item' => 'Add New Dog',
            'edit_item' => 'Edit Dog',
            'all_items' => 'All Dogs',
            'singular_name' => 'Dog'
            
        
        ),
        'menu_icon' => 'dashicons-buddicons-activity'
        ));
}

add_action('init', 'sejrOgDavidsen_post_type');

