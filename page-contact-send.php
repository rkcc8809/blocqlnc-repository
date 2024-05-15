<?php get_header('contact-send'); ?>
<main>
  <section class="top" id="top">
    <div class="top-wrap">
      <div class="top-wrap__ttl">
        <h1>
          <span class="initial-text__sub">
            <?php
            $contact_send_initial_text = get_field('contact_send_initial_text');
            echo $contact_send_initial_text ? $contact_send_initial_text : 'C';
            ?></span><?php
                      $contact_send_main_ttl = get_field('contact_send_main_ttl');
                      echo $contact_send_main_ttl ? $contact_send_main_ttl : 'ONTACT';
                      ?>
          <br />
          <span class="ttl__sub">
            <?php
            $contact_send_sub_ttl = get_field('contact_send_sub_ttl');
            echo $contact_send_sub_ttl ? $contact_send_sub_ttl : 'お問い合わせ';
            ?>
          </span>
        </h1>
      </div>
    </div>
  </section>
  <?php get_template_part('breadcrumb'); ?>

  <!-- <section class="breadcrumb __section2" id="breadcrumb">
    <div class="breadcrumb-wrap __inner3">
      <nav class="breadcrumb-wrap__nav">
        <ol class="breadcrumb-wrap__nav__list">
          <li class="breadcrumb-wrap__nav__list__item">
            <a href="<?php echo home_url(); ?>">HOME</a>
          </li>
          <li class="breadcrumb-wrap__nav__list__item">
            <p>-</p>
          </li>
          <li class="breadcrumb-wrap__nav__list__item">
            <a href="#">CONTACT</a>
          </li>
        </ol>
      </nav>
    </div>
  </section> -->

  <section class="con __section4" id="con">
    <div class="con-wrap __inner">
      <div class="con-wrap__txt">
        <p>
          <?php
          $contact_send_text_1 = get_field('contact_send_text_1');
          echo $contact_send_text_1 ? $contact_send_text_1 : 'フォームが送信されました。';
          ?>
          <br />
          <?php
          $contact_send_text_2 = get_field('contact_send_text_2');
          echo $contact_send_text_2 ? $contact_send_text_2 : '後ほど担当者よりご連絡差し上げます。';
          ?>
          <br />
          <?php
          $contact_send_text_3 = get_field('contact_send_text_3');
          echo $contact_send_text_3 ? $contact_send_text_3 : 'なお、入力いただきましたお客様の個人情報・相談内容は';
          ?>
          <br class="__sp" />
          <?php
          $contact_send_text_4 = get_field('contact_send_text_4');
          echo $contact_send_text_4 ? $contact_send_text_4 : '弊社にて厳重に取り扱い致します。';
          ?>
        </p>
      </div>
      <div class="b-btn c-btn">
        <a href="<?php echo home_url(); ?>">
          <span class="__icon-arrow__rev">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
              <path fill="currentColor" d="M8.2 751.4c0 8.6 3.4 17.401 10 24.001c13.2 13.2 34.8 13.2 48 0l451.8-451.8l445.2 445.2c13.2 13.2 34.8 13.2 48 0s13.2-34.8 0-48L542 251.401c-13.2-13.2-34.8-13.2-48 0l-475.8 475.8c-6.8 6.8-10 15.4-10 24.2z" />
            </svg>
          </span>
          <span>Back</span>
        </a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>