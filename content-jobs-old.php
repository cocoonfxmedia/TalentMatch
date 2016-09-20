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

<div class="wrapper">

	<div class="leftCol">

	<h1>Position: <?php the_title(); ?></h1>
        <h2>Overview</h2>
            <?php the_field('overview'); ?>
        <h2>Skills Required</h2>
        <?php the_field('skills_required'); ?>
        <h2>Detailed Role Description</h2>
<?php the_content(); ?>
        <h2>Days and times</h2>
          <?php the_field('days_and_time'); ?>
         <h2>Time Commitment</h2>
        <?php the_field('time_commitment'); ?>
        <h2>Training</h2>
        <?php the_field('training'); ?>
        <h2>Support and supervision</h2>
        <?php the_field('support'); ?>
        <h3>Job Expiry Date</h3>
        
 <?php the_field('expiry_date'); ?>  

	</div>

</div><!---WRAPPERCLOSE--->

</div>

</article>
