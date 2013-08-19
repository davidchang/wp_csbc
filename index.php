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

	<div id="primary" class='indexTemplate'>
   <div id="content" role="main">
     <section>
       <div id='carousel'>
         <a href='#/carousel1'><div id='slide1' class='slide active'></div></a>
         <a href='#/carousel2'><div id='slide2' class='slide'></div></a>
         <a href='#/carousel3'><div id='slide3' class='slide'></div></a>
         <a href='#/carousel4'><div id='slide4' class='slide'></div></a>
         <a href='#/carousel5'><div id='slide5' class='slide'></div></a>
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

     <section class='boxHolder'>
        <div class='clear'>
          <div id='resourcesBox'><a href='<?php echo $siteurl; ?>/resources'>Resources</a></div>
          <div id='eventsBox'><a href='<?php echo $siteurl; ?>/events'>News & Events</a></div>
          <div id='locationBox'><a href='<?php echo $siteurl; ?>/visit'>Location</a></div>
          <div id='contactBox'><a href='<?php echo $siteurl; ?>/connect'>Contact</a></div>
        </div>
      </section>

   </div><!-- #content -->
 </div><!-- #primary -->

 <script>
    var slides = document.querySelectorAll('.slide'),
      index = 0,
      interval = 5000,
      origClass = 'slide',
      activeClass = 'slide active';
    setInterval(function() {
      slides[index].className = origClass;
      index = (index + 1) % slides.length;
      slides[index].className = activeClass;
    }, interval);
 </script>

<?php get_footer(); ?>