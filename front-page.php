<?php get_header(); ?>
<?php $header_image = get_header_image();
if ($header_image): ?>
<figure id="mainImg">
	<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo('description'); ?>">
</figure>
<?php endif;?>
<?php get_template_part('template/top-page'); ?>
<?php get_footer(); ?>