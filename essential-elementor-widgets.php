<?php
/**
 * Plugin Name: Custom Elementor Widgets
 * Version:     1.0.0
 * Text Domain: custom-elementor-widget
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function register_custom_widgets( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/card-widget.php' );
    $widgets_manager->register( new \Essential_Elementor_Card_Widget() );


    require_once( __DIR__ . '/widgets/banner-with-title.php' );
    $widgets_manager->register( new \Banner_With_Title_Widget() );

    require_once( __DIR__ . '/widgets/image-with-text-n-button.php' );
    $widgets_manager->register( new \Image_With_Text_N_Button_Widget() );

    require_once( __DIR__ . '/widgets/marquee.php' );
    $widgets_manager->register( new \Marquee_Widget() );

    require_once( __DIR__ . '/widgets/marquee-textarea.php' );
    $widgets_manager->register( new \Marquee_Textarea_Widget() );

    require_once( __DIR__ . '/widgets/testimonials-repeater.php' );
    $widgets_manager->register( new \Testimonials_Repeater_Widget() );

    require_once( __DIR__ . '/widgets/alert-fixed.php' );
    $widgets_manager->register( new \Alert_Fixed_Widget() );

    require_once( __DIR__ . '/widgets/posts-repeater.php' );
    $widgets_manager->register( new \Posts_Repeater_Widget() );

    require_once( __DIR__ . '/widgets/text-with-logo.php' );
    $widgets_manager->register( new \Text_With_Logo_Widget() );

    require_once( __DIR__ . '/widgets/logo-text-n-button.php' );
    $widgets_manager->register( new \Logo_Text_N_Button_Widget() );

    require_once( __DIR__ . '/widgets/footer.php' );
    $widgets_manager->register( new \Footer_Widget() );

    require_once( __DIR__ . '/widgets/step-form.php' );
    $widgets_manager->register( new \Step_Form_Widget() );

    require_once( __DIR__ . '/widgets/newsletter.php' );
    $widgets_manager->register( new \Newsletter_Widget() );

    require_once( __DIR__ . '/widgets/repeater-about-teg.php' );
    $widgets_manager->register( new \Repeater_About_Teg_Widget() );

    require_once( __DIR__ . '/widgets/history.php' );
    $widgets_manager->register( new \History_Widget() );

    require_once( __DIR__ . '/widgets/repeater-accordions.php' );
    $widgets_manager->register( new \Repeater_Accordions_Widget() );

    require_once( __DIR__ . '/widgets/repeater-case-studies.php' );
    $widgets_manager->register( new \Repeater_Case_Studies_Widget() );

    require_once( __DIR__ . '/widgets/location.php' );
    $widgets_manager->register( new \Location_Widget() );

    require_once( __DIR__ . '/widgets/repeater-designers-accordions.php' );
    $widgets_manager->register( new \Repeater_Designers_Accordions_Widget() );

    require_once( __DIR__ . '/widgets/repeater-highend-accordions.php' );
    $widgets_manager->register( new \Repeater_Highend_Accordions_Widget() );

    require_once( __DIR__ . '/widgets/get-posts-repeater.php' );
    $widgets_manager->register( new \Get_Posts_Repeater_Widget() );

    require_once( __DIR__ . '/widgets/collection-guide.php' );
    $widgets_manager->register( new \Collection_Guide_Widget() );

    require_once( __DIR__ . '/widgets/acf-testimonials.php' );
    $widgets_manager->register( new \ACF_Testimonials_Widget() );

    require_once( __DIR__ . '/widgets/popup.php' );
    $widgets_manager->register( new \Step_Form_Popup() );

}
add_action( 'elementor/widgets/register', 'register_custom_widgets' );