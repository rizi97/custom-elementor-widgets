<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Marquee_Textarea_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'marquee-textarea';
    }
    public function get_title() {
        return esc_html__( 'Marquee Textarea', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-copy';
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
			'marquee-textarea',
			[
				'label' => esc_html__( 'Marquee Textarea List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'marquee_textarea',
						'label' => esc_html__( 'Marquee Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'rows' => 10,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					]
				],
				'default' => [
					[
						'marquee_textarea' => esc_html__( 'Marquee Title #1', 'textdomain' ),
					],
					[
						'marquee_textarea' => esc_html__( 'Marquee Title #2', 'textdomain' ),
					],
				],
				'title_field' => '{{{ marquee_textarea }}}',
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {
		$settings = $this->get_settings_for_display();

		if ( $settings['marquee-textarea'] ) {
			echo '<div class="text-marquee">';
			foreach (  $settings['marquee-textarea'] as $item ) {
				echo '<div class="js-text">' . $item['marquee_textarea'] . '</div>';
			}
			echo '</div>';
		}
	}
}