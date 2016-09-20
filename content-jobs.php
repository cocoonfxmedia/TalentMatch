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
<h1><?php the_title(); ?></h1>
       
<?php the_content(); ?>

	</div>

</div><!---WRAPPERCLOSE--->

</div>

</article>
