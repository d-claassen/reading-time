<?php

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
