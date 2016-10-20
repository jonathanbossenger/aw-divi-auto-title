<?php
/*
 * Plugin Name: AW Divi Auto Title
 * Version: 1.0
 * Plugin URI: http://atlanticwave.co/
 * Description: Auto update Module Title
 * Author: Atlantic Wave
 * Author URI: http://atlanticwave.co/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * @package WordPress
 * @author Atlantic Wave
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'DAT_PLUGIN_URL', plugin_dir_url(__FILE__) );
$divi_auto_title_js = 'divi-auto-title.js';
if (defined('WP_DEBUG') && true === WP_DEBUG) {
    $divi_auto_title_js = 'divi-auto-title.min.js';
}

/*
 * Custom CSS and JS
 */
function dat_enqueue_plugin_scripts() {
    wp_enqueue_script( 'divi-auto-title', DAT_PLUGIN_URL . 'js/' . $divi_auto_title_js );
}
add_action( 'admin_enqueue_scripts', 'dat_enqueue_plugin_scripts' );