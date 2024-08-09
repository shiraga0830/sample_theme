<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php global $page, $paged;
	wp_title('|', true, 'right');
	bloginfo('name');
	$site_description = "&nbsp;サイトのキャッチコピー";
	if($site_description && (is_front_page()))
		echo " | $site_description";
	if($paged >= 2 || $page >= 2)
		echo ' | ' . sprintf(__('Page %s', 'present'), max($paged, $page));
?></title>
<meta name="description" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)){ echo ' - '; } bloginfo('description'); ?>">
<meta name="keywords" content="キーワード1,キーワード2,キーワード3,キーワード4,キーワード5,キーワード6,キーワード7" />
<?php get_template_part('inc/seo'); ?>
<?php wp_head(); ?>
</head>
<body>
<header id="header">
<?php if(function_exists('the_custom_logo')): ?>
	<h1 id="logo"><?php the_custom_logo();?></h1>
<?php else: ?>
	<h1 id="logo"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
<?php endif; ?>
	<div id="menu_btn"><div class="menu-trigger"><span></span><span></span><span></span></div></div>
	<nav id="nav">
<?php wp_nav_menu(array(
	'theme_location' => 'header',
	'menu_class' => 'nav',
	'container' => ''
)); ?>
	</nav>
	<div class="overlay"></div>
</header>