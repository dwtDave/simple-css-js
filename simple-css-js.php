<?php

/*
Plugin Name: simple-css-js
Plugin URI: dontbrickyourwebsite.com
Description: A WordPress plugin to manage JavaScript and CSS files for your wordpress site
Version: 1.0
Author: Dave
License:GNU General Public License (GPL) v3
*/


//prevent direct access to this plugin
defined('ABSPATH') or die('No script kiddies please!');


function dbyw_plugin_enqueue_assets() {
    // Enqueue CSS
    wp_enqueue_style('custom-css-style', plugin_dir_url(__FILE__) . '/src/styles/style.css');

    // Enqueue JavaScript
    if ( ! bricks_is_builder_main() ) {
        wp_enqueue_script('custom-js-script', plugin_dir_url(__FILE__) . '/src/js/script.js', [], '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'dbyw_plugin_enqueue_assets');


