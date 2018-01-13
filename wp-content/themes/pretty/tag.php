<?php get_header(); ?>
<?php get_template_part('page-title') ?>
<div class="light-wrapper">
    <div class="container inner">
      <div class="portfolio-grid detailed col3">
        <div class="isotope-filter button-group">
        <?php get_template_part('content', 'list-product') ?>        
      </div>
      <!--/.portfolio-grid --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
<?php get_footer(); ?>