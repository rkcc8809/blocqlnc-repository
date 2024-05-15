<?php
// 現在の言語を取得
$current_language = get_locale();

// 言語に応じたフッター設定ページのスラッグを設定
if ($current_language === 'en_US') {
  $footer_page_slug = 'footer-setting-en';
  $footer_menu_name = 'footer_menu-en';
} else {
  $footer_page_slug = 'footer-setting';
  $footer_menu_name = 'footer_menu';
}

// フッター設定ページのIDを取得
$footer_page_id = get_page_by_path($footer_page_slug)->ID;
?>

<footer class="footer" id="footer">
  <div class="footer-wrap __inner">
    <div class="footer-wrap__btn">
      <div class="footer-wrap__btn__circle">
        <a href="#" class="scroll-to-top">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
            <path fill="currentColor" fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
          </svg>
        </a>
      </div>
    </div>
    <div class="footer-wrap__con">
      <div class="footer-wrap__con__left">
        <h2>
          <?php
          $footer_text_1 = get_field('footer_text_1', $footer_page_id);
          echo $footer_text_1 ? $footer_text_1 : 'GET IN TOUCH WITH US';
          ?>
          <span>
            <?php
            $footer_text_2 = get_field('footer_text_2', $footer_page_id);
            echo $footer_text_2 ? $footer_text_2 : 'お気軽にお問い合わせください。';
            ?>
          </span>
        </h2>
      </div>
      <div class="footer-wrap__con__right">
        <div class="footer-wrap__con__right__btn">
          <?php
          // Bogoの現在の言語を取得
          if (function_exists('bogo_get_current_language')) {
            $current_language = bogo_get_current_language();
          } else {
            $current_language = 'ja'; // デフォルトの言語を設定
          }

          // 言語に応じたACFフィールドからリンクを取得
          if ($current_language == 'en') {
            $contact_link = get_field('contact_link_en');
          } else {
            $contact_link = get_field('contact_link_jp');
          }

          // リンクが設定されているか確認
          if ($contact_link) :
            $link_url = $contact_link['url'];
          ?>
            <a href="<?php echo esc_url($link_url); ?>">Contact us</a>
          <?php else : ?>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact us')->ID)); ?>">Contact us</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="footer-wrap__link">
      <div class="footer-wrap__link__logo">
        <a href="<?php echo home_url(); ?>" class="footer-wrap__link__logo__first">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ画像" />
        </a>
        <a href="<?php echo get_permalink(get_page_by_path('privacy policy')->ID); ?>" class="footer-wrap__link__logo__second">
          <p>
            <?php
            $footer_privacy_policy = get_field('footer_privacy_policy', $footer_page_id);
            echo $footer_privacy_policy ? $footer_privacy_policy : 'プライバシーポリシー';
            ?>
          </p>
        </a>
      </div>
      <nav class="footer-wrap__link__nav">
        <?php
        $args = array(
          'menu' => $footer_menu_name, // 言語に応じたメニュー名
          'menu_class' => 'footer-wrap__link__nav__list', // メニューを構成するulタグのクラス名
          'container' => false, // <ul>タグを囲んでいる<div>タグを削除
        );
        // カスタムメニューを表示
        wp_nav_menu($args);
        ?>
      </nav>
    </div>
    <div class="footer-wrap__copyright">
      <small>
        <?php
        $footer_copyright = get_field('footer_copyright', $footer_page_id);
        echo $footer_copyright ? $footer_copyright : '© Blocq, Inc.2024.';
        ?>
      </small>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>