<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post -->

	<script>
		//fixed sidebar
		var $sidebar = document.getElementsByClassName('pageSidebar')[0];
		var sidebarTop = $sidebar.getBoundingClientRect().top - 15;
		window.onscroll = function() {
			if(document.body.scrollTop > sidebarTop) {
				$sidebar.classList.add('fixed');
			}
			else {
				$sidebar.classList.remove('fixed');
			}
		}
	</script>