<?php 
$title = "";
$title1 = "";
if (is_category()) {
	$title1 = "Category";
	$title = single_cat_title('', false);
}
if (is_single()) {
  $title1 = "Sản phẩm";
  $title = get_the_title();
}
if (is_page()) {
  $title1 = single_post_title('', false);
}
 ?>
  <div class="page-title inverse-wrapper bg" style="background-image: url(<?php echo get_template_directory_uri() . "/"; ?>style/images/art/page-title.jpg);">
    <div class="container inner2">
      <h1 class="pull-left"><?php echo $title; ?></h1>
      <div class="more breadcrumbs pull-right bm0">
        <span><a href="<?php echo get_site_url() . '/'; ?>">Home</a></span>
        <span><a href="#"><?php echo $title1; ?></a></span>
        <?php if (!empty($title)): ?>
          <span><a href="#"><?php echo $title; ?></a></span>
        <?php endif ?>
        </div>
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.inverse-wrapper -->