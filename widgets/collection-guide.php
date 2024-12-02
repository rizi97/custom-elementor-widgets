<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Collection_Guide_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'collection-guide';
    }
    public function get_title() {
        return esc_html__( 'Collection Guide', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-file-download';
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
			'c_g_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'c_g_button_text',
			[
				'label' => esc_html__( 'Button Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'c_g_file_url',
			[
				'label' => esc_html__( 'File Url', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {

        // get our input from the widget settings.
        $collectionGuide = $this->get_settings_for_display();

        // variables
	$c_g_title = $collectionGuide['c_g_title'];
	$c_g_button_text = $collectionGuide['c_g_button_text'];
	$c_g_file_url = $collectionGuide['c_g_file_url'];
	?>

<!-- Start rendering the output -->
<div class="collection-guide hover-area" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
    <h4><?php echo $c_g_title; ?></h4>
    <a href="<?php echo $c_g_file_url; ?>" class="main-button hover-area" download><?php echo $c_g_button_text; ?></a>
    <i class="fas fa-times"></i>
</div>
<!-- End rendering the output -->

<?php

  }
}