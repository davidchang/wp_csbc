<?php
/**
 * Template Name: About Us Template
 *
 * @package WordPress
 * @subpackage CSBC_Custom
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<style>
	.aboutUsSection h1 {
		font-size: 2.5em;
		margin-bottom: 10px;
	}
	.site-content {
		margin-top: 0px;
	}
	.aboutUsSection section {
		margin-bottom: 35px;
	}
	.aboutUsSection p {
		margin: 10px 0px;
		font-size: 1.3em;
	}
</style>

<?php $siteurl = get_option("siteurl"); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main" class='aboutUsSection'>
			<section>
				<h1>Who we are:</h1>
				<p>We are the English Speaking Ministry of Chinese Southern Baptist Church.</p>
				<p>
					TODO: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</p>
			</section>

			<section>
				<h1>Our beliefs:</h1>
				<p>
					 We believe that Jesus Christ is the way, the truth, and the life; further, we affirm that Jesus died on the cross for the sins of the world and only through believing and surrendering to Him can a person receive salvation. We strive to submit to the authority of the Bible in all our ministries. Our primary goal is to make disciples of Jesus Christ who are passionate for His glory. Our mission is to spread the gospel to all nations.
				</p>
				<p>
					For a more formal outline of our beliefs, click <a href='<?php echo $siteurl; ?>/beliefs'>here</a>.
				</p>
			</section>

			<section>
				<h1>Get to know us:</h1>
				<p>
					TODO: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</p>
			</section>

			<section>
				<h1>How we got here:</h1>
				<p>Find out more about Pastor Matt <a href='<?php echo $siteurl; ?>/pastor-matt'>here</a></p>
				<p>
					TODO: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</p>
			</section>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>