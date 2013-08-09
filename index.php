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
			<div id="content" role="main" class='index'>

				<!-- TODO get pics, no text overlaying image -->
				<!-- Four categories to go:
					About, Services, Resources, Connect
				-->

				<!-- pages that are actually being used:
					Location
					About Us
					Beliefs
					Pastor Matt
					Resources
						Blog
				-->

				<!-- resources:
					midweek encouragement (blog)
					sermons
				-->

				<!--
					Development TODO
						Create new Categories:
							+ Events (2)
							+ Sermons (11)
							+ Midweek Enccuragement (8)
							+ Message from the Pastor (7)
							? Other (Get To Know Us posts, for instance)
						+ Front page (show 4 most recent posts, period, maybe exclude a specific "no-feature" category)
						+ Style the categories page
						- Fix permalinks for some pages (remember where post_name like 'blog%')
						+ Sidebar on blog posts
						+ Fix permalinks on Resources page to their respective Categories pages, not separate blog type pages
						
						Connect Page (has a Calendar on it, info for each of our different groups)
						Sermons page (special format on category.php required)


					Content TODO
						Content for About Us
						New Media
							+ pics for the home page
							+ pics for different resource types (Sermons, Midweek Encouragement, Events)
							pics for Connect pages (guy's group, girl's group, prayer group)

					Long term TODO
						+ Hosting
						+ Getting email addresses
						Disqus for comments
						Perhaps even some responsive design

						+ Google Analytics

						Talk to Chris about SEO
						Figure out how to optimize images for the web :/

						Alternative front page layouts (maybe something with a carousel)
				-->

				<?php $siteurl = get_option("siteurl"); ?>

				
				<section id='about'>
					<h2><a href='<?php echo $siteurl; ?>/about-us'>About.</a></h2>
					<div class='bg'></div>
					<div class='content'>
						<div>We are an Asian American church located</div>
						<div>in Seattle's International District.</div>
					</div>
				</section>

				<section id='services'>
					<h2><a href='<?php echo $siteurl; ?>/services'>Services.</a></h2>
					<div class='bg'></div>
					<div class='content formatted'>
						<table>
							<tbody>
								<tr>
									<td>Sunday Bible Study:</td>
									<td>10:00am</td>
								</tr>
								<tr>
									<td>Sunday Worship Service:</td>
									<td>11:15am</td>
								</tr>
								<tr>
									<td>Friday Worship/Training:</td>
									<td>7:00pm</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>

				<section id='connect'>
					<h2><a href='<?php echo $siteurl; ?>/connect'>Connect.</a></h2>
					<div class='bg'></div>
				</section>

				<?php query_posts("cat=7,8,11&posts_per_page=3"); ?>

				<section id='resources'>
					<h2><a href='<?php echo $siteurl; ?>/resources'>Resources.</a></h2>
					<div class='bg'></div>
					<div class='content'>
						<?php while (have_posts()) : the_post(); ?>
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
								<!-- TOOD: vertical align this -->
								<section>
								  	<div class='contentHeader'>Last Midweek Encouragement:</div>
								  	<div class='contentTitle'><?php the_title(); ?></div>
								</section>
							</a>
						<?php endwhile; ?>
					</div>
				</section>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>