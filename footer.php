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
          GET IN TOUCH WITH US
          <span>お気軽にお問い合わせください。</span>
        </h2>
      </div>
      <div class="footer-wrap__con__right">
        <div class="footer-wrap__con__right__btn">
          <a href="<?php echo get_permalink(get_page_by_path('contact us')->ID); ?>"> Contact us </a>
        </div>
      </div>
    </div>
    <div class="footer-wrap__link">
      <div class="footer-wrap__link__logo">
        <a href="<?php echo home_url(); ?>" class="footer-wrap__link__logo__first">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ画像" />
        </a>
        <a href="<?php echo get_permalink(get_page_by_path('privacy policy')->ID); ?>" class="footer-wrap__link__logo__second">
          <p>プライバシーポリシー</p>
        </a>
      </div>
      <nav class="footer-wrap__link__nav">
        <!-- <ul class="footer-wrap__link__nav__list">
          <li class="footer-wrap__link__nav__list__item">
            <a href="/">HOME</a>
          </li>
          <li class="footer-wrap__link__nav__list__item">
            <a href="service.html">SERVICE</a>
          </li>
          <li class="footer-wrap__link__nav__list__item">
            <a href="company.html">COMPANY</a>
          </li>
          <li class="footer-wrap__link__nav__list__item">
            <a href="news-all.html">NEWS</a>
          </li>
          <li class="footer-wrap__link__nav__list__item">
            <a href="blog-all.html">BLOG</a>
          </li>
        </ul> -->
        <?php
        $args = array(
          'menu' => 'footer_menu', // 管理画面で作成したメニュー名
          'menu_class' => 'footer-wrap__link__nav__list', // メニューを構成するulタグのクラス名
          'container' => false, // <ul>タグを囲んでいる<div>タグを削除
        );
        // カスタムメニューを表示
        wp_nav_menu($args);
        ?>
      </nav>
    </div>
    <div class="footer-wrap__copyright">
      <small>© Blocq, Inc.2024.</small>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/header.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>