<?php
function add_link_files()
{

    // CSSの読み込み
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/assets/css/base/reset.css');
    wp_enqueue_style('base', get_stylesheet_directory_uri() . '/assets/css/base/base.css');
    wp_enqueue_style('splide-style', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css");
    if (is_front_page())
        wp_enqueue_style('home', get_stylesheet_directory_uri() . '/assets/css/template/index.css');
    if (is_archive('interview'))
        wp_enqueue_style('interview', get_stylesheet_directory_uri() . '/assets/css/template/interview.css');
    if (is_singular('interview'))
        wp_enqueue_style('interview-post', get_stylesheet_directory_uri() . '/assets/css/template/interview.css');
    if (is_archive('reqruit'))
        wp_enqueue_style('reqruit', get_stylesheet_directory_uri() . '/assets/css/template/reqruit.css');
    // JavaScriptの読み込み
    wp_enqueue_script('splide', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js");
    wp_enqueue_script('g-sap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js");
    wp_enqueue_script('scrollTrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js");
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/index.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'add_link_files');
