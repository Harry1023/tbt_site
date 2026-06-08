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
}


add_action('after_setup_theme', '_addMeta');
add_action('wp_head', '_addtoHead');
add_action('wp_enqueue_scripts', '_addFiles');

?>