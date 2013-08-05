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
					About Us (2)
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
							Events
							+ Sermons
							+ Midweek Encouragement
							Other (Get To Know Us posts, for instance)
						Front page (show 4 most recent posts, period, maybe exclude a specific "no-feature" category)
						Sermons page
						Fix permalinks for some pages (remember where post_name like 'blog%')
						Connect Page (has a Calendar on it, info for each of our different groups)
						Sidebar on blog posts


					Content TODO
						Content for About Us
						New Media
							+ pics for the home page
							+ pics for different resource types (Sermons, Midweek Encouragement, Events)
							pics for Connect pages (guy's group, girl's group, prayer group)


					What I don't want TODO
						Archive page

					Long term TODO
						Hosting
						Getting email addresses
						Disqus for comments
						Perhaps even some responsive design
				-->

				<section id='featured'>
					<h1>Featured Content</h1>
					<div class='clear'>

						<!-- classes: sermon, event, blog -->

						<?php
						query_posts('posts_per_page=4');

						$fakeCategories = array('sermon', 'event', 'blog', 'sermon');
						$i = 0;

						while (have_posts()) : the_post(); ?>

							<div class='featuredBox'>
								<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
									<div class='box <?php echo $fakeCategories[$i]; ?>'>
										<?php echo $fakeCategories[$i]; $i++;?>
									</div>
								</a>
								<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								</div>

						<?php endwhile; ?>
					</div>
				</section>
				
				<section>
					<h1>Navigate</h1>
					<div id='boxes' class='clear'>
						<div id='events' class='boxDiv'>
							<a href='about-us' class='white'>
								<div class='box'>About</div>
							</a>
						</div>
						<div id='location' class='boxDiv'>
							<a href='services'>
								<div class='box'>Services</div>
							</a>
						</div>
						<div id='resources' class='boxDiv'>
							<a href='resources'>
								<div class='box'>Resources</div>
							</a>
						</div>
						<div id='contact' class='boxDiv'>
							<a href='contact' class='white'>
								<div class='box'>Connect</div>
							</a>
						</div>
					</div>	
				</section>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>