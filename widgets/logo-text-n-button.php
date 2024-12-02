<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Logo_Text_N_Button_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'logo-text-n-button';
    }
    public function get_title() {
        return esc_html__( 'Logo Text And Button', 'essential-elementor-widget' );
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
			'l_t_n_b_image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'l_t_n_b_text',
			[
				'label' => esc_html__( 'Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Text', 'textdomain' ),
			]
		);
        $this->add_control(
			'l_t_n_b_button_text',
			[
				'label' => esc_html__( 'Button Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'rows' => 10,
				'default' => esc_html__( 'Button Text', 'textdomain' ),
			]
		);
        $this->add_control(
			'l_t_n_b_button_link',
			[
				'label' => esc_html__( 'Button Link', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::URL,
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
        // $this->add_control(
		// 	'l_t_n_b_image_bg',
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
        $l_t_n_b_image = $textWithLogo['l_t_n_b_image']['url'];
	    $l_t_n_b_text = $textWithLogo['l_t_n_b_text'];
	    $l_t_n_b_button_text = $textWithLogo['l_t_n_b_button_text'];
        $l_t_n_b_button_link = $textWithLogo['l_t_n_b_button_link']['url'];
        // $l_t_n_b_image_bg = $textWithLogo['l_t_n_b_image_bg']['url'];
	?>

<!-- Start rendering the output -->
<!-- <div class="text-with-logo-wrap bg-boxes-parent" style="background-image: url('</?php echo $l_t_n_b_image_bg; ?>');"> -->
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
        <img src="<?php echo $l_t_n_b_image; ?>" alt="" />
        <p><?php echo $l_t_n_b_text; ?></p>
        <a href="<?php echo $l_t_n_b_button_link; ?>" class="main-button"><?php echo $l_t_n_b_button_text; ?></a>
    </div>
</div>
<!-- End rendering the output -->

<?php

  }
}