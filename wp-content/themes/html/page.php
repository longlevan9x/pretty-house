<?php get_header(); ?>
 <div id="page-content">
            <div class="header-background bg-transfer overlay bg-fixed">
                <div class="container">
                    <div class="title">
                        <h1><?= single_post_title(); ?></h1>
                    </div>
                </div>
                <img src="<?= get_image(get_the_post_thumbnail_url(null, 'size_three')); ?>" alt="">
            </div>
            <!--end header-background-->

            <div class="block">
                <div class="container">
                    <div class="row">
                    	<?php get_template_part('content', 'list-product') ?>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
            <!--end block-->


        </div>
        <!--end page-content-->
<?php get_footer(); ?>