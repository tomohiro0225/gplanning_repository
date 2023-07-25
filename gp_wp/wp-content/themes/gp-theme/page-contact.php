<?php get_header(); ?>

        <!-- breadcrumb -->
        <div class="c-breadcrumb pc-on">
            <ul class="c-breadcrumb__lists">
            <li class="c-breadcrumb__list"><a href="#">TOP</a></li>
            <li class="c-breadcrumb__list">></li>
            <li class="c-breadcrumb__list"><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- /breadcrumb -->

        <!-- contactForm -->
        <section class="contactForm">
            <!-- 見出し -->
            <h2 class="c-secTitle">
                <span>Contact</span><br>
                <span>お問合せ</span>
            </h2><!-- /見出し --> 
            <form class="contactForm__inner">
                <ul>
                    
                    <!-- アイテム お問合せ内容 -->
                    <li class="contactForm__item">
                        <dl>
                            <dt>
                                <span class="contactForm__title">お問合せ内容</span>
                                <span class="contactForm--label">*</span>
                            </dt>
                            <dd><textarea class="cp-riset-textarea" rows="3"></textarea></dd>
                        </dl>
                    </li><!-- /アイテム お問合せ内容 -->

                    <!-- アイテム 氏名 -->
                    <li class="contactForm__item">
                        <dl>
                            <dt>
                                <span class="contactForm__title">お名前</span>
                                <span class="contactForm--label">*</span>
                            </dt>
                            <dd>
                                <div class="contactForm__names">
                                    <div class="contactForm__name">
                                        <input type="text">
                                        <span class="contactForm__description">姓</span>
                                    </div>
                                    <div class="contactForm__name">
                                        <input type="text">
                                        <span class="contactForm__description">名</span>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    </li><!-- /アイテム 氏名 -->

                    <!-- アイテム メールアドレス -->
                    <li class="contactForm__item">
                        <dl>
                            <dt>
                                <span class="contactForm__title">メール</span>
                                <span class="contactForm--label">*</span>
                            </dt>
                            <dd>
                                <input type="text">
                            </dd>
                        </dl>
                    </li><!-- /アイテム メールアドレス -->

                </ul>

                <!-- プライバシーポリシー同意 -->
                <p class="contactForm__privacy">
                    <label><input type="checkbox" name="check-name"><span><a href="privacy.html">プライバシーポリシー</a>に同意する<span class="contactForm--label">*</span></span></label>
                    <span class="contactForm__privacy__text">弊社の<a href="privacy.html">プライバシーポリシー</a>をご確認いただき、同意のうえ送信してください。</span>
                </p><!-- /プライバシーポリシー同意 -->
                
                <!-- ボタン -->
                <p class="contactForm__btn">
                    <input class="contactForm__submit" type="button" value="送信する">
                </p><!-- /ボタン -->
                
            </form>
        </section>
        <!-- /contactForm -->

        <?php get_template_part('inc/l-contact'); ?>

    </main>

    <?php get_footer(); ?>



    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</body>
</html>