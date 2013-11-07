<?php
/**
 * Template Name: Connect Template
 *
 * @package WordPress
 * @subpackage CSBC_Custom
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content connectTemplate">
		<div id="content" role="main" class='pageSection clear'>

			<div id='stickyAnchor'></div>
			<section id='connectNav' class='clear'>
				<ul>
					<li><a href='#girlsGroup'>Girls Group</a></li>
					<li><a href='#guysGroup'>Guys Group</a></li>
					<li><a href='#prayerGroup'>Prayer Group</a></li>
					<li><a href='#marriageGroup'>Marriage Group</a></li>
					<li><a href='#exeJesus'>ExeJesus</a></li>
				</ul>
			</section>

			<div class='groupAnchor' id='girlsGroup'></div>
			<section class='mediaBox clear'>
				<div class='media'>
					<img src="/english/wp-content/uploads/2013/10/GirlsGroup_600x326.jpg"/>
				</div>
				<div class='description'>
					<header>
						<div>Girls Group</div>
						<div>When: Every Other Wednesday</div>
						<div>6:30pm</div>
						<div>Where: TBD</div>
						<div>For more information, please contact</div>
						<div>Suzi Chang</div>
						<div>girlsgroup@csbcseattle.org</div>
						<div></div>
					</header>
					<section>
						Current Book Study: <i>Breaking Free</i> by Beth Moore
					</section>
				</div>
			</section>

			<div class='groupAnchor' id='guysGroup'></div>
			<section class='mediaBox clear'>
				<div class='media'>
					<img src="/english/wp-content/uploads/2013/10/GuysGroup_600x326.jpg"/>
				</div>
				<div class='description'>
					<header>
						<div>Guys Group</div>
						<div>When: Every Other Wednesday</div>
						<div>6:30pm</div>
						<div>Where: TBD</div>
						<div>For more information, please contact</div>
						<div>Matt Zwitt</div>
						<div>pastormatt@csbcseattle.org</div>
						<div>251-421-4157</div>
					</header>
					<section>
						Current Book Study: <i>When I Don’t Desire God</i> by John Piper
					</section>
				</div>
			</section>

			<div class='groupAnchor' id='prayerGroup'></div>
			<section class='mediaBox clear'>
				<div class='media'>
					<img src="/english/wp-content/uploads/2013/10/PrayerGroup_600x326.jpg"/>
				</div>
				<div class='description'>
					<header>
						<div>Prayer Group</div>
						<div>When: Every Other Monday</div>
						<div>6:30pm - 7:30pm</div>
						<div>Where: CSBC</div>
						<div>For more information, please contact</div>
						<div>Matt Zwitt</div>
						<div>pastormatt@csbcseattle.org</div>
						<div>251-421-4157</div>
					</header>
					<section>
						Intentional Corporate Prayer
					</section>
				</div>
			</section>

			<div class='groupAnchor' id='marriageGroup'></div>
			<section class='mediaBox clear'>
				<div class='media'>
					<img src="/english/wp-content/uploads/2013/10/MarriageGroup_600x326.jpg"/>
				</div>
				<div class='description'>
					<header>
						<div>Marriage Group</div>
						<div>When: Every Other Monday</div>
						<div>6:30pm</div>
						<div>Where: CSBC</div>
						<div>For more information, please contact</div>
						<div>Matt Zwitt</div>
						<div>pastormatt@csbcseattle.org</div>
						<div>251-421-4157</div>
					</header>
					<section>
						Current Book Study: <i>Hole in our Holiness</i> by Kevin DeYoung
					</section>
				</div>
			</section>

			<div class='groupAnchor' id='exeJesus'></div>
			<section class='mediaBox clear'>
				<div class='media'>
					<img src="/english/wp-content/uploads/2013/10/Exejesus_600x326.jpg"/>
				</div>
				<div class='description'>
					<header>
						<div>exeJesus</div>
						<div>When: Monthly on Thursdays</div>
						<div>6:30pm</div>
						<div>Where: Pastor Matt's Home</div>
						<div>For more information, please contact</div>
						<div>Matt Zwitt</div>
						<div>pastormatt@csbcseattle.org</div>
						<div>251-421-4157</div>
					</header>
					<section>
						In-depth study of Ephesians
					</section>
				</div>
			</section>

		</div><!-- #content -->
	</div><!-- #primary -->


	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>
		function sticky_relocate() {
		  var window_top = $(window).scrollTop();
		  var div_top = $('#stickyAnchor').offset().top - 28;
		  if (window_top > div_top) {
		    $('#connectNav').addClass('stick').css('width', $('#content').width());
		    $('#stickyAnchor').css('height', $('#connectNav').height() + 20);
		  } else {
		    $('#connectNav').removeClass('stick');
		    $('#stickyAnchor').css('height', 0);
		  }
		}

		$(function() {
		  $(window).scroll(sticky_relocate);
		  sticky_relocate();
		});
	</script>	

<?php get_footer(); ?>