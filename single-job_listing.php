<?php
/*
Template Name: Single Job Listing
 *

 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="main">

<div class="wrapper">

	<div class="leftCol">
            
<h1><?php the_title(); ?></h1>
       
<?php the_content(); ?>

	</div>
<?php get_sidebar('pages');?>
</div><!---WRAPPERCLOSE--->

</div>

</article>
<?php endwhile; ?>
<?php

get_footer();