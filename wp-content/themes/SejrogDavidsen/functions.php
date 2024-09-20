<?php


//definerer en funktion som kalder en WP funktion (wp_enqueue) og henviser til filen vi gerne vil load (main_styles)

function sejrOgDavidsen_files()
{
    wp_enqueue_style('sejrOgDavidsen_main_styles', get_theme_file_uri('assets/css/style.css'));
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');
    wp_enqueue_script('app.js', get_theme_file_uri('/assets/js/app.js'), array('jquery'), '1.0', true);
}

//Calls function med wp hooks. som siger at den skal run sejrOgDavidsen_files inden den indsætter content.
add_action('wp_enqueue_scripts', 'sejrOgDavidsen_files');


//sætter hvilke features som temaet supporter - ergo title, billeder (indbygget WP values som title-tig og post-thumbnails) 
function sejrOgDavidsen_features()
{
    add_theme_support('title_tag');
    add_theme_support('post-thumbnails');
    add_image_size('pageBanner', 1500, 350, true);
}
add_action('after_setup_theme', 'sejrOgDavidsen_features');



//opretter costum-post-type for hund - husker at sætte den til at have archive da der er flere hunde
function sejrOgDavidsen_post_type()
{
    register_post_type('dog', array(
        'show_in_rest' => true,
        'has_archive' => true,
        'public' => true,
        'rewrite' => array('slug' => 'hunde'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Dogs',
            'add_new_item' => 'Add New Dog',
            'edit_item' => 'Edit Dog',
            'all_items' => 'All Dogs',
            'singular_name' => 'Dog'
        ),
        'menu_icon' => 'dashicons-pets'
    ));
}

add_action('init', 'sejrOgDavidsen_post_type');
show_admin_bar(false);

function dogMapKey($api)
{
    $api['key'] = 'AIzaSyCk5V1VPE9pnXjh1Z5pPm2kHveTvK_HPsw';
    return $api;
}
