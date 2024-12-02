<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Repeater_About_Teg_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'repeater-about-teg';
    }
    public function get_title() {
        return esc_html__( 'Repeater About Teg', 'essential-elementor-widget' );
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
			'repeater-about-teg',
			[
				'label' => esc_html__( 'Repeater About Teg List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'about_title',
						'label' => esc_html__( 'About Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'about_textarea',
						'label' => esc_html__( 'About Text', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
						'rows' => 10,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'about_image',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'label_block' => true,
					],
					[
						'name' => 'about_button_text',
						'label' => esc_html__( 'About Button Text', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'about_button_link',
						'label' => esc_html__( 'About Button Link', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
				],
				'default' => [
					[
						'about_title' => esc_html__( 'About Title #1', 'textdomain' ),
						'about_textarea' => esc_html__( 'About Text #1', 'textdomain' ),
						'about_image' => esc_html__( 'Choose Image #1', 'textdomain' ),
						'about_button_text' => esc_html__( 'About Button Text #1', 'textdomain' ),
						'about_button_link' => esc_html__( 'About Button Link #1', 'textdomain' ),
					],
					[
						'about_title' => esc_html__( 'About Title #2', 'textdomain' ),
						'about_textarea' => esc_html__( 'About Text #2', 'textdomain' ),
						'about_image' => esc_html__( 'Choose Image #2', 'textdomain' ),
						'about_button_text' => esc_html__( 'About Button Text #2', 'textdomain' ),
						'about_button_link' => esc_html__( 'About Button Link #2', 'textdomain' ),
					],
				],
				'title_field' => '{{{ about_title }}}',
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {
		$settings = $this->get_settings_for_display();

		if ( $settings['repeater-about-teg'] ) {
			echo '<div class="swiper swiper-about"><div class="cstm-slide-count"><span>1</span>/<b></b></div><div class="swiper-wrapper">';
			foreach (  $settings['repeater-about-teg'] as $item ) {
				echo '<div class="swiper-slide">
						<div class="s-a-wrap">
						  <div class="s-about-text">
						    <h2>'. $item['about_title'] .'</h2>
						    <p>'. $item['about_textarea'] .'</p>
						    <a href="'. $item['about_button_link'] .'" class="main-button">'. $item['about_button_text'] .'</a>
					      </div>
						  <div class="s-about-image">
						    <img src="'. $item['about_image']['url'] .'" alt="" />
					      </div>
					    </div>
					  </div>';



				// echo '<div class="swiper-slide">';
				// echo '<div class="testimonials-user"><span>' . $item['about_title'] . '</span></div>';
				// echo '<div class="testimonials-text">' . $item['about_textarea'] . '</div>';
				// echo '</div>';
			}
			echo '</div><div class="swiper-pagination"></div></div>';
		}
	}
}