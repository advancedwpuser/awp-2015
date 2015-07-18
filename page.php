<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package foundation5_s
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
		<footer class="content-footer">
			<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'social', 'menu' => '', 'items_wrap' => '<ul id="%1$s" class="inline-list %2$s">%3$s</ul>', 'fallback_cb' => 'social_menu' ) ); ?>
			</nav>
			<h4>&copy; <?php echo date("Y") ?> AdvancedWP.org</h4></footer>
	</div>


<?php get_footer(); ?>
