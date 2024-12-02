<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Posts_Repeater_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'posts-repeater';
    }
    public function get_title() {
        return esc_html__( 'Posts Repeater', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-post-list';
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
			'posts-repeater',
			[
				'label' => esc_html__( 'Posts Repeater List', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'posts_title',
						'label' => esc_html__( 'Posts Title', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'posts_textarea',
						'label' => esc_html__( 'Posts Description', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'posts_cta_text',
						'label' => esc_html__( 'Posts Cta Text', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'posts_cta_link',
						'label' => esc_html__( 'Posts Cta Link', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'posts_cursor_text',
						'label' => esc_html__( 'Posts Cursor Text', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( '' , 'textdomain' ),
						'label_block' => true,
					],
					[
						'name' => 'posts_image',
						'label' => esc_html__( 'Choose Image', 'textdomain' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [
							'url' => \Elementor\Utils::get_placeholder_image_src(),
						],
					]
				],
				'default' => [
					[
						'posts_title' => esc_html__( 'Posts Title #1', 'textdomain' ),
						'posts_textarea' => esc_html__( 'Posts Description #1', 'textdomain' ),
					],
					[
						'posts_title' => esc_html__( 'Posts Title #2', 'textdomain' ),
						'posts_textarea' => esc_html__( 'Posts Description #2', 'textdomain' ),
					],
				],
				'title_field' => '{{{ posts_title }}}',
			]
		);
        // important: Fields go here
        $this->end_controls_section();
    }

    protected function render() {
		$settings = $this->get_settings_for_display();

		if ( $settings['posts-repeater'] ) {
			echo '<div class="p-r-wrap bg-boxes-parent"><div class="bg-boxes"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div><div class="p-r-wrap-inner">';
			foreach (  $settings['posts-repeater'] as $item ) { ?>
<div class="p-r-container">
        <h2><a href="<?php echo $item['posts_cta_link']; ?>"><?php echo $item['posts_title']; ?><span></span></a></h2>
    <div class="p-r-image-n-text">
        <a href="<?php echo $item['posts_cta_link']; ?>" class="p-r-image hover-area"
            data-cursor-text="<?php echo $item['posts_cursor_text']; ?>">
            <img class="parallax-img" src="<?php echo $item['posts_image']['url']; ?>" alt="" />
        </a>
        <div class="p-r-text">
            <h2><?php echo $item['posts_title']; ?><span></span></h2>
            <p><?php echo $item['posts_textarea']; ?></p>
            <a href="<?php echo $item['posts_cta_link']; ?>"
                class="main-button hover-area"><?php echo $item['posts_cta_text']; ?></a>
        </div>
    </div>
</div>
<?php }
			echo '</div></div>';
		}
	}
}