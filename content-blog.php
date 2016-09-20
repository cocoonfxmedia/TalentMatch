<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="main">
<div class="row">


<div class="small-12 medium-8 large-8 columns">
	<div class="leftCol">
	<h1><?php the_title(); ?></h1>
       
<?php the_content(); ?>
  
  </div>
</div>





<?php get_sidebar('pages');?>




</div><!---WRAPPERCLOSE--->

</div>

</article>
