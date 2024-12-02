<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Text_With_Logo_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'text-with-logo';
    }
    public function get_title() {
        return esc_html__( 'Text With Logo', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-text-align-left';
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
			't_w_l_image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			't_w_l_text',
			[
				'label' => esc_html__( 'Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Text', 'textdomain' ),
			]
		);
        // $this->add_control(
		// 	't_w_l_image_bg',
		// 	[
		// 		'label' => esc_html__( 'Choose Background Image', 'textdomain' ),
		// 		'type' => \Elementor\Controls_Manager::MEDIA,
		// 		'default' => [
		// 			'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 		],
		// 	]
		// );
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {

        // get our input from the widget settings.
        $textWithLogo = $this->get_settings_for_display();

        // variables
        $t_w_l_image = $textWithLogo['t_w_l_image']['url'];
	    $t_w_l_text = $textWithLogo['t_w_l_text'];
        // $t_w_l_image_bg = $textWithLogo['t_w_l_image_bg']['url'];
	?>

<!-- Start rendering the output -->
<!-- <div class="text-with-logo-wrap bg-boxes-parent" style="background-image: url('</?php echo $t_w_l_image_bg; ?>');"> -->
<div class="text-with-logo-wrap bg-boxes-parent">
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
    <div class="text-with-logo-container">
        <img src="<?php echo $t_w_l_image; ?>" alt="" />
        <p><?php echo $t_w_l_text; ?></p>
    </div>
</div>
<!-- End rendering the output -->

<?php

  }
}