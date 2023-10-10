<?php get_header(); ?>


        <!-- keyvisual -->
        <div class="keyVisual">
            <div class="keyVisual__bg-lightblue"></div>
            <div class="keyVisual__bg-blue"></div>
            <div class="keyVisual__title">
                <p class="keyVisual__title-txt keyVisual__title-txt--big">Contact</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/kv-line.png" alt="underline" class="keyVisual__title-underline">
            </div>
        </div>
        <!-- /keyvisual -->

        <!-- breadcrumb -->
        <div class="c-breadcrumb pc-on">
            <ul class="c-breadcrumb__lists">
            <li class="c-breadcrumb__list"><a href="<?php echo home_url(); ?>">TOP</a></li>
            <li class="c-breadcrumb__list">></li>
            <li class="c-breadcrumb__list"><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- /breadcrumb -->

        <!-- contactForm -->
        <section class="contact-form">
            <!-- 見出し -->
            <h2 class="c-secTitle">
                <span>Contact</span><br>
                <span>お問合せ</span>
            </h2><!-- /見出し --> 
            <form class="contact-form__form">
                <ul class="contact-form__items">

                    <!-- アイテム 御社名 -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">御社名</span>
                            </dt>
                            <dd>
                                <input type="text" placeholder="株式会社 G-planning" style="width: 300px;">
                            </dd>
                        </dl>
                    </li><!-- /アイテム 御社名 -->
        
                    <!-- アイテム お名前 -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">ご担当者名</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd class="contact-form__item__name">
                                <span class="contact-form__item__name--example">姓</span>
                                <input class="contact-form__item__name--input" type="text">
                                <span class="contact-form__item__name--example">名</span>
                                <input class="contact-form__item__name--input" type="text">
                            </dd>
                        </dl>
                    </li><!-- /アイテム お名前 -->
        
                    <!-- アイテム フリガナ -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">フリガナ</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd class="contact-form__item__name">
                                <span class="contact-form__item__name--example">セイ</span>
                                <input class="contact-form__item__name--input" type="text">
                                <span class="contact-form__item__name--example">メイ</span>
                                <input class="contact-form__item__name--input" type="text">
                            </dd>
                        </dl>
                    </li><!-- /アイテム フリガナ -->
        
                    <!-- アイテム メールアドレス -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">メールアドレス</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd class="contact-form__item__mail">
                                <input class="contact-form__item__mail--input" type="text" placeholder="example@g-planning.co.jp">
                            </dd>
                        </dl>
                    </li><!-- /アイテム メールアドレス -->
                    
                    <!-- アイテム メールアドレス(確認) -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">メールアドレス(確認)</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd class="contact-form__item__mail">
                                <input class="contact-form__item__mail--input" type="text" placeholder="example@g-planning.co.jp">
                            </dd>
                        </dl>
                    </li><!-- /アイテム メールアドレス(確認) -->
        
                    <!-- アイテム お電話番号 -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">お電話番号</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd class="contact-form__item__tel">
                                <input  class="contact-form__item__tel--input" type="text" placeholder="000">
                                <div class="contact-form__item__tel--line"></div>
                                <input  class="contact-form__item__tel--input" type="text" placeholder="0000">
                                <div class="contact-form__item__tel--line"></div>
                                <input  class="contact-form__item__tel--input" type="text" placeholder="0000">
                            </dd>
                        </dl>
                    </li><!-- /アイテム お電話番号 -->
        
                    <!-- アイテム お問合せ内容 -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">お問合せ内容</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd  class="contact-form__item__inquiry">
                              <textarea  class="contact-form__item__inquiry--textarea" rows="3" placeholder="お問合せ内容を入力してください"></textarea>
                            </dd>
                        </dl>
                    </li><!-- /アイテム お問合せ内容 -->
        
                    <!-- アイテム 個人情報取り扱い -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">個人情報取り扱い</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd  class="contact-form__privicy">
                                    <div class="contact-form__privicy__check">
                                        <input class="check-box" type="checkbox" name="check-name">
                                        <span class="contact-form__privicy--doui">プライバシーポリシーに同意します。</span>
                                    </div>
                                    <a href="<?php the_permalink(5); ?>" class="contact-form__privicy-link">プライバシーポリシー</a>
                            </dd>
                        </dl>
                    </li><!-- /アイテム 個人情報取り扱い -->
        
                </ul>
                
                <!-- ボタン -->
                    <input class="contact-form--submit" type="button" value="送信する">
                    <!-- /ボタン -->
                
            </form>
        </section>
        <!-- /contactForm -->

        <?php get_template_part('inc/l-contact'); ?>

    </main>

    <?php get_footer(); ?>




    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>