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
get_header(); ?>

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
						<div class='marginTopForty'>We are an Asian American, Southern Baptist church</div>
						<div class='marginBottom'>located in Seattle's International District.</div>
						<!--<div>We are not ashamed Jesus' life and resurrection and</div>
						<div>we believe that it is <i>truly</i> good news for all people.</div>-->
					</div>
				</section>

				<section id='services'>
					<h2><a href='<?php echo $siteurl; ?>/services'>Services.</a></h2>
					<div class='bg'></div>
					<div class='content formatted'>
						<table>
							<tbody>
								<tr>
									<td id='addressTd' colspan='2'>925 S King St, Seattle, WA 98104</td>
								</tr>
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
					<!--
					<div class='content'>
						<iframe src="https://www.google.com/calendar/embed?mode=AGENDA&amp;height=120&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=krucial206%40gmail.com&amp;color=%23182C57&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="940" height="120" frameborder="0" scrolling="no"></iframe>
					</div>
					-->
				</section>

				<?php
					function getPosts($type,$number=5) {
						$dontFeatureCat = 19;
						query_posts("posts_per_page=4&cat=-$dontFeatureCat");

						if($type == 'midweek')
							$cat = 8;
						else if($type == 'mini message')
							$cat = 7;
						else if($type == 'sermon')
							$cat = 11;

						if(!$cat)
							query_posts("cat=$dontFeatureCat&posts_per_page=$number");	
						else
							query_posts("cat=$cat,$dontFeatureCat&posts_per_page=$number");
					}
				?>

				<section id='resources'>
					<h2><a href='<?php echo $siteurl; ?>/resources'>Resources.</a></h2>
					<div class='bg'></div>
					<div class='content'>
						<?php getPosts('midweek', 1); while (have_posts()) : the_post(); ?>
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
								<section class='midweek'>
								  	<div class='contentHeader'>Latest Midweek Encouragement:</div>
								  	<div class='contentTitle'><?php the_title(); ?></div>
								</section>
							</a>
						<?php endwhile; ?>
						<?php getPosts('mini message', 1); while (have_posts()) : the_post(); ?>
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
								<section class='miniMessage'>
								  	<div class='contentHeader'>Latest Message from the Pastor:</div>
								  	<div class='contentTitle'><?php the_title(); ?></div>
								</section>
							</a>
						<?php endwhile; ?>
						<?php getPosts('sermon', 1); while (have_posts()) : the_post(); ?>
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
								<section class='sermon'>
								  	<div class='contentHeader'>Latest Sermon:</div>
								  	<div class='contentTitle'><?php the_title(); ?></div>
								</section>
							</a>
						<?php endwhile; ?>
					</div>
				</section>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>