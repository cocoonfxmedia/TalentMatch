<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="main">

<div class="row"> 


<div class="small-12 medium-12 large-12 columns">
	<div class="leftCol meet">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

		</article>
	</div>
</div>
</div> <!---WRAPPERCLOSE--->

</div>

<?php endwhile; ?>
<?php get_footer();?>