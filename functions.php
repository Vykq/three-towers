<?php

include(dirname(__FILE__) . '/includes/default.php');

/**
 * Theme files
 */
function webpack_files() {
    wp_enqueue_script('webpack-js', get_theme_file_uri('assets/app.js'), array(), '1.0.0', true);
    wp_enqueue_style('webpack-styles', get_theme_file_uri('assets/style.css'), array(), '1.0.0');
    wp_localize_script( 'webpack-js', 'themeUrl',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce( 'wp-smart-sign-nonce' ),
            'themeUrl' => get_theme_file_uri(),
        )
    );
}
add_action('wp_enqueue_scripts', 'webpack_files');

/**
 * Theme support
 */

function theme_features() {
    load_theme_textdomain( 'tt', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
}

add_action('after_setup_theme', 'theme_features');


if( function_exists('acf_add_options_page') ) {

    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Puslapio nustatymai',
        'menu_title'	=> 'Puslapio nustatymai',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'position'    => -1,
        'redirect'		=> false,
        'post_id' => 'main-settings',
    ));


}
