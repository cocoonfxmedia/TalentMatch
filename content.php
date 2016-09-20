<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<?php
			endif;

			if ( is_single() ) :
				the_title( '<h1>', '</h1>' );
			else :
				the_title('<h1>', '</h1>'  );
			endif;
		?>

		
			<?php
				if ( 'post' == get_post_type() )
					twentyfourteen_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
			<?php
				endif;

				edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>
		
	

	<?php if ( is_search() ) : ?>
	 <div class="caseExcerpt">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
		 <div class="caseExcerpt">
	<?php the_excerpt(); ?>
                 </div>
	<?php endif; ?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
