<?php get_header(); ?>

    <main>

        <!-- keyvisual -->
        <div class="keyVisual">
            <div class="keyVisual__bg-lightblue"></div>
            <div class="keyVisual__bg-blue"></div>
            <div class="keyVisual__title">
                <p class="keyVisual__title-txt">index.php</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/kv-line.png" alt="underline" class="keyVisual__title-underline">
            </div>
        </div>
        <!-- /keyvisual -->

        <!-- breadcrumb -->
        <!-- <div class="c-breadcrumb pc-on">
            <ul class="c-breadcrumb__lists">
            <li class="c-breadcrumb__list"><a href="#">TOP</a></li>
            <li class="c-breadcrumb__list">></li>
            <li class="c-breadcrumb__list"><a href="#">PRAIVACY POLICY</a></li>
            </ul>
        </div> -->
        <!-- /breadcrumb -->

        <?php get_template_part('inc/l-contact'); ?>

    </main>

    <?php get_footer(); ?>


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</body>
</html>