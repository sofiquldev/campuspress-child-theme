<?php
use function Genesis\CustomBlocks\add_block;
function register_custom_repeater_block_test() {
    add_block(
        'campuspress-dual-image-text-block', 
        array(
            'title'             => __( 'Dual Image Text Block', 'campuspress-child' ),
            'description'       => __( 'A custom block with fields for two titles, descriptions, images, and buttons.', 'campuspress-child' ),
            'category'          => 'widgets',
            'icon'              => 'format-gallery',
            'keywords'          => array( 'dual image', 'text block' ),
            'fields'   => array( 
                'title-1' => array( 
                    'label'   => __( 'Title 1', 'campuspress-child' ), 
                    'control' => 'text', 
                    'width'   => '50', 
                    'default' => __( 'Praesent nec sapien ut leo facilisis.', 'campuspress-child' ), 
                ), 
                'title-2' => array( 
                    'label'   => __( 'Title 2', 'campuspress-child' ), 
                    'control' => 'text', 
                    'width'   => '50', 
                    'default' => __( 'Praesent nec sapien ut leo facilisis.', 'campuspress-child' ), 
                ), 
                'description-1' => array( 
                    'label'   => __( 'Description 1', 'campuspress-child' ), 
                    'control' => 'textarea', 
                    'width'   => '50', 
                    'default' => __( 'Nunc tortor diam, semper vitae lectus in, euismod malesuada libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam lacinia nibh felis, eget euismod nisi pretium sit amet. Donec nec iaculis diam. In hendrerit fringilla ipsum, dictum laoreet nibh porttitor et. Sed hendrerit vitae lorem in venenatis. In hac habitasse platea dictumst.', 'campuspress-child' ), 
                ), 
                'description-2' => array( 
                    'label'   => __( 'Description 2', 'campuspress-child' ), 
                    'control' => 'textarea', 
                    'width'   => '50', 
                    'default' => __( 'Nunc tortor diam, semper vitae lectus in, euismod malesuada libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam lacinia nibh felis, eget euismod nisi pretium sit amet. Donec nec iaculis diam. In hendrerit fringilla ipsum, dictum laoreet nibh porttitor et. Sed hendrerit vitae lorem in venenatis. In hac habitasse platea dictumst.', 'campuspress-child' ), 
                ), 
                'image-1' => array( 
                    'label'   => __( 'Thumbnail 1', 'campuspress-child' ), 
                    'control' => 'image', 
                    'width'   => '50', 
                ), 
                'image-2' => array( 
                    'label'   => __( 'Thumbnail 2', 'campuspress-child' ), 
                    'control' => 'image', 
                    'width'   => '50', 
                ),                 
                'button-url-1' => array( 
                    'label'   => __( 'Button URL 1', 'campuspress-child' ), 
                    'control' => 'url', 
                    'width'   => '50', 
                    'default' => 'https://campuspress.com/', 
                ), 
                'button-url-2' => array( 
                    'label'   => __( 'Button URL 2', 'campuspress-child' ), 
                    'control' => 'url', 
                    'width'   => '50', 
                    'default' => 'https://campuspress.com/', 
                ), 
           
            ), 
        )
    );
}

add_action( 'genesis_custom_blocks_add_blocks', 'register_custom_repeater_block_test' );
