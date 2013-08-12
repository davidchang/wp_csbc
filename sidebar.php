<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<style>
	.smallerWidth {
		width: 25%;
		padding: 15px 20px;
		background-color: #EEE;
		border: 1px solid #CCC
	}
	#sidebar {
		margin: 0px;
	}
	#sidebar h1 {
		font-size: 1.8em;
	}
	#sidebar section {
		margin: 15px 0px;
	}
	#sidebar section h2 {
		font-weight: normal;
		line-height: 1.3em;
	}
	#sidebar .date {
		margin-top: 3px;
	}
	.nav-single > div {
		margin: 10px 0px;
	}
</style>

<div id='sidebar' class='right smallerWidth'>
	<?php

		function getPosts($type) {
			if($type == 'midweek')
				$cat = 8;
			else if($type == 'mini message')
				$cat = 7;
			else if($type == 'sermon')
				$cat = 11;

			if(!$cat)
				query_posts('posts_per_page=5');	
			else
				query_posts("cat=$cat&posts_per_page=5");
		}
	?>

	<div>
		<h1>Last 5 Sermons</h1>

		<?php
		getPosts('sermon');

		while (have_posts()) : the_post(); ?>

			<section>
			  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				  <?php the_date('m/d/Y', "<div class='date'>(", ')</div>'); ?>
			</section>

		<?php endwhile; ?>

	</div>

	<div>
		<h1>Last 5 Midweek Encouragements</h1>

		<div>

			<?php

			getPosts('midweek');

			while (have_posts()) : the_post(); ?>

				<section>
				  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				  <?php the_date('m/d/Y', "<div class='date'>(", ')</div>'); ?>
				</section>

			<?php endwhile; ?>

		</div>

	</div>

	<div>
		<h1>Last 5 Messages From the Pastor</h1>

		<div>

			<?php

			getPosts('mini message');

			while (have_posts()) : the_post(); ?>

				<section>
				  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				  <?php the_date('m/d/Y', "<div class='date'>(", ')</div>'); ?>
				</section>

			<?php endwhile; ?>

		</div>

	</div>
</div>