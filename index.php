<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">
			<section>
				<div id='carousel'>
					<a href='#/carousel1'><div id='slide1' class='slide'></div></a>
				</div>
			</section>
			
			<section id='latestMessageSection' class='clear cap'>
				<div id='latestMessage' class='left'>
					<div>Latest</div>
					<div>Message</div>
				</div>
				<div id='date' class='left'>
					<div>May</div>
					<div>26</div>
				</div>
				<div id='sermonTitle' class='left'>
					<div>How to be a Man - Part One</div>
					<div>Pastor Matt Zwitt</div>
				</div>
				<div id='slides' class='right button'>
					Slides
				</div>
				<div id='download' class='right button'>
					Download
				</div>
				<div id='listen' class='right button'>
					Listen
				</div>
			</section>
			
			<section id='boxes' class='clear'>
				<div id='resources' class='boxDiv'>
					<a href='resources'>
						<div class='box'></div>
					</a>
				</div>
				<div id='events' class='boxDiv'>
					<a href='events'>
						<div class='box'></div>
					</a>
				</div>
				<div id='location' class='boxDiv'>
					<a href='location'>
						<div class='box'></div>
					</a>
				</div>
				<div id='contact' class='boxDiv'>
					<a href='contact'>
						<div class='box'></div>
					</a>
				</div>
			</section>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>