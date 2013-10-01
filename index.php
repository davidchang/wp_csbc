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
       <?php echo do_shortcode("[metaslider id=1468]"); ?>
     </section>

     <?php
     getPosts('sermon', 1); while (have_posts()) : the_post(); ?>
     
     <section id='latestMessageSection' class='clear cap'>
       <div id='latestMessage' class='left'>
         <div>Latest</div>
         <div>Message</div>
       </div>
       <div id='date' class='left'>
         <?php $date = get_the_date('M j'); $datePieces = explode(' ', $date); ?>
         <div><?php echo $datePieces[0]; ?></div>
         <div><?php echo $datePieces[1]; ?></div>
       </div>
       <div id='sermonTitle' class='left'>
         <div><?php the_title(); ?></div>
         <div>Pastor Matt Zwitt</div>
       </div>
       <div class='right button'>
         <a href='<?php the_permalink() ?>'>Watch</a>
       </div>
       <div class='right button'>
         <a href='<?php the_permalink() ?>'>Listen</a>
       </div>
     </section>

     <?php endwhile; ?>
     
     <section class='boxHolder'>
        <div class='clear'>
          <div id='resourcesBox'><a href='<?php echo getRootURL(); ?>/resources'>Resources</a></div>
          <div id='eventsBox'><a href='<?php echo getRootURL(); ?>/events'>News & Events</a></div>
          <div id='locationBox'><a href='<?php echo getRootURL(); ?>/visit'>Visit</a></div>
          <div id='contactBox'><a href='<?php echo getRootURL(); ?>/connect'>Contact</a></div>
        </div>
      </section>

   </div><!-- #content -->
 </div><!-- #primary -->

<?php get_footer(); ?>