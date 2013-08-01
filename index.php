<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
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
		<h2>English Ministry</h2>
	</header>

	<div id="main" class="wrapper">

		<div id="primary">
			<div id="content" role="main">
				
				<section id='boxes' class='clear'>
					<div id='resources' class='boxDiv'>
						<a href='resources'>
							<div class='box'></div>
						</a>
					</div>
					<div id='events' class='boxDiv'>
						<a href='events'>
							<div class='box'></div>
						</a>
					</div>
					<div id='location' class='boxDiv'>
						<a href='location'>
							<div class='box'></div>
						</a>
					</div>
					<div id='contact' class='boxDiv'>
						<a href='contact'>
							<div class='box'></div>
						</a>
					</div>
				</section>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>