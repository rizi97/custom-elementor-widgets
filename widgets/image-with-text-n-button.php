<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Image_With_Text_N_Button_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'image-with-text-n-button';
    }
    public function get_title() {
        return esc_html__( 'Image With Text N Button', 'essential-elementor-widget' );
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
			'i_w_t_n_b_title',
			[
				'label' => esc_html__( 'Title', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);
        $this->add_control(
			'i_w_t_n_b_image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'i_w_t_n_b_description',
			[
				'label' => esc_html__( 'Description', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Default description', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your description here', 'textdomain' ),
			]
		);
        $this->add_control(
			'i_w_t_n_b_cta_text',
			[
				'label' => esc_html__( 'CTA Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Default title', 'textdomain' ),
				'placeholder' => esc_html__( 'Type your title here', 'textdomain' ),
			]
		);
        $this->add_control(
			'i_w_t_n_b_cta_link',
			[
				'label' => esc_html__( 'CTA Link', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),
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
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {

        // get our input from the widget settings.
        $imageWithTextNButton = $this->get_settings_for_display();

        // variables
	$i_w_t_n_b_title = $imageWithTextNButton['i_w_t_n_b_title'];
	$i_w_t_n_b_image = $imageWithTextNButton['i_w_t_n_b_image']['url'];
	$i_w_t_n_b_description = $imageWithTextNButton['i_w_t_n_b_description'];
	$i_w_t_n_b_cta_text = $imageWithTextNButton['i_w_t_n_b_cta_text'];
	$i_w_t_n_b_cta_link = $imageWithTextNButton['i_w_t_n_b_cta_link']['url'];
	?>

<!-- Start rendering the output -->
<div class="about-teg-wrap bg-boxes-parent">
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
        <div class="row">
            <div class="col-md-7">
                <div class="a-t-w-text">
                    <h2 data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"><?php echo $i_w_t_n_b_title; ?></h2>
                    <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="800"><?php echo $i_w_t_n_b_description; ?></p>
                    <a data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" class="main-button hover-area"
                        href="<?php echo $i_w_t_n_b_cta_link; ?>"><?php echo $i_w_t_n_b_cta_text; ?></a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="a-t-w-image">
                    <img class="img-cover parallax-img" src="<?php echo $i_w_t_n_b_image; ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End rendering the output -->

<?php

  }
}