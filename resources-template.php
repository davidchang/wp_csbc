<?php
/**
 * Template Name: Resources Template
 *
 * @package WordPress
 * @subpackage CSBC_Custom
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<style>
	.resourcesSection h1 {
		font-size: 2.5em;
		margin-bottom: 25px;
	}
	.resourcesSection h2 {
		font-size: 1.5em;
	}
	.resourcesSection h2 a {
		text-decoration: none;
		color: #444;
	}
	.resourcesSection h2 a:hover {
		text-decoration: underline;
	}
	.resourcesSection .date {
		margin-top: 5px;
		font-size: 1.2em;
	}
	.site-content {
		margin-top: 0px;
	}
	.resourcesSection section {
		margin-bottom: 35px;
	}
	.resourcesSection p {
		margin: 10px 0px;
		font-size: 1.3em;
		line-height: 1.3em;
	}
	.largerText {
		font-size: 1.3em;
		line-height: 1.3em;	
	}
	.marginTop {
		margin-top: 30px;
	}
	.half {
		width: 50%;
		float: left;
	}
	.postBody {
		padding-right: 35px;
	}
</style>

	<div id="primary" class="site-content">
		<div id="content" role="main" class='resourcesSection clear'>

			<?php
				$siteurl = get_option("siteurl");
				function getPosts($type,$number=5) {
					if($type == 'midweek')
						$cat = 8;
					else if($type == 'mini message')
						$cat = 7;
					else if($type == 'sermon')
						$cat = 11;

					if(!$cat)
						query_posts('posts_per_page=$number');	
					else
						query_posts("cat=$cat&posts_per_page=$number");
				}
			?>

			<div>
				<h1>Sermons</h1>

				<?php
				getPosts('sermon');

				while (have_posts()) : the_post(); ?>

					<?php $custom_fields = get_post_custom(); if(!$custom_fields['youtube']) continue; ?>

					<section>
					  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					  <div class='date'><?php the_date(); ?></div>
					  <div class='youtubeWrapper'>
					  	<iframe width="560" height="315" src="//www.youtube.com/embed/<?php echo $custom_fields['youtube'][0]; ?>" frameborder="0" allowfullscreen></iframe>
					  </div>
					</section>

				<?php endwhile; ?>

				<div class='largerText'><a href='<?php echo $siteurl; ?>/category/from-the-pastor/sermons/'>View More Sermons</a></div>
			</div>

			<div class='marginTop half'>
				<h1>Midweek Encouragements</h1>

				<div class='postBody'>

					<?php

					getPosts('midweek');

					while (have_posts()) : the_post(); ?>

						<section>
						  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						  <div class='date'><?php the_date(); ?></div>
						  <?php the_excerpt(); ?>
						</section>

					<?php endwhile; ?>

					<div class='largerText'><a href='<?php echo $siteurl; ?>/category/from-the-pastor/midweek/'>View More Midweek Encouragements</a></div>

				</div>

			</div>

			<div class='marginTop half'>
				<h1>Sunday Mini Messages</h1>

				<div class='postBody'>

					<?php

					getPosts('mini message');

					while (have_posts()) : the_post(); ?>

						<section>
						  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						  <div class='date'><?php the_date(); ?></div>
						  <?php the_excerpt(); ?>
						</section>

					<?php endwhile; ?>

					<div class='largerText'><a href='<?php echo $siteurl; ?>/category/from-the-pastor/message-from-the-pastor/'>View More Sunday Mini Messages</a></div>

				</div>

			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>