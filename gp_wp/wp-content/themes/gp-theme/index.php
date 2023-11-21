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
  <!-- animate.css -->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css">
<!-- wow.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
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
            <nav class="l-header__navi">
                <ul class="l-header__items">
                    <li class="l-header__item"><a href="<?php the_permalink(12); ?>">SERVICE</a></li>
                    <li class="l-header__item"><a href="<?php the_permalink(22); ?>">COMPANY</a></li>
                    <li class="l-header__item"><a href="<?php echo get_post_type_archive_link("news"); ?>">NEWS</a></li>
                    <li class="l-header__item"><a href="<?php the_permalink(20); ?>">Q&A</a></li>
                    <li class="l-header__item"><a href="<?php the_permalink(8); ?>">CONTACT</a></li>
                </ul>
            </nav><!-- /ナビゲーション -->

            <!-- ハンバーガー -->
            <div class="menuTrigger">
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
        
        <!-- topVisual -->
        <div class="topVisual">
            <div class="topVisual__bg-blue"></div>
            <div class="topVisual__wrapper">
                <div class="topVisual__title box wow animated fadeInLeft">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/kv-title.png" alt="underline" class="topVisual__title-img">
                </div>
                <p class="topVisual__text box wow animated fadeInLeft">リアルとデジタルの両面から最適な戦略で</p>
                <p class="topVisual__text box wow animated fadeInLeft">売上最大化を目指します。</p>
                <p class="topVisual__text box wow animated fadeInLeft">お客様の笑顔のために<br class="sp-on">「成せばなる」をモットーに！</p>
                <div class="topVisual__real pc-on box wow animated fadeInLeft">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/top-kv-real.png" alt="real*digtal">
                </div>
                <div class="topVisual__real sp-on box wow animated fadeInLeft">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/top-kv-digtal.png" alt="real*digtal">
                </div>

            </div>
        </div>
        <!-- /topVisual -->

        <!-- news -->
        <section class="top-news">
            <div class="top-news__wrapper">
                <!-- 見出し -->
                <h2 class="c-secTitle" >
                    <span>NEWS</span><br>
                    <span>お知らせ</span>
                </h2><!-- /見出し --> 
                <?php
                    $args = array(
                        'post_type' => 'news', //ポストタイプのスラッグ
                        'order' => 'DESC',
                        'posts_per_page' => 2,
                    );
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) : 
                ?>

                <div class="top-news__table box wow animated fadeInUp">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="top-news__item">
                        <div class="top-news__date"><?php echo the_time('Y.m.d'); ?><span class="top-news__label">NEW</span></div>
                        <p class="top-news__title"> <?php echo the_title(); ?></p>
                    </a>
                <?php endwhile; ?>
                </div>

                <?php endif; ?>

            </div>
            <a href="<?php echo get_post_type_archive_link("news"); ?>" class="c-btn">READ MORE</a>
            <!-- /news -->

        </section>
        <!-- /news -->
        
        <!-- ECサイトの運営のお悩み解決 -->
        <div class="top-ec">
            <!-- 背景画+丸のレイアウト配置 -->
                <div class="top-ec__bg">       
                    <div class="top-ec__bg--margin"></div>
                    <div class="top-ec__balloon box wow animated fadeInUp">売り上げの最大化を目指して</div>
                    <p class="top-ec__solve box wow animated fadeInUp">ECサイト運営のお悩みを<br class="sp-on">解決いたします！</p>
                </div>
                <!-- ECサイトのお悩みリスト -->
                <div class="circle__list">
                    <div class="circle__item box wow animated fadeInUp">
                        <div class="circle__wrapper">
                            <div class="circle__big">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec01.png" alt="img01" class="circle__big__img">
                            </div>
                            <div class="circle__little">
                                <p class="circle__little__text">
                                    <span class="circle__little__point">Point</span>
                                    <span class="circle__little__number">01</span>
                                </p>
                            </div>
                        </div>
                        <h3 class="circle__title">通販サイトって？</h3>
                        <div class="circle__texts">
                            <div class="circle__text">
                                <div class="circle__text--check">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec-check.png" alt="check">
                                </div>
                                <p>EC事業に詳しい人材がいない<br>
                                    ため、なかなか進まない</p>
                            </div>
                            <div class="circle__text">
                                <div class="circle__text--check">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec-check.png" alt="check">
                                </div>
                                <p>ECの実務経験者がいない</p>
                            </div>
                            <div class="circle__text">
                                <div class="circle__text--check">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec-check.png" alt="check">
                                </div>
                                <p>社内での人材育成に時間が<br>
                                    かかる</p>
                            </div>
                        </div>
                    </div>
                    <div class="circle__item box wow animated fadeInUp">
                        <div class="circle__wrapper">
                            <div class="circle__big">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec02.png" alt="top-ec-img02" class="circle__big__img">
                            </div>
                            <div class="circle__little">
                                <p class="circle__little__text">
                                    <span class="circle__little__point">Point</span>
                                    <span class="circle__little__number">02</span>
                                </p>
                            </div>
                        </div>
                        <h3 class="circle__title">人手が足りない</h3>
                        <div class="circle__texts">
                            <div class="circle__text">
                                <div class="circle__text--check">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec-check.png" alt="check">
                                </div>
                                <p>EC事業、何から始めていいか<br>
                                    わからない</p>
                            </div>
                            <div class="circle__text">
                                <div class="circle__text--check">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec-check.png" alt="check">
                                </div>
                                <p>強化したいがノウハウがない</p>
                            </div>
                            <div class="circle__text">
                                <div class="circle__text--check">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec-check.png" alt="check">
                                </div>
                                <p>販路拡大のためモール出店した<br>
                                    いが、どこがいいかわからない</p>
                            </div>
                        </div>
                    </div>
                    <div class="circle__item box wow animated fadeInUp">
                        <div class="circle__wrapper">
                            <div class="circle__big">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec03.png" alt="top-ec-img03" class="circle__big__img">
                            </div>
                            <div class="circle__little">
                                <p class="circle__little__text">
                                    <span class="circle__little__point">Point</span>
                                    <span class="circle__little__number">03</span>
                                </p>
                            </div>
                        </div>
                        <h3 class="circle__title">売り上げが伸びない</h3>
                        <div class="circle__texts">
                            <div class="circle__text">
                                <div class="circle__text--check">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec-check.png" alt="check">
                                </div>
                                <p>日々の業務で手一杯で、企画や<br>
                                    戦略がたてられない</p>
                            </div>
                            <div class="circle__text">
                                <div class="circle__text--check">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec-check.png" alt="check">
                                </div>
                                <p>なかなか売り上げが伸びない</p>
                            </div>
                            <div class="circle__text">
                                <div class="circle__text--check">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-ec-check.png" alt="check">
                                </div>
                                <p>売り上げアップのための<br>
                                    リソースが足りていない</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ご相談ください！ -->
            <div class="top-ec__consoulation">
                <div class="top-ec__consoulation__wrapper box wow animated fadeInUp">
                    <p class="top-ec__consoulation__text">サイトの<span class="font-light-blue">新規構築</span>から<span class="font-light-blue">売上サポート、<br class="sp-on">販促プロモーション企画など</span><br>
                        幅広いサービスで<br class="sp-on">サポートさせていただきます。</p>
                    <div class="top-ec__consoulation__label">イベントやスポーツ関連の運営等もご相談ください！</div>
                </div>
            </div>
        </div>
        <!-- /ECサイトの運営のお悩み解決 -->

        <!-- サービス -->
        <section class="top-service">
            <!-- 見出し -->
            <h2 class="c-secTitle" box wow animated fadeInUp >
                <span>SERVICE</span><br>
                <span>サービス</span>
            </h2><!-- /見出し --> 

            
            <div class="top-service__list">
                <div class="top-service__item">
                    <div class="top-service__img box wow animated fadeLeft">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-service-img01.png" alt="service01">
                    </div>
                    <div class="top-service__texts box wow animated fadeInUp">
                        <div class="top-service__texts__wrapper">
                            <h3 class="top-service__work">ECサイト構築運営代行・SNS運用代行</h3>
                            <p class="top-service__desc">ECサイトの新規構築はもちろんのこと、SNSを使った<br class="pc-on">集客方法や売上をあげるためのサポート、販促物の<br class="pc-on">効果的な使い方などご相談ください。</p>
                            <a href="<?php the_permalink(12); ?>#service01" class="top-service__link c-btn">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="top-service__item">
                    <div class="top-service__img-reverse box wow animated fadeRight">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-service-img02.png" alt="service02">
                    </div>
                    <div class="top-service__texts-reverse box wow animated fadeInUp">
                        <div class="top-service__texts__wrapper-reverse">
                            <h3 class="top-service__work-reverse">プロモーション・広告運営</h3>
                            <p class="top-service__desc-reverse">SNS・インフルエンサーを活用したプロモーションやリサ<br class="pc-on">ーチなども手掛けています。幅広いネットワークを最大限に<br class="pc-on">活かし、リクエストに誠心誠意お応えいたします。</p>
                            <a href="<?php the_permalink(12); ?>#service02" class="top-service__link-reverse c-btn">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="top-service__item">
                    <div class="top-service__img box wow animated fadeLeft">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-service-img03.png" alt="service03">
                    </div>
                    <div class="top-service__texts box wow animated fadeInUp">
                        <div class="top-service__texts__wrapper">
                            <h3 class="top-service__work">イベント企画・運営</h3>
                            <p class="top-service__desc">小さなイベントから、大きなアリーナクラスのもの<br class="pc-on">まで、会場のお手配はもちろん、企画のご相談から<br class="pc-on">ワンストップでサポートさせていただきます。</p>
                            <a href="<?php the_permalink(12); ?>#service03" class="top-service__link c-btn">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="top-service__item">
                    <div class="top-service__img-reverse box wow animated fadeRight">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-service-img04.png" alt="service04">
                    </div>
                    <div class="top-service__texts-reverse box wow animated fadeInUp">
                        <div class="top-service__texts__wrapper-reverse">
                            <h3 class="top-service__work-reverse">スポーツ施設企画・運営</h3>
                            <p class="top-service__desc-reverse">利用者の安全を確保するとともに、より多くのユーザー<br class="pc-on">がスポーツに参画する機会を確保するための適正な<br class="pc-on">管理運営を行なっていくことを目指しています。</p>
                            <a href="<?php the_permalink(12); ?>#service04" class="top-service__link-reverse c-btn">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /サービス -->

        <!-- スライダーと実績 -->
        <section class="top-work">
            <p class="top-work__text"> TOKYO2020オリンピックパラリンピック<br>
                Eスポーツ、謎肉限定販売イベントなど<br class="sp-on">実績はさまざま</p>
            <div class="top-work__slider box wow animated fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-slider01.png" alt="slider01" class="top-work__slider__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-slider02.png" alt="slider02" class="top-work__slider__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-slider03.png" alt="slider03" class="top-work__slider__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-slider04.png" alt="slider04" class="top-work__slider__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-slider01.png" alt="slider01" class="top-work__slider__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-slider02.png" alt="slider02" class="top-work__slider__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-slider03.png" alt="slider03" class="top-work__slider__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/top/top-slider04.png" alt="slider04" class="top-work__slider__img">
            </div>
        </section>
        <!-- スライダーと実績 -->

        <?php get_template_part('inc/l-contact'); ?>

    </main>

    <?php get_footer(); ?>


    <!-- javascript関連 -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>