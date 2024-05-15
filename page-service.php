<?php get_header('service'); ?>
<main>
  <section class="top" id="top">
    <div class="top-wrap">
      <div class="top-wrap__ttl">
        <h1><span class="initial-text__sub">
            <?php
            $service_initial_text = get_field('service_initial_text');
            echo $service_initial_text ? $service_initial_text : 'S';
            ?></span><?php
                      $service_main_ttl = get_field('service_main_ttl');
                      echo $service_main_ttl ? $service_main_ttl : 'ERVICE';
                      ?><br />
          <span class="ttl__sub">
            <?php
            $service_sub_ttl = get_field('service_sub_ttl');
            echo $service_sub_ttl ? $service_sub_ttl : '事業概要';
            ?>
          </span>
        </h1>
      </div>
    </div>
  </section>
  <?php get_template_part('breadcrumb'); ?>

  <!-- <section class="breadcrumb __section2" id="breadcrumb">
    <div class="breadcrumb-wrap __inner">
      <nav class="breadcrumb-wrap__nav">
        <ol class="breadcrumb-wrap__nav__list">
          <li class="breadcrumb-wrap__nav__list__item">
            <a href="<?php echo home_url(); ?>">HOME</a>
          </li>
          <li class="breadcrumb-wrap__nav__list__item">
            <p>-</p>
          </li>
          <li class="breadcrumb-wrap__nav__list__item">
            <a href="#">SERVICE</a>
          </li>
        </ol>
      </nav>
    </div>
  </section> -->
  <section class="fea __section3" id="fea">
    <div class="fea-wrap __inner">
      <div class="fea-wrap__ttl">
        <h2>
          <?php
          $service_head = get_field('service_head');
          echo $service_head ? $service_head : 'サービスの特徴';
          ?>
        </h2>
      </div>
    </div>
  </section>
  <section class="feature __section3" id="feature">
    <div class="feature-wrap">
      <div class="feature-wrap__con">
        <div class="feature-wrap__con__block">
          <div class="feature-wrap__con__block__left">
            <div class="feature-wrap__con__block__left__img">
              <?php
              // ACFの画像フィールドの値を取得
              $image = get_field('service_feature_image');

              // 画像が設定されているか確認
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-blockchain.jpg" alt="ブロックチェーン" />
              <?php endif; ?>

            </div>
          </div>
          <div class="feature-wrap__con__block__right __sp__rev">
            <div class="feature-wrap__con__block__right__ttl">
              <h3>
                <?php
                $service_section_ttl_1 = get_field('service_section_ttl_1');
                echo $service_section_ttl_1 ? $service_section_ttl_1 : 'blockchain';
                ?>
              </h3>
              <span>
                <?php
                $service_section_sub_ttl_1 = get_field('service_section_sub_ttl_1');
                echo $service_section_sub_ttl_1 ? $service_section_sub_ttl_1 : 'ブロックチェーン';
                ?>
              </span>
            </div>
            <div class="feature-wrap__con__block__right__txt">
              <p>
                <?php
                $service_section_text_1_1 = get_field('service_section_text_1_1');
                echo $service_section_text_1_1 ? $service_section_text_1_1 : 'インターネット上に分散化して情報を記録する技術';
                ?><br />
                <?php
                $service_section_text_1_2 = get_field('service_section_text_1_2');
                echo $service_section_text_1_2 ? $service_section_text_1_2 : '記録する仕組みとしてマイニングがある';
                ?><br />
                <?php
                $service_section_text_1_3 = get_field('service_section_text_1_3');
                echo $service_section_text_1_3 ? $service_section_text_1_3 : '送金履歴を記録すれば仮想通貨、';
                ?><br />
                <?php
                $service_section_text_1_4 = get_field('service_section_text_1_4');
                echo $service_section_text_1_4 ? $service_section_text_1_4 : '資産の記録をしたものにNFTがある';
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="feature-wrap__con__block">
          <div class="feature-wrap__con__block__left">
            <div class="feature-wrap__con__block__left__img different-style">
              <?php
              // ACFの画像フィールドの値を取得
              $image = get_field('service_feature_image_2');

              // 画像が設定されているか確認
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-quantum.jpeg" alt="量子コンピュータ" />
              <?php endif; ?>

            </div>
          </div>
          <div class="feature-wrap__con__block__right">
            <div class="feature-wrap__con__block__right__ttl">
              <h3>
                <?php
                $service_section_ttl_2_1 = get_field('service_section_ttl_2_1');
                echo $service_section_ttl_2_1 ? $service_section_ttl_2_1 : 'quantum';
                ?>
              </h3>
              <h3>
                <?php
                $service_section_ttl_2_2 = get_field('service_section_ttl_2_2');
                echo $service_section_ttl_2_2 ? $service_section_ttl_2_2 : 'computer';
                ?>
              </h3>
              <span>
                <?php
                $service_section_sub_ttl_2 = get_field('service_section_sub_ttl_2');
                echo $service_section_sub_ttl_2 ? $service_section_sub_ttl_2 : '量子コンピュータ';
                ?>
              </span>
            </div>
            <div class="feature-wrap__con__block__right__txt">
              <p>
                <?php
                $service_section_text_2_1 = get_field('service_section_text_2_1');
                echo $service_section_text_2_1 ? $service_section_text_2_1 : 'いくつかの問題を、高速に低エネルギーで計算できる';
                ?><br class="__sp" />
                <?php
                $service_section_text_2_2 = get_field('service_section_text_2_2');
                echo $service_section_text_2_2 ? $service_section_text_2_2 : '次世代コンピュータ';
                ?><br />
                <?php
                $service_section_text_2_3 = get_field('service_section_text_2_3');
                echo $service_section_text_2_3 ? $service_section_text_2_3 : 'アメリカと中国が先行しているものの、';
                ?><br class="__sp" />
                <?php
                $service_section_text_2_4 = get_field('service_section_text_2_4');
                echo $service_section_text_2_4 ? $service_section_text_2_4 : '日本含め世界規模の競争が続いている';
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="outer-btn-s c-btn">
          <div class="inner-btn-s">
            <a href="<?php echo get_permalink(get_page_by_path('service/case-study')->ID); ?>" class="__arrow">
              <span class="__text">MORE</span>
              <span class="__icon simple1-1">
                <span class="arrow-part1"></span>
                <span class="arrow-part2">
                  <span class="diagonal-line1"></span>
                  <span class="diagonal-line2"></span>
                </span> </span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>