<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<style>
		.partialWidth {
			width: 65%;
		}
	</style>

	<div id="primary">
		<div id="content" role="main" class='clear'>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class='left partialWidth'>

					<?php get_template_part( 'content', get_post_format() ); ?>

					<nav class="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
						<div><?php previous_post_link( '%link', 'Previous post: %title' ); ?></div>
						<div><?php next_post_link( '%link', 'Next post: %title' ); ?></div>
					</nav><!-- .nav-single -->

					<?php //comments_template( '', true ); ?>

				</div>

			<?php endwhile; // end of the loop. ?>

			<?php get_sidebar(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>