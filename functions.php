<?php

function portfolio_files() {
    wp_enqueue_style('portfolio_main_styles', get_theme_file_uri('/style.css'));
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Cormorant+Upright:wght@300;400;500;600;700&family=Dosis:wght@200;300;400;500;600&display=swap');

}

add_action('wp_enqueue_scripts', 'portfolio_files');

?>