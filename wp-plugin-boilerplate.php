<?php

/**
 * Plugin Name: Plugin Boilerplate
 * Description: A WordPress plugin boilerplate
 * Author: Christopher Geary
 * Author URI: https://creary.com
 * Version: 0.0.1
 */

if (!defined('ABSPATH')) {
    exit;
}

define('PLUGIN_BOILERPLATE_FILE', __FILE__);
define('PLUGIN_BOILERPLATE_PATH', untrailingslashit(plugin_dir_path(__FILE__)));
define('PLUGIN_BOILERPLATE_URL', untrailingslashit(plugin_dir_url(__FILE__)));

require_once (PLUGIN_BOILERPLATE_PATH.'/src/App.php');

Chrisgeary92\Boilerplate\App::instance();
