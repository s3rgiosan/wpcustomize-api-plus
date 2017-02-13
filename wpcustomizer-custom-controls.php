<?php
/**
 * WordPress Theme Customizer Custom Controls
 *
 * A collection of custom controls you can use in your WordPress theme customizer.
 *
 * @link  http://s3rgiosan.com/
 * @since 1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Theme Customizer Custom Controls
 * Plugin URI:        https://github.com/s3rgiosan/wpcustomizer-custom-controls/
 * Description:       A collection of custom controls you can use in your WordPress theme customizer.
 * Version:           1.0.0
 * Author:            Sérgio Santos
 * Author URI:        http://s3rgiosan.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpcustomizer-custom-controls
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/s3rgiosan/wpcustomizer-custom-controls
 * GitHub Branch:     master
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
