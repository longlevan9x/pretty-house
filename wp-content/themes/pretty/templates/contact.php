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
          <div class="form-container">
            <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate="novalidate">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="text" name="name" placeholder="Your name" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <!--/column -->
                <div class="col-sm-6">
                  <div class="form-field">
                    <label>
                      <input type="email" name="email" placeholder="Your e-mail" required="required">
                    </label>
                  </div>
                  <!--/.form-field --> 
                </div>
                <div class="col-sm-12">
                  <textarea name="message" placeholder="Type your message here..." required="required"></textarea>
                  <input type="submit" class="btn btn-large" value="Submit Message" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                  <footer class="notification-box"></footer>
                </div>
                <!--/column --> 
                
              </div>
              <!--/.row -->
              
            </form>
            <!--/.vanilla-form --> 
          </div>
          <!--/.form-container --> 
          
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