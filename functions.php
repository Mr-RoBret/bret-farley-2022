<?php

function portfolio_files() {
    wp_enqueue_style('portfolio_main_styles', get_theme_file_uri('/style.css'));
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&family=Dosis:wght@200;300;400;500;600&display=swap');
}

function portfolio_features() {
    register_nav_menu('headerMenuLocation', "Header Menu Location");
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('post-thumbnail-size', 250, 178, true);
    set_post_thumbnail_size('post-thumbnail-size');
}

function portfolio_scripts() {
    wp_enqueue_script('headline_script', get_template_directory_uri().'/src/index.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'portfolio_files');
add_action('after_setup_theme', 'portfolio_features');
add_action('wp_enqueue_scripts', 'portfolio_scripts');
?>