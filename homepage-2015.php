<?php
/*
Template Name: homepage
 *

 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section id="introduction">
    <div class="wrapper">

        <div class="video"> <?php echo do_shortcode('[layerslider id="1"]'); ?></div>
        <div class="text"><h2><?php the_title(); ?></h2><?php the_excerpt(); ?>
<p class="read-more"><a href="https://www.talentmatchstaffs.org.uk/talent-match-support/">[Read More..]</a></p></div>
    </div>
</section>

<section id="search">
    <div class="wrapper">
        <!--<div class="box_1"><?php get_search_form(); ?></div>-->
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
    <input class="search-submit" type="submit" value="Search" />
  </p>
</form>
</div>

    </div>   
</section>

<section id="highlight">  
    <div class="wrapper">

        <div class="media_1">
        <?php query_posts("page_id=10"); while ( have_posts() ) : the_post()?>
        <?php the_post_thumbnail('resource'); ?>
        <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        <?php the_excerpt(); ?>   
        <?php endwhile; wp_reset_query();?>  
        </div>
        
        <div class="media_1">  <?php query_posts("page_id=14"); while ( have_posts() ) : the_post()?>
	<?php the_post_thumbnail('resource'); ?>
        <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        <?php endwhile; wp_reset_query();?>  
        </div>

        <div class="media_1">  <?php query_posts("page_id=16"); while ( have_posts() ) : the_post()?>
	<?php the_post_thumbnail('resource'); ?>
        <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        <?php endwhile; wp_reset_query();?>  
        </div>

    </div>
</section>


<section id="featured">
    <div class="wrapper">
        <div class="featurePost"> 
        
        <?php $my_query = new WP_Query('category_name=case-studies&posts_per_page=1');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
       <?php the_post_thumbnail('fPost'); ?>        
   <h2><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>

        <?php the_excerpt(); ?>
        <?php endwhile; wp_reset_query();?>  
        
        </div>
        <div class="rightCol">
            <h2>Sign Up to Talent Match</h2>
            <p>To find out more information on Talent Match please fill in the form below</p>
            <!-- Begin MailChimp Signup Form -->

<div id="mc_embed_signup">
<form action="//talentmatchstaffs.us8.list-manage.com/subscribe/post?u=5d7083c10e7d5becb83619f7e&amp;id=ea1c09ae28" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>

<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" placeholder="First Name" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" placeholder="Last Name"  name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" placeholder="Email Address*" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_5d7083c10e7d5becb83619f7e_ea1c09ae28" tabindex="-1" value=""></div>
    <div class="subButton"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
            
            
</div>
        
        <div class="rightCol alt">
            <img src="https://www.talentmatchstaffs.org.uk/wp-content/uploads/affiliateLinksc.png">
            <img src="https://www.talentmatchstaffs.org.uk/wp-content/uploads/affiliateLinksb.png">
            <img src="https://www.talentmatchstaffs.org.uk/wp-content/uploads/affiliateLinksa.png">
        </div>
        
        
    </div>
</section>

<?php endwhile; ?>
<?php

get_footer();