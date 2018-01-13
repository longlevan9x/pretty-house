<?php 
$args = 0;
$post = [];
if (is_single()) {
  while (have_posts()) {
    the_post();
  }
  $args = get_the_ID();
  $post = [get_post($args)];
}
else {
  $args = [
    'post_status' => 'publish',
    'ping_status' => 'open',
    'post_type' => 'post',
    'numberposts' => 1,
    'offset' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
  ];
  $post = get_posts($args);
}
?>
<?php if (isset($post,$post[0]) && !empty($post[0])): ?>
<?php
$galleries = Helpers::getAttachmentGalleries($post[0]->ID);
if (!is_single()) {
  if (count($galleries) > 4) {
    $galleries = array_slice($galleries, 0, 4);
  }
}
?>
  <div class="<?php echo is_single() ? "light" : 'inverse' ?>-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="tiles">
            <div class="items row row-offset-0 light-gallery">
              <?php foreach ($galleries as $key => $gallery): ?>
                <div class="item col-xs-6 col-sm-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.0s">
                  <figure style="width: 375px; height: 256px;">
                    <a class="lgitem" href="<?php echo $gallery; ?>" data-sub-html="#caption<?php echo $key; ?>">
                      <img src="<?php echo $gallery; ?>" alt="" style="width: 100%; height: 100%;">
                    </a>
                    <div id="caption<?php echo $key; ?>" class="hidden">
                      <h3><?php echo get_the_title($post[0]->ID); ?></h3>
                    </div>
                  </figure>
                </div>
              <?php endforeach ?>
            </div>
          </div>
          <!-- /.tiles --> 
        </div>
        <!-- /column -->
        
        <div class="col-md-4 col-sm-12 lp35">
          <div class="section-title no-line bm20">
            <h2><?php echo get_the_title($post[0]->ID); ?></h2>
            <p class="<?php echo is_single() ? "lead" : ""; ?>"><?php echo get_the_excerpt($post[0]->ID); ?></p>
          </div>
          <?php if (is_single()): ?>
            <p><?php the_content(); ?></p>
            <div class="divide10"></div>
            <ul class="item-details">
              <li> <strong>Date:</strong> <?php echo $post[0]->post_date; ?></li>
              <li> <strong>Categories:</strong> <?php the_category(', ', 0, $post[0]->ID); ?></li>
              <li> <strong>Tag:</strong> <?= Helpers::getPostTag($post[0]->ID); ?></li>
              <li><strong>Share:</strong>
                <ul class="goodshare-wrapper">
                  <li> <a href="#" class="goodshare ion-social-facebook" data-type="fb"></a> </li>
                  <li><a href="#" class="goodshare ion-social-twitter" data-type="tw"></a> </li>
                  <li><a href="#" class="goodshare ion-social-pinterest" data-type="pt"></a> </li>
                  <li><a href="#" class="goodshare ion-social-tumblr" data-type="tm"></a> </li>
                </ul>
                <!-- /.goodshare-wrapper --> </li>
            </ul>
          <?php else: ?>
            <div class="divide10"></div>
            <a href="<?php the_permalink($post[0]->ID); ?>" class="btn btn-border">View Details</a> </div>
          <?php endif ?>
        <!-- /column --> 
      </div>
      <!-- /.row --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.inverse-wrapper -->
<?php endif ?>