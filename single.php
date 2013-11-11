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

						<?php
							$postIds = array();

							$custom_fields = get_post_custom();
							if(!empty($custom_fields['sermon_ids'])) {
								foreach(explode(',', $custom_fields['sermon_ids'][0]) as $cur) {
									$postIds[] = $cur;
								}
							}

							echo getPostBoxSection(
								array(
									'title' => get_the_title(),
									'url' => 'sermons',
									'moreText' => 'Back to Sermons',
									'moreClasses' => 'backContainer',
									'postIds' => $postIds
								));
						?>

					<?php elseif(in_category($categories['sermon'], get_the_ID())) : ?>
						<!-- sunday sermon content -->
						<?php get_template_part( 'content', get_post_format() ); ?>

						<!-- show more sermons, based on whether the sermon is part of a series or not -->
						<div class='moreContainer'>

							<?php
								if (isset(get_post_custom()['series_id'])) {

									$series_id = get_post_custom()['series_id'][0];
									$use_the_series = get_the_title($series_id) !== 'Stand-Alone Sermons';
								}

								if ($use_the_series) {

									//get the custom fields for the series
									$custom_fields = get_post_custom($series_id);
									$postIds = array();
									if(!empty($custom_fields['sermon_ids'])) {
										$sermon_ids = $custom_fields['sermon_ids'][0];
										//reverse sort so that most recent shows up

										$reverse_ids = array_reverse(explode(',', $sermon_ids));

										foreach($reverse_ids as $cur) {
											if($cur == get_the_ID())
												continue;

											if(count($postIds) >= 4)
												break;

											$postIds[] = $cur;
										}
									}

									$args = array(
										'title' => 'More from This Series',
										'url' => get_permalink($series_id),
										'isPermalink' => true,
										'moreText' => 'Back to Sermon Series',
										'postIds' => $postIds
									);
								} else {

									$postIds = array();
									$sermons = getPosts('sermon', 5, true);
									foreach($sermons as $cur) {
										if($cur->ID == get_the_ID())
											continue;

										if(count($postIds) >= 4)
											break;

										$postIds[] = $cur->ID;
									}

									$args = array(
										'title' => 'Most Recent Sermons',
										'url' => 'sermons',
										'moreText' => 'Back to Sermons',
										'postIds' => $postIds
									);
								}

								echo getPostBoxSection($args);
							?>
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