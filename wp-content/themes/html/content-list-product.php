    <div class="gallery">
        <div class="row parallax-wrapper">
            <?php if (is_page()): ?>
                <?php 
                    $args = [
                        'post_status' => 'publish',
                        'ping_status' => 'open',
                        'post_type' => 'post'
                    ];
                    $the_query = new WP_Query([ $args ]);
                ?>
                <?php if ($the_query->have_posts()): ?>
                    <?php while($the_query->have_posts()): ?>
                    <?php $the_query->the_post(); ?>
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
                <?php else: ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif ?>
            <?php else: ?>
                <?php if (have_posts()): ?>
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
                <?php else: ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif ?>
            <?php endif ?>
        </div>
        <!--end row-->
    </div>
    <!--end gallery-->