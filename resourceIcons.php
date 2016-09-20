<?php
/*
Template Name: Resource Icons
 *

 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>



<section id="highlight"> 
<div class="row"> 
    <div class="wrapper">

<div class="small-12 medium-6 large-3 columns">
      <a href="https://www.talentmatchstaffs.org.uk/talent-match-support/">  <div class="media_2">  <?php query_posts("page_id=137"); while ( have_posts() ) : the_post()?>
		<?php the_post_thumbnail('resource'); ?>
        <h2><?php echo get_the_title(); ?></h2>
        <p class="read-more-services">[Read More..]</p>
        <?php endwhile; wp_reset_query();?>  
        </div></a>
        </div>

<div class="small-12 medium-6 large-3 columns">        
     <a href="https://www.talentmatchstaffs.org.uk/join-the-youth-action-team/">     <div class="media_2">  <?php query_posts("page_id=145"); while ( have_posts() ) : the_post()?>
		<?php the_post_thumbnail('resource'); ?>
        <h2><?php echo get_the_title(); ?></h2>
	<p class="read-more-services">[Read More..]</p>
        <?php endwhile; wp_reset_query();?>  
         </div></a>
        </div>

<div class="small-12 medium-6 large-3 columns">
    <a href="https://www.talentmatchstaffs.org.uk/become-a-mentor/">    <div class="media_2">  <?php query_posts("page_id=147"); while ( have_posts() ) : the_post()?>
		<?php the_post_thumbnail('resource'); ?>
        <h2><?php echo get_the_title(); ?></h2>
<p class="read-more-services">[Read More..]</p>
        <?php endwhile; wp_reset_query();?>  
        </div></a>
        </div>

<div class="small-12 medium-6 large-3 columns">
       <a href="https://www.talentmatchstaffs.org.uk/resources/"> <div class="media_2">  <?php query_posts("page_id=10"); while ( have_posts() ) : the_post()?>
		<?php the_post_thumbnail('resource'); ?>
        <h2><?php echo get_the_title(); ?></h2>
	<p class="read-more-services">[Read More..]</p>
        <?php endwhile; wp_reset_query();?>  
        </div></a>
        </div>
</div>
</div>
</section>

<section id="highlight"> 
<div class="row"> 
    <div class="wrapper">

<div class="small-12 medium-6 large-3 columns">
      <a href="https://www.talentmatchstaffs.org.uk/events/"><div class="media_2">  
		<img src="https://www.talentmatchstaffs.org.uk/wp-content/uploads/eventsT.png">
        <h2>Events</h2>
	<p class="read-more-services">[Read More..]</p>
          </div> </a>
        </div>

<div class="small-12 medium-6 large-3 columns">        
    <a href="https://www.talentmatchstaffs.org.uk/jobs-opportunities/">    <div class="media_2">  <?php query_posts("page_id=67"); while ( have_posts() ) : the_post()?>
		<?php the_post_thumbnail('resource'); ?>
        <h2><?php echo get_the_title(); ?></h2>
	<p class="read-more-services">[Read More..]</p>
        <?php endwhile; wp_reset_query();?>  
        </div></a>
        </div>

<div class="small-12 medium-6 large-3 columns">
      <a href="https://www.talentmatchstaffs.org.uk/so-what-are-you-entitled-to/">  <div class="media_2">  <?php query_posts("page_id=14"); while ( have_posts() ) : the_post()?>
		<?php the_post_thumbnail('resource'); ?>
        <h2><?php echo get_the_title(); ?></h2>
	<p class="read-more-services">[Read More..]</p>
        <?php endwhile; wp_reset_query();?>  
          </div></a>
        </div>

<div class="small-12 medium-6 large-3 columns">
   <a href="https://www.talentmatchstaffs.org.uk/case-studies/">     <div class="media_2">  <?php query_posts("page_id=16"); while ( have_posts() ) : the_post()?>
		<?php the_post_thumbnail('resource'); ?>
  <h2><?php echo get_the_title(); ?></h2>
    <p class="read-more-services">[Read More..]</p>
        <?php endwhile; wp_reset_query();?>  
        </div></a>
        </div>

    </div>
    </div>
</section>






<?php endwhile; ?>
<?php

get_footer();