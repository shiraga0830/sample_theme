<?php
if(!is_active_sidebar('sidebar')){
	return;
}
?>
<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e('Blog Sidebar', 'inex'); ?>">
	<?php dynamic_sidebar('sidebar'); ?>
</aside>