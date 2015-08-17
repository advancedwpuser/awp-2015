<footer class="content-info" role="contentinfo">
  <div class="container wrap">
    <div class="content row">
    <?php //dynamic_sidebar('sidebar-footer'); ?>
    <?php
      if (has_nav_menu('social_navigation')) :
        wp_nav_menu(['theme_location' => 'social_navigation', 'menu_class' => 'nav']);
      endif; ?>
    </div>
  </div>
</footer>
