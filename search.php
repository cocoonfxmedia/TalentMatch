<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="main">
<div class="row">
<div class="wrapper">



<div class="small-12 medium-8 large-8 columns">
<div class="leftCol">
	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			
				<h1><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
			
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

					
						get_template_part( 'content', get_post_format() );

					endwhile;
					
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

					endif;
			?>
		</div><!-- #content -->
	</section><!-- #primary -->
</div>
</div>






<?php
get_sidebar( 'content' );
get_sidebar(); ?>


</div>
</div></div>
<?php
get_footer(); 

