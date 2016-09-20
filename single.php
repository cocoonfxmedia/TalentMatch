<?php get_header(); ?>

		
            <?php if (in_category('case-studies')) { ?>
		<?php while ( have_posts() ) : the_post();
		get_template_part( 'content-casestudy', get_post_format() );
		endwhile;?>
		<?php } ?>
            <?php if (!in_category('case-studies')) { ?>
		<?php while ( have_posts() ) : the_post();
		get_template_part( 'content-blog', get_post_format() );
		endwhile;?>
		<?php } ?>
 


<?php
get_footer();?>
