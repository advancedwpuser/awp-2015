<?php
/**
 * The Template for displaying all single posts.
 *
 * @package foundation5_s
 */

get_header(); ?>

	<div class="row">
		<div class="columns">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php foundation5_s_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>