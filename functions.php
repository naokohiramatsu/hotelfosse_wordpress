<?php

// CSSの読み込み
function my_theme_enqueue_styles()
{
    wp_enqueue_style('ress-css', 'https://unpkg.com/ress@4.0.0/dist/ress.min.css', array(), null);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif:ital,wght@0,100..900&family=Zen+Kaku+Gothic+Antique&display=swap', array(), null);
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// JSの読み込み
function my_theme_enqueue_scripts()
{
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('swiper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
