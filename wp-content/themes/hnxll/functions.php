<?php

global $turl; // Gets Template Directory
$turl = get_template_directory_uri();

function _addMeta() {

add_theme_support('title-tag');
add_theme_support('custom-logo');
}


function _addtoHead() {
    global $turl;
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<meta http-equiv='Content-Language' content='en'/>";
    echo "<link rel='stylesheet' href='$turl /style.css'><link rel='stylesheet' href='$turl /responsive.css'>";
    // echo "<script src='$turl/balanced.js' defer></script>";
}


 function _addFiles() {
 global $turl;
   wp_enqueue_script('BalanceJS', $turl . "/balanced.js", true);
   wp_enqueue_script('JQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', true);
   wp_enqueue_script('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', 'true');
   wp_enqueue_script('AOSJs', 'https://unpkg.com/aos@2.3.1/dist/aos.js', true);
   wp_enqueue_script('AppJS', $turl. '/App.js', true);
}


add_action('after_setup_theme', '_addMeta');
add_action('wp_head', '_addtoHead');
add_action('wp_enqueue_scripts', '_addFiles');

?>