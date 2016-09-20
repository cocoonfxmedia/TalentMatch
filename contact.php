<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="main">
<div class="row">
<div class="wrapper"> 


<div class="wrapper">
<div class="small-12 medium-12 large-12 columns">  
	<div class="leftCol contact">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

		</article>

	</div>
	</div>



</div><!----WRAPPERCLOSE--->
</div>
</div>

<?php endwhile; ?>
<?php get_footer();?>