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
            <li class="c-breadcrumb__list"><a href="<?php echo get_post_type_archive_link("news"); ?>">News</a></li>
            <li class="c-breadcrumb__list">></li>
            <li class="c-breadcrumb__list"><a href="#"><?php echo the_title(); ?></a></li>
            </ul>
        </div>
        <!-- /breadcrumb -->

        <!-- news -->
        <section class="single-news">
                <div class="single-news__inner">
                    <p class="single-news__date"><?php echo the_time('Y.m.d'); ?></p>
                    <h2 class="single-news__title"><?php echo the_title(); ?></h2>
                    <div class="single-news__content"><?php echo the_content(); ?></div>
                </div>
        </section>
        <!-- /news -->

        <?php get_template_part('inc/l-contact'); ?>

    </main>

    <?php get_footer(); ?>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>