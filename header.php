<!DOCTYPE>
<html xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="http://fonts.googleapis.com/css?family=Rokkitt:400,700|Sanchez|Quando" rel="stylesheet" type="text/css">

<?php if (have_posts()): while(have_posts()): the_post(); endwhile; endif; ?>
<?php if (is_single()) { ?>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
	<meta property="og:title" content="<?php single_post_title(''); ?>" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="<?php if (function_exists('catch_that_image')) {echo catch_that_image(); }?>" />
<?php } else { ?>
	<meta property="og:url" content="<?php echo get_option('home'); ?>"/>
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="put your actual image here" />
<?php } ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="container">
	<header>
        <div>
            <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
            <h2><?php bloginfo('description'); ?></h2>
        </div>
    </header>
	<div id="main">
		<?php if (is_single() || is_page() || is_archive()) { ?>
		<div id="backtoblog"><a href="<?php echo get_option('home'); ?>/">&laquo; Back to blog</a></div>
		<?php } ?>