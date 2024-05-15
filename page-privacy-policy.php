<?php get_header('privacy-policy'); ?>
<main>
  <section class="top" id="top">
    <div class="top-wrap">
      <div class="top-wrap__ttl">
        <h1>
          <span class="initial-text__sub">
            <?php
            $privacy_policy_initial_text = get_field('privacy_policy_initial_text');
            echo $privacy_policy_initial_text ? $privacy_policy_initial_text : 'P';
            ?></span><?php
                      $privacy_policy_main_ttl = get_field('privacy_policy_main_ttl');
                      echo $privacy_policy_main_ttl ? $privacy_policy_main_ttl : 'RIVACY POLICY';
                      ?>
          <br />
          <span class="ttl__sub">
            <?php
            $privacy_policy_sub_ttl = get_field('privacy_policy_sub_ttl');
            echo $privacy_policy_sub_ttl ? $privacy_policy_sub_ttl : 'プライバシーポリシー';
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
            <a href="#">PRIVACY POLICY</a>
          </li>
        </ol>
      </nav>
    </div>
  </section> -->

  <section class="con __section6" id="con">
    <div class="con-wrap __inner2">
      <div class="con-wrap__txt">
        <p>
          <?php
          $privacy_policy_text = get_field('privacy_policy_text');
          echo $privacy_policy_text ? $privacy_policy_text : 'Blocq, Inc.（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における， ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。';
          ?>
        </p>
      </div>
      <div class="con-wrap__policy">
        <p>
          <?php
          $privacy_policy_text_2 = get_field('privacy_policy_text_2');
          echo $privacy_policy_text_2 ? $privacy_policy_text_2 : 'プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。プライバシーポリシーの文章が入ります。';
          ?>
        </p>
      </div>
      <div class="b-btn c-btn">
        <a href="javascript:void(0)" id="backButton">
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