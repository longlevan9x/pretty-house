<?php get_header(); ?>
<?php 
    while (have_posts()):
        the_post();
    endwhile;

    $galleries = [];
    $attachments = new Attachments( 'attachments' ); /* pass the instance name */
    if( $attachments->exist() ) :
        while( $attachments->get() ) :
            $galleries[] = $attachments->url();
        endwhile;
    endif;

    if ($attachments->total() == 1) {
        $galleries = array_merge($galleries, $galleries);
    }
 ?>
        <div id="page-content">
            <div class="header-background bg-transfer">
                <img src="<?= get_image(get_the_post_thumbnail_url(null, 'size_three')); ?>" alt="">
            </div>
            <!--end header-background-->

            <div class="work-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left">
                                <div class="title framed shadow">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="separator"></div>
                                    <h3><?= get_post_city(get_the_ID()); ?></h3>
                                </div>
                                <dl class="info">
                                    <dt>Budget</dt>
                                    <dd>$84,500</dd>
                                    <dt>Build date</dt>
                                    <dd>04/05/2013</dd>
                                    <dt>Category</dt>
                                    <dd><?php the_category(' /', 0, get_the_ID()); ?></dd>
                                </dl>
                                <div class="separator"></div>
                                <div class="tags"><?= Helpers::getPostTag(get_the_ID()); ?></div>
                                <div style="text-transform: none;"><?= Helpers::getEntryContent($post_recent['ID']) ?></div>
                                <div class="separator"></div>
                                <a href="<?php echo get_site_url() . '/'; ?>contact" class="arrow icon">Want similar? Contact us!</a>
                            </div>
                            <!--end left-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-8">
                            <div class="right">
                                <div class="page-switcher">
                                    <div class="prev"></div>
                                    <div class="next"></div>
                                </div>
                                <!--end page-switcher-->
                                <div class="gallery">
                                <?php if (!empty($galleries)): ?>
                                    <div class="gallery-row">
                                        <a href="<?= $galleries[0]; ?>" class="width-50 image bg-transfer image-popup">
                                            <img src="<?= $galleries[0]; ?>" alt="">
                                        </a>
                                        <a href="<?= $galleries[1]; ?>" class="width-50 image bg-transfer image-popup">
                                            <img src="<?= $galleries[1]; ?>" alt="">
                                        </a>
                                    </div>
                                    <?php if (count($galleries) > 2): ?>
                                        <div class="gallery-row">
                                            <a href="<?= $galleries[2]; ?>" class="width-50 image bg-transfer image-popup">
                                                <img src="<?= $galleries[2]; ?>" alt="">
                                            </a>
                                            <a href="<?= $galleries[3]; ?>" class="width-50 image bg-transfer image-popup">
                                                <img src="<?= $galleries[3]; ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="gallery-row">
                                        <?php foreach ($galleries as $gallery): ?>
                                            <a href="<?= $gallery ?>" class="width-33 image bg-transfer image-popup"><img src="<?= $gallery ?>" alt=""></a>
                                        <?php endforeach ?>
                                        </div>
                                    <?php endif ?>
                                <?php endif ?>
                                </div>
                                <!--end gallery-->
                            </div>
                            <!--end right-->
                        </div>
                        <!--end col-md-8-->
                    </div>
                </div>
                <!--end container-->
            </div>
            <!--end block-->

            <hr>

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

        </div>
        <!--end page-content-->
<?php get_footer(); ?>