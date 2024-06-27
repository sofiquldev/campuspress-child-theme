<?php

/**
 * CSS Style Files Load
 * @campuspress_flex_child_enqueue_styles
 */
function campuspress_flex_child_enqueue_styles() {
    wp_enqueue_style('campuspress-flex-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('campuspress-flex-child-style', get_stylesheet_directory_uri() . '/style.css', array('campuspress-flex-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'campuspress_flex_child_enqueue_styles');

/**
 * Javascript file load
 */
function campuspress_flex_child_enqueue_scripts() {
    wp_enqueue_script( 'campuspress-flex-child-custom-block', get_stylesheet_directory_uri() . '/assets/js/campuspress-flex-child-script.js', null, true);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'campuspress_flex_child_enqueue_scripts');


/**
 * Check if Genesis Custom Blocks plugin is active
 * @check_required_plugins
 */
function check_required_plugins() {
    if (!is_plugin_active('genesis-custom-blocks/genesis-custom-blocks.php')) {
        add_action('admin_notices', 'genesis_custom_blocks_notice');
    }
}
add_action('admin_init', 'check_required_plugins');

/**
 * Admin notice for required plugin
 * @genesis_custom_blocks_notice
 */
function genesis_custom_blocks_notice() {
    ?>
    <div class="notice notice-error">
        <p><?php _e('The CampusPress Flex Child theme requires the Genesis Custom Blocks plugin to be installed and activated. Please install and activate the plugin.', 'campuspress-child'); ?></p>
    </div>
    <?php
}

/**
 * Include custom blocks registration file
 * 
 */
require get_stylesheet_directory() . '/blocks/campuspress-dual-image-text-block/custom-blocks.php';

