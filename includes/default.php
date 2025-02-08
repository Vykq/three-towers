<?php

add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css' );

function remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' );
    wp_dequeue_style( 'global-styles' );
}

add_action( 'init', 'remove_actions' );

function remove_actions() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'wp_resource_hints', 2, 99 );
    remove_action('wp_head', 'rsd_link');
    remove_action( 'wp_head', 'rest_output_link_wp_head' );
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action('wp_head', 'feed_links_extra', 3 );
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
}

add_action( 'wp_before_admin_bar_render', 'theme_admin_bar_render' );

function theme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}

add_filter('upload_mimes', 'exp_mime_types');

function exp_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_action( 'admin_init', 'my_remove_admin_menus' );

function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

add_filter( 'script_loader_tag', 'exp_defer_scripts', 10, 3 );

function exp_defer_scripts( $tag, $handle, $src ) {
    $defer = array(
        'webpack-js'
    );

    if ( in_array( $handle, $defer ) ) {
        return '<script src="' . $src . '" defer="defer"></script>';
    }

    return $tag;
}

include(get_template_directory() . '/includes/blocks.php');
