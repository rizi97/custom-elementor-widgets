<?php
class ACF_Testimonials_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'ACF_Testimonials_Widget';
	}

	public function get_title() {
		return esc_html__( 'ACF Testimonials', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-slider-3d';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	protected function render() {
		?>

<?php
if( have_rows('add_testimonials', 99) ): ?>
<div class="swiper swiper-testimonials">
    <div class="swiper-wrapper">
        <?php while( have_rows('add_testimonials', 99) ) : the_row();
        $testimonial_heading = get_sub_field('testimonial_heading', 99);
        $testimonial_text = get_sub_field('testimonial_text', 99); ?>
        <div class="swiper-slide hover-area">
            <div class="testimonials-user"><span><?php echo $testimonial_heading ?></span></div>
            <div class="testimonials-text"><?php echo $testimonial_text ?></div>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<?php endif;
	}
}