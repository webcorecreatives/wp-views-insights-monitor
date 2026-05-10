<?php
namespace WPVIM;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Main Bootstrap Class
 */
class Bootstrap {

	/**
	 * Start the plugin logic
	 */
	public static function init() {
		$instance = new self();
		$instance->setup_hooks();
	}

	/**
	 * Setup WordPress Hooks
	 */
	public function setup_hooks() {

		// This is where you will eventually call your Admin and Frontend classes
		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		// Example: Initialize Admin logic
		if ( is_admin() ) {
			error_log( 'WP Views Insights Monitor: Admin logic loaded.' );
			// New \WPVIM\Admin\Dashboard();
		}
	}

	public function load_textdomain() {
		load_plugin_textdomain( 'wp-views-insights-monitor', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}
