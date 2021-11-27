<?php

add_action('wp_enqueue_scripts', 'medical_styles');
add_action('wp_enqueue_scripts', 'medical_scripts');

function medical_styles() {
    wp_enqueue_style('glide-style', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css');
    wp_enqueue_style('font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css');
    wp_enqueue_style('montserrat-style', 'http://fonts.cdnfonts.com/css/montserrat');
    wp_enqueue_style('bootstrap-style', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css');
    wp_enqueue_style('medical-style', get_stylesheet_uri());
};
function medical_scripts() {
    wp_enqueue_script('glide-script', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-script', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('jquery-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
    wp_enqueue_script('script-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery-script'), null, true);
};


add_theme_support('custom-logo')

?>