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
            <strong>Morello, Inc.</strong><br>
            Moon Street Light Avenue, 14/05 <br>
            Jupiter, JP 80630<br>
            <abbr title="Phone">P:</abbr> 00 (123) 456 78 90 <br>
            <abbr title="Email">E:</abbr> <a href="mailto:#">first.last@email.com</a>
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