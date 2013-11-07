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

			<section class='boxHolder clear'>
				<h1 class='big caps'>Sermons</h1>
				<div class='clear'>
					<?php
					//getPosts('sermon series', 4);
					getPosts('sermon', 4);

					while (have_posts()) : the_post();
						echo getPostBox();
					endwhile; ?>
				</div>
				<div class='right moreMarginTop'>
					<a class='customBtn' href='<?php echo getRootURL(); ?>/sermons'>More Sermons</a>
				</div>
			</section>

			<section class='boxHolder clear'>
				<h1 class='bigAndBordered caps'>Friday Night Topics</h1>
				<div class='clear'>
					<?php
					getPosts('friday night topics', 4);

					while (have_posts()) : the_post();
						echo getPostBox(null, 'F, Y');
					endwhile; ?>
				</div>

				<div class='right moreMarginTop'>
					<a class='customBtn' href='<?php echo getRootURL(); ?>/friday-night-topics'>More Friday Night Topics</a>
				</div>
			</section>

<!--
			<section class='boxHolder'>
				<h1 class='bigAndBordered caps'>Blog</h1>
				<div class='clear'>
					<?php
					getPosts('from the pastor', 4);

					$colors = array('blue', 'gray', 'green', 'magenta', 'orange', 'pink1', 'seafoam');
					$colorString = '/wordpress/wp-content/uploads/2013/09/weekly-encouragement_'; // + color.png
					$counter = 0;

					while (have_posts()) : the_post();
						echo getPostBox(null, 'F j, Y', array(
							'img' => $colorString.$colors[$counter++].'.png'
						));
					endwhile;
					?>
				</div>
			</section>
		-->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>