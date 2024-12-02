<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Testimonials_Repeater_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'testimonials-repeater';
    }
    public function get_title() {
        return esc_html__( 'Testimonials Repeater', 'essential-elementor-widget' );
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
			'testimonials-repeater',
			[
				'label' => esc_html__( 'Testimonials Repeater List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'testimonials_title',
						'label' => esc_html__( 'Testimonials User', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'testimonials_textarea',
						'label' => esc_html__( 'Testimonials Text', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'rows' => 10,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					// [
					// 	'name' => 'testimonials_bg',
					// 	'label' => esc_html__( 'Choose Background Image', 'textdomain' ),
					// 	'type' => \Elementor\Controls_Manager::MEDIA,
					// 	'default' => [
					// 		'url' => \Elementor\Utils::get_placeholder_image_src(),
					// 	],
					// 	'label_block' => true,
					// ]
				],
				'default' => [
					[
						'testimonials_title' => esc_html__( 'Testimonial User #1', 'textdomain' ),
						'testimonials_textarea' => esc_html__( 'Testimonial Text #1', 'textdomain' ),
						// 'testimonials_bg' => esc_html__( 'Testimonial Background #1', 'textdomain' ),
					],
					[
						'testimonials_title' => esc_html__( 'Testimonial User #2', 'textdomain' ),
						'testimonials_textarea' => esc_html__( 'Testimonial Text #2', 'textdomain' ),
						// 'testimonials_bg' => esc_html__( 'Testimonial Background #2', 'textdomain' ),
					],
				],
				'title_field' => '{{{ testimonials_title }}}',
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {
		$settings = $this->get_settings_for_display();

		if ( $settings['testimonials-repeater'] ) {
			// echo '<div class="swiper swiper-testimonials"><div class="cstm-slide-count"><span>1</span>/<b></b></div><div class="swiper-wrapper">';
			echo '<div class="swiper swiper-testimonials"><div class="swiper-wrapper">';
			foreach (  $settings['testimonials-repeater'] as $item ) {
				// echo '<div class="swiper-slide" style="background-image: url('. $item['testimonials_bg']['url'] .')">';
				echo '<div class="swiper-slide hover-area">';
				echo '<div class="testimonials-user"><span>' . $item['testimonials_title'] . '</span></div>';
				echo '<div class="testimonials-text">' . $item['testimonials_textarea'] . '</div>';
				echo '</div>';
			}
			echo '</div><div class="swiper-pagination"></div><div class="swiper-button-prev"></div><div class="swiper-button-next"></div></div>';
		}
	}
}