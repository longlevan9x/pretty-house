<?php get_header(); ?>
<?php $sliders = get_posts(array( 'post_type' => 'slider')); ?>
  <div class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
      <ul>
        <?php foreach ($sliders as $key => $slider): ?>
          <li data-transition="fade"><img src="<?= get_image(get_the_post_thumbnail_url($slider->ID)); ?>" alt="">
            <div class="tp-caption large" data-x="480" data-hoffset="" data-y="center" data-voffset="-55" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap;"><?php echo get_the_title($slider->ID); ?></div>
            <div class="tp-caption medium" data-x="480" data-hoffset="" data-y="center" data-voffset="0" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap;"><?php echo $slider->post_content;  ?></div>
            <!-- <div class="tp-caption" data-x="482" data-hoffset="" data-y="center" data-voffset="['65','65','65','90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;"><a href="#" class="btn btn-large">Purchase Now</a></div> -->
          </li>
        <?php endforeach ?>        
      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
    </div>
    <!-- /.rev_slider --> 
  </div>
  <!-- /.light-wrapper -->
<?php echo get_template_part('content', 'product-detail'); ?>
<?php  $post_recents = wp_get_recent_posts(array( 'numberposts' => 9)); ?>
  <div class="light-wrapper">
    <div class="inner">
      <div class="container">
        <div class="section-title">
          <h2>Recent Products</h2>
        </div>
        <!-- /.section-title --> 
      </div>
      <!-- /.container -->
      
      <div class="carousel-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="owl-posts portfolio-carousel">
          <?php foreach ($post_recents as $key => $post_recent): ?>
            <div class="item post">
              <figure style="width: 422; height: 288px;"><img src="<?= get_image(get_the_post_thumbnail_url($post_recent['ID'])); ?>" alt="" style="width: 100%; height: 100%;" /></figure>
              <div class="post-content">
                <h3 class="post-title"><a href="<?php the_permalink($post_recent['ID']); ?>"><?= get_the_title($post_recent['ID']); ?></a></h3>
                <div class="meta"><span class="category"><?php the_category(', ', 0, $post_recent['ID']); ?></span></div>
                <!-- /.meta --> 
              </div>
              <!-- /.post-content --> 
            </div>
            <!-- /.post -->
          <?php endforeach ?>
        </div>
        <!-- /.portfolio-carousel --> 
      </div>
      <!-- /.carousel-wrapper --> 
    </div>
    <!-- /.inner --> 
  </div>
  <!-- /.light-wrapper -->    
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


  <div class="dark-wrapper">
    <div class="container inner">
      <div class="thin2 text-center">
        <div class="widget">
          <div class="section-title text-center">
            <h2>Contact Us</h2>
          </div>
          <!-- /.section-title -->
          <!-- <p>Maecenas faucibus molli interdum. Cras mattis consectetur purus sitor amet sed donec malesuada ullamcorper odio. Curabitur blandit tempus porttitor vollisky inceptos mollisestor.</p> -->
          <!-- <div class="divide10"></div> -->
          <ul class="info list-inline">
            <li><i class="ion-ios-location"></i>
              <p>Moonshine St. 14/05 Light City</p>
            </li>
            <li><i class="ion-android-mail"></i>
              <p><a href="mailto:hello@email.com" class="email-link">hello@email.com</a></p>
            </li>
            <li><i class="ion-headphone"></i>
              <p>00 (123) 456 78 90</p>
            </li>
          </ul>
          <!-- /.info -->
          <div class="divide20"></div>
          <ul class="social">
            <!-- <li> <a href="#"><i class="ion-social-rss"></i></a> </li> -->
            <li> <a href="#"><i class="ion-social-facebook"></i></a> </li>
            <li> <a href="#"><i class="ion-social-twitter"></i></a> </li>
            <li> <a href="#"><i class="ion-social-instagram"></i></a> </li>
            <!-- <li> <a href="#"><i class="ion-social-vimeo"></i></a> </li> -->
            <!-- <li> <a href="#"><i class="ion-social-whatsapp"></i></a> </li> -->
          </ul>
          <!--/.social --> 
        </div>
        <!-- .widget -->
        
        <div class="divide20"></div>
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
              <!--/column -->
              <!-- <div class="col-sm-6">
                <div class="form-field">
                  <label>
                    <input type="tel" name="tel" placeholder="Phone">
                  </label>
                </div>
                /.form-field 
              </div> -->
              <!--/column -->
              <!-- <div class="col-sm-6">
                <div class="form-field">
                  <label class="custom-select">
                    <select name="department" required="required">
                      <option value="">Select Department</option>
                      <option value="Sales">Sales</option>
                      <option value="Marketing">Marketing</option>
                      <option value="Support">Customer Support</option>
                      <option value="Other">Other</option>
                    </select>
                    <span>fake select handler</span> </label>
                </div>
                /.form-field 
              </div> -->
              <!--/column -->
              
              <div class="col-sm-12">
                <textarea name="message" placeholder="Type your message here..." required="required"></textarea>
                <input type="submit" class="btn btn-large" value="Submit Message" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                <!-- <footer class="notification-box"></footer> -->
              </div>
              <!--/column --> 
              
            </div>
            <!--/.row -->
            
          </form>
          <!--/.vanilla-form --> 
        </div>
        <!--/.form-container --> 
        
      </div>
      <!-- .thin2 --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.dark-wrapper --> 
  
</div>
<!-- /.content-wrapper -->
<?php get_footer(); ?>