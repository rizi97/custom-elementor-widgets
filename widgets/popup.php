<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Step_Form_Popup extends \Elementor\Widget_Base {

	public function get_name() {
		return 'step-form-popup';
	}

	public function get_title() {
		return esc_html__( 'Step Form Popup', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-form-horizontal';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	protected function render() {
		?>

<div class="modal fade" id="stepFormModal" tabindex="-1" aria-labelledby="stepFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="stepFormModalLabel">Modal title</h5>
            </div> -->
            <div class="modal-body">
                <div class="popup sec-padding-all">
                    <div class="step-form">
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
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>

<?php
	}
}