<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Marquee_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'marquee';
    }
    public function get_title() {
        return esc_html__( 'Marquee', 'essential-elementor-widget' );
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
			'marquee',
			[
				'label' => esc_html__( 'Marquee List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'marquee_title',
						'label' => esc_html__( 'Marquee Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					]
				],
				'default' => [
					[
						'marquee_title' => esc_html__( 'Marquee Title #1', 'textdomain' ),
					],
					[
						'marquee_title' => esc_html__( 'Marquee Title #2', 'textdomain' ),
					],
				],
				'title_field' => '{{{ marquee_title }}}',
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {
		$settings = $this->get_settings_for_display();

		if ( $settings['marquee'] ) {
			echo '<div class="swiper swiper-marquee"><div class="swiper-wrapper">';
			foreach (  $settings['marquee'] as $item ) {
				echo '<div class="swiper-slide">' . $item['marquee_title'] . '</div>';
			}
			echo '</div></div>';
		}
	}
}