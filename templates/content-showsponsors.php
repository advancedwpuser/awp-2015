<?php
  $showsponsors = get_field('show_sponsors');
  if($showsponsors == 'yes'): ?>

  <div class="container wrap">
    <div class="content row">
  <?php
    $args = array( 'post_type' => 'awp_sponsor', 'posts_per_page' => -1 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
      if( has_term('featured', 'Sponsor_Cat')) { ?>
        <h2>AWP Sponsors</h2>
        <?php
        $imageid = get_post_thumbnail_id();
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          echo '<figure class="id-' . $imageid . ' sponsor">';
          echo '<a href="' . get_permalink() . '">';
          the_post_thumbnail('sponsor-small');
          echo '</a></figure>';
        }
      }
    endwhile;
    ?>
  </div>
</div>
  <?php
  endif;
?>
