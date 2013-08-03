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
</style>

	<div id="primary" class="site-content">
		<div id="content" role="main" class='resourcesSection'>

			<div>
				<h1>Sermons</h1>

				<?php
				query_posts('posts_per_page=5');

				while (have_posts()) : the_post(); ?>

					<section>
					  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					  <div class='date'><?php the_date(); ?></div>
					  <?php the_excerpt(); ?>
					</section>

				<?php endwhile; ?>

				<div class='largerText'><a href='sermons'>View More Sermons</a></div>
			</div>

			<div class='marginTop'>
				<h1>Midweek Encouragements</h1>

				<?php

				query_posts('posts_per_page=5'); 

				while (have_posts()) : the_post(); ?>

					<section>
					  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					  <div class='date'><?php the_date(); ?></div>
					  <?php the_excerpt(); ?>
					</section>

				<?php endwhile; ?>

				<div class='largerText'><a href='blog-2'>View More Midweek Encouragements</a></div>

			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>