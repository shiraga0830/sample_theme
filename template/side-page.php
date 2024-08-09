<?php
/**
 * Template Name: Side Page */
get_header();
?>
<?php if(has_post_thumbnail()):?>
<div id="page-header" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
<?php else: ?>
<div id="page-header">
<?php endif;?>
	<div id="page-inner">
		<div id="page-text">
			<h2 class="title topfade"><?php the_title(); ?></h2>
		</div>
	</div>
</div>
<?php output_breadcrumb(); ?>
<div id="wrapper">
	<div id="content">
		<div id="side-contents">
			<div class="main-data">
<?php if(has_post_thumbnail()): ?>
				<figure class="post-images"><img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></figure>
<?php endif; ?>
<?php the_content(); ?>
				<p class="post-day"><time datetime="<?php the_modified_time('c'); ?>"><?php the_time('Y.m.j'); ?></time></p>
<?php
if (comments_open() || get_comments_number()){
	comments_template();
}
?>
			</div>
			<div class="side-data">
<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>