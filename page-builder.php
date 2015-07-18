<?php
/**
 * Template Name: Page Builder
 */

get_header(); ?>

	<div class="row content-area">
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
		<div class="entry-wrap">
		<div class="columns medium-8">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #main -->
		<?php get_sidebar(); ?>
		</div>
		<footer class="content-footer"><h4>&copy; <?php echo date("Y") ?> AdvancedWP.org</h4></footer>
	</div>


<?php get_footer(); ?>
