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

// Define constants.
define('PROGRESS_BAR_PLUGIN_DIR', untrailingslashit(plugin_dir_path(__FILE__)));
define('PROGRESS_BAR_PLUGIN_URL', untrailingslashit(plugins_url(basename(plugin_dir_path(__FILE__)), basename(__FILE__))));
define('ISMOBILEDEVICE', isMobileDevice() ? 1 : null);
function progressBar()
{
    $style = PROGRESS_BAR_PLUGIN_URL . '/assets/css/';
    wp_enqueue_style('progress-bar-style', $style .= ISMOBILEDEVICE ? 'style-mobile.css' : 'style.css');
    wp_enqueue_script('progress-bar-script', PROGRESS_BAR_PLUGIN_URL . '/assets/js/script.js');

    load_template(PROGRESS_BAR_PLUGIN_DIR . '/templates/progress-bar.php');
}

add_filter('plugin_action_links', 'disable_plugin_deactivation', 10, 4);
function disable_plugin_deactivation($actions, $plugin_file)
{
// Remove deactivate link for important plugins
    if (array_key_exists('deactivate', $actions) && in_array($plugin_file, [
            'rh-progress-bar/rh-progress-bar.php'
        ]))
        unset($actions['deactivate']);
    return $actions;
}


function isMobileDevice()
{
    return 1;
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}