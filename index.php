<?php get_header(); ?>
<div id="wrapper">
	<div id="content">
<?php if (is_search()) : ?>
		<h2 class="title first"><span>『<?php the_search_query(); ?>』の検索結果<?php if (get_query_var('paged')) echo ' | '. get_query_var('paged') .'ページ目'; ?></span></h2>
<?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>">
			<p><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><span><?php the_title(); ?></span></a></p>
		</div>
<?php endwhile;
else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.', 'shinwa'); ?>
<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>