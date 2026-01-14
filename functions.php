<?php

function enqueue_styles() {
    wp_enqueue_style('my-style', get_stylesheet_uri());

    wp_enqueue_style('tailwind-output', get_template_directory_uri() . '/src/output.css');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {
    wp_enqueue_script(
        'about-section-parallax',
        get_template_directory_uri() . '/assets/js/about-section-parallax.js',
        array(),
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );