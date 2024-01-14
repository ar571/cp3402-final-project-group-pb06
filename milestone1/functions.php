<?php
function my_theme_enqueue_styles_and_scripts() {
    wp_register_style('custom-style', get_template_directory_uri() . '/css/custom-style.css', array(), '1.0', 'all');
    wp_enqueue_style('custom-style');

    wp_register_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), '1.0', true);
    wp_enqueue_script('custom-script');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles_and_scripts');
?>