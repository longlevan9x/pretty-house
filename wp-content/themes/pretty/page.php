<?php get_header(); ?>
<?php get_template_part('page-title') ?>
<div class="light-wrapper">
    <div class="container inner">
      <div class="portfolio-grid detailed col3">
        <div class="isotope-filter button-group">
          <ul>
            <li><a class="button is-checked" data-filter="*">All</a></li>
            <?php $categories = get_categories(); 
            ?>
            <?php foreach ($categories as $key => $category): ?>
              <li><a href="<?php echo get_category_link($category->term_id); ?>" class="button" data-filter=""><?php echo $category->name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="clearfix"></div>
        <?php get_template_part('content', 'list-product') ?>
        
      </div>
      <!--/.portfolio-grid --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
<?php get_footer(); ?>