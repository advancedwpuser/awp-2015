<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package foundation5_s
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
        wp_title( '|', true, 'right' );
        // Add the blog name.
        bloginfo( 'name' );
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
          echo " | $site_description";
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
          echo ' | ' . sprintf( __( 'Page %s', 'underscoresme' ), max( $paged, $page ) );
    ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'before' ); ?>

<div class="herologomenu">
	<div class="titlebar">
        <div class="row">
            <div class="logo small-4 columns">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advanced-wordpress-logo.png" alt="Advanced WordPress logo">
                </a>
            </div>
            <div class="mainmenu small-8 columns">
                <nav>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => '', 'items_wrap' => '<ul id="%1$s" class="inline-list %2$s">%3$s</ul>', 'fallback_cb' => 'default_menu' ) ); ?>
                </nav>
            </div>
        </div>
	</div>
</div>
