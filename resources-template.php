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

			<?php echo getPostBoxSection(
				array(
					'title' => 'Sermons',
					'category' => 'sermon',
					'url' => 'sermons'
				));
			?>

			<?php echo getPostBoxSection(
				array(
					'title' => 'Friday Night Topics',
					'category' => 'friday night topics',
					'url' => 'friday-night-topics'
				));
			?>

			<?php if (isset($_GET['blog']) && $_GET['blog']) { ?>
				<section class='clear'>
					<div>
						<h1 class='bigAndBordered caps'>Blog</h1>
					</div>

					<div class='boxes row'>
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
			<?php } ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>