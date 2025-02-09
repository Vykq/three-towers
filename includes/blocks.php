<?php

global $blocks;

$blocks = array(
    'main-hero' => 'Main hero',
    'cta-block' => 'CTA block',
    'steps-slider' => 'Steps slider',

);

add_action('acf/init', 'my_acf_init');

function my_acf_init() {

    if( function_exists('acf_register_block') ) {

        global $blocks;
        foreach ($blocks as $key => $value) {
            acf_register_block(array(
                'name'				=> $key,
                'title'				=> $value,
                'render_callback'	=> 'exp_blocks',
                'category'			=> 'landing-blocks',
                'icon' => array(
                    'background' => '#F5F5F5',
                    'foreground' => '#484848',
                    'src' => 'image-filter',
                ),
                'mode'              => 'edit',
                'supports' => array(
                    'align' => false,
                    'mode' => false,
                ),
                'example' => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => ['is_preview' => true],
                    ]
                ]
            ));
        }
    }
}

add_filter( 'allowed_block_types_all', 'exp_allowed_block_types', 10, 2 );

function exp_allowed_block_types( $allowed_blocks, $post ) {
    global $pagenow;
    global $post;

    if ( !empty( $post->post ) ) {

        $allowed_blocks = [
            'core/block',
            'core/html',
            'core/image',
            'core/quote',
            'core/paragraph',
            'core/heading',
            'core/list'
        ];

        if ($post->post_type == 'page') {
            foreach ($blocks as $key => $value) {
                $allowed_blocks[] = 'acf/'.$key;
            }
        }
    }

    return $allowed_blocks;
}

$block_ind = 0;
global $block_ind;

function exp_blocks( $block ) {
    $slug = str_replace('acf/', '', $block['name']);
    if (get_field('is_preview')) {
        echo '<img src="'.get_theme_file_uri("/blocks/preview/".$slug.".jpg").'" alt="">';
    } else {
        global $block_index;
        $block_index++;
        if( file_exists( get_theme_file_path("/blocks/{$slug}.php") ) ) {
            include( get_theme_file_path("/blocks/{$slug}.php") );
        }
    };
}