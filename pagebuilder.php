<?php
/**
 * Template Name: Page Builder
 */

?>

    <?php while (have_posts()) : the_post(); ?>
      <?php
      // check if the flexible content field has rows of data
      if( have_rows('content_sections') ):

           // loop through the rows of data
          while ( have_rows('content_sections') ) : the_row();

              //Start Image Accent
              if( get_row_layout() == 'image_accent' ):

              	$bk_image = get_sub_field('background_image');
                $title_type = get_sub_field('title_type');
                $title_text = get_sub_field('title_text');
                $title_image = get_sub_field('title_image');
                $desc = get_sub_field('description');
                ?>

                <div class="wrap container-fluid accent" style="background-image: url('<?php echo $bk_image['url']?>'); background-size: cover; background-position: center;">
                    <?php if ($title_type == 'image') : ?>
                      <div class="content row title-image">
                        <img src="<?php echo $title_image['url'] ?>" alt="<?php echo $title_image['alt'] ?>" />
                        <p><?php echo $desc ?></p>
                      </div>
                    <?php else : ?>
                      <div class="content row title-text">
                        <h2><?php echo $title_text; ?></h2>
                        <p><?php echo $desc ?></p>
                      </div>
                    <?php endif; ?>
                  </div>

                <?php


              //Start Callout
              elseif( get_row_layout() == 'callout' ):

              	$text = get_sub_field('text');
                $color = get_sub_field('background_color');
                $custom = get_sub_field('custom_color');
                $icon = get_sub_field('icon');
                ?>
                <div class="wrap container-fluid callout <?php echo $color ; ?>" <?php if (!empty($custom)){
                  echo 'style="background-color:' . $custom . '"';
                }?> ><!--container-fluid -->
                <div class="content row">
                <?php
                echo '<p>' . $text . '</p>';
                echo '<img src="' . $icon['url']. '" />';
                ?>
              </div>
              </div><!--end container-fluid -->
              <?php
              //Start Accent Boxes
              elseif( get_row_layout() == 'accent_boxes' ):

                if( have_rows('boxes') ): ?>
                <div class="container wrap">
                  <div class="content row accent-boxes">

                <?php
               	// loop through the rows of data
                  while ( have_rows('boxes') ) : the_row();

                      // display a sub field value
                      $icon = get_sub_field('icon');
                      $text = get_sub_field('text');
                      $linktext = get_sub_field('link_text');
                      $linkurl = get_sub_field('link_url');
                      ?>
                      <div class="box">
                        <img src="<?php echo $icon['url']?>" class="icon" />
                        <p><?php echo $text; ?></p>
                        <footer>
                         <a href="<?php echo $linkurl; ?>"><?php echo $linktext; ?><img src="<?php echo AWP_Assets ;?>images/subnavigation-arrow.png" /></a>
                        </footer>
                      </div>

                      <?php

                  endwhile; ?>
              </div>
            </div>

              <?php
              else :
                  // no rows found
              endif; // end of Accent boxes

              //Start Editor
              elseif( get_row_layout() == 'editor' ): ?>

                <div class="container wrap">
                  <div class="content row editor">

                <?php
              	$editor = get_sub_field('editor');

                echo  $editor; ?>
              </div>
            </div>
              <?php
              // Start Gallery
              elseif( get_row_layout() == 'gallery' ): ?>

              <div class="container wrap">
                <div class="content row gallery">
                  <h2><?php echo get_sub_field('title'); ?></h2>
              <?php
              	$images = get_sub_field('gallery');

                  foreach( $images as $image ): ?>
                    <figure id="image-id-<?php echo $image['id']?>" class="gallery-img alignleft">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                      <?php if ( !empty($image['caption'])) : ?>
                      <figcaption><?php echo $image['caption']; ?></figcaption>
                    <?php endif; ?>
                  </figure>
                  <?php
                    endforeach; //end Gallery ?>

                </div>
              </div>

              <?php
              endif;

          endwhile;

      else :

          // no layouts found

      endif;
      ?>
    <?php endwhile; ?>

    <?php get_template_part('templates/content','showsponsors'); ?>

    <?php
      //do_action('get_footer');
      //get_template_part('templates/footer');
      //wp_footer();
    ?>
  </body>
</html>
