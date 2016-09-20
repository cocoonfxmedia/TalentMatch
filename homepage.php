<?php
/*
Template Name: homepage
 *

 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<div class="row">
<section id="introduction">
<div class="wrapper">
		<div class="small-12 medium-12 large-8 columns">	
        <div class="video"> <?php echo do_shortcode('[layerslider id="1"]'); ?></div>
		</div>

		<div class="small-12 medium-12 large-4 columns">
        <div class="text"><h2><?php the_title(); ?></h2><?php the_excerpt(); ?>
		<p class="read-more"><a href="https://www.talentmatchstaffs.org.uk/talent-match-support/">[Read More..]</a></p></div>
		</div>
</div>
</section>
</div>


<div class="row">
<section id="search">
<div class="wrapper">
		<div class="small-12 medium-12 large-12 columns">
		<div class="box_1">
		<form method="GET" action="talent-match-jobs">
  		<p class="searchp">
        <img src="https://www.talentmatchstaffs.org.uk/wp-content/uploads/jobSearch.png">
    	<label for="keywords">Keywords</label>
    	<input class="search-field" type="text" id="search_keywords" name="search_keywords" placeholder="e.g. Marketing Assistant" />
  		</p>
  		<p class="searchp">
    	<label for="keywords">Location</label>
    	<input class="search-field" type="text" id="search_location" name="search_location" placeholder="e.g. Lichfield"/>
  		</p>
  		<p class="searchq">
		<label for="keywords">&nbsp</label>
    	<input class="search-submit" type="submit" value="Search" />
  		</p>
		</form>
		</div>
		</div>
</div>   
</section>
</div>



<div class="row">
<section id="highlight">  
<div class="wrapper">

		<div class="small-12 medium-4 large-4 columns">
        <div class="media_1">
        <?php query_posts("page_id=10"); while ( have_posts() ) : the_post()?>
        <?php the_post_thumbnail('resource'); ?>
        <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        <?php the_excerpt(); ?>   
        <?php endwhile; wp_reset_query();?>  
        </div>
        </div>

		<div class="small-6 medium-4 large-4 columns">                       
        <div class="media_1">  <?php query_posts("page_id=14"); while ( have_posts() ) : the_post()?>
		<?php the_post_thumbnail('resource'); ?>
        <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        <?php endwhile; wp_reset_query();?>  
        </div>
        </div>

		<div class="small-6 medium-4 large-4 columns"> 
        <div class="media_3">  
		<h2 class="m3h2">Latest Blog</h2>
		<?php $my_query = new WP_Query('category_name=blog&posts_per_page=3');?>
        <?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
		<?php the_post_thumbnail(); ?>
        <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        <?php the_excerpt(); ?><div id="post-<?php the_title(); ?>"> </div>
        <div class="scroller"><a href="#post-<?php the_title(); ?>">Click here to scroll down to read more</a></div>
        <?php endwhile; wp_reset_query();?>       
        </div>
        </div>

</div>
</section>
</div>



<section id="featured">
<div class="row">
<div class="wrapper">

		<div class="small-12 medium-8 large-8 columns"> 
        <div class="featurePost"> 
        
       <img width="408" src="https://www.talentmatchstaffs.org.uk/wp-content/uploads/Picture1.png">     
		<h2><a href="https://www.talentmatchstaffs.org.uk/employers/">Employer Engagement</a></h2>
    	<p>Talent Match works with young people to get them into employment but half that job is working with employers to help them get great staff. The work that Talent Match does in finding employers and brokering a good recruitment experience, for employer and future employee, is one of the highlights of the Talent Match programme. <br/>
Your business could be part of the solution to youth unemployment in your area. </p>
 
        <p class="read-more"><a href="https://www.talentmatchstaffs.org.uk/employers/">[Read More]</a></p>
        </div>
        </div>

		<div class="small-12 medium-4 large-4 columns">
        <div class="rightCol">
			<h2>Case Studies</h2>
			<?php $my_query = new WP_Query('category_name=case-studies&posts_per_page=1');?>
			<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
			<?php the_post_thumbnail('resource'); ?>
 			<h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>

     		<?php the_excerpt(); ?>
            
            
  			<?php endwhile; wp_reset_query();?>  
       	</div>
        
        <div class="RIGHTCol alt">
            <img src="https://www.talentmatchstaffs.org.uk/wp-content/uploads/affiliateLinksc.png">
            <img src="https://www.talentmatchstaffs.org.uk/wp-content/uploads/affiliateLinksb.png">
            <img src="https://www.talentmatchstaffs.org.uk/wp-content/uploads/affiliateLinksa.png">
        </div>

        </div>        
</div>        
</div>
</section>


<?php endwhile; ?>
<?php

get_footer();