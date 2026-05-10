<?php
/**
 * Plugin Name:       WP Views Insights Monitor
 * Description:       A high-performance visitor tracking and analytics tool.
 * Version:           0.1.0
 * Author:            webcorecreatives
 * Text Domain:       wp-views-insights-monitor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define Constants for the CI/CD robot to read easily
define( 'WPVIM_VERSION', '0.1.0' );
define( 'WPVIM_PATH', plugin_dir_path( __FILE__ ) );

// We will initialize our main class here later...
// 1. Load the Composer Autoloader
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

// 2. Start the Plugin
if ( class_exists( 'WPVIM\\Bootstrap' ) ) {
	WPVIM\Bootstrap::init();
}
