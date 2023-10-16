<?php get_header(); ?>


        <!-- keyvisual -->
        <div class="keyVisual">
            <div class="keyVisual__bg-lightblue"></div>
            <div class="keyVisual__bg-blue"></div>
            <div class="keyVisual__title">
                <p class="keyVisual__title-txt keyVisual__title-txt--big">Service</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/kv-line.png" alt="underline" class="keyVisual__title-underline">
            </div>
        </div>
        <!-- /keyvisual -->

        <!-- breadcrumb -->
        <div class="c-breadcrumb pc-on">
            <ul class="c-breadcrumb__lists">
            <li class="c-breadcrumb__list"><a href="<?php echo home_url(); ?>">TOP</a></li>
            <li class="c-breadcrumb__list">></li>
            <li class="c-breadcrumb__list"><a href="#">Service</a></li>
            </ul>
        </div>
        <!-- /breadcrumb -->

            <!-- 見出し -->
            <h2 class="c-secTitle">
                <span>SERVICE</span><br>
                <span>サービス</span>
            </h2><!-- /見出し -->

        <!-- ECサイト構築運営代行・SNS運用代行 -->
        <section id="service01" class="l-service ec-site">
            <h3 class="service-title">
                ECサイト構築運営代行・SNS運用代行
            </h3>
            <div class="service">
                <div class="service__contain">
                    <div class="service__contain__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-img01.png" alt="service01">
                    </div>
                    <div class="service__contain__desc">
                        <p class="service__contain__text">ECサイトの新規構築に始まり、売り<br class="pc-on">上げサポート、販促プロモーション<br class="pc-on">企画など、幅広いサービスでサポート<br class="pc-on">させていただきます。</p>
                    </div>
                </div>
                <div class="service__bg"></div>
                <h4 class="service__ec-title">通販サイトを開設する流れ</h4>
                <!-- フロー図 -->
                <div class="flow">
                    <ul class="flow__list">
                        <li class="flow__item">
                            <div class="flow__wrapper">
                                <div class="flow__left">
                                    <p class="flow__title">販売商品を<br>決める</p>
                                </div>                    
                                <div class="flow__center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/service/flow01.png" alt="flow01">
                                </div>                    
                                <p class="flow__right">ネットショップ向けにラインナップを見直すのもひとつの方法です。例えば、実店舗と異なる新たなジャンルの商品を試験的に販売したり、商品の限定販売などもあります。</p>                    
                            </div>
                            <div class="flow__arrow">
                                <div class="flow__arrow__line"></div>
                                <div class="flow__arrow__delta"></div>
                            </div>
                        </li>
                        <li class="flow__item">
                            <div class="flow__wrapper">
                                <div class="flow__left">
                                    <p class="flow__title">コンセプトを<br>決める</p>
                                </div>                    
                                <div class="flow__center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/service/flow02.png" alt="flow02">
                                </div>                    
                                <p class="flow__right">記憶に残りやすいサイトでリピーターやファンを獲得していくことができます。他店と差別化すること＝ブランディングが大切です。</p>                    
                            </div>
                            <div class="flow__arrow">
                                <div class="flow__arrow__line"></div>
                                <div class="flow__arrow__delta"></div>
                            </div>
                        </li>
                        <li class="flow__item">
                            <div class="flow__wrapper">
                                <div class="flow__left">
                                    <p class="flow__title">商品準備</p>
                                </div>                    
                                <div class="flow__center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/service/flow03.png" alt="flow03">
                                </div>                    
                                <p class="flow__right">決まったコンセプトの基づいて、実際にうる商品を揃えていきましょう。</p>                    
                            </div>
                            <div class="flow__arrow">
                                <div class="flow__arrow__line"></div>
                                <div class="flow__arrow__delta"></div>
                            </div>
                        </li>
                        <li class="flow__item">
                            <div class="flow__wrapper">
                                <div class="flow__left">
                                    <p class="flow__title">配送・梱包<br>などの準備</p>
                                </div>                    
                                <div class="flow__center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/service/flow04.png" alt="flow04">
                                </div>                    
                                <p class="flow__right">お客様とリアルな接点を持つ機会が少ないネットショップです。梱包方法が雑だと、商品が破損してクレームに繋がったり、ショップへの信頼を失いかねないので注意が必要です。</p>                          
                            </div>
                            <div class="flow__arrow">
                                <div class="flow__arrow__line"></div>
                                <div class="flow__arrow__delta"></div>
                            </div>
                        </li>
                        <li class="flow__item">
                            <div class="flow__wrapper">
                                <div class="flow__left">
                                    <p class="flow__title">集客</p>
                                </div>                    
                                <div class="flow__center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/service/flow05.png" alt="flow05">
                                </div>                             
                                <p class="flow__right">広告・検索・メール・SNSなどの集客方法を、商品やターゲット層などに合わせて、バランスよく使って集客していきましょう。</p>                    
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /フロー図 -->
            </div>
        </section>
        <!-- /ECサイト構築運営代行・SNS運用代行 -->

        <!-- プロモーション・広告運用 -->
        <section id="service02" class="l-service ec-site">
            <h3 class="service-title">
                プロモーション・広告運用
            </h3>
            <div class="service service-reverse">
                <div class="service__contain-reverse">
                    <div class="service__contain__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-img02.png" alt="service02">
                    </div>
                    <div class="service__contain__desc">
                        <p class="service__contain__text-reverse">会社や製品のイメージ作りに始ま<br class="pc-on">り、「欲しい」と思ってもらうた<br class="pc-on">めの販売促進プロモーション。<br class="pc-on"><br><br>
                            しっかりとした戦略が非常に大事<br class="pc-on">になってきます。</p>
                    </div>
                </div>
                <div class="service__bg-reverse"></div>
                <div class="service__promotion">
                    <h4 class="service__promotion__work">オンラインの販促手法</h4>
                    <div class="service__promotion__under">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/promotion.png" alt="promotion">
                    </div>
                    <div class="service__promotion__text">インターネット検索やSNSなどが多く利用されるようになり、消費者は様々な商品に関する多くの情報を日々取得しています。数ある選択肢の中から自社商品を手に取ってもらうには、オンラインでの販売促進を欠かすことができません。</div>
                    <!-- 3カラムレイアウト挿入 -->
                    <div class="service__promotion__list">
                        <div class="service__promotion__item service__promotion__item--3col">
                            <div class="service__promotion__circle service__promotion__circle--online">
                                <p>公式サイト<br>
                                    ・ソーシャル<br>
                                    ・ブログ
                                </p>
                            </div>
                            <div class="service__promotion__desc">商品ターゲットがユーザー層と重なれば、大きな効果が期待できるので、戦略的に使用することが大事です。</div>
                        </div>
                        <div class="service__promotion__item service__promotion__item--3col">
                            <div class="service__promotion__circle service__promotion__circle--online">
                                <p>ネット広告</p>
                            </div>
                            <div class="service__promotion__desc">リスティング広告や、アフィリエイト広告、リマーケティングなど、多岐に渡ります。</div>
                        </div>
                        <div class="service__promotion__item service__promotion__item--3col">
                            <div class="service__promotion__circle service__promotion__circle--online">
                                <p>メールマガジン</p>
                            </div>
                            <div class="service__promotion__desc">自由度の高い情報を提供でき、新商品や新サービスなど、定期的に情報を提供することができます。</div>
                        </div>

                    </div>
                </div>
                <div class="service__promotion">
                    <h4 class="service__promotion__work">オフラインの販促手法</h4>
                    <div class="service__promotion__under">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/promotion.png" alt="promotion">
                    </div>
                    <div class="service__promotion__text">インターネットやSNSの新たな営業手法にとどまらず、チラシなどの紙の販促物や、イベントなどを通じて集客を行う手法は、ネットユーザー以外のターゲットに有効なことから、まだまだ実施する価値のある手法だと言えます。</div>
                    <!-- 4カラムレイアウト挿入 -->
                    <div class="service__promotion__list">
                        <div class="service__promotion__item service__promotion__item--4col">
                            <div class="service__promotion__circle service__promotion__circle--offline">
                                <p>チラシ・販促物</p>
                            </div>
                            <div class="service__promotion__desc">比較的一番、手軽に試せる手法です。作成費用も、あまり高くなく、低予算で行えます。</div>
                        </div>
                        <div class="service__promotion__item service__promotion__item--4col">
                            <div class="service__promotion__circle service__promotion__circle--offline">
                                <p>ダイレクトメール</p>
                            </div>
                            <div class="service__promotion__desc">クーポンや限定情報などをつけることで、どのくらいの効果があったか測定することが可能です。</div>
                        </div>
                        <div class="service__promotion__item service__promotion__item--4col">
                            <div class="service__promotion__circle service__promotion__circle--offline">
                                <p>展示会・イベント</p>
                            </div>
                            <div class="service__promotion__desc">参加者と企業をより結びつけ、商品や企業に対してポジティブな印象を与えられる効果が期待できます。</div>
                        </div>
                        <div class="service__promotion__item service__promotion__item--4col">
                            <div class="service__promotion__circle service__promotion__circle--offline">
                                <p>看板・広告</p>
                            </div>
                            <div class="service__promotion__desc">バスや駅などの広告や新聞など、コストとともに効果も大きく異なります。</div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /プロモーション・広告運用 -->

        <!-- イベント企画・運営 -->
        <section id="service03" class="l-service ec-site">
            <h3 class="service-title">
                イベント企画・運営
            </h3>
            <div class="service">
                <div class="service__contain">
                    <div class="service__contain__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-img03.png" alt="service03">
                    </div>
                    <div class="service__contain__desc">
                        <p class="service__contain__text">参加者・主催者の期待を超えたところにサプライズや感動は生まれます。<br>様々なイベントの円滑な開催には欠かせない企画・運営・演出・進行・手配関係をワンストップでサポートいたします。</p>
                    </div>
                </div>
                <div class="service__bg"></div>
                <div class="service__event">
                    <h4 class="service__event__title">企画から実施運営まで<br class="sp-on"><span class="pc-on">企業イベントで感動を創出</span><span class="sp-on" style="text-align: right;">企業イベントで感動を創出</span></h4>
                    <p class="service__event__text">新しいアイデア、高いクオリティ、細やかなホスピタリティで、参加者はもちろん、主催者の期待も超えた『感動』を共有できるイベントをトータルプロデュースします。<br>
                        会議室クラスから、アリーナクラスまで幅広く対応しています。<br>
                        イベントの開催についてお気軽にご相談ください。</p>
                </div>
                <div class="service__event">
                    <h4 class="service__event__title">新鮮なサプライズを提供する<br class="sp-on"><span class="pc-on">「新しいアイデア」</span><span class="sp-on" style="text-align: right;">「新しいアイデア」</span></h4>
                    <p class="service__event__text">様々なイベントプロデュースのプロフェッショナルとして、あらゆるイベントでアイデアを形にできるプランニングスキル、演出進行技術を有するのが強みです。<br>
                        Withコロナ時代において、安全で効果的なイベントを実施するためには、計画から準備段階、そして当日の運営や万が一感染が発生した場合の適切な対応が必要不可欠です。</p>
                </div>
            </div>
        </section>
        <!-- /イベント企画・運営 -->

        <!-- スポーツ施設企画・運営 -->
        <section id="service04" class="l-service ec-site">
            <h3 class="service-title">
                スポーツ施設企画・運営
            </h3>
            <div class="service service-reverse">
                <div class="service__contain-reverse">
                    <div class="service__contain__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/service/service-img04.png" alt="service04">
                    </div>
                    <div class="service__contain__desc">
                        <p class="service__contain__text-reverse">会社や製品のイメージ作りに始ま<br class="pc-on">り、「欲しい」と思ってもらうた<br class="pc-on">めの販売促進プロモーション。<br class="pc-on"><br>
                            しっかりとした戦略が非常に大事<br class="pc-on">になってきます。</p>
                    </div>
                </div>
                <div class="service__bg-reverse"></div>
                <p class="service__sports">誰もが、いつでも・気軽に・安心してスポーツを楽しむことができるよう、より多くの方々がスポーツに
                    参画するためのの機会を確保するための適正な管理運営を行っていくことを目指しています。
                    開催のお話が持ち上がったら、まずはご相談ください。</p>
            </div>
        </section>
        <!-- /スポーツ施設企画・運営 -->

        <?php get_template_part('inc/l-contact'); ?>

    </main>

   <?php get_footer(); ?>



   <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>
