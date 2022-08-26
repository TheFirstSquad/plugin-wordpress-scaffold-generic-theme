<?php

function wp_custom_theme_register_styles(){
    wp_enqueue_style(
        'wp_custom_theme-bootstrap', 
        get_template_directory_uri(). "/style.css", 
        array(),
        '1.0',
        'all'
    );
}

add_action('wp_enqueue_scripts', 'wp_custom_theme_register_styles');

?>