<?php
function olm_files() {
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('main-css', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('xtra-js', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'olm_files');

function update_title_tag() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'update_title_tag');
?>