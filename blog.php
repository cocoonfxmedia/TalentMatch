<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="main">
<div class="row">
<div class="wrapper">

<div class="small-12 medium-8 large-8 columns">
<div class="leftCol">
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

               
		<?php $my_query = new WP_Query('category_name=blog');?>
		<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
		 <div class="caseExcerpt">
                <h4><?php the_title(); ?></h4>
		
		<?php the_excerpt(); ?>
                 </div>
		<?php endwhile; wp_reset_postdata();?>
               
		</article>

</div>
</div>


<?php get_sidebar();?>
</div><!---WRAPPERCLOSE--->
</div>
</div>

<?php endwhile; ?>

<?php get_footer();?>