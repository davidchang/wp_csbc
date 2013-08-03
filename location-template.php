<?php
/**
 * Template Name: Location Template
 *
 * @package WordPress
 * @subpackage CSBC_Custom
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<style>
	#mapHolder {
		margin-top: 15px;
		height: 250px;
	}
	.locationSection h1 {
		font-size: 2.5em;
		margin-bottom: 10px;
	}
	.site-content {
		margin-top: 0px;
	}
	.locationSection section {
		margin-bottom: 35px;
	}
	.locationSection section div, .locationSection section table {
		font-size: 1.3em;
		line-height: 1.3em;
	}
	.locationSection table {
		margin: 15px 0px;
	}
	.locationSection td {
		padding: 8px 8px 8px 0px;
	}
	.locationSection td:last-child {
		padding-left: 25px;
	}
</style>

	<div id="primary" class="site-content">
		<div id="content" role="main" class='locationSection'>
			<section>
				<h1>When do we meet?</h1>
				<div>We meet throughout the week in different Bible studies (see more about connecting), but our main services consist of:</div>
				<table>
					<tbody>
						<tr>
							<td>Sunday Bible Study:</td>
							<td>10:00am</td>
						</tr>
						<tr>
							<td>Sunday Worship Service:</td>
							<td>11:15am</td>
						</tr>
						<tr>
							<td>Friday Worship/Training:</td>
							<td>7:00pm</td>
						</tr>
					</tbody>
				</table>
				<div>Need a ride? We'd be more than happy to pick you up. Email us at rides@csbc.com</div>
			</section>
			<section>
				<h1>Where are we located?</h1>

				<div>925 S King St, Seattle, WA 98104 (<a href='https://maps.google.com/maps?ie=UTF8&amp;q=chinese+southern+baptist+church&amp;fb=1&amp;gl=us&amp;hq=chinese+southern+baptist+church&amp;hnear=0x54900cad2000ee23:0x5e0390eac5d804f2,Redmond,+WA&amp;cid=0,0,1748769979544881284&amp;ll=47.598255,-122.31982&amp;spn=0.006295,0.006295&amp;t=h&amp;iwloc=A&amp;source=embed'>Get Directions</a>)</div>

				<div id="mapHolder">
					<iframe style="overflow: hidden; height: 100%; width: 100%;" src="https://maps.google.com/maps?ie=UTF8&amp;q=chinese+southern+baptist+church&amp;fb=1&amp;gl=us&amp;hq=chinese+southern+baptist+church&amp;hnear=0x54900cad2000ee23:0x5e0390eac5d804f2,Redmond,+WA&amp;cid=0,0,1748769979544881284&amp;t=m&amp;z=16&amp;iwloc=A&amp;output=embed&amp;iwloc=near" height="100%" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
				</div>
			</section>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>