
<footer class="l-footer">
        <!-- footer-menu -->
        <nav class="l-footer__nav">
            <ul class="l-footer__list">
                <li class="l-footer__item">
                    <figure class="l-footer__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo-white.png" alt="G planning">
                    </figure>
                    <p class="l-footer__ceo">株式会社 G planning<br>
                        代表取締役　石谷元記</p>
                    <p class="l-footer__address">〒５４７−００３１<br>
                        大阪府大阪市平野区平野南2-1-2 405</p>
                    <p class="l-footer__tel">０９０－９４２１－６９７９</p>
                </li>
                <li class="l-footer__item">
                    <p class="l-footer__title"><a href="<?php the_permalink(12); ?>"><span class="l-footer__title--delta">▶</span>事業内容</p></a>
                    <p class="l-footer__text">ECサイト構築運用代行・SNS運用代行<br>
                        イベント企画・運営<br>
                        スポーツ施設企画・運営<br>
                        広告運用　</p>
                </li>
                <li class="l-footer__item">
                    <p class="l-footer__title"><a href="<?php the_permalink(22); ?>"><span class="l-footer__title--delta">▶</span>会社概要</a></p>
                    <p class="l-footer__text">企業情報・代表挨拶・アクセス</p>
                    <p class="l-footer__title"><a href="<?php echo get_post_type_archive_link("news"); ?>"><span class="l-footer__title--delta">▶</span>お知らせ</a></p>
                    <p class="l-footer__title"><a href="<?php the_permalink(20); ?>"><span class="l-footer__title--delta">▶</span>よくある質問</a></p>
                    <p class="l-footer__title"><a href="<?php the_permalink(8); ?>"><span class="l-footer__title--delta">▶</span>お問合せ</a></p>
                    <p class="l-footer__title"><a href="<?php the_permalink(5); ?>"><span class="l-footer__title--delta">▶</span>プライバシーポリシー</a></p>
                </li>
                <li class="l-footer__item">
                    <figure class="l-footer__logo">
                        <a href="https://www.instagram.com/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/common/instagram.png" alt="instagram" class="instagram">
                        </a>
                    </figure>
                </li>
            </ul>
        </nav>
        <!-- /footer-menu -->
        <p class="l-footer__copyright">©G PLANNING inc.</p>
    </footer>