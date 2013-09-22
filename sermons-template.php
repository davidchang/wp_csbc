<?php
/**
 * Template Name: Sermons Template
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
					getPosts('sermon series', -1);

					while (have_posts()) : the_post(); ?>

						<div>
						  	<img src="<?php echo getFeaturedPostUrl(get_the_ID()); ?>"/>
						  	<a href='<?php the_permalink() ?>'></a>
						  	<div>
								<div class='cover'></div>

								<div class='title caps'>
									<?php the_title(); ?>
								</div>
								<div class='date'>
									<?php if(get_the_title() !== 'Stand-Alone Sermons') {
										the_time('F Y');
									} ?>
								</div>
							</div>
						</div>

					<?php endwhile; ?>

				</div>
			</section>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>