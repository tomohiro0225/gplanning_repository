<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gplanning-privacy policy-</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>
<body>
    <!-- header -->
    <header class="l-header">
        <div class="l-header__container">

            <!-- ロゴ -->
            <h1 class="l-header__logo">
                <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo-red.png" alt="G planning"></a>
            </h1><!-- /ロゴ -->

            <!-- ナビゲーション -->
            <nav class="l-header__navi pc-on">
                <ul class="l-header__items">
                    <li class="l-header__item"><a href="">SERVICE</a></li>
                    <li class="l-header__item"><a href="">COMPANY</a></li>
                    <li class="l-header__item"><a href="">NEWS</a></li>
                    <li class="l-header__item"><a href="">Q&A</a></li>
                    <li class="l-header__item"><a href="<?php echo get_page_link( $contact );?>">CONTACT</a></li>
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

        <!-- keyvisual -->
        <div class="keyVisual">
            <div class="keyVisual__bg-lightblue"></div>
            <div class="keyVisual__bg-blue"></div>
            <div class="keyVisual__title">
                <p class="keyVisual__title-txt keyVisual__title-txt--contact">ここにタイトルが入ります</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/kv-line.png" alt="underline" class="keyVisual__title-underline">
            </div>
        </div>
        <!-- /keyvisual -->