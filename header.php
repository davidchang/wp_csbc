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
	<header class='clear'>
		<div id='logo' class='left'><!--<div id='logoDiv'></div>-->
			<img src='wp-content/themes/csbc-custom/img/csbc-logo.png' alt='CSBC logo'></img>
		</div>
		
		<div id='englishMinistry' class='left'>
			<div>English</div>
			<div>Ministry</div>
		</div>
		<ul id='links' class='right'>
			<li>
				<a href='about'>About</a>
			</li>
			<li>
				<a href='about'>Visit</a>
			</li>
			<li>
				<a href='about'>Sermons</a>
			</li>
			<li>
				<a href='about'>Connect</a>
			</li>
			<li>
				<a href='about'>Events</a>
			</li>
		</ul>
	</header>

	<div id="main" class="wrapper">