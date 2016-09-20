<?php
/**
 * The template for displaying all pages
 *
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>


<div class="main">
<div class="row">
<div class="wrapper"> 

<div class="small-12 medium-8 large-8 columns">
	<div class="leftCol">  
    		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</div>





<?php get_sidebar('pages');?>




</div> <!---WRAPPERCLOSE--->
</div>
</div>

<?php endwhile; ?>

<?php

get_footer();
