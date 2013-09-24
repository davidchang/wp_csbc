<?php
/**
 * Template Name: Resources Template
 *
 * @package WordPress
 * @subpackage CSBC_Custom
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content resourcesTemplate">
		<div id="content" role="main" class='pageSection clear'>

			<section class='boxHolder'>
				<h1 class='big caps'>Sermons</h1>
				<div class='clear'>
					<?php
					//getPosts('sermon series', 4);
					getPosts('sermon', 4);

					while (have_posts()) : the_post(); ?>

						<div>
						  	<img src="<?php echo getFeaturedPostUrl(get_the_ID()); ?>"/>
						  	<a href='<?php the_permalink() ?>'></a>
						</div>

					<?php endwhile; ?>
				</div>
			</section>

			<section id='fridayNightTopics' class='boxHolder'>
				<h1 class='bigAndBordered caps'>Friday Night Topics</h1>
				<div class='clear'>
					<?php
					getPosts('friday night topics', 4);

					while (have_posts()) : the_post(); ?>

						<div>
					  		<img src="<?php echo getFeaturedPostUrl(get_the_ID()); ?>"/>
						  	<a href='<?php the_permalink() ?>'></a>
						</div>

					<?php endwhile; ?>
				</div>
			</section>


			<section class='boxHolder'>
				<h1 class='bigAndBordered caps'>From the Pastor</h1>
				<div class='clear'>
					<?php
					getPosts('from the pastor', 4);

					while (have_posts()) : the_post(); ?>

						<div></div>

					<?php endwhile; ?>
				</div>
			</section>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>