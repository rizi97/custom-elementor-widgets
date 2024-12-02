<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Repeater_Accordions_Widget extends \Elementor\Widget_Base { 
    public function get_name() {
        return 'repeater-accordions';
    }
    public function get_title() {
        return esc_html__( 'Repeater Accordions', 'essential-elementor-widget' );
    }
    public function get_icon() {
        return 'eicon-accordion';
    }
    public function get_categories() {
        return [ 'basic' ];
    }
    protected function register_controls() {
        // $this->start_controls_section(
        //     'content_section',
        //     [
        //     'label' => esc_html__( 'Content', 'essential-elementor-widget' ),
        //     'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        //     ]
        // );
        // important: Fields go here
        // $this->add_control(
		// 	'repeater-accordions',
		// 	[
		// 		'label' => esc_html__( 'Repeater Accordions List', 'textdomain' ),
		// 		'type' => \Elementor\Controls_Manager::REPEATER,
		// 		'fields' => [
		// 			[
		// 				'name' => 'accordion_title',
		// 				'label' => esc_html__( 'Accordion Title', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::TEXT,
		// 				'default' => esc_html__( '' , 'textdomain' ),
		// 				'label_block' => true,
		// 			],
		// 			[
		// 				'name' => 'accordion_inner_title',
		// 				'label' => esc_html__( 'Accordion Inner Title', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::TEXT,
		// 				'default' => esc_html__( '' , 'textdomain' ),
		// 				'label_block' => true,
		// 			],
		// 			[
		// 				'name' => 'accordion_description',
		// 				'label' => esc_html__( 'Description', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::WYSIWYG,
		// 				'default' => esc_html__( '', 'textdomain' ),
		// 				'placeholder' => esc_html__( '', 'textdomain' ),
		// 			],
		// 			[
		// 				'name' => 'accordion_description_link_text',
		// 				'label' => esc_html__( 'Accordion URL Text', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::TEXT,
		// 				'default' => esc_html__( '' , 'textdomain' ),
		// 				'label_block' => true,
		// 			],
		// 			[
		// 				'name' => 'accordion_description_link_url',
		// 				'label' => esc_html__( 'Accordion URL Link', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::TEXT,
		// 				'default' => esc_html__( '' , 'textdomain' ),
		// 				'label_block' => true,
		// 			],
		// 			[
		// 				'name' => 'accordion_image1',
		// 				'label' => esc_html__( 'Choose Image', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::MEDIA,
		// 				'default' => [
		// 					'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 				],
		// 				'label_block' => true,
		// 			],
		// 			[
		// 				'name' => 'accordion_image2',
		// 				'label' => esc_html__( 'Choose Image', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::MEDIA,
		// 				'default' => [
		// 					'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 				],
		// 				'label_block' => true,
		// 			],
		// 			[
		// 				'name' => 'accordion_image3',
		// 				'label' => esc_html__( 'Choose Image', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::MEDIA,
		// 				'default' => [
		// 					'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 				],
		// 				'label_block' => true,
		// 			],
		// 			[
		// 				'name' => 'accordion_image4',
		// 				'label' => esc_html__( 'Choose Image', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::MEDIA,
		// 				'default' => [
		// 					'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 				],
		// 				'label_block' => true,
		// 			],
		// 			[
		// 				'name' => 'accordion_image5',
		// 				'label' => esc_html__( 'Choose Image', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::MEDIA,
		// 				'default' => [
		// 					'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 				],
		// 				'label_block' => true,
		// 			],
		// 			[
		// 				'name' => 'accordion_image6',
		// 				'label' => esc_html__( 'Choose Image', 'textdomain' ),
		// 				'type' => \Elementor\Controls_Manager::MEDIA,
		// 				'default' => [
		// 					'url' => \Elementor\Utils::get_placeholder_image_src(),
		// 				],
		// 				'label_block' => true,
		// 			],
		// 		],
		// 		'default' => [
		// 			[
		// 				'accordion_title' => esc_html__( 'Accordion Title #1', 'textdomain' ),
		// 				'accordion_inner_title' => esc_html__( 'Accordion Inner Title #1', 'textdomain' ),
		// 				'accordion_description' => esc_html__( 'Accordion Description #1', 'textdomain' ),
		// 				'accordion_description_link_text' => esc_html__( 'Accordion Description Link Text #1', 'textdomain' ),
		// 				'accordion_description_link_url' => esc_html__( 'Accordion Description Link URL #1', 'textdomain' ),
		// 				'accordion_image1' => esc_html__( 'Accordion Image #1', 'textdomain' ),
		// 				'accordion_image2' => esc_html__( 'Accordion Image #2', 'textdomain' ),
		// 				'accordion_image3' => esc_html__( 'Accordion Image #3', 'textdomain' ),
		// 				'accordion_image4' => esc_html__( 'Accordion Image #4', 'textdomain' ),
		// 				'accordion_image5' => esc_html__( 'Accordion Image #5', 'textdomain' ),
		// 				'accordion_image6' => esc_html__( 'Accordion Image #6', 'textdomain' ),
		// 			],
		// 			[
		// 				'accordion_title' => esc_html__( 'Accordion Title #2', 'textdomain' ),
		// 				'accordion_inner_title' => esc_html__( 'Accordion Inner Title #2', 'textdomain' ),
		// 				'accordion_description' => esc_html__( 'Accordion Description #2', 'textdomain' ),
		// 				'accordion_description_link_text' => esc_html__( 'Accordion Description Link Text #2', 'textdomain' ),
		// 				'accordion_description_link_url' => esc_html__( 'Accordion Description Link URL #2', 'textdomain' ),
		// 				'accordion_image1' => esc_html__( 'Accordion Image #1', 'textdomain' ),
		// 				'accordion_image2' => esc_html__( 'Accordion Image #2', 'textdomain' ),
		// 				'accordion_image3' => esc_html__( 'Accordion Image #3', 'textdomain' ),
		// 				'accordion_image4' => esc_html__( 'Accordion Image #4', 'textdomain' ),
		// 				'accordion_image5' => esc_html__( 'Accordion Image #5', 'textdomain' ),
		// 				'accordion_image6' => esc_html__( 'Accordion Image #6', 'textdomain' ),
		// 			],
		// 		],
		// 		'title_field' => '{{{ accordion_title }}}',
		// 	]
		// );
        // important: Fields go here
        $this->end_controls_section();
    }


 protected function render() {

       $settings = $this->get_settings_for_display(); ?>

        <!-- portfolio
    ============================================= -->
    	<div class="accordion accordion-flush level-1" id="customAccordion">
      	<?php 
      	$iteration = 0;
            $args = array( 'post_type' => 'portfolios', 'orderby'   => array(
				'date' =>'ASC',
			), 'posts_per_page' => -1 );
            $the_query = new WP_Query( $args ); 
        ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();
            $iteration++; 
            ?> 
	 		<div class="accordion-item">
				<h2 class="accordion-header">
				  	<button class="accordion-button level-1 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#custom-accordion-collapse-<?php echo $iteration; ?>" aria-expanded="false" aria-controls="custom-accordion-collapse-<?php echo $iteration; ?>"><?php the_title(); ?></button>
				</h2>
				<div id="custom-accordion-collapse-<?php echo $iteration; ?>" class="accordion-collapse collapse" data-bs-parent="#customAccordion">
				  	<div class="accordion-body">  
					<?php  			                
					if( have_rows('portfolio') ): ?> 
                    <?php  
                    while( have_rows('portfolio') ): the_row(); ?>

                	  	<h3><?php the_sub_field('inner_title'); ?></h3>
						<div class="a-description">
							<p><?php the_sub_field('description'); ?></p> 
							<a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('url_text'); ?></a>
						</div>
						<div class="a-images-wrap bg-boxes-parent">
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
							<div class="row">
								<div class="col-md-6"> 
									<?php 
										$image1 = get_sub_field('image_1');
										if( !empty( $image1 ) ): ?>
											<img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
									<?php endif; ?> 
									<?php 
										$image2 = get_sub_field('image_2');
										if( !empty( $image2 ) ): ?>
											<img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
									<?php endif; ?> 
									<?php 
										$image3 = get_sub_field('image_3');
										if( !empty( $image3 ) ): ?>
											<img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
									<?php endif; ?>
							  	</div>
							  	<div class="col-md-6"> 
									<?php 
										$image4 = get_sub_field('image_4');
										if( !empty( $image4 ) ): ?>
											<img src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>" />
									<?php endif; ?> 
									<?php 
										$image5 = get_sub_field('image_5');
										if( !empty( $image5 ) ): ?>
											<img src="<?php echo esc_url($image5['url']); ?>" alt="<?php echo esc_attr($image5['alt']); ?>" />
									<?php endif; ?> 
									<?php 
										$image6 = get_sub_field('image_6');
										if( !empty( $image6 ) ): ?>
											<img src="<?php echo esc_url($image6['url']); ?>" alt="<?php echo esc_attr($image6['alt']); ?>" />
									<?php endif; ?>
							  	</div>
						 	</div>
						</div> 
	                   	<?php endwhile;  ?>
	                	<?php endif;   ?>
        			</div>
			  	</div>
			</div> 
    		<?php endwhile; wp_reset_postdata(); ?>
			<?php else:  ?>
    		<p><?php _e( 'Sorry, no Porfolio found.' ); ?></p>
        <?php endif; ?>
    	</div> 
    <!-- portfolio --> 
    <?php }
}
