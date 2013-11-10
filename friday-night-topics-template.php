<?php
/**
 * Template Name: Friday Night Topics Template
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
					'title' => 'Friday Night topics',
					'category' => 'friday night topics',
					'url' => 'resources',
					'moreText' => 'Back to Resources',
					'num' => -1,
					'moreClasses' => 'backContainer faint'
				));
			?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>