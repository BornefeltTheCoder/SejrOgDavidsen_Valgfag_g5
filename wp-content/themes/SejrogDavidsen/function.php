<?php 


//definerer en funktion som kalder en WP funktion (wp_enqueue) og henviser til filen vi gerne vil load (main_styles)
function sejrOgDavidsen_files(){
wp_enqueue_style('sjerOgDavidsen_main_styles',get_stylesheet_uri());
}

//Calls function med wp hooks. som siger at den skal run sejrOgDavidsen_files inden den indsætter content.
add_action('wp_enqueue_scripts','sejrOgDavidsen_files');