<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="<?php bloginfo('charset') ?>"/>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() .'/' ?>style/images/favicon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/revolution/css/navigation.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/css/color/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() .'/' ?>style/type/icons.css">
  <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900,300,200,100' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css" media="screen">
    html { margin-top: 0px !important; }
    * html body { margin-top: 0px !important; }
    @media screen and ( max-width: 782px ) {
      html { margin-top: 0px !important; }
      * html body { margin-top: 0px !important; }
    }
  </style>
</head>
<body class="full-layout" <?php body_class(); ?>>
<div class="content-wrapper">
  <div class="navbar navbar-default default classic" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-brand">
          <h2>
            <a href="<?php echo get_site_url() . '/'; ?>"><?php bloginfo('name'); ?></a>
          </h2>
        </div>
        <div class="nav-bars-wrapper">
          <div class="nav-bars-inner">
            <div class="nav-bars" data-toggle="collapse" data-target=".navbar-collapse"><span></span></div>
          </div>
          <!-- /.nav-bars-inner --> 
        </div>
        <!-- /.nav-bars-wrapper --> 
      </div>
      <!-- /.nav-header -->
      <div class="navbar-collapse collapse">
          <?php echo Helpers::getMenuNav(); ?>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!--/.container --> 
  </div>
  