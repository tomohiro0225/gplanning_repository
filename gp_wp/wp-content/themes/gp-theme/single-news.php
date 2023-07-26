<?php get_header(); ?>

        <!-- breadcrumb -->
        <!-- <div class="c-breadcrumb pc-on">
            <ul class="c-breadcrumb__lists">
            <li class="c-breadcrumb__list"><a href="#">TOP</a></li>
            <li class="c-breadcrumb__list">></li>
            <li class="c-breadcrumb__list"><a href="#">PRAIVACY POLICY</a></li>
            </ul>
        </div> -->
        <!-- /breadcrumb -->
            <!-- 見出し -->
            <h2 class="c-secTitle">
                <span><?php echo the_title(); ?></span><br>
                <span>シングルお知らせ</span>
            </h2><!-- /見出し -->

        <?php get_template_part('inc/l-contact'); ?>

    </main>

    <?php get_footer(); ?>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</body>
</html>