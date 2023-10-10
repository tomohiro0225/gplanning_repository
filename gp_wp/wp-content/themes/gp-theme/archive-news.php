<?php get_header(); ?>

        

        <!-- keyvisual -->
        <div class="keyVisual">
            <div class="keyVisual__bg-lightblue"></div>
            <div class="keyVisual__bg-blue"></div>
            <div class="keyVisual__title">
                <p class="keyVisual__title-txt keyVisual__title-txt--big">News</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/kv-line.png" alt="underline" class="keyVisual__title-underline">
            </div>
        </div>
        <!-- /keyvisual -->

        <!-- breadcrumb -->
        <div class="c-breadcrumb pc-on">
            <ul class="c-breadcrumb__lists">
            <li class="c-breadcrumb__list"><a href="<?php echo home_url(); ?>">TOP</a></li>
            <li class="c-breadcrumb__list">></li>
            <li class="c-breadcrumb__list"><a href="#">NEWS</a></li>
            </ul>
        </div>
        <!-- /breadcrumb -->

        <!-- news -->
        <section class="news">
            <!-- 見出し -->
            <h2 class="c-secTitle">
                <span>NEWS</span><br>
                <span>新着情報</span>
            </h2><!-- /見出し -->

            <!-- お知らせ -->
            <ul class="news__list">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <!-- お知らせの中身 -->
                <li class="news__item">
                    <a href="<?php the_permalink(); ?>">
                        <p class="news__date"><?php echo the_time('Y.m.d'); ?></p>
                        <h3 class="news__title"><?php echo the_title(); ?></h3>
                        <div class="news__text"><?php echo the_content(); ?></div>

                    </a>
                </li>
                <!-- /お知らせの中身 -->
                <?php endwhile; endif; ?>
            </ul>
            <!-- /お知らせ -->

            <!-- ページャー -->
        <?php get_template_part('inc/pager'); ?>
            <!-- ページャー -->
        </section>
        <!-- /news -->

        <?php get_template_part('inc/l-contact'); ?>

    </main>

    <?php get_footer(); ?>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>