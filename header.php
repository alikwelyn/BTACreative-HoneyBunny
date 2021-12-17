<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="author" content="Álik Welyn & BTA Creative">
    <link href="<?php bloginfo('template_url'); ?>/assets/imgs/favicon.png" rel="shortcut icon" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>

    <div class="hb-preloader">
      <img class="preloader-logo" src="<?php bloginfo('template_url'); ?>/assets/imgs/logo.svg" width="350" alt="Honey Bunny - Petshop">
      <div class="preloader-preview-area">
          <div class="ball-pulse">
              <div></div>
              <div></div>
              <div></div>
          </div>
      </div>
    </div>

  <?php if ( is_home() && is_front_page() || is_front_page() ) { ?>
    <div><a href="https://api.whatsapp.com/send/?phone=5511<?php echo of_get_option( 'whatsapp' ); ?>&text=Olá, vim pelo site de vocês e gostaria de saber mais...&app_absent=0" id="wa_button" target="_new">
      <div class="circle-fill" style="transform-origin: center;"></div>
      <div class="img-circle" style="transform-origin: center;">
        <div class="img-circleblock" style="transform-origin: center;"></div>
      </div></a>
    </div>
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/imgs/logo.svg" width="200" alt="Honey Bunny - Petshop">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
                wp_nav_menu( array(
                    'menu'              => 'menu-principal',
                    'theme_location'    => 'menu-principal',
                    'depth'             => 2,
                    'container'         => 'ul',
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'wp_page_menu',
                ) );
              ?>
          <div class="social-part">
            <a href="<?php echo of_get_option( 'link_facebook' ); ?>" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="<?php echo of_get_option( 'link_instagram' ); ?>" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
  <?php } ?>
  <?php if ( is_blog() || is_category() || is_search() || is_page() && !is_front_page() ) { ?>
    <div><a href="https://api.whatsapp.com/send/?phone=55<?php echo of_get_option( 'whatsapp' ); ?>&text=Olá, vim pelo site de vocês e gostaria de saber mais...&app_absent=0" id="wa_button" target="_new">
      <div class="circle-fill" style="transform-origin: center;"></div>
      <div class="img-circle" style="transform-origin: center;">
        <div class="img-circleblock" style="transform-origin: center;"></div>
      </div></a>
    </div>
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/assets/imgs/logo.svg" width="200" alt="Frigga Sustentabilidade">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
                wp_nav_menu( array(
                    'menu'              => 'menu-principal',
                    'theme_location'    => 'menu-principal',
                    'depth'             => 2,
                    'container'         => 'ul',
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'wp_page_menu',
                ) );
              ?>
          <div class="social-part">
            <a href="<?php echo of_get_option( 'link_facebook' ); ?>" target="_blank">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="<?php echo of_get_option( 'link_instagram' ); ?>" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
  <?php } ?>