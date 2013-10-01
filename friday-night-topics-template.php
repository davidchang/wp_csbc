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

			<section class='boxHolder'>
				<h1 class='big caps'>Friday Night topics</h1>
				<div class='clear'>
					<?php
					getPosts('friday night topics', -1);

					while (have_posts()) : the_post(); 
						echo getPostBox(null, 'F Y');
					endwhile; ?>

				</div>
			</section>

			<section class='backContainer faint'>
				<a class='right' href='<?php echo getRootURL(); ?>/resources'>Back to Resources</a>
			</section>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>