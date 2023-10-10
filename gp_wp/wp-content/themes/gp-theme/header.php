<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gplanning-TOP-</title>
  <!-- slickのCDN読み込み -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
  <!-- style.cssの読み込み -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>
<body>
    <!-- header -->
    <header class="l-header">
        <div class="l-header__container">

            <!-- ロゴ -->
            <h1 class="l-header__logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/gp-logo.svg" alt="G planning"></a>
            </h1><!-- /ロゴ -->

            <!-- ナビゲーション -->
            <nav class="l-header__navi pc-on">
                <ul class="l-header__items">
                    <li class="l-header__item"><a href="<?php the_permalink(12); ?>">SERVICE</a></li>
                    <li class="l-header__item"><a href="<?php the_permalink(22); ?>">COMPANY</a></li>
                    <li class="l-header__item"><a href="<?php echo get_post_type_archive_link("news"); ?>">NEWS</a></li>
                    <li class="l-header__item"><a href="<?php the_permalink(20); ?>">Q&A</a></li>
                    <li class="l-header__item"><a href="<?php the_permalink(8); ?>">CONTACT</a></li>
                </ul>
            </nav><!-- /ナビゲーション -->

            <!-- ハンバーガー -->
            <div class="menuTrigger sp-on">
                <div class="menuTrigger__wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- /ハンバーガー -->

        </div>
    </header>
    <!-- /header -->

    <main>
        <!-- ハンバーガーメニュー -->
        <div class="sp-menu">
            <div class="sp-menu__header">
                <div class="sp-menu__gp">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/gp-logo.svg" alt="logo">
                </div>
                <div class="sp-menu__line">
                    <span class="sp-menu__line--1"></span>
                    <span class="sp-menu__line--2"></span>
                </div>
            </div>
            <div class="sp-menu__list">
                <div class="sp-menu__solo">
                    <a href="<?php the_permalink(12); ?>">SERVICE</a>
                </div>
                <div class="sp-menu__solo">
                    <a href="<?php the_permalink(22); ?>">COMPANY</a>
                </div>
                <div class="sp-menu__solo">
                    <a href="<?php echo get_post_type_archive_link("news"); ?>">NEWS</a>
                </div>
                <div class="sp-menu__solo">
                    <a href="<?php the_permalink(20); ?>">Q&A</a>
                </div>
                <div class="sp-menu__solo">
                    <a href="<?php the_permalink(8); ?>">CONTACT</a>
                </div>
                <div class="sp-menu__solo">
                    <a href="<?php the_permalink(5); ?>">PRAIVACY POLICY</a>
                </div>
                <div class="sp-menu__solo sp-menu__insta">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/instagram-menu.png" alt="instagram">
                </div>
            </div>
        </div>
        <!-- /ハンバーガーメニュー -->