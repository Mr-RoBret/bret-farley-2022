<?php

function portfolio_files() {
    wp_enqueue_style('portfolio_main_styles', get_theme_file_uri('/style.css'));
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&family=Dosis:wght@200;300;400;500;600&display=swap');

}

function portfolio_features() {
    register_nav_menu('headerMenuLocation', "Header Menu Location");
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('post-thumbnail-size', 500, 300, true);
    set_post_thumbnail_size('post-thumbnail-size');
}

add_action('wp_enqueue_scripts', 'portfolio_files');
add_action('after_setup_theme', 'portfolio_features');
?>