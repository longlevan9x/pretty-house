<?php get_header(); ?>
<?php 
    $post_recents = wp_get_recent_posts(array( 'numberposts' => 5));
 ?>
        <div id="page-content">
            <div class="hero-section is-carousel parallax-wrapper">
                <div class="hero-wrapper">
                    <div class="carousel owl-carousel">
                        <?php foreach (Helpers::getSlider() as $key => $item): ?>
                            <?php if (empty($item)): ?>
                                <?php continue; ?>
                            <?php endif ?>
                            <a href="#" class="slide bg-transfer">
                                <img src="<?= $item ?>" alt="">
                                <!-- <div class="description">
                                    <div class="number">01</div>
                                    <h2>Bright Coast Residence</h2>
                                    <div class="icon arrow">View Project</div>
                                </div> -->
                            </a>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="heading-wrapper">
                    <div class="container">
                        <div class="heading">
                            <div class="title parallax-element"><h1><?php bloginfo('name') ?></h1>
                                <a href="#our-works" class="icon opacity-60">Show me the works<i class="arrow_right"></i></a>
                            </div>
                            <div class="owl-navigation"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end hero-section-->

            <div class="block">
                <div class="container">
                    <div class="section-title">
                        <h2>Our Latest Project</h2>
                    </div>
                    <!--end title-->
                    <div class="featured-works-carousel">
                    <?php foreach ($post_recents as $key => $post_recent): ?>
                        <div class="slide">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <div class="title framed shadow">
                                        <h3><?= get_the_title($post_recent['ID']); ?></h3>
                                        <div class="separator"></div>
                                        <h3><?= get_post_city($post_recent['ID']) ?></h3>
                                    </div>
                                    <div class="image image-product-large">
                                        <img src="<?= get_image(get_the_post_thumbnail_url($post_recent['ID'])); ?>" alt="" style="width: 100%; height: 100%">
                                    </div>
                                    <!--end image-->
                                </div>
                                <!--end col-md-8-->
                                <div class="col-md-4 col-sm-4">
                                    <dl class="info">
                                        <dt>Budget</dt>
                                        <dd>$84,500</dd>
                                        <dt>Build date</dt>
                                        <dd>04/05/2013</dd>
                                        <dt>Category</dt>
                                        <dd><?php the_category(' /', 0, $post_recent['ID']); ?></dd>
                                    </dl>
                                    <div class="separator"></div>
                                    <div class="tags"><?= Helpers::getPostTag($post_recent['ID']); ?></div>
                                    <p>
                                        <?= Helpers::getEntryContent($post_recent['ID']) ?>
                                    </p>
                                    <a href="<?php the_permalink($post_recent['ID']); ?>" class="btn btn-default arrow">View the project</a>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end slide-->
                    <?php endforeach ?>
                    </div>
                    <!--end featured-works-carousel-->
                </div>
                <!--end container-->
                <div class="bg black opacity-10">
                    <div class="image opacity-60 bg-transfer bg-fixed"><img src="<?php echo get_template_directory_uri() .'/' ?>assets/img/bg.jpg" alt=""></div>
                </div>
                <!--end bg-->
            </div>
            <!--end block-->

            <div class="block">
                <div class="container">
                    <div class="section-title">
                        <h2>Recent News</h2>
                    </div>
                    <!--end title-->
                    <div class="featured-blocks">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="featured-block" data-scroll-reveal="enter bottom and move 50px">
                                    <div class="date framed shadow">
                                        <div class="day"><strong>02/05</strong></div>
                                        <div class="year">2016</div>
                                    </div>
                                    <!--end date-->
                                    <div class="description">
                                        <a href="blog-post.html">
                                            <h3>Washington times Article</h3>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean convallis purus nec
                                            viverra posuere
                                        </p>
                                    </div>
                                    <!--end desciption-->
                                </div>
                                <!--end featured-block-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="featured-block" data-scroll-reveal="enter bottom and move 50px after 0.2s">
                                    <div class="date framed shadow">
                                        <div class="day"><strong>12/03</strong></div>
                                        <div class="year">2016</div>
                                    </div>
                                    <!--end date-->
                                    <div class="description">
                                        <a href="blog-post.html">
                                            <h3>New Project started</h3>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean convallis purus nec
                                            viverra posuere
                                        </p>
                                    </div>
                                    <!--end desciption-->
                                </div>
                                <!--end featured-block-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="featured-block" data-scroll-reveal="enter bottom and move 50px after 0.4s">
                                    <div class="date framed shadow">
                                        <div class="day"><strong>10/01</strong></div>
                                        <div class="year">2016</div>
                                    </div>
                                    <!--end date-->
                                    <div class="description">
                                        <a href="blog-post.html">
                                            <h3>We are hiring!</h3>
                                        </a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean convallis purus nec
                                            viverra posuere
                                        </p>
                                    </div>
                                    <!--end desciption-->
                                </div>
                                <!--end featured-block-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end featured-blocks-->
                </div>
                <!--end container-->
            </div>
            <!--end block-->

            <hr>

            <div class="block">
                <div class="container">
                    <div class="section-title">
                        <h2>Our Works</h2>
                    </div>
                    <!--end title-->
                    <?php get_template_part('content', 'list-product') ?>
                </div>
                <!--end container-->
            </div>
            <!--end block-->

            <div class="block">
                <div class="container">
                    <div class="logos">
                        <div class="logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri() .'/' ?>assets/img/logo-1.png" alt=""></a>
                        </div>
                        <!--/ .logo-->
                        <div class="logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri() .'/' ?>assets/img/logo-2.png" alt=""></a>
                        </div>
                        <!--/ .logo-->
                        <div class="logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri() .'/' ?>assets/img/logo-3.png" alt=""></a>
                        </div>
                        <!--/ .logo-->
                        <div class="logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri() .'/' ?>assets/img/logo-4.png" alt=""></a>
                        </div>
                        <!--/ .logo-->
                        <div class="logo">
                            <a href="#"><img src="<?php echo get_template_directory_uri() .'/' ?>assets/img/logo-5.png" alt=""></a>
                        </div>
                        <!--/ .logo-->
                    </div>
                    <!--/ .logos-->
                </div>
            </div>

        </div>
        <!--end page-content-->
<?php get_footer() ?>