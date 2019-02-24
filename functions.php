<?php
add_action( 'wp_enqueue_scripts', 'carica_stili_parent' );
function carica_stili_parent() {
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' );
    
}
?>

