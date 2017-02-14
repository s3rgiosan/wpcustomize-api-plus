<?php
/**
 * Date picker custom control.
 *
 * @link  http://s3rgiosan.com/
 * @since 1.0.0
 */

namespace s3rgiosan\Customizer\Date;

if ( ! class_exists( '\WP_Customize_Control' ) ) {
	return null;
}

/**
 * Date picker custom control.
 *
 * Usage:
 *
 * ```php
 * ```
 *
 * @author Sérgio Santos <me@s3rgiosan.com>
 */
class DatePicker extends \WP_Customize_Control {

	/**
	 * Enqueue scripts/styles for the date picker.
	 *
	 * @since 1.0.0
	 */
	public function enqueue() {
		\wp_enqueue_style( 'jquery-ui-datepicker' );
	}

	/**
	 * Renders the control's content.
	 *
	 * @since 1.0.0
	 */
	public function render_content() {
		printf(
			'<label>
				<span class="customize-date-picker-control">%s</span>
				<input type="date" id="%s" name="%s" value="%s" class="datepicker">
			</label>',
			\esc_html( $this->label ),
			\esc_attr( $this->id ),
			\esc_attr( $this->id ),
			\esc_html( $this->value() )
		);
	}
}
