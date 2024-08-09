<?php get_header(); ?>
<div id="page-header">
	<div id="page-inner">
		<div id="page-text">
			<h2 class="title topfade"><?php _e('News', 'sample'); ?></h2>
		</div>
	</div>
</div>
<?php output_breadcrumb(); ?>
<div id="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" class="content">
		<h3 class="heading"><?php the_title(); ?></h3>
		<div class="post">
			<p class="dateLabel"><time datetime="<?php the_time('Y-m-d')?>"><?php the_time('Y/m/d')?></time>
<?php the_content(); ?>
		</div>
	</div>
	<?php endwhile;?>
	<div class="pagenav">
		<div class="prev_post"><?php next_post_link('%link', __('Next Post', 'sample')); ?></div>
		<div class="next_post"><?php previous_post_link('%link', __('Previous Post', 'sample')); ?></div>
	</div>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>