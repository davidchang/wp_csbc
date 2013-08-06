<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<style>
.archive-header {
	padding-top: 0px;
	margin-top: 0px;
	margin-bottom: 20px;
	border-bottom: 1px solid #CCC;
}
.archive-title {
	color: #444;
	font-size: 3em;
	text-transform: none;
	line-height: 1em;
}

#content h2 {
	font-size: 1.5em;
}
#content h2 a {
	text-decoration: none;
	color: #444;
}
#content h2 a:hover {
	text-decoration: underline;
}

#content .date {
	margin-top: 5px;
	font-size: 1.2em;
}
#content section {
	margin-bottom: 35px;
}
#content p {
	margin: 10px 0px;
	font-size: 1.3em;
	line-height: 1.3em;
}

#nav-below > div {
	font-size: 1.3em;
	margin-bottom: 7px;
}
#nav-below > div a {
	color: #444;
}

</style>

	<section id="primary">
		<div id="content" role="main">

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'twentytwelve' ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
					<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
				<section>
				  <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				  <div class='date'><?php the_date(); ?></div>
				  <?php the_content(); ?>
				</section>
			<?php
			endwhile;

			$html_id = esc_attr( $html_id );

			if ( $wp_query->max_num_pages > 1 ) : ?>
				<nav id="nav-below" class="navigation" role="navigation">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<div><?php next_posts_link( __( 'Older posts', 'twentytwelve' ) ); ?></div>
					<div><?php previous_posts_link( __( 'Newer posts', 'twentytwelve' ) ); ?></div>
				</nav><!-- #<?php echo $html_id; ?> .navigation -->
			<?php endif;
			?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>