<?php get_header(); ?>


        <!-- keyvisual -->
        <div class="keyVisual">
            <div class="keyVisual__bg-lightblue"></div>
            <div class="keyVisual__bg-blue"></div>
            <div class="keyVisual__title">
                <p class="keyVisual__title-txt keyVisual__title-txt--big">Question</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/kv-line.png" alt="underline" class="keyVisual__title-underline">
            </div>
        </div>
        <!-- /keyvisual -->

        <!-- breadcrumb -->
        <div class="c-breadcrumb pc-on">
            <ul class="c-breadcrumb__lists">
            <li class="c-breadcrumb__list"><a href="<?php echo home_url(); ?>">TOP</a></li>
            <li class="c-breadcrumb__list">></li>
            <li class="c-breadcrumb__list"><a href="#">Q&A</a></li>
            </ul>
        </div>
        <!-- /breadcrumb -->

        <!-- faq -->
        <section class="faq">
            <!-- 見出し -->
            <h2 class="c-secTitle">
                <span>Q&A</span><br>
                <span>よくある質問</span>
            </h2><!-- /見出し -->

            <!-- 質問リスト -->
            <ul class="faq__list">

                <li class="faq__item">
                    <div class="faq__question">
                        <div class="faq__question__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/q&a/question.png" alt="question">
                        </div>
                        <h3 class="faq__question__title">全くの素人です。ECサイトの制作に必要なものを教えてもらえますか？</h3>
                    </div>
                    <div class="faq__answer">
                        <div class="faq__answer__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/q&a/answer.png" alt="answer">
                        </div>
                        <p class="faq__answer__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>
                
                <li class="faq__item">
                    <div class="faq__question">
                        <div class="faq__question__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/q&a/question.png" alt="question">
                        </div>
                        <h3 class="faq__question__title">テキストテキストテキストテキストテキストテキストテキスト</h3>
                    </div>
                    <div class="faq__answer">
                        <div class="faq__answer__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/q&a/answer.png" alt="answer">
                        </div>
                        <p class="faq__answer__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>
                <li class="faq__item">
                    <div class="faq__question">
                        <div class="faq__question__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/q&a/question.png" alt="question">
                        </div>
                        <h3 class="faq__question__title">テキストテキストテキストテキストテキストテキストテキスト</h3>
                    </div>
                    <div class="faq__answer">
                        <div class="faq__answer__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/q&a/answer.png" alt="answer">
                        </div>
                        <p class="faq__answer__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>
                <li class="faq__item">
                    <div class="faq__question">
                        <div class="faq__question__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/q&a/question.png" alt="question">
                        </div>
                        <h3 class="faq__question__title">テキストテキストテキストテキストテキストテキストテキスト</h3>
                    </div>
                    <div class="faq__answer">
                        <div class="faq__answer__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/q&a/answer.png" alt="answer">
                        </div>
                        <p class="faq__answer__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>
                <li class="faq__item">
                    <div class="faq__question">
                        <div class="faq__question__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/q&a/question.png" alt="question">
                        </div>
                        <h3 class="faq__question__title">テキストテキストテキストテキストテキストテキストテキスト</h3>
                    </div>
                    <div class="faq__answer">
                        <div class="faq__answer__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/q&a/answer.png" alt="answer">
                        </div>
                        <p class="faq__answer__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>

            </ul>
            <!-- 質問リスト -->
        </section>
        <!-- /faq -->

        <?php get_template_part('inc/l-contact'); ?>

    </main>

   <?php get_footer(); ?>



   <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>