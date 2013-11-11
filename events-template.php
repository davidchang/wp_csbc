<?php
/**
 * Template Name: Events Template
 *
 * @package WordPress
 * @subpackage CSBC_Custom
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content eventsTemplate">
		<div id="content" role="main" class='pageSection clear'>
			<section id='calHolder'>
				<iframe src="https://www.google.com/calendar/embed?src=krucial206%40gmail.com&ctz=America/Los_Angeles" style="border: 0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
			</section>

			<div class='emptySpace'></div>
			<?php 
			if (isset($_GET['show']) && $_GET['show']) {

				$postIds = array();
				$events = getPosts('events', -1, true);
				$today = date('n/j/Y');

				foreach($events as $cur) {
					$custom_fields = get_post_custom($cur->ID);

					$eventDate = date('n/j/Y', strtotime($custom_fields['date'][0]));
					if ($eventDate >= $today) {
						$postIds[] = $cur->ID;
					}
				}

				echo getPostBoxSection(
					array(
						'title' => 'Events',
						'category' => 'events',
						'dontShowMore' => true,
						'postIds' => $postIds
					));
			}
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>