<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Step_Form_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'step-form-widget';
	}

	public function get_title() {
		return esc_html__( 'Step Form', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	protected function render() {
		?>

<div class="step-form-wrap bg-boxes-parent">
    <div class="bg-boxes">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="step-form-container">
        <?php echo do_shortcode( '[contact-form-7 id="450" title="Contact Step Form"]' ); ?>
    </div>
</div>

<?php
	}
}