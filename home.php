<?php get_header(); ?>
<div id="page-header">
	<div id="page-inner">
		<div id="page-text">
			<h2 class="title topfade"><?php _e('News', 'sample'); ?></h2>
		</div>
	</div>
</div>
<?php output_breadcrumb(); ?>
<div id="wrapper">
	<div id="content">
<?php $args = array(
	'post_type' => 'post',
	'posts_per_page' => 8,
	'paged' => $paged
); ?>
<?php $the_query = new WP_Query($args); ?>
<?php if(have_posts()) : ?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
			<dl class="news">
				<dt><?php the_time('Y/m/d');?><?php
$category = get_the_category();
if ($category[0]) {
	echo '<a class="cate" href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
} ?></dt>
				<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
			</dl>
<?php endwhile;
endif;
the_posts_pagination(array('screen_reader_text'=>'')); ?>
	</div>
</div>
<?php get_footer(); ?>