<?php
/**
 * Customize API Plus
 *
 * A collection of custom controls you can use in your WordPress theme customizer.
 *
 * @link  http://s3rgiosan.com/
 * @since 1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Customize API Plus
 * Plugin URI:        https://github.com/s3rgiosan/wpcustomize-api-plus/
 * Description:       A collection of custom controls you can use in your WordPress theme customizer.
 * Version:           1.0.0
 * Author:            Sérgio Santos
 * Author URI:        http://s3rgiosan.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpcustomize-api-plus
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/s3rgiosan/wpcustomize-api-plus
 * GitHub Branch:     master
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Begins execution of the plugin.
 *
 * @since 1.0.0
 */
\add_action( 'plugins_loaded', function () {
	$plugin = new s3rgiosan\WP\Plugin\Customize\Plugin( 'wpcustomize-api-plus', '1.0.0' );
	$plugin->run();
} );
