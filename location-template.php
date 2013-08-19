<?php
/**
 * Template Name: Location Template
 *
 * @package WordPress
 * @subpackage CSBC_Custom
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content locationTemplate">
		<div id="content" role="main" class='clear'>
			<section class='oneHalf left'>

				<div id="mapHolder">
					<iframe style="overflow: hidden; height: 100%; width: 100%;" src="https://maps.google.com/maps?ie=UTF8&amp;q=chinese+southern+baptist+church&amp;fb=1&amp;gl=us&amp;hq=chinese+southern+baptist+church&amp;hnear=0x54900cad2000ee23:0x5e0390eac5d804f2,Redmond,+WA&amp;cid=0,0,1748769979544881284&amp;t=m&amp;z=16&amp;iwloc=A&amp;output=embed&amp;iwloc=near" height="100%" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
				</div>
				<section class='info'>
					<h3>Contact Info</h3>
					<div>Address: 925 S King St, Seattle, WA 98104
						<a href='https://maps.google.com/maps?ie=UTF8&amp;q=chinese+southern+baptist+church&amp;fb=1&amp;gl=us&amp;hq=chinese+southern+baptist+church&amp;hnear=0x54900cad2000ee23:0x5e0390eac5d804f2,Redmond,+WA&amp;cid=0,0,1748769979544881284&amp;ll=47.598255,-122.31982&amp;spn=0.006295,0.006295&amp;t=h&amp;iwloc=A&amp;source=embed'>Directions</a>
					</div>
					<div>Telephone: (513) 549-0632</div>

					<h3>Gathering Times</h3>
					<div>
						Sunday at 10:00am and 11:15am
					</div>
					<div>
						Friday at 7:00pm
					</div>
				</section>
			</section>
			<section class='oneHalf right'>
				<h1>Send us a message.</h1>
				<form class='clear'>
					<input type='text' name='name' placeholder='Name'/>
					<input type='text' name='email' placeholder='Email'/>
					<textarea placeholder='Message'></textarea>
					<button>Send Message</button>
				</form>
			</section>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>