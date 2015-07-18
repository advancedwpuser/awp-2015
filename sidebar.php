<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package foundation5_s
 */
?>


	<div class="columns medium-4 widget-area" role="complementary">

	<?php do_action( 'before_sidebar' ); ?>

		<div class="row">

		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="columns widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="columns widget">
				<h4 class="widget-title"><?php _e( 'Archives', 'foundation5_s' ); ?></h4>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="columns widget">
				<h4 class="widget-title"><?php _e( 'Meta', 'foundation5_s' ); ?></h4>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>

		</div>

	</div>
