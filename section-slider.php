<?php

/***
 * Plugin Name: Section Slider
 * Plugin URI: https://wpnonce.com
 * Description: Create sections within a post and display it in an interactive slider.
 * Version: 0.0.0
 * Author: WP Nonce
 * Author URI: https://github.com/wpnonce
 * Text Domain: section-slider
 * Domain Path: /languages
 *
 * Copyright (c) 2017 WP Nonce <info@wpnonce.com, @wpnonce>.
 */

//Avoid direct calls to this file
if ( ! defined( 'ABSPATH' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    die( 'Access Forbidden' );
}

define( 'SS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SS_PLUGIN_URL', plugins_url( '', __FILE__ ) );
define( 'SS_TEMPLATE_DIR', SS_PLUGIN_DIR . 'templates/' );

include SS_PLUGIN_DIR . 'bootstrap/class-loader.php';
include SS_PLUGIN_DIR . 'bootstrap/template-loader.php';
include SS_PLUGIN_DIR . 'bootstrap/freemius-loader.php';

/** Initialize the awesome */
new \SectionSlider\Section_Slider();
