<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Banner_With_Title_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'banner-with-title';
    }
    public function get_title() {
        return esc_html__( 'Banner With Title', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-featured-image';
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
			'b_w_t_image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'b_w_t_logo',
			[
				'label' => esc_html__( 'Choose Logo', 'textdomain' ),
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
        $settingsBannerWithTitle = $this->get_settings_for_display();
	
        $b_w_t_image = $settingsBannerWithTitle['b_w_t_image']['url'];
        $b_w_t_logo = $settingsBannerWithTitle['b_w_t_logo']['url'];

	?>

<!-- Start rendering the output -->
<!-- custom cursor -->
<!-- <div id="ball"></div>
<div id="cursor-text"></div> -->
<!-- custom cursor -->
<div class="banner-with-title">
    <img class="home-logo-fixed" src="<?php echo $b_w_t_logo; ?>" alt="" />
    <img class="img-cover parallax-img" src="<?php echo $b_w_t_image; ?>" alt="" />
    <a href="<?php echo site_url(); ?>" class="home-logo">
        <img src="<?php echo $b_w_t_logo; ?>" alt="" />
    </a>
    <!-- <h1></?php echo $b_w_t_title;  ?></h1> -->
</div>
<!-- End rendering the output -->

<?php

  }
}