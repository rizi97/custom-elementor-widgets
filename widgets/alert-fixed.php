<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Alert_Fixed_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'alert-fixed';
    }
    public function get_title() {
        return esc_html__( 'Alert Fixed', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-alert';
    }
    public function get_categories() {
        return [ 'basic' ];
    }
    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
            'label' => esc_html__( 'Content', 'essential-elementor-widget' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        // important: Fields go here
        $this->add_control(
			'a_f_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'a_f_link',
			[
				'label' => esc_html__( 'Page Link', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {

        // get our input from the widget settings.
        $alertFixed = $this->get_settings_for_display();

        // variables
	$a_f_title = $alertFixed['a_f_title'];
	$a_f_link = $alertFixed['a_f_link']['url'];
	?>

<!-- Start rendering the output -->
<div class="alert-fixed-wrap">
	<a href="<?php echo $a_f_link; ?>"><?php echo $a_f_title; ?></a>
	<i class="fas fa-times"></i>
</div>
<!-- End rendering the output -->

<?php

  }
}