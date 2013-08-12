<?php
/**
 * Template Name: Connect Template
 *
 * @package WordPress
 * @subpackage CSBC_Custom
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<style>
	.pageSection h1 {
		font-size: 2.5em;
		margin-bottom: 20px;
	}
	.pageSection h3 {
		line-height: 1.3em;
		font-size: 2em;
	}
	.setting {
		margin-bottom: 10px;
		font-style: italic;
	}
	.site-content {
		margin-top: 0px;
	}
	.pageSection section {
		margin-bottom: 35px;
	}
	.pageSection section div, .pageSection section table {
		font-size: 1.3em;
		line-height: 1.3em;
	}
	.halfWidth {
		width: 500px;
	}
	#recurringEvents {
		margin-right: 11px;
		border-right: 1px solid #CCC;
	}
	#moreInfo {
		margin-bottom: 15px;
		font-size: 1.2em;
		line-height: 1.2em;
		font-style: italic;
	}
</style>

	<div id="primary" class="site-content">
		<div id="content" role="main" class='pageSection clear'>
			<section id='recurringEvents' class='halfWidth left'>
				<h1>Recurring Events:</h1>
				<section id='moreInfo'>
					Need more information? Please email us at <a href="mailto:info@csbcseattle.org">info@csbcseattle.org</a>
				</section>
				<section id='guysGroup'>
					<h3>Guy's Group</h3>
					<div class='setting'>Every other Wednesday at 6:30pm</div>
					<div class='description'>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</section>

				<section>
					<h3>Girl's Group</h3>
					<div class='setting'>Every other Wednesday at 6:30pm</div>
					<div class='description'>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</section>

				<section>
					<h3>Prayer Group</h3>
					<div class='setting'>Every other Tuesday from 6:30pm - 7:30pm</div>
					<div class='description'>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</section>

				<section>
					<h3>Marriage Group</h3>
					<div class='setting'>Every other Monday at 6:30pm</div>
					<div class='description'>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</section>
				<section>
					<h3>ExeJesus</h3>
					<div class='setting'>Thursdays at 6:30pm before Food and Friend Night</div>
					<div class='description'>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</section>
			</section>
			<section class='halfWidth right'>
				<h1>Current Events:</h1>
				<iframe src="https://www.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=krucial206%40gmail.com&amp;color=%23182C57&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="100%" height="800" frameborder="0" scrolling="no"></iframe>
				<?php $siteurl = get_option("siteurl"); ?>
				<div class='marginTopFifteen'>Click <a href='<?php echo $siteurl; ?>/calendar'>here</a> for a full calendar</div>
			</section>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>