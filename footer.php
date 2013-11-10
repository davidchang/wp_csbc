<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->

	<footer id='footer'>
		<h3>Gathering Times</h3>
		<div>
			Sunday Bible Study at 10:00am
		</div>
		<div>
			Sunday Worship Service at 11:15am
		</div>
		<div>
			Friday Worship/Training at 7:00pm
		</div>

		<h3 class='someMarginTop'>Address</h3>
		<div>925 S King St, Seattle, WA 98104</div>
	</footer>

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42988208-1', 'csbcseattle.org');
  ga('send', 'pageview');
</script>

<script>
function addEvent(element, evnt, funct){
  if (element.attachEvent)
   return element.attachEvent('on'+evnt, funct);
  else
   return element.addEventListener(evnt, funct, false);
}

// for a responsive header
addEvent(
    document.getElementById('menuContainer'),
    'click',
    function () {
    	var div = document.getElementById('mobileMenu');
    	div.style.display = (div.style.display === 'none' || !div.style.display) ? 'block' : 'none';
    }
);
</script>

</body>
</html>