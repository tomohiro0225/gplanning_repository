<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから受け取ったデータを取得
    $company_name = $_POST['company_name'];
    $kanji_sei = $_POST['kanji_sei'];
    $kanji_mei = $_POST['kanji_mei'];
    $kana_sei = $_POST['kana_sei'];
    $kana_mei = $_POST['kana_mei'];
    $address = $_POST['address'];
    $address_check = $_POST['address_check'];
    $text = $_POST['text'];
    $tel_1 = $_POST['tel_1'];
    $tel_2 = $_POST['tel_2'];
    $tel_3 = $_POST['tel_3'];
    $inquiry = $_POST['inquiry'];

    // 漢字の姓名が入っていない時の処理
    if(!empty($kanji_sei) && !empty($kanji_mei)){
        $kanji_total = 1;
    }else{
        // エラー出力文
        $kanji_error = 'ご担当者名が入力されていません';
    }

    // フリガナの姓名が入っていない時の処理
    if (!empty($kana_sei) && !empty($kana_mei)) {
        // フリガナはカタカナで入力されているかを見る処理をここに書いていく
        if (preg_match('/^[\p{Katakana}ー]+$/u', $kana_sei) && preg_match('/^[\p{Katakana}ー]+$/u', $kana_mei)) {
            // カタカナまたはひらがなであるとき
            $kana_total = 1;
        } else {
            // カタカナまたはひらがなでない場合
            $kana_error = "フリガナがカタカナになっていません。";
        }
    } else {
        // エラー出力文
        $kana_error = 'フリガナが入力されていません';
    }


    // アドレスが一致しない時の処理
    if($address === $address_check){
        if(!empty($address) && !empty($address_check)){
            $mail_total = 1;
        }else{
            // メールフォームが入力されていない時の処理
            if(empty($address)){
                // エラー出力文
                $mail_error = 'メールアドレスが入力されていません';
            }
            if(empty($address_check)){
                // エラー出力文
                $mail_check_error = 'メールアドレス(確認)が入力されていません';
            }
        }
    }else{
        // メールフォームが入力されていない時の処理
        if(empty($address)){
            // エラー出力文
            $mail_error = 'メールアドレスが入力されていません';
        }
        if(empty($address_check)){
            // エラー出力文
            $mail_check_error = 'メールアドレス(確認)が入力されていません';
        }
        // エラー出力文
        $mail_total_error = 'メールアドレスとメールアドレス(確認)が一致していません';
    }

    // お電話番号が入っていない時の処理
    if(!empty($tel_1) && !empty($tel_2) && !empty($tel_3)){
        $tel_total = 1;
    }else{
        // エラー出力文
        $tel_error = 'お電話番号が入力されていません';
    }


    // お問い合わせ内容が入っていない時の処理
    if(!empty($text)){
        $text_total = 1;
    }else{
        // エラー出力文
        $text_error = 'お問い合わせ内容を入力されていません';
    }

    // 個人情報の取り扱いについてチェックがされていない時の処理
    switch ($_POST['privacy-check']) {
        case 'プライバシーポリシーに同意します。':
            $privacy_total = 1;
            break;
        default:
            $privacy_error = 'プライバシーポリシーに同意されていません';
            break;
    }

    $no_error = $kanji_total + $kana_total + $mail_total + $tel_total + $text_total + $privacy_total;
    $empty_total = 6 - $no_error;
    // 上記のエラーを全て足して、一致したときにメールが送信される処理
        if($no_error == 6){
            // 送信元と送信先のメールアドレス
            $to = $address; // 送信先メールアドレス
            $subject = 'お問い合わせフォームからのメッセージ';
        
            // メール本文を構築
            $message = "お問い合わせ内容:\n" . $text . "\n\n";
            $message .= "会社名: " . $company_name . "\n";
            $message .= "担当者名: " . $kanji_sei . " " . $kanji_mei . "\n";
            $message .= "ふりがな: " . $kana_sei . " " . $kana_mei . "\n";
            $message .= "メールアドレス: " . $address . "\n";
            $message .= "お電話番号: " . $tel_1 . "-" . $tel_2 . "-" . $tel_3 . "\n";
        
            // 送信元のメールアドレス
            $headers = 'express22212270@gmail.com';
        
            // メールが送信されたかされていないかの確認
            if (mail($to, $subject, $message, $headers)) {
                $total = 'メールが送信されました';
            } else {
                // エラー出力文
                $total = 'メールの送信に失敗しました';
                // エラーを表示
                echo 'メール送信エラー: ' . error_get_last()['message'];
            }
        }else{
            // エラー出力文
            $total = '入力されていない必須項目があります';
            
            // 失敗したときにフラグが立つ
            $submit_failure_flug = 1;

            // PHPからJSへの橋渡しcode
            $flug = "<script>var submit_failure_flug = $submit_failure_flug;</script>";
            
        }



    }
?>

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
           <!-- エラーテキスト -->
            <form method="POST" class="contact-form__form" id="failure">
                <ul class="contact-form__items">

                    <!-- アイテム 御社名 -->
                    <li class="contact-form__item">
                        <p class="error-text big"><?php echo $total;?></p>
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">御社名</span>
                            </dt>
                            <dd>
                                <input type="text" name="company_name" value="<?php echo isset($_POST['company_name']) ? htmlspecialchars($_POST['company_name'], ENT_QUOTES) : ''; ?>" placeholder="株式会社 G-planning" style="max-width: 300px;">
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
                                <input class="contact-form__item__name--input" value="<?php echo isset($_POST['kanji_sei']) ? htmlspecialchars($_POST['kanji_sei'], ENT_QUOTES) : ''; ?>" name="kanji_sei" type="text">
                                <span class="contact-form__item__name--example">名</span>
                                <input class="contact-form__item__name--input" value="<?php echo isset($_POST['kanji_mei']) ? htmlspecialchars($_POST['kanji_mei'], ENT_QUOTES) : ''; ?>" name="kanji_mei" type="text">
                            </dd>
                        </dl>
                        <p class="error-text"><?php echo  $kanji_error;?></p>
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
                                <input class="contact-form__item__name--input" name="kana_sei" value="<?php echo isset($_POST['kana_sei']) ? htmlspecialchars($_POST['kana_sei'], ENT_QUOTES) : ''; ?>" type="text">
                                <span class="contact-form__item__name--example">メイ</span>
                                <input class="contact-form__item__name--input" name="kana_mei" value="<?php echo isset($_POST['kana_mei']) ? htmlspecialchars($_POST['kana_mei'], ENT_QUOTES) : ''; ?>" type="text">
                            </dd>
                        </dl>
                        <p class="error-text"><?php echo  $kana_error;?></p>
                    </li><!-- /アイテム フリガナ -->
        
                    <!-- アイテム メールアドレス -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">メールアドレス</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd class="contact-form__item__mail">
                                <input class="contact-form__item__mail--input" type="text" name="address" value="<?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address'], ENT_QUOTES) : ''; ?>" placeholder="example@g-planning.co.jp">
                            </dd>
                        </dl>
                        <p class="error-text"><?php echo  $mail_error;?></p>
                    </li><!-- /アイテム メールアドレス -->
                    
                    <!-- アイテム メールアドレス(確認) -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">メールアドレス(確認)</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd class="contact-form__item__mail">
                                <input class="contact-form__item__mail--input" type="text" name="address_check" value="<?php echo isset($_POST['address_check']) ? htmlspecialchars($_POST['address_check'], ENT_QUOTES) : ''; ?>" placeholder="example@g-planning.co.jp">
                            </dd>
                        </dl>
                        <p class="error-text"><?php echo  $mail_check_error;?></p>
                        <p class="error-text"><?php echo  $mail_total_error;?></p>
                    </li><!-- /アイテム メールアドレス(確認) -->
        
                    <!-- アイテム お電話番号 -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">お電話番号</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd class="contact-form__item__tel">
                                <input  class="contact-form__item__tel--input" type="text" value="<?php echo isset($_POST['tel_1']) ? htmlspecialchars($_POST['tel_1'], ENT_QUOTES) : ''; ?>" name="tel_1" placeholder="000">
                                <div class="contact-form__item__tel--line"></div>
                                <input  class="contact-form__item__tel--input" type="text" value="<?php echo isset($_POST['tel_2']) ? htmlspecialchars($_POST['tel_2'], ENT_QUOTES) : ''; ?>" name="tel_2" placeholder="0000">
                                <div class="contact-form__item__tel--line"></div>
                                <input  class="contact-form__item__tel--input" type="text" value="<?php echo isset($_POST['tel_3']) ? htmlspecialchars($_POST['tel_3'], ENT_QUOTES) : ''; ?>" name="tel_3" placeholder="0000">
                            </dd>
                        </dl>
                        <p class="error-text"><?php echo  $tel_error;?></p>
                    </li><!-- /アイテム お電話番号 -->
        
                    <!-- アイテム お問合せ内容 -->
                    <li class="contact-form__item">
                        <dl>
                            <dt class="contact-form__title">
                              <span class="contact-form__title--name">お問合せ内容</span>
                              <span class="contact-form__label contact-form__label-danger">必須</span>
                            </dt>
                            <dd  class="contact-form__item__inquiry">
                                <textarea class="contact-form__item__inquiry--textarea" name="text" rows="3" placeholder="お問合せ内容を入力してください"><?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text'], ENT_QUOTES) : ''; ?></textarea>
                            </dd>
                        </dl>
                        <p class="error-text"><?php echo  $text_error;?></p>
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
                                        <input class="check-box" type="checkbox" name="privacy-check" value="プライバシーポリシーに同意します。">
                                        <span class="contact-form__privicy--doui">プライバシーポリシーに同意します。</span>
                                    </div>
                                    <a href="<?php the_permalink(5); ?>" class="contact-form__privicy-link">プライバシーポリシー</a>
                            </dd>
                        </dl>
                        <p class="error-text"><?php echo  $privacy_error;?></p>
                    </li><!-- /アイテム 個人情報取り扱い -->
        
                </ul>
                
                <!-- ボタン -->
                    <input class="contact-form--submit" type="submit" value="送信する">
                    <!-- /ボタン -->
            </form>
        </section>
        <!-- /contactForm -->

        <?php get_template_part('inc/l-contact'); ?>

    </main>

    <?php get_footer(); ?>

    <style>
        .error-text{
            margin-top: 10px;
            font-size: 16px;
            text-align: center;
            color: red;
            font-weight: bold;
        }
        .error-text.big{
            font-size: 32px;
            margin-bottom: 50px;
        }
        
        @media screen and (max-width:768px) {
            .error-text{
                font-size: 12px;
            }
            .error-text.big{
                font-size: 18px;
                margin-bottom: 30px;
            }


        }
    </style>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <?php echo $flug; ?>
    <script>
        $(function(){
            var scroll_flug = submit_failure_flug;
  
            let percent = document.querySelector('.js-text');
            $(percent).text(scroll_flug).append('<span>⇒１が表示されたらフラグ立っている</span>');

                // 送信失敗したときに発動する
                if(scroll_flug === 1){
                // submit_failure_flagが1の場合に実行されるコード
                $('html, body').animate({
                    scrollTop: $('#failure').offset().top
                }, 1000); // 1000はアニメーションのスピード（ミリ秒単位で指定）
                }
        });
    </script>
    <script>
        new WOW().init();
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>
</html>