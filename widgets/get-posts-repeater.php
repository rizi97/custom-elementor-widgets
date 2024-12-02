<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Get_Posts_Repeater_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'get-posts-repeater';
	}

	public function get_title() {
		return esc_html__( 'Get Posts Repeater', 'essential-elementor-widget' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	protected function render() {
		?>

<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' =>  -1,
    'post_status'    => 'publish',
    'cat'            =>  '14',
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
		
		?>
<?php
// the_field('upload_image_or_video')['url'];
// if( get_field('upload_image_or_video')['type'] == 'image' ) {
//     echo "sadfdsfsd";
// };
// the_field('upload_image_or_video')['title'];
            if(get_field('upload_image_or_video')['type'] == 'image'){
                // image
                ?>
<div class='get-post-container'>
    <div class='g-p-top'>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class='g-p-title'><?php the_field('title'); ?></div>
                </div>
                <div class="col-md-6">
                    <div class='g-p-date'><?php echo get_the_date(); ?> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="g-p-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <a href="<?php the_permalink(); ?>" class="g-p-image hover-area" data-cursor-text="view">
                        <?php #the_post_thumbnail(); ?>
                        <img src="<?php echo get_field('upload_image_or_video')['url']; ?>" alt="" />
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="g-p-text">
                        <?php the_field('short_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }else{
                // video
                ?>
<div class='get-post-container'>
    <div class="g-p-v-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="lesson-no">Lesson #<?php echo esc_html( get_field('lesson_number') ); ?></div>
                    <div class="hr-no"><?php echo esc_html( get_field('lesson_video_length') ); ?>hr</div>
                </div>
            </div>
        </div>
    </div>
    <div class="g-p-v-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="g-p-v-text">
                        <?php the_field('short_content'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="g-p-v-title">
                        <?php the_field('title'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="g-p-v-bottom">
        <div class="g-p-v-video">
            <?php #the_post_thumbnail(); ?>
            <video>
                <source src="<?php echo get_field('upload_image_or_video')['url']; ?>" type="video/mp4" />
                <p>
                    Your browser doesn't support HTML video. Here is a
                    <a href="<?php echo get_field('upload_image_or_video')['url']; ?>" download>link to the video</a> instead.
                </p>
            </video>
            <a href="<?php the_permalink(); ?>" class="main-button hover-area">Start Lesson</a>
        </div>
    </div>
</div>
<?php } ?>
<?php
        // the_title(); // Example: Display the post title
        // echo '<br>';
    }
} else {
    // No posts found
}

// Restore original post data
wp_reset_postdata();
?>


<?php
	}
}