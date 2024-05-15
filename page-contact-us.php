<?php
/*
Template Name: Contact Us
*/
get_header('contact'); ?>
<main>
  <section class="top" id="top">
    <div class="top-wrap">
      <div class="top-wrap__ttl">
        <h1>
          <span class="initial-text__sub">
            <?php
            $contact_initial_text = get_field('contact_initial_text');
            echo $contact_initial_text ? $contact_initial_text : 'C';
            ?></span><?php
                      $contact_main_ttl = get_field('contact_main_ttl');
                      echo $contact_main_ttl ? $contact_main_ttl : 'ONTACT';
                      ?>
          <br />
          <span class="ttl__sub">
            <?php
            $contact_sub_ttl = get_field('contact_sub_ttl');
            echo $contact_sub_ttl ? $contact_sub_ttl : 'お問い合わせ';
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

  <section class="contact __section3" id="contact">
    <div class="contact-wrap __inner5">
      <div class="contact-wrap__para">
        <p>
          <?php
          $contact_text_1 = get_field('contact_text_1');
          echo $contact_text_1 ? $contact_text_1 : 'お問い合わせ、ご相談は下記のフォームよりお問い合わせください。';
          ?>
          <br />
          <?php
          $contact_text_2 = get_field('contact_text_2');
          echo $contact_text_2 ? $contact_text_2 : '後ほど担当者よりご連絡差し上げます。';
          ?>
          <br />
          <?php
          $contact_text_3 = get_field('contact_text_3');
          echo $contact_text_3 ? $contact_text_3 : 'なお、入力いただきましたお客様の個人情報・相談内容は弊社にて厳重に取り扱い致します。';
          ?>
          <br />
          <?php
          $contact_text_4 = get_field('contact_text_4');
          echo $contact_text_4 ? $contact_text_4 : '※は必須項目になります。';
          ?>
        </p>
      </div>
      <div class="contact-wrap__body">
        <?php echo do_shortcode('[contact-form-7 id="2ae419a" title="コンタクトフォーム 1"]'); ?>
        <!-- <div class="contact-wrap__body__form">
          <div class="contact-wrap__body__form__block">
            <label class="contact-wrap__body__form__block__left" for="company">
              <p>貴社名</p>
            </label>
            <div class="contact-wrap__body__form__block__right">
              <input type="text" id="company" name="user_company" placeholder="Blocq, Inc." />
            </div>
          </div>
          <div class="contact-wrap__body__form__block">
            <label class="contact-wrap__body__form__block__left" for="name">
              <p>ご担当者名</p>
              <span>※</span>
            </label>
            <div class="contact-wrap__body__form__block__right">
              <input type="text" id="user_name" name="user_name" required placeholder="山田　太郎" />
            </div>
          </div>
          <div class="contact-wrap__body__form__block">
            <label class="contact-wrap__body__form__block__left" for="url">
              <p>貴社URL</p>
            </label>
            <div class="contact-wrap__body__form__block__right">
              <input type="url" id="user_url" name="user_url" placeholder="https://www.blocqinc.com" />
            </div>
          </div>
          <div class="contact-wrap__body__form__block">
            <label class="contact-wrap__body__form__block__left" for="email">
              <p>メールアドレス</p>
              <span>※</span>
            </label>
            <div class="contact-wrap__body__form__block__right">
              <input type="email" id="user_email" name="user_email" required placeholder="Blocq. Inc.@Blocq.Inc.co.jp" />
            </div>
          </div>
          <div class="contact-wrap__body__form__block">
            <label class="contact-wrap__body__form__block__left" for="tel">
              <p>お電話番号</p>
            </label>
            <div class="contact-wrap__body__form__block__right">
              <input type="tel" id="user_tel" name="user_tel" placeholder="000-0000-0000" />
            </div>
          </div>
          <div class="contact-wrap__body__form__block__second">
            <label class="contact-wrap__body__form__block__second__label">
              <p>お問い合わせ種別</p>
            </label>
            <div class="contact-wrap__body__form__block__second__input">
              <div class="contact-wrap__body__form__block__second__input__one __radio">
                <input type="radio" id="otherInquiry1" name="number" value="ブロックチェーンのお問い合わせ" required />
                <label for="otherInquiry1">ブロックチェーンのお問い合わせ</label>
              </div>
              <div class="contact-wrap__body__form__block__second__input__one __radio">
                <input type="radio" id="otherInquiry2" name="number" value="弊社について" />
                <label for="otherInquiry2">弊社について</label>
              </div>
              <div class="contact-wrap__body__form__block__second__input__one __radio">
                <input type="radio" id="otherInquiry3" name="number" value="量子コンピュータについてのお問い合わせ" />
                <label for="otherInquiry3">量子コンピュータについてのお問い合わせ</label>
              </div>
              <div class="contact-wrap__body__form__block__second__input__one __radio">
                <input type="radio" id="otherInquiry4" name="number" value="その他のお問い合わせ" />
                <label for="otherInquiry4">その他のお問い合わせ</label>
              </div>
            </div>
          </div>
          <div class="contact-wrap__body__form__block__third">
            <label class="contact-wrap__body__form__block__third__label" for="message">
              <p>お問い合わせ内容</p>
            </label>
            <textarea class="contact-wrap__body__form__block__third__text" id="message" name="message"></textarea>
          </div>
          <div class="contact-wrap__body__form__block__fourth">
            <div class="contact-wrap__body__form__block__fourth__policy">
              <p>
                <a href="<?php echo get_permalink(get_page_by_path('privacy-policy')->ID); ?>">プライバシーポリシー</a>をよくお読みいただき、
              </p>
            </div>
            <div class="contact-wrap__body__form__block__fourth__check">
              <input type="checkbox" id="check" name="check" value="同意する" required />
              <label for="check">
                <span class="label-check">同意する</span></label>
            </div>
          </div>
          <div class="contact-wrap__body__form__btn">
            <input type="submit" class="contact-btn" value="Send">
            <span class="__icon-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                <path fill="currentColor" d="M8.2 751.4c0 8.6 3.4 17.401 10 24.001c13.2 13.2 34.8 13.2 48 0l451.8-451.8l445.2 445.2c13.2 13.2 34.8 13.2 48 0s13.2-34.8 0-48L542 251.401c-13.2-13.2-34.8-13.2-48 0l-475.8 475.8c-6.8 6.8-10 15.4-10 24.2z" />
              </svg>
            </span>
          </div>
        </div> -->
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>