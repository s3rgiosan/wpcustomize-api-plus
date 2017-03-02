<?php
/**
 * Customize API: Datepicker Control.
 *
 * @link  http://s3rgiosan.com/
 * @since 1.0.0
 */

namespace s3rgiosan\WP\Plugin\Customize\Date;

if ( ! class_exists( '\WP_Customize_Control' ) ) {
	return;
}

/**
 * Datepicker Control.
 *
 * @see \WP_Customize_Control
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
	 * jQuery UI Datepicker options.
	 *
	 * @see http://api.jqueryui.com/datepicker/.
	 *
	 * @since 1.0.0
	 * @var   array
	 */
	public $js_opts = array();

	/**
	 * Constructor.
	 *
	 * @uses \WP_Customize_Control::__construct()
	 *
	 * @since 1.0.0
	 * @param \WP_Customize_Manager $manager Customizer bootstrap instance.
	 * @param string                $id      Control ID.
	 * @param array                 $args    Optional. Arguments to override
	 *                                       class property defaults.
	 */
	public function __construct( $manager, $id, $args = array() ) {

		$js_opts = array();
		if ( ! empty( $args['input_attrs']['js_opts'] ) ) {
			$js_opts = $args['input_attrs']['js_opts'];
		}

		$this->js_opts = \wp_parse_args(
			$js_opts,
			array(
				'showButtonPanel'   => true,
				'showOtherMonths'   => true,
				'selectOtherMonths' => true,
				'dateFormat'        => \_x( 'd M yy', 'Datepicker Date Format', 'wpcustomize-api-plus' ),
			)
		);

		unset( $args['input_attrs']['js_opts'] );

		parent::__construct( $manager, $id, $args );
	}

	/**
	 * Renders the control's content.
	 *
	 * @since 1.0.0
	 */
	public function render_content() {
		echo '<div class="wpcustomize-api-plus-control">';
		echo '<label>';

		if ( ! empty( $this->label ) ) {
			printf(
				'<span class="customize-control-title">%s</span>',
				\esc_html( $this->label )
			);
		}

		if ( ! empty( $this->description ) ) {
			printf(
				'<span class="description customize-control-description">%s</span>',
				\esc_html( $this->description )
			);
		}

		?>
		<input
			type="text"
			<?php $this->input_attrs(); ?>
			value="<?php echo \esc_attr( $this->value() ); ?>"
			<?php $this->link(); ?>
			data-datepicker-opts="<?php echo \esc_attr( \wp_json_encode( $this->js_opts ) ); ?>"
			class="datepicker"
		>
		<?php

		echo '</label>';
		echo '</div>';
	}
}
