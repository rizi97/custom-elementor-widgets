<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Repeater_Highend_Accordions_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'repeater-highend-accordions';
    }
    public function get_title() {
        return esc_html__( 'Repeater Highend Accordions', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-accordion';
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
			'repeater-highend-accordions',
			[
				'label' => esc_html__( 'Repeater Highend Accordions List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'accordion_Highend_title',
						'label' => esc_html__( 'Accordion Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'show_left_column',
						'label' => esc_html__( 'Show Left Column', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'show_left_column_title',
						'label' => esc_html__( 'Show Left Column Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'left_column_title',
						'label' => esc_html__( 'Left Column Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'left_column_text',
						'label' => esc_html__( 'Left Column Text', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_right_column_title',
						'label' => esc_html__( 'Show Right Column Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'right_column_title',
						'label' => esc_html__( 'Right Column Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'show_right_column_p',
						'label' => esc_html__( 'Show Right Column Paragraph', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'right_column_p',
						'label' => esc_html__( 'Right Column Paragraph', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'show_inner_accordion_1',
						'label' => esc_html__( 'Show Inner Accordion 1', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'inner_accordion_title_1',
						'label' => esc_html__( 'Inner Accordion Title 1', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'inner_accordion_content_1',
						'label' => esc_html__( 'Inner Accordion Content 1', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_inner_accordion_2',
						'label' => esc_html__( 'Show Inner Accordion 2', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'inner_accordion_title_2',
						'label' => esc_html__( 'Inner Accordion Title 2', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'inner_accordion_content_2',
						'label' => esc_html__( 'Inner Accordion Content 2', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_inner_accordion_3',
						'label' => esc_html__( 'Show Inner Accordion 3', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'inner_accordion_title_3',
						'label' => esc_html__( 'Inner Accordion Title 3', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'inner_accordion_content_3',
						'label' => esc_html__( 'Inner Accordion Content 3', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_inner_accordion_4',
						'label' => esc_html__( 'Show Inner Accordion 4', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'inner_accordion_title_4',
						'label' => esc_html__( 'Inner Accordion Title 4', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'inner_accordion_content_4',
						'label' => esc_html__( 'Inner Accordion Content 4', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_inner_accordion_5',
						'label' => esc_html__( 'Show Inner Accordion 5', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'inner_accordion_title_5',
						'label' => esc_html__( 'Inner Accordion Title 5', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'inner_accordion_content_5',
						'label' => esc_html__( 'Inner Accordion Content 5', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_inner_accordion_6',
						'label' => esc_html__( 'Show Inner Accordion 6', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'inner_accordion_title_6',
						'label' => esc_html__( 'Inner Accordion Title 6', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'inner_accordion_content_6',
						'label' => esc_html__( 'Inner Accordion Content 6', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_inner_accordion_7',
						'label' => esc_html__( 'Show Inner Accordion 7', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'inner_accordion_title_7',
						'label' => esc_html__( 'Inner Accordion Title 7', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'inner_accordion_content_7',
						'label' => esc_html__( 'Inner Accordion Content 7', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_inner_accordion_8',
						'label' => esc_html__( 'Show Inner Accordion 8', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'inner_accordion_title_8',
						'label' => esc_html__( 'Inner Accordion Title 8', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'inner_accordion_content_8',
						'label' => esc_html__( 'Inner Accordion Content 8', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_inner_accordion_9',
						'label' => esc_html__( 'Show Inner Accordion 9', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'inner_accordion_title_9',
						'label' => esc_html__( 'Inner Accordion Title 9', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'inner_accordion_content_9',
						'label' => esc_html__( 'Inner Accordion Content 9', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_inner_accordion_10',
						'label' => esc_html__( 'Show Inner Accordion 10', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'inner_accordion_title_10',
						'label' => esc_html__( 'Inner Accordion Title 10', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'inner_accordion_content_10',
						'label' => esc_html__( 'Inner Accordion Content 10', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '', 'textdomain' ),
						'placeholder' => esc_html__( '', 'textdomain' ),
					],
					[
						'name' => 'show_images',
						'label' => esc_html__( 'Show Images', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					],
					[
						'name' => 'accordion_Highend_image1',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'label_block' => true,
					],
					[
						'name' => 'placement_a_d_image1',
						'type' => \Elementor\Controls_Manager::SELECT,
						'label' => esc_html__( 'Placement Image 1', 'textdomain' ),
						'options' => [
							'left-bottom' => esc_html__( 'Left Bottom', 'textdomain' ),
							'right-center' => esc_html__( 'Right Center', 'textdomain' ),
							'left-center' => esc_html__( 'Left Center', 'textdomain' ),
							'left-25-center' => esc_html__( 'left-25-center', 'textdomain' ),
						],
						'default' => 'left-bottom',
					],
					[
						'name' => 'accordion_Highend_image2',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'label_block' => true,
					],
					[
						'name' => 'placement_a_d_image2',
						'type' => \Elementor\Controls_Manager::SELECT,
						'label' => esc_html__( 'Placement Image 2', 'textdomain' ),
						'options' => [
							'left-center' => esc_html__( 'Left Center', 'textdomain' ),
							'left-25-center' => esc_html__( 'left-25-center', 'textdomain' ),
							'right-top' => esc_html__( 'Right Top', 'textdomain' ),
							'right-center' => esc_html__( 'Right Center', 'textdomain' ),
						],
						'default' => 'left-center',
					],
					[
						'name' => 'show_image_slider',
						'label' => esc_html__( 'Show Image and Slider', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'textdomain' ),
						'label_off' => esc_html__( 'Hide', 'textdomain' ),
						'return_value' => 'yes',
						'default' => 'yes',
					], 
			            [
									'name' => 'accordion_Highend_images',
			                'label' => esc_html__( 'Slider Images', 'textdomain' ),
			                'type' => \Elementor\Controls_Manager::GALLERY,
			                'label_block' => true,
			            ] ,

					[
						'name' => 'accordion_Highend_slider_image1',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
						'label_block' => true,
					],
				],
				'default' => [
					[
						'accordion_Highend_title' => esc_html__( 'Accordion Title', 'textdomain' ),
						'show_left_column' => esc_html__( 'Show Left Column', 'textdomain' ),
						'show_left_column_title' => esc_html__( 'Show Left Column Title', 'textdomain' ),
						'left_column_title' => esc_html__( 'Left Column Title', 'textdomain' ),
						'left_column_text' => esc_html__( 'Left Column Text', 'textdomain' ),
						'show_right_column_title' => esc_html__( 'Show Right Column Title', 'textdomain' ),
						'right_column_title' => esc_html__( 'Right Column Title', 'textdomain' ),
						'show_right_column_p' => esc_html__( 'Show Right Column Paragraph', 'textdomain' ),
						'right_column_p' => esc_html__( 'Right Column Paragraph', 'textdomain' ),
						'show_inner_accordion_1' => esc_html__( 'Show Inner Accordion 1', 'textdomain' ),
						'inner_accordion_title_1' => esc_html__( 'Inner Accordion Title 1', 'textdomain' ),
						'inner_accordion_content_1' => esc_html__( 'Inner Accordion Content 1', 'textdomain' ),
						'show_inner_accordion_2' => esc_html__( 'Show Inner Accordion 2', 'textdomain' ),
						'inner_accordion_title_2' => esc_html__( 'Inner Accordion Title 2', 'textdomain' ),
						'inner_accordion_content_2' => esc_html__( 'Inner Accordion Content 2', 'textdomain' ),
						'show_inner_accordion_3' => esc_html__( 'Show Inner Accordion 3', 'textdomain' ),
						'inner_accordion_title_3' => esc_html__( 'Inner Accordion Title 3', 'textdomain' ),
						'inner_accordion_content_3' => esc_html__( 'Inner Accordion Content 3', 'textdomain' ),
						'show_inner_accordion_4' => esc_html__( 'Show Inner Accordion 4', 'textdomain' ),
						'inner_accordion_title_4' => esc_html__( 'Inner Accordion Title 4', 'textdomain' ),
						'inner_accordion_content_4' => esc_html__( 'Inner Accordion Content 4', 'textdomain' ),
						'show_inner_accordion_5' => esc_html__( 'Show Inner Accordion 5', 'textdomain' ),
						'inner_accordion_title_5' => esc_html__( 'Inner Accordion Title 5', 'textdomain' ),
						'inner_accordion_content_5' => esc_html__( 'Inner Accordion Content 5', 'textdomain' ),
						'show_inner_accordion_6' => esc_html__( 'Show Inner Accordion 6', 'textdomain' ),
						'inner_accordion_title_6' => esc_html__( 'Inner Accordion Title 6', 'textdomain' ),
						'inner_accordion_content_6' => esc_html__( 'Inner Accordion Content 6', 'textdomain' ),
						'show_inner_accordion_7' => esc_html__( 'Show Inner Accordion 7', 'textdomain' ),
						'inner_accordion_title_7' => esc_html__( 'Inner Accordion Title 7', 'textdomain' ),
						'inner_accordion_content_7' => esc_html__( 'Inner Accordion Content 7', 'textdomain' ),
						'show_inner_accordion_8' => esc_html__( 'Show Inner Accordion 8', 'textdomain' ),
						'inner_accordion_title_8' => esc_html__( 'Inner Accordion Title 8', 'textdomain' ),
						'inner_accordion_content_8' => esc_html__( 'Inner Accordion Content 8', 'textdomain' ),
						'show_inner_accordion_9' => esc_html__( 'Show Inner Accordion 9', 'textdomain' ),
						'inner_accordion_title_9' => esc_html__( 'Inner Accordion Title 9', 'textdomain' ),
						'inner_accordion_content_9' => esc_html__( 'Inner Accordion Content 9', 'textdomain' ),
						'show_inner_accordion_10' => esc_html__( 'Show Inner Accordion 10', 'textdomain' ),
						'inner_accordion_title_10' => esc_html__( 'Inner Accordion Title 10', 'textdomain' ),
						'inner_accordion_content_10' => esc_html__( 'Inner Accordion Content 10', 'textdomain' ),
						'show_images' => esc_html__( 'Show Images', 'textdomain' ),
						'accordion_Highend_image1' => esc_html__( 'Accordion Highend Image #1', 'textdomain' ),
						'accordion_Highend_image2' => esc_html__( 'Accordion Highend Image #2', 'textdomain' ),
						'placement_a_d_image1' => esc_html__( 'Placement Image 1', 'textdomain' ),
						'placement_a_d_image2' => esc_html__( 'Placement Image 2', 'textdomain' ),
						'show_image_slider' => esc_html__( 'Show Image Slider', 'textdomain' ), 
						'accordion_Highend_slider_image1' => esc_html__( 'Slider Image', 'textdomain' ),
					],
				],
				'title_field' => '{{{ accordion_Highend_title }}}',
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {
		$settings = $this->get_settings_for_display();

		if ( $settings['repeater-highend-accordions'] ) {
			echo '<div class="accordion level-1 accordion-flush" id="highendAccordion">';
			$iteration = 0;
			$siteUrl = get_site_url();
			foreach (  $settings['repeater-highend-accordions'] as $item ) {
				$iteration++;
				echo '<div class="accordion-item">
				<h2 class="accordion-header">
				  <button class="accordion-button level-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#highend-accordion-collapse-'. $iteration .'" aria-expanded="false" aria-controls="highend-accordion-collapse-'. $iteration .'">'. $item['accordion_Highend_title'] .'</button>
				</h2>
				<div id="highend-accordion-collapse-'. $iteration .'" class="accordion-collapse collapse" data-bs-parent="#highendAccordion">
				  <div class="accordion-body">';



				  echo'<div class="columns-wrap shown-column-left-'. $item['show_left_column'] .'">
					  <div class="column-left">
						<h3 class="shown-'. $item['show_left_column_title'] .'">'. $item['left_column_title'] .'</h3>
						<p>'. $item['left_column_text'] .'</p>
					  </div>
					  <div class="column-right">
						<h3 class="shown-'. $item['show_right_column_title'] .'">'. $item['right_column_title'] .'</h3>
						<p class="shown-'. $item['show_right_column_p'] .'">'. $item['right_column_p'] .'</p>
						<div class="accordion level-2 accordion-flush" id="innerAccordion-'. $iteration .'">
						  <div class="accordion-item shown-'. $item['show_inner_accordion_1'] .'">
							<h2 class="accordion-header">
							  <button class="accordion-button level-2" type="button" data-bs-toggle="collapse" data-bs-target="#inner-accordion-collapseOne-'. $iteration .'" aria-expanded="true" aria-controls="inner-accordion-collapseOne-'. $iteration .'"><span>'. $item['inner_accordion_title_1'] .'</span></button>
							</h2>
							<div id="inner-accordion-collapseOne-'. $iteration .'" class="accordion-collapse collapse show" >
							  <div class="accordion-body">'. $item['inner_accordion_content_1'] .'</div>
							</div>
						  </div>
						  <div class="accordion-item shown-'. $item['show_inner_accordion_2'] .'">
							<h2 class="accordion-header">
							  <button class="accordion-button level-2 collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#inner-accordion-collapseTwo-'. $iteration .'" aria-expanded="true"
								aria-controls="inner-accordion-collapseTwo-'. $iteration .'"><span>'. $item['inner_accordion_title_2'] .'</span></button>
							</h2>
							<div id="inner-accordion-collapseTwo-'. $iteration .'" class="accordion-collapse collapse show"
							  >
							  <div class="accordion-body">'. $item['inner_accordion_content_2'] .'</div>
							</div>
						  </div>
						  <div class="accordion-item shown-'. $item['show_inner_accordion_3'] .'">
							<h2 class="accordion-header">
							  <button class="accordion-button level-2 collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#inner-accordion-collapseThree-'. $iteration .'" aria-expanded="true"
								aria-controls="inner-accordion-collapseThree-'. $iteration .'"><span>'. $item['inner_accordion_title_3'] .'</span></button>
							</h2>
							<div id="inner-accordion-collapseThree-'. $iteration .'" class="accordion-collapse collapse show"
							  >
							  <div class="accordion-body">'. $item['inner_accordion_content_3'] .'</div>
							</div>
						  </div>
						  <div class="accordion-item shown-'. $item['show_inner_accordion_4'] .'">
							<h2 class="accordion-header">
							  <button class="accordion-button level-2 collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#inner-accordion-collapseFour-'. $iteration .'" aria-expanded="true"
								aria-controls="inner-accordion-collapseFour-'. $iteration .'"><span>'. $item['inner_accordion_title_4'] .'</span></button>
							</h2>
							<div id="inner-accordion-collapseFour-'. $iteration .'" class="accordion-collapse collapse show"
							  >
							  <div class="accordion-body">'. $item['inner_accordion_content_4'] .'</div>
							</div>
						  </div>
						  <div class="accordion-item shown-'. $item['show_inner_accordion_5'] .'">
							<h2 class="accordion-header">
							  <button class="accordion-button level-2 collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#inner-accordion-collapseFive-'. $iteration .'" aria-expanded="true"
								aria-controls="inner-accordion-collapseFive-'. $iteration .'"><span>'. $item['inner_accordion_title_5'] .'</span></button>
							</h2>
							<div id="inner-accordion-collapseFive-'. $iteration .'" class="accordion-collapse collapse show"
							  >
							  <div class="accordion-body">'. $item['inner_accordion_content_5'] .'</div>
							</div>
						  </div>
						  <div class="accordion-item shown-'. $item['show_inner_accordion_6'] .'">
							<h2 class="accordion-header">
							  <button class="accordion-button level-2 collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#inner-accordion-collapseSix-'. $iteration .'" aria-expanded="true"
								aria-controls="inner-accordion-collapseSix-'. $iteration .'"><span>'. $item['inner_accordion_title_6'] .'</span></button>
							</h2>
							<div id="inner-accordion-collapseSix-'. $iteration .'" class="accordion-collapse collapse show"
							  >
							  <div class="accordion-body">'. $item['inner_accordion_content_6'] .'</div>
							</div>
						  </div>
						  <div class="accordion-item shown-'. $item['show_inner_accordion_7'] .'">
							<h2 class="accordion-header">
							  <button class="accordion-button level-2 collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#inner-accordion-collapseSeven-'. $iteration .'" aria-expanded="true"
								aria-controls="inner-accordion-collapseSeven-'. $iteration .'"><span>'. $item['inner_accordion_title_7'] .'</span></button>
							</h2>
							<div id="inner-accordion-collapseSeven-'. $iteration .'" class="accordion-collapse collapse show"
							  >
							  <div class="accordion-body">'. $item['inner_accordion_content_7'] .'</div>
							</div>
						  </div>
						  <div class="accordion-item shown-'. $item['show_inner_accordion_8'] .'">
							<h2 class="accordion-header">
							  <button class="accordion-button level-2 collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#inner-accordion-collapseEight-'. $iteration .'" aria-expanded="true"
								aria-controls="inner-accordion-collapseEight-'. $iteration .'"><span>'. $item['inner_accordion_title_8'] .'</span></button>
							</h2>
							<div id="inner-accordion-collapseEight-'. $iteration .'" class="accordion-collapse collapse show"
							  >
							  <div class="accordion-body">'. $item['inner_accordion_content_8'] .'</div>
							</div>
						  </div>
						  <div class="accordion-item shown-'. $item['show_inner_accordion_9'] .'">
							<h2 class="accordion-header">
							  <button class="accordion-button level-2 collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#inner-accordion-collapseNine-'. $iteration .'" aria-expanded="true"
								aria-controls="inner-accordion-collapseNine-'. $iteration .'"><span>'. $item['inner_accordion_title_9'] .'</span></button>
							</h2>
							<div id="inner-accordion-collapseNine-'. $iteration .'" class="accordion-collapse collapse show"
							  >
							  <div class="accordion-body">'. $item['inner_accordion_content_9'] .'</div>
							</div>
						  </div>
						  <div class="accordion-item shown-'. $item['show_inner_accordion_10'] .'">
							<h2 class="accordion-header">
							  <button class="accordion-button level-2 collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#inner-accordion-collapseTen-'. $iteration .'" aria-expanded="true"
								aria-controls="inner-accordion-collapseTen-'. $iteration .'"><span>'. $item['inner_accordion_title_10'] .'</span></button>
							</h2>
							<div id="inner-accordion-collapseTen-'. $iteration .'" class="accordion-collapse collapse show"
							  >
							  <div class="accordion-body">'. $item['inner_accordion_content_10'] .'</div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
					<div class="a-d-images-wrap bg-boxes-parent shown-'. $item['show_images'] .'">
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
						<div class="a-d-images-container">
						<div class="a-d-image-1 '. $item['placement_a_d_image1'] .'">
							<img src="'. $item['accordion_Highend_image1']['url'] .'" alt="" />
						</div>
						<div class="a-d-image-2 '. $item['placement_a_d_image2'] .'">
							<img src="'. $item['accordion_Highend_image2']['url'] .'" alt="" />
						</div>
						</div>
					</div>
					<div class="a-d-images-wrap a-d-image-slider bg-boxes-parent shown-'. $item['show_image_slider'] .'">
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
						<div class="a-d-image-slider-left">
							<img src="'. $item['accordion_Highend_slider_image1']['url'] .'" alt="" />
						</div>
						<div class="a-d-image-slider-right">
							<div class="swiper swiper-accordion">
								<div class="swiper-wrapper">'; 
							      $gallery_images = $item['accordion_Highend_images'];
						            if (!empty($gallery_images)) { 
						                foreach ($gallery_images as $image) {
						                    echo '<div class="swiper-slide"><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></div>';
						                } 
						            } 
								echo'</div>
							</div>
						</div>

					</div>
				  </div>
				</div>
			  </div>';
			}
			echo '</div>';
		}
	}
}