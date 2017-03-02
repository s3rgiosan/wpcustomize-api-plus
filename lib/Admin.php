<?php
/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link  http://s3rgiosan.com/
 * @since 1.0.0
 */

namespace s3rgiosan\WP\Plugin\Customize;

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @author Sérgio Santos <me@s3rgiosan.com>
 */
class Admin {

	/**
	 * The plugin's instance.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    Plugin
	 */
	private $plugin;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 * @param Plugin $plugin This plugin's instance.
	 */
	public function __construct( Plugin $plugin ) {
		$this->plugin = $plugin;
	}

	/**
	 * Register the stylesheets for the Customizer.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles() {

		\wp_enqueue_style(
			sprintf( '%s-jquery-ui', $this->plugin->get_name() ),
			\plugin_dir_url( dirname( __FILE__ ) ) . 'assets/jquery-ui.min.css',
			array(),
			$this->plugin->get_version(),
			'all'
		);

		\wp_enqueue_style(
			$this->plugin->get_name(),
			\plugin_dir_url( dirname( __FILE__ ) ) . 'assets/datepicker.css',
			array(),
			$this->plugin->get_version(),
			'all'
		);
	}

	/**
	 * Register the scripts for the Customizer.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts() {

		\wp_enqueue_script( 'jquery-ui-datepicker' );

		\wp_enqueue_script(
			$this->plugin->get_name(),
			\plugin_dir_url( dirname( __FILE__ ) ) . 'assets/datepicker.js',
			array(
				'jquery',
				'customize-controls',
				'jquery-ui-datepicker',
			),
			$this->plugin->get_version(),
			true
		);
	}
}
