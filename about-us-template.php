<?php
/**
 * Template Name: About Us Template
 *
 * @package WordPress
 * @subpackage CSBC_Custom
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<?php $siteurl = get_option("siteurl"); ?>

	<div id="primary" class="site-content aboutTemplate">
		<div id="content" role="main">
			<section class='mediaBox clear'>
				<div class='media youtubeVideo'>
					<iframe src="//www.youtube.com/embed/e4t7ovZTqR4" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class='description'>
					We are the English Speaking Ministry of Chinese Southern Baptist Church. We believe that Jesus Christ is the way, the truth, and the life; further, we affirm that Jesus died on the cross for the sins of the world and only through believing and surrendering to Him can a person receive salvation. We strive to submit to the authority of the Bible in all our ministries. Our primary goal is to make disciples of Jesus Christ who are passionate for His glory. Our mission is to spread the gospel to all nations. (See <a href='<?php echo $siteurl; ?>/beliefs'>Beliefs</a>)
				</div>
			</section>

			<section id='bios' class='clear'>
				<h1 class='bigAndBordered'>Pastors</h1>
				<section class='oneHalf left'>
					<div>
						<img src="/<?php echo get_url_prefix(); ?>/wp-content/uploads/2013/10/About_MattZwitt_smush_920x400.jpg" alt="Matt Zwitt">
					</div>
					<h1>Matthew Zwitt</h1>
					<h2>LEAD TEACHING PASTOR</h2>
					<div class='bioDescription'>
						Pastor Matthew Zwitt is originally from Mobile, AL. He and his wife Lauren were married in 2008, and have four sons: Abraham (2009) Josiah (2010), Moses (2011), and Ezra (2013). He graduated with his Bachelors of Arts in Christian Ministry from Leavell College in New Orleans, LA in 2008 and graduated from New Orleans Baptist Theological Seminary with his Master of Divinity in 2011. He was Licensed in 2010 and Ordained in 2011 by First Baptist Lacombe. Pastor Matt has been serving in ministry since 2005, as a College Minister, Preacher, and Pastoral Intern. In June 2011 God called Matt to the city of Seattle to serve as English Minister of CSBC. His passion is to teach the Word of God, disciple believers, and evangelize the lost.
					</div>
				</section>

				<section class='oneHalf right'>
					<div>
						<img src="/<?php echo get_url_prefix(); ?>/wp-content/uploads/2013/10/About_TimShepard_smush_920x400.jpg" alt="Tim Shepard">
					</div>
					<h1>Tim Shepard</h1>
					<h2>YOUTH PASTOR</h2>
					<div class='bioDescription'>
						Bio Coming Soon
					</div>
				</section>
			</section>

			<section class='boxHolder'>
				<h1 class='bigAndBordered'>Video Testimonies</h1>
				<div class='clear'>
					<?php
					getPosts('video testimonies', 4);

					while (have_posts()) : the_post();
						$custom_fields = get_post_custom();
						echo getPostBox('', 'F j, Y', array(
							'url' => 'http://www.youtube.com/watch?v='.$custom_fields['youtube'][0],
							'new_page' => true
						));
					endwhile; ?>
				</div>
			</section>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>