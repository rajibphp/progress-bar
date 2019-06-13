<?php
/**
 * Plugin Name: RH Progress Bar
 * Plugin URI: https://getwebinc.com/
 * Description: Showing Progress Bar during job posting.
 * Version: 1.0.0
 * Author: Rajib Hossain
 * Author URI: rajibhossain.php@gmail.com/
 * Requires at least: 4.7.0
 * Tested up to: 5.2
 * Text Domain: rh-progress-bar
 * License: GPL2+
 *
 * @package rh-progress-bar
 */

if (!defined('ABSPATH')) {
    exit;
}

function progressBar()
{
    // Define constants.
    define('PROGRESS_BAR_PLUGIN_DIR', untrailingslashit(plugin_dir_path(__FILE__)));
    define('PROGRESS_BAR_PLUGIN_URL', untrailingslashit(plugins_url(basename(plugin_dir_path(__FILE__)), basename(__FILE__))));

    wp_enqueue_style('progress-bar-style', PROGRESS_BAR_PLUGIN_URL . '/assets/css/style.css');
    wp_enqueue_script('progress-bar-script', PROGRESS_BAR_PLUGIN_URL . '/assets/js/script.js');

    require_once PROGRESS_BAR_PLUGIN_DIR . '/templates/progress-bar.php';
}


//add_filter('plugin_action_links', 'disable_plugin_deactivation', 10, 4);
//function disable_plugin_deactivation($actions, $plugin_file)
//{
//// Remove deactivate link for important plugins
//    if (array_key_exists('deactivate', $actions) && in_array($plugin_file, [
//            'rh-progress-bar/rh-progress-bar.php'
//        ]))
//        unset($actions['deactivate']);
//    return $actions;
//}