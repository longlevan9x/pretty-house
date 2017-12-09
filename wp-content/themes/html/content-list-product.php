    <div class="gallery">
        <div class="row parallax-wrapper">
            <?php while (have_posts()): ?>
                <?php the_post(); ?>
            <div class="col-md-4 col-sm-4">
                <a href="<?php the_permalink() ?>" class="gallery-item" data-scroll-reveal="enter left and move 50px">
                    <div class="title framed shadow parallax-element">
                        <div class="name"><?php the_title(); ?></div>
                        <div class="place"><?= get_post_city(get_the_ID()); ?></div>
                    </div>
                    <!--end title-->
                    <div class="arrow arrow_right"></div>
                    <div class="image image-product-normal" >
                        <img src="<?= get_image(get_the_post_thumbnail_url(null, 'size_three')); ?>" alt="">
                    </div>
                    <!--end image-->
                </a>
                <!--end gallery-item-->
            </div>
            <?php endwhile; ?>
        </div>
        <!--end row-->
    </div>
    <!--end gallery-->