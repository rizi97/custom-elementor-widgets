<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Essential_Elementor_Card_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'card';
    }
    public function get_title() {
        return esc_html__( 'Essenial Card', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-header';
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
            'card_title',
            [
            'label' => esc_html__( 'Card title', 'essential-elementor-widget' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
            'placeholder' => esc_html__( 'Your card title here', 'essential-elementor-widget' ),
            ]
        );
        $this->add_control(
            'card_description',
            [
            'label' => esc_html__( 'Card Description', 'essential-elementor-widget' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block'   => true,
            'placeholder' => esc_html__( 'Your card description here', 'essential-elementor-widget' ),
            ]
        );
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {

        // get our input from the widget settings.
        $settings = $this->get_settings_for_display();
	
	// get the individual values of the input
	$card_title = $settings['card_title'];
	$card_description = $settings['card_description'];

	?>

<!-- Start rendering the output -->
<div class="card">
    <h3 class="card_title"><?php echo $card_title;  ?></h3>
    <p class="card__description"><?php echo $card_description;  ?></p>
</div>
<!-- End rendering the output -->

<?php

  }
}