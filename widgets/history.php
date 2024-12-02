<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class History_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'history';
    }
    public function get_title() {
        return esc_html__( 'History', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-history';
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
			'history_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'history_image_1',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'history_image_1_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
		$this->add_control(
			'history_custom_html',
			[
				'label' => esc_html__( 'Custom HTML', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'placeholder' => esc_html__( 'Add custom HTML', 'textdomain' ),
			]
		);
        $this->add_control(
			'history_image_2',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'history_image_3',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'history_image_3_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'history_image_4',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'history_image_5',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'history_image_6',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'history_image_6_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'history_image_7',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'history_image_7_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'history_image_8',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'history_image_8_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'history_image_9',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'history_image_10',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'history_image_10_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'history_image_11',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {

        // get our input from the widget settings.
        $imageWithTextNButton = $this->get_settings_for_display();

        // variables
	$history_title = $imageWithTextNButton['history_title'];
	$history_image_1 = $imageWithTextNButton['history_image_1']['url'];
	$history_image_1_description = $imageWithTextNButton['history_image_1_description'];
	$history_custom_html = $imageWithTextNButton['history_custom_html'];
    $history_image_2 = $imageWithTextNButton['history_image_2']['url'];
    $history_image_3 = $imageWithTextNButton['history_image_3']['url'];
	$history_image_3_description = $imageWithTextNButton['history_image_3_description'];
    $history_image_4 = $imageWithTextNButton['history_image_4']['url'];
    $history_image_5 = $imageWithTextNButton['history_image_5']['url'];
    $history_image_6 = $imageWithTextNButton['history_image_6']['url'];
	$history_image_6_description = $imageWithTextNButton['history_image_6_description'];
    $history_image_7 = $imageWithTextNButton['history_image_7']['url'];
	$history_image_7_description = $imageWithTextNButton['history_image_7_description'];
    $history_image_8 = $imageWithTextNButton['history_image_8']['url'];
	$history_image_8_description = $imageWithTextNButton['history_image_8_description'];
    $history_image_9 = $imageWithTextNButton['history_image_9']['url'];
    $history_image_10 = $imageWithTextNButton['history_image_10']['url'];
	$history_image_10_description = $imageWithTextNButton['history_image_10_description'];
    $history_image_11 = $imageWithTextNButton['history_image_11']['url'];
	?>

<!-- Start rendering the output -->
<h2><?php echo $history_title; ?></h2>
<div class="history-wrap bg-boxes-parent">
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
    <div class="container-fluid">
        <div class="row row-1">
            <div class="col-md-6">
                <div class="history-img-text-container">
                    <div class="history-image">
                        <img src="<?php echo $history_image_1; ?>" alt="" />
                    </div>
                    <div class="history-image-text">
                        <p><?php echo $history_image_1_description; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="history-image-container">
                    <img src="<?php echo $history_image_2; ?>" alt="" />
                </div>
            </div>
        </div>
        <div class="row row-2">
            <div class="col-md-6">
                <div class="history-img-text-container">
                    <div class="history-image">
                        <img src="<?php echo $history_image_3; ?>" alt="" />
                    </div>
                    <div class="history-image-text">
                        <p><?php echo $history_image_3_description; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="history-image-container">
                    <img src="<?php echo $history_image_4; ?>" alt="" />
                </div>
            </div>
        </div>
        <div class="row row-3">
            <div class="col-md-6">
                <div class="history-image-container">
                    <img src="<?php echo $history_image_5; ?>" alt="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="history-img-text-container">
                    <div class="history-image">
                        <img src="<?php echo $history_image_6; ?>" alt="" />
                    </div>
                    <div class="history-image-text">
                        <p><?php echo $history_image_6_description; ?></p>
                    </div>
                </div>
                <div class="history-img-text-container">
                    <div class="history-image">
                        <img src="<?php echo $history_image_7; ?>" alt="" />
                    </div>
                    <div class="history-image-text">
                        <p><?php echo $history_image_7_description; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-4">
            <div class="col-md-6">
                <div class="history-img-text-container">
                    <div class="history-image">
                        <img src="<?php echo $history_image_8; ?>" alt="" />
                    </div>
                    <div class="history-image-text">
                        <p><?php echo $history_image_8_description; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="history-image-container">
                    <img src="<?php echo $history_image_9; ?>" alt="" />
                </div>
            </div>
        </div>
        <div class="row row-5">
            <div class="col-md-6">
                <div class="history-img-text-container">
                    <div class="history-image">
                        <img src="<?php echo $history_image_10; ?>" alt="" />
                    </div>
                    <div class="history-image-text">
                        <p><?php echo $history_image_10_description; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="history-image-container">
                    <img src="<?php echo $history_image_11; ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End rendering the output -->

<?php

  }
}