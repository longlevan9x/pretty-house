<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php get_template_part('page-title') ?>
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-8">
          <h2>Contact Us</h2>
          <p></p>
          <div class="divide10"></div>
          <?= get_template_part('contact-mail'); ?>
          
        </div>
        <!--/column -->
        
        <aside class="col-sm-4 sidebar">
          <div class="sidebox widget">
            <address>
            <?= html_entity_decode(Helpers::getAddress()); ?>
            </address>
          </div>
          <!-- /.widget --> 
          
        </aside>
        <!--/column --> 
        
      </div>
      <!--/.row --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper --> 
 <?php get_footer(); ?>