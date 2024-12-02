<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Footer_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'footer';
    }
    public function get_title() {
        return esc_html__( 'Footer', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-footer';
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
			'f_image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
        $this->add_control(
			'social_link_text_1',
			[
				'label' => esc_html__( 'Social Link Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'social_link_url_1',
			[
				'label' => esc_html__( 'Social Link Url', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'social_link_text_2',
			[
				'label' => esc_html__( 'Social Link Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'social_link_url_2',
			[
				'label' => esc_html__( 'Social Link Url', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'social_link_text_3',
			[
				'label' => esc_html__( 'Social Link Text', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        $this->add_control(
			'social_link_url_3',
			[
				'label' => esc_html__( 'Social Link Url', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '', 'textdomain' ),
				'placeholder' => esc_html__( '', 'textdomain' ),
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {

        // get our input from the widget settings.
        $footer = $this->get_settings_for_display();

        // variables
        $f_image = $footer['f_image']['url'];
	$social_link_text_1 = $footer['social_link_text_1'];
	$social_link_text_2 = $footer['social_link_text_2'];
	$social_link_text_3 = $footer['social_link_text_3'];
    $social_link_url_1 = $footer['social_link_url_1'];
	$social_link_url_2 = $footer['social_link_url_2'];
	$social_link_url_3 = $footer['social_link_url_3'];
	?>

<!-- Start rendering the output -->
<footer>
    <div class="footer-top">
        <a href="<?php echo site_url().'/home'?>" class="foot-logo"><img src="<?php echo $f_image; ?>" alt="" /></a>
        <div class="row">
            <div class="col-md-5">
                <ul>
                    <li><a href="javascript:void(0);">Emerging Fashion Designers</a></li>
                    <li><a href="javascript:void(0);">Established High-end Designers</a></li>
                    <li><a href="javascript:void(0);">Portfolio</a></li>
                    <li><a href="javascript:void(0);">Case Studies</a></li>
                    <li><a href="javascript:void(0);">Select client list</a></li>
                    <li><a href="javascript:void(0);">Tegtalks</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><a href="javascript:void(0);">Blank Label</a></li>
                    <li><a href="javascript:void(0);">Faq</a></li>
                    <li><a href="javascript:void(0);">About us</a></li>
                    <li><a href="javascript:void(0);">Location</a></li>
                    <li><a href="javascript:void(0);">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <?php echo do_shortcode( '[newsletter]' ); ?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <ul>
            <li><a href="<?php echo $social_link_url_1; ?>"><?php echo $social_link_text_1; ?></a></li>
            <li><a href="<?php echo $social_link_url_2; ?>"><?php echo $social_link_text_2; ?></a></li>
            <li><a href="<?php echo $social_link_url_3; ?>"><?php echo $social_link_text_3; ?></a></li>
        </ul>
    </div>
</footer>
<!-- End rendering the output -->

<?php

  }
}