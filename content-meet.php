<?php
/*
Template Name: Meet the team
*/
?>

<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="main">

<div class="row">

<div class="small-12 medium-12 large-12 columns">
<div class="leftCol meet">
	
 
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		


</div>

</div>


</div>

<?php endwhile; ?>
<?php get_footer();?>