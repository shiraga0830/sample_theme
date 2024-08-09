<?php get_header(); ?>
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
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="page">
<?php the_content(); ?>
		</div>
<?php endwhile;
endif; ?>
	</div>
</div>
<?php get_footer(); ?>