<?php

// Hooks and Filters used in this file
// after_setup_theme
// widgets_init
// wp_body_open
// wp_head
// wp_enqueue_scripts
// wp_resource_hints


add_action('after_setup_theme', function () {
    add_theme_support('automatic-feed-links');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));
    add_theme_support('custom-header', array(
        'height' => '40',
        'flex-height' => true,
        'width' => '140',
        'flex-width' => true,
        'uploads' => true,
        'header-text' => true,
    ));
    add_theme_support('custom-logo', array(
        'height' => 100,
        'weight' => 100,
        'flex-height' => true,
        'flex-weight' => true,
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets'
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus(array(
        'primary' => __('Primary', 'theme-prefix'),
    ));
});


add_action('widgets_init', function () {
    register_sidebar(array(
        'name' => __('Footer Widgets', 'theme-prefix'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here', 'theme-prefix'),
        'before_widget' => '<section id="%1$s" class="widget %2$s col-sm-6 col-md-4 col-lg-3">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="h4 widget-title mb-0 pb-2">',
        'after_title' => '</h3>',
    ));
});


add_action('wp_head', function () {
    if (is_singular() && pings_open()) {
        echo '<link rel="pingback" href="' . esc_url(get_bloginfo('pingback_url')) . '">';
    }
});


add_action('wp_enqueue_scripts', function () {
    $tpl_dir = get_template_directory();
    $tpl_dir_uri = get_template_directory_uri();

    // Bootstrap Style
    $path = '/css/bootstrap.min.css';
    if (file_exists($tpl_dir . '' . $path)) {
        wp_enqueue_style('theme-prefix-bootstrap-style', $tpl_dir_uri . '' . $path, array() , filemtime($tpl_dir . '' . $path));
    }

    // Bootstrap Script with PopperJS
    $path = '/js/bootstrap.bundle.min.js';
    if (file_exists($tpl_dir . '' . $path)) {
        wp_enqueue_script('theme-prefix-bootstrap-script', $tpl_dir_uri . '' . $path, array(
            'jquery'
        ) , filemtime($tpl_dir . '' . $path) , true);
    }

    // Theme Style
    $path = '/style.css';
    if (file_exists($tpl_dir . '' . $path)) {
        wp_enqueue_style('theme-prefix-style', $tpl_dir_uri . '' . $path, array(
            'theme-prefix-bootstrap-style'
        ) , filemtime($tpl_dir . '' . $path));
    }

    // Theme Script
    $path = '/main.js';
    if (file_exists($tpl_dir . '' . $path)) {
        wp_enqueue_script('theme-script', $tpl_dir_uri . '' . $path, array(
            'jquery', 'theme-prefix-bootstrap-script'
        ) , filemtime($tpl_dir . '' . $path) , true);
    }


});



add_filter('wp_resource_hints', function ($hints, $relation_type) {
    if ('preconnect' === $relation_type) {
        $hints[] = ['href' => 'https://fonts.googleapis.com', ];
        $hints[] = ['href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous', ];
    }
    return $hints;
}, 10, 2);
