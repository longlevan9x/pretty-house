<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<?php get_template_part('page-title') ?>
<?php $page = get_page(get_the_ID()); ?>
<?php $galleries = Helpers::getAttachmentGalleries($page->ID); ?>
  <div class="light-wrapper">
    <div class="container inner">
      <div class="thin">

        <!-- <h2 class="post-title bm10"><?php echo $page->post_title; ?></h2> -->
        <div class="row">
          <div class="col-sm-8">
            <p><?php echo $page->post_content; ?></p>
          </div>
          <!-- /column -->
          <aside class="col-sm-4 sidebar">
            <ul class="item-details">
              <li> <strong>Date:</strong> <?php echo $page->post_date; ?></li>
              <li><strong>Share:</strong>
                <ul class="goodshare-wrapper">
                  <li> <a href="#" class="goodshare ion-social-facebook" data-type="fb"></a> </li>
                  <li><a href="#" class="goodshare ion-social-twitter" data-type="tw"></a> </li>
                  <li><a href="#" class="goodshare ion-social-pinterest" data-type="pt"></a> </li>
                  <li><a href="#" class="goodshare ion-social-tumblr" data-type="tm"></a> </li>
                </ul>
                <!-- /.goodshare-wrapper --> </li>
            </ul>
            <a href="<?php echo get_site_url() . "/san-pham"; ?>" class="btn">See Project</a> </aside>
          <!-- /.sidebar --> 
        </div>
        <!-- /.row -->
        <div class="divide50"></div>
        <div class="tiles post-gallery">
          <div class="items row row-offset-0 light-gallery">
            <div class="item col-xs-12 col-sm-12 col-md-12">
              <figure class="overlay" style="width: 995px; height: 597px;">
              	<a class="lgitem" href="<?= get_image(get_the_post_thumbnail_url($page->ID)); ?>" ata-sub-html="#title-1">
              		<img src="<?= get_image(get_the_post_thumbnail_url($page->ID)); ?>" alt="" style="width: 100%; height: 100%;" />
              	</a>
              </figure>
            </div>
            <!--/.item -->
            <?php foreach ($galleries as $key => $gallery): ?>
	            <div class="item col-xs-12 col-sm-6 col-md-6">
	              <figure class="overlay" style="width: 457px; height: 292px;">
	              	<a class="lgitem" href="<?php echo $gallery; ?>">
	              		<img src="<?php echo $gallery; ?>" alt="" style="width: 100%; height: 100%;" />
	              	</a>
	              </figure>
	            </div>
            <?php endforeach ?>
          </div>
          <!--/.items --> 
        </div>
        <!--/.tiles -->
        
      </div>
      <!--/.thin --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper --> 
<?php get_footer(); ?>