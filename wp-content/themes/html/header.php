<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8"/>
    <meta charset="<?php bloginfo('charset') ?>"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="<?php echo get_template_directory_uri() .'/' ?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri() .'/' ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/' ?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/' ?>assets/css/owl.carousel.css" type="text/css">
    <?php if (is_single()): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/' ?>assets/css/magnific-popup.css" type="text/css">
    <?php endif ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/' ?>assets/css/style.css" type="text/css">

    <title>Archits</title>
    <style type="text/css" media="screen">
        .farbtastic .marker {
          width: 17px;
          height: 17px;
          margin: -8px -8px 0 0;
          overflow: hidden;
          background: url(../images/marker.png) no-repeat;
        }
    
        .farbtastic .marker {
          width: 17px;
          height: 17px;
          margin: -8px 0 0 -8px;
          overflow: hidden;
          background: url(../images/marker.png) no-repeat;
        }

        .image-product-normal{
            width: 362px;
            height: 167px;
        }

        .image img{
            width: 100%;
            height: 100%;
        }

        .image-product-large {
            width: 652px;
            height: 434px;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php 
    Helpers::getMenuNav();

 ?>
<div class="outer-wrapper homepage">
    <div class="page-wrapper">
        <div class="navigation-off-canvas">
            <h2>Navigation</h2>
            <?= Helpers::getMenuNav(); ?>
        </div>
        <!--end navigation-off-canvas-->
        <div id="page-header">
            <header>
                <div class="navigation">
                    <div class="left">
                        <a href="<?php echo get_site_url() . '/'; ?>" class="brand"><img src="<?php echo get_template_directory_uri() .'/' ?>assets/img/logo.png" alt=""></a>
                    </div>
                    <!--end left-->
                    <div class="right">
                        <div class="nav-btn">
                            <figure></figure>
                            <figure></figure>
                            <figure></figure>
                        </div>
                    </div>
                    <!--end right-->
                </div>
                <!--end navigation-->
            </header>
            <!--end header-->
        </div>
        <!--end page-header-->
        <?php 
            // $categories = get_categories(['taxonomy' => 'category']);
            // echo "<pre>";
            // print_r ($categories);
            // echo "</pre>";
            // foreach ($categories as $key => $category) {
            //     echo get_category_link( $category->term_id );
            // }
            // // var_dump(get_category_children())
         ?>