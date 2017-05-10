<?php get_header();

$args = array(
	'post_type' => 'your_post',
);
$your_loop = new WP_Query( $args );

if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post();
$meta = get_post_meta( $post->ID, 'your_fields', true ); ?>

<h1>Text Input</h1>
<?php echo $meta['text']; ?>
<h1>Text Input2</h1>
<?php echo $meta['text1']; ?>


<?php endwhile; endif; wp_reset_postdata(); ?>

<?php get_footer(); ?>
