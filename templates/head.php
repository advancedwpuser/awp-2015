<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <?php //get_template_part( 'templates/customizer' ); ?>
  <script type="text/javascript">
  jQuery(document).ready(function( $ ) {
    $(".page-header h1").each(function(){
      $(this).text($(this).text().replace(/ /g, "_"));
    });
    $("h1.entry-title").each(function(){
      $(this).text($(this).text().replace(/ /g, "_"));
    });
  });
  </script>
</head>
