<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Repeater_Case_Studies_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'repeater-case-studies';
    }
    public function get_title() {
        return esc_html__( 'Repeater Case Studies', 'essential-elementor-widget' );
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
			'repeater-case-studies',
			[
				'label' => esc_html__( 'Repeater Case Studies List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'r_c_s_title',
						'label' => esc_html__( 'Case Studies Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'r_c_s_subtitle_1',
						'label' => esc_html__( 'Case Studies Sub Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'r_c_s_description_1',
						'label' => esc_html__( 'Description', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'r_c_s_subtitle_2',
						'label' => esc_html__( 'Case Studies Sub Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'r_c_s_description_2',
						'label' => esc_html__( 'Description', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'r_c_s_image_1',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'label_block' => true,
					],
					[
						'name' => 'r_c_s_image_2',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'label_block' => true,
					],
					[
						'name' => 'r_c_s_image_3',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'label_block' => true,
					],
					[
						'name' => 'r_c_s_image_4',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'label_block' => true,
					],
					[
						'name' => 'r_c_s_image_5',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'label_block' => true,
					]
				],
				'default' => [
					[
						'r_c_s_title' => esc_html__( 'Case Studies Title #1', 'textdomain' ),
						'r_c_s_subtitle_1' => esc_html__( 'Case Studies Sub Title #1', 'textdomain' ),
						'r_c_s_description_1' => esc_html__( 'Case Studies Description #1', 'textdomain' ),
						'r_c_s_subtitle_2' => esc_html__( 'Case Studies Sub Title #1', 'textdomain' ),
						'r_c_s_description_2' => esc_html__( 'Case Studies Description #1', 'textdomain' ),
						'r_c_s_image_1' => esc_html__( 'Case Studies Image #1', 'textdomain' ),
						'r_c_s_image_2' => esc_html__( 'Case Studies Image #2', 'textdomain' ),
						'r_c_s_image_3' => esc_html__( 'Case Studies Image #3', 'textdomain' ),
						'r_c_s_image_4' => esc_html__( 'Case Studies Image #4', 'textdomain' ),
						'r_c_s_image_5' => esc_html__( 'Case Studies Image #5', 'textdomain' ),
					],
					[
						'r_c_s_title' => esc_html__( 'Case Studies Title #2', 'textdomain' ),
						'r_c_s_subtitle_1' => esc_html__( 'Case Studies Sub Title #2', 'textdomain' ),
						'r_c_s_description_1' => esc_html__( 'Case Studies Description #2', 'textdomain' ),
						'r_c_s_subtitle_2' => esc_html__( 'Case Studies Sub Title #2', 'textdomain' ),
						'r_c_s_description_2' => esc_html__( 'Case Studies Description #2', 'textdomain' ),
						'r_c_s_image_1' => esc_html__( 'Case Studies Image #1', 'textdomain' ),
						'r_c_s_image_2' => esc_html__( 'Case Studies Image #2', 'textdomain' ),
						'r_c_s_image_3' => esc_html__( 'Case Studies Image #3', 'textdomain' ),
						'r_c_s_image_4' => esc_html__( 'Case Studies Image #4', 'textdomain' ),
						'r_c_s_image_5' => esc_html__( 'Case Studies Image #5', 'textdomain' ),
					],
				],
				'title_field' => '{{{ r_c_s_title }}}',
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {
		$settings = $this->get_settings_for_display();

		if ( $settings['repeater-case-studies'] ) {
			echo '<div class="case-studies-wrap">';
			foreach (  $settings['repeater-case-studies'] as $item ) {
				echo '<div class="c-s-container">
				<h2>'. $item['r_c_s_title'] .'</h2>
						<div class="row">
							<div class="col-md-6">
							  <div class="c-s-image">
							 	<img src="'. $item['r_c_s_image_1']['url'] .'" alt="" /> 
							  </div>
							</div>
							<div class="col-md-6">
							  <div class="c-s-text-wrap">
							    <div class="c-s-text">
							 	  <h3>'. $item['r_c_s_subtitle_1'] .'</h3>
								  <p>'. $item['r_c_s_description_1'] .'</p>
								</div>
								<div class="c-s-text">
							 	  <h3>'. $item['r_c_s_subtitle_2'] .'</h3>
								  <p>'. $item['r_c_s_description_2'] .'</p>
								</div>
							  </div>
							</div>
						</div>
						<div class="row bg-boxes-parent">
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
						  <div class="col-md-6">
						    <img src="'. $item['r_c_s_image_2']['url'] .'" alt="" />
						  </div>
						  <div class="col-md-6">
						    <img src="'. $item['r_c_s_image_3']['url'] .'" alt="" />
						    <img src="'. $item['r_c_s_image_4']['url'] .'" alt="" />
						    <img src="'. $item['r_c_s_image_5']['url'] .'" alt="" />
						  </div>
						</div>
					  </div>';
			}
			echo '</div>';
		}
	}
}