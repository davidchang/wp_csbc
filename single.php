<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main" class='clear'>

			<?php while ( have_posts() ) : the_post(); ?>

				<div class='left<!-- partialWidth-->'>

					<?php
					$categories = getCategories();
					if(in_category($categories['friday night topics'], get_the_ID())) : ?>

						<!-- friday night topic content -->
						<?php get_template_part( 'content', get_post_format() ); ?>

						<div class='backContainer'>
							<a href='<?php echo getRootURL(); ?>/friday-night-topics'>Back to Friday Night Topics</a>
						</div>

					<?php elseif(in_category($categories['sermon series'], get_the_ID())) : ?>

						<section class='boxHolder'>
							<h1 class='big caps'><?php the_title() ?></h1>
							<div class='clear'>
								<?php $custom_fields = get_post_custom(); if(!empty($custom_fields['sermon_ids'])) {
									foreach(explode(',', $custom_fields['sermon_ids'][0]) as $cur) {
										echo getPostBox($cur);
									}
								}
								?>
							</div>
						</section>

						<div class='backContainer'>
							<a href='<?php echo getRootURL(); ?>/sermons'>Back to Sermons</a>
						</div>
						
					<?php elseif(in_category($categories['sermon'], get_the_ID())) : ?>
						<!-- sunday sermon content -->
						<?php get_template_part( 'content', get_post_format() ); ?>

						<div class='moreContainer'>
							<section class='boxHolder'>
								<?php
									$series_id = get_post_custom()['series_id'][0];
									$use_the_series = get_the_title($series_id) !== 'Stand-Alone Sermons';
								?>
								<h1 class='big caps'><?php if($use_the_series) {
									echo "More From This Series";
								} else {
									echo "Most Recent Sermons";
								} ?></h1>
								<div class='clear'>

									<?php

									if($use_the_series) {

										//get the custom fields for the series
										$custom_fields = get_post_custom($series_id);
										if(!empty($custom_fields['sermon_ids'])) {
											$sermon_ids = $custom_fields['sermon_ids'][0];
											//reverse sort so that most recent shows up

											$reverse_ids = array_reverse(explode(',', $sermon_ids));
											$counter = 0;

											foreach($reverse_ids as $cur) {
												if($cur == get_the_ID())
													continue;

												$counter++;
												if($counter > 4)
													break;

												echo getPostBox($cur);
											}
										}
									}
									else {
										//you'll want to show the most recent 4 sermons regardless

										$sermons = getPosts('sermon', 5, true);
										$counter = 0;
										foreach($sermons as $cur) {
											if($cur->ID == get_the_ID())
												continue;
											$counter++;
											if($counter > 4)
												break;

											echo getPostBox($cur->ID);
										}
									}
									?>
								</div>
							</section>
						</div>

						<div class='backContainer'>
							<?php if($use_the_series) { ?>
								<a href='<?php echo get_permalink($series_id); ?>'>Back to Sermon Series</a>
							<?php } else { ?>
								<a href='<?php echo getRootURL(); ?>/sermons'>Back to Sermons</a>
							<?php } ?>
						</div>

					<?php else : ?>
						<?php get_template_part( 'content', get_post_format() ); ?>

						<nav class="nav-single">
							<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
							<div><?php previous_post_link( '%link', 'Previous post: %title' ); ?></div>
							<div><?php next_post_link( '%link', 'Next post: %title' ); ?></div>
						</nav><!-- .nav-single -->
					<?php endif; ?>

					<?php //comments_template( '', true ); ?>

				</div>

			<?php endwhile; // end of the loop. ?>

			<!-- <?php get_sidebar(); ?> -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>