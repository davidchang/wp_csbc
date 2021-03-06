<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id='mainContainer'>
	<header>
		<h1>Chinese Southern Baptist Church</h1>
		<div id='headerNav' class='clear'>
			<h2 class='left'>English Ministry</h2>
			<ul class='left'>
				<?php $siteurl = get_option("siteurl"); ?>
				<li><a href='<?php echo $siteurl; ?>'>Home</a></li>
				<li><a href='<?php echo $siteurl; ?>/about-us'>About</a></li>
				<li><a href='<?php echo $siteurl; ?>/services'>Services</a></li>
				<li><a href='<?php echo $siteurl; ?>/connect'>Connect</a></li>
				<li><a href='<?php echo $siteurl; ?>/resources'>Resources</a></li>
			</ul>
		</div>
	</header>

	<div id="main" class="wrapper">