<?php
/* Loading CSS and Javascript
/*--------------------------------*/
function sample_scripts(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_style('menu', get_template_directory_uri() . '/css/menu.css');
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css');
}
add_action('wp_enqueue_scripts', 'sample_scripts');

/* Language files
/*--------------------------------*/
load_textdomain('sample', dirname(__FILE__).'/languages/' . get_locale() . '.mo');

/* Loading a PHP file
/*--------------------------------*/
require("inc/breadcrumb.php");

/* Basic configuration
/*--------------------------------*/
define('NO_HEADER_TEXT', true);
define('HEADER_TEXTCOLOR', true);
define('HEADER_IMAGE', '%s/img/mainImage.png');
define('HEADER_IMAGE_WIDTH', 2560);
define('HEADER_IMAGE_HEIGHT', 1056);
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

/* Menu
/*--------------------------------*/
register_nav_menus(array(
	'header' => __('Header Navigation', 'sample'),
	'footer' => __('Footer Navigation', 'sample'),
));

/* This theme uses post thumbnails
/*--------------------------------*/
add_theme_support('post-thumbnails');
add_image_size('sizeA',450,300,true);
add_image_size('sizeB',400,400,true);

/* Widgets
/*--------------------------------*/
function sample_widgets_init(){
	register_sidebar(array(
		'name' => __('Blog Sidebar', 'sample'),
		'id' => 'sidebar',
		'description' => __('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'sample'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'sample_widgets_init');

/* Page navigation
/*--------------------------------*/
function kriesi_pagination($pages = '', $range = 2){
	$showitems = ($range * 2)+1;
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){
			$pages = 1;
		}
	}
	if(1 != $pages){
		echo "<ul class='pagination'>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
		if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";
		for ($i=1; $i <= $pages; $i++){
			if(1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)){
				echo ($paged == $i)? "<li><span class='current'>".$i."</span></li>":"<li><a href='".get_pagenum_link($i)."#hoge' class='inactive' >".$i."</a></li>";
			}
		}
		if($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
		if($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
		echo "</ul>\n";
	}
}