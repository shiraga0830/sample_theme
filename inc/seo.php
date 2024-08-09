<?php if(is_404()): ?>
<meta name='robots' content='noindex, nofollow' />
<?php endif; ?>
<meta property="og:title" content="<?php bloginfo('name'); ?>">
<?php if(is_home()): ?>
<meta property="og:type" content="news">
<?php elseif(is_404()): ?>
<meta property="og:type" content="404">
<?php else:
global $post;
$slug = $post->post_name;
 ?>
<meta property="og:type" content="<?php echo $slug; ?>">
<?php endif; ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>">
<meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<?php if(is_single()): ?>
<?php if(has_post_thumbnail()) : ?>
<meta property="og:image" content="<?php echo the_post_thumbnail_url(); ?>">
<meta property="og:image:secure_url" content="<?php echo the_post_thumbnail_url(); ?>" />
<?php else : ?>
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/thumbnail.png">
<meta property="og:image:secure_url" content="<?php bloginfo('template_url'); ?>/images/thumbnail.png" />
<?php endif ; ?>
<?php else : ?>
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/thumbnail.png">
<meta property="og:image:secure_url" content="<?php bloginfo('template_url'); ?>/images/thumbnail.png" />
<?php endif; ?>
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
<?php if(is_single()): ?>
<?php if(has_post_thumbnail()) : ?>
<meta name="twitter:image" content="<?php echo the_post_thumbnail_url(); ?>" />
<?php else : ?>
<meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/images/thumbnail.png" />
<?php endif ; ?>
<?php else : ?>
<meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/images/thumbnail.png" />
<?php endif; ?>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<style>
<?php if(is_user_logged_in()): ?>
#header,#menu_btn{margin-top:32px;}@media only screen and (max-width:782px){#header,#menu_btn{margin-top:46px;}.mean-container .mean-bar{top:46px!important;}}
<?php else : ?>
#wpadminbar{display:none;}
<?php endif; ?>
</style>