<?php
/**
 * Renders the styles from the Theme Customizer. This template is included
 * in `header.php`.
 *
 * @package    Acme
 */
?>
<!-- customizer -->

<style type="text/css">
body {
	<?php if ( '' != get_theme_mod( 'awp16_background_image' )  ) { ?>
		background-image:      url( <?php echo get_theme_mod( 'awp16_background_image' ); ?> );
		background-repeat:     repeat;
		background-attachment: fixed;
	<?php } else { ?>
		background: 		   <?php echo get_theme_mod( 'awp16_background_color' ); ?>;
	<?php } ?>
}
</style>
<!-- /customizer -->
