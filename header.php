<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_template_part( 'template-parts/meta'); ?>

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/icon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/icon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/icon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/plugin/animation/css/animations.css" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <?php wp_head(); ?>

  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
</head>

<body>

<nav class="navbar shadow fixed-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-rpi.png" alt="rpi.or.id" width="40">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        

        <ul class="navbar-nav">
          
          <!-- <li class="nav-item active">
            <a class="nav-link" href="/">HOME</a>
          </li> -->
          <?php
          if ( has_nav_menu( 'primary' ) ) {

            wp_nav_menu(
              array(
                'container'  => 'false',
                'menu_class' => 'nav-item',
                'items_wrap' => '%3$s',
                'theme_location' => 'primary',
              )
            );

          }
        ?>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#teams">PROFIL RPI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">OPINI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">BERITA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog">CONTACT US</a>
          </li> -->
        </ul>
        <ul class="navbar-nav ml-auto">
          <?php if( is_user_logged_in() ) { ?>
            <li class="nav-item">
              <a href="<?php echo site_url(); ?>/wp-admin" class="btn btn-primary">DASHBOARD</a>
            </li>
          
          <?php } else { ?>
            <li class="nav-item">
              <a href="<?php echo site_url(); ?>/wp-login.php?action=register" class="btn btn-primary">PENDAFTARAN</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url(); ?>/wp-admin" class="btn btn-success">LOGIN</a>
            </li>

          <?php } ?>
        </ul>

      </div>
    </div>
  </nav>
    