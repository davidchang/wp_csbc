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
							<a href='<?php echo $siteurl; ?>/sermons'>Back to Friday Night Topics</a>
						</div>

					<?php elseif(in_category($categories['sermon series'], get_the_ID())) : ?>

						<section class='boxHolder'>
							<h1 class='big caps'><?php the_title() ?></h1>
							<div class='clear'>
								<?php $custom_fields = get_post_custom(); if(!empty($custom_fields['sermon_ids'])) {
									foreach(explode(',', $custom_fields['sermon_ids'][0]) as $cur) {
								?>
									<div>
										<img src="<?php echo getFeaturedPostUrl($cur); ?>"/>
										<a href='<?php echo get_permalink($cur); ?>'></a>
										<div>
											<div class='cover'></div>

											<div class='title'>
												<?php echo get_the_title($cur); ?>
											</div>
											<div class='date'>
												<?php echo get_the_time('F j, Y', $cur); ?>
											</div>
										</div>
									</div>
								<?php }
								}
								?>
							</div>
						</section>

						<div class='backContainer'>
							<a href='<?php echo $siteurl; ?>/resources'>Back to Sermon Series</a>
						</div>
						
					<?php elseif(in_category($categories['sermon'], get_the_ID())) : ?>
						<!-- sunday sermon content -->
						<?php get_template_part( 'content', get_post_format() ); ?>

						<div class='backContainer'>
							<section class='boxHolder'>
								<h1 class='big caps'>More from this Series</h1>
								<div class='clear'>
									<?php $custom_fields = get_post_custom(get_post_custom()['series_id'][0]); if(!empty($custom_fields['sermon_ids'])) {
										foreach(explode(',', $custom_fields['sermon_ids'][0]) as $cur) {
									?>
										<div>
											<img src="<?php echo getFeaturedPostUrl($cur); ?>"/>
											<a href='<?php echo get_permalink($cur); ?>'></a>
											<div>
												<div class='cover'></div>

												<div class='title'>
													<?php echo get_the_title($cur); ?>
												</div>
												<div class='date'>
													<?php echo get_the_time('F j, Y', $cur); ?>
												</div>
											</div>
										</div>
									<?php }
									}
									?>
								</div>
							</section>
						</div>

						<div class='backContainer'>
							<a href='<?php echo $siteurl; ?>/sermons'>Back to Sermon Series</a>
						</div>

					<?php else : ?>
						<nav class="nav-single">
							<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
							<div><?php previous_post_link( '%link', 'Previous post: %title' ); ?></div>
							<div><?php next_post_link( '%link', 'Next post: %title' ); ?></div>
						</nav><!-- .nav-single -->
					<?php endif; ?>

					<?php //comments_template( '', true ); ?>

				</div>

			<?php endwhile; // end of the loop. ?>

			<?php get_sidebar(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>