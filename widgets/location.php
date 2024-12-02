<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Location_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'location';
    }
    public function get_title() {
        return esc_html__( 'Location', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-google-maps';
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
			'location_image_1',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'location_image_2',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'location_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'location_image_3',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'location_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
		$this->add_control(
			'location_1',
			[
				'label' => esc_html__( 'Location 1', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
		$this->add_control(
			'location_1_contact',
			[
				'label' => esc_html__( 'Location 1 Contact', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
		$this->add_control(
			'location_2',
			[
				'label' => esc_html__( 'Location 2', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
		$this->add_control(
			'location_2_contact',
			[
				'label' => esc_html__( 'Location 2 Contact', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
		$this->add_control(
			'location_mail',
			[
				'label' => esc_html__( 'Location Email', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
		$this->add_control(
			'location_image_4',
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
	$location_title = $imageWithTextNButton['location_title'];
	$location_image_1 = $imageWithTextNButton['location_image_1']['url'];
    $location_image_2 = $imageWithTextNButton['location_image_2']['url'];
    $location_image_3 = $imageWithTextNButton['location_image_3']['url'];
    $location_image_4 = $imageWithTextNButton['location_image_4']['url'];
	$location_description = $imageWithTextNButton['location_description'];
	$location_1 = $imageWithTextNButton['location_1'];
	$location_1_contact = $imageWithTextNButton['location_1_contact'];
	$location_2 = $imageWithTextNButton['location_2'];
	$location_2_contact = $imageWithTextNButton['location_2_contact'];
	$location_mail = $imageWithTextNButton['location_mail'];
	?>

<!-- Start rendering the output -->
<div class="location-wrap bg-boxes-parent">
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
    <div class="location-images-top-container">
        <img src="<?php echo $location_image_1; ?>" alt="" />
        <div class="l-i-t-2">
            <img src="<?php echo $location_image_2; ?>" alt="" />
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $location_title; ?></h2>
            </div>
            <div class="col-md-6">
                <img src="<?php echo $location_image_3; ?>" alt="" />
            </div>
            <div class="col-md-6">
                <p><?php echo $location_description; ?></p>
                <div class="location-contact">
                    <table>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $location_1; ?></th>
                                <td><a
                                        href="tel:<?php echo $location_1_contact; ?>"><?php echo $location_1_contact; ?></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $location_2; ?></th>
                                <td><a
                                        href="tel:<?php echo $location_2_contact; ?>"><?php echo $location_2_contact; ?></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="location-mail">
                        FOR QUICK QUESTIONS EMAIL <a
                            href="mailto:<?php echo $location_mail; ?>"><?php echo $location_mail; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo $location_image_4; ?>" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- End rendering the output -->

<?php

  }
}