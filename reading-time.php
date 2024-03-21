<?php

/**
 * Reading Time plugin.
 *
 * @author Dennis Claassen
 *
 * @wordpress-plugin
 * Plugin Name: Reading Time
 * Version: 0.1.0
 * Description: Add more features related to reading time in your WordPress website.
 * Requires at least: 6.2
 * Requires PHP: 8.1
 * Author: Dennis Claassen
 * Author URI: https://www.dennisclaassen.nl/
 */

declare( strict_types=1 );

require_once 'vendor/autoload.php';

if ( ! function_exists( 'reading_time_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook.
	 */
	function reading_time_setup(): void {
		( new \DC23\ReadingTime\Schema_Integration() )->register();
	}
endif;
add_action( 'init', 'reading_time_setup' );
