<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Newsletter_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'newsletter';
	}

	public function get_title() {
		return esc_html__( 'Newsletter', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	protected function render() {
		?>

<div class="newsletter-wrap">
    <?php echo do_shortcode( '[newsletter]' ); ?>
</div>

<?php
	}
}