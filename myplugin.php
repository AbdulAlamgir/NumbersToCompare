<?php
/*
 * Plugin Name:       My Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Abdullah
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */



 function icodeguru_sessions() {
    register_post_type('sessions', array(
        'public' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'labels' => array(
            'name' => 'Sessions',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Session',
            'all_items' => 'All Sessions',
            'edit_item' => 'Edit Session',
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}
add_action('init', 'icodeguru_sessions');


?>