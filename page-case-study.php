<?php
/*
Template Name: Case-Study
*/
get_header('casestudy'); ?>
<main>
  <section class="top" id="top">
    <div class="top-wrap">
      <div class="top-wrap__ttl">
        <h1>
          <span class="initial-text__sub">
            <?php
            $case_study_initial_text = get_field('case_study_initial_text');
            echo $case_study_initial_text ? $case_study_initial_text : 'C';
            ?></span><?php
          $case_study_main_ttl = get_field('case_study_main_ttl');
          echo $case_study_main_ttl ? $case_study_main_ttl : 'ASE STUDY';
          ?><br />
          <span class="ttl__sub">
            <?php
            $case_study_sub_ttl = get_field('case_study_sub_ttl');
            echo $case_study_sub_ttl ? $case_study_sub_ttl : '事例紹介';
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
            <a href="<?php echo get_permalink(get_page_by_path('service')->ID); ?>">SERVICE</a>
          </li>
          <li class="breadcrumb-wrap__nav__list__item">
            <p>-</p>
          </li>
          <li class="breadcrumb-wrap__nav__list__item">
            <a href="#">CASE STUDY</a>
          </li>
        </ol>
      </nav>
    </div>
  </section> -->

  <section class="case __section1" id="case">
    <div class="case-wrap">
      <div class="case-wrap__con">
        <div class="case-wrap__con__block __first">
          <div class="case-wrap__con__block__body __inner2">
            <div class="case-wrap__con__block__ttl">
              <h2>
                <?php
                $case_study_title_1 = get_field('case_study_title_1');
                echo $case_study_title_1 ? $case_study_title_1 : 'ブロックチェーン';
                ?>
              </h2>
            </div>
            <div class="case-wrap__con__block__head">
              <h3>
                <?php
                $case_study_subtitle_1 = get_field('case_study_subtitle_1');
                echo $case_study_subtitle_1 ? $case_study_subtitle_1 : 'ブロックチェーンの進展';
                ?>
              </h3>
            </div>
            <div class="case-wrap__con__block__txt">
              <p>
                <?php
                $case_study_text_1 = get_field('case_study_text_1');
                echo $case_study_text_1 ? $case_study_text_1 : '2019年、Googleはスパコンを凌駕する速さで量子コンピュータが計算できることを実演しました。そして2023年12月、Harvard大学の研究チームが、量子コンピュータの最大の技術的課題であったエラー訂正を実現しました。人類は遂に量子コンピュータの全要素技術を手中に収め、残る課題は量子ビットの数を拡大することのみとなりました。2019年に53、2022年に433、そして来年初めには1121と、量子ビット数は毎年倍増しています。これにより、量子コンピュータの実現予測は、「どうやって?」から「あと何年?」に変わりました。';
                ?>
              </p>
            </div>
            <div class="case-wrap__con__block__img">
              <?php
              // ACFの画像フィールドの値を取得
              $image = get_field('case_study_image_1');

              // 画像が設定されているか確認
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-blockchain.jpg" alt="ブロックチェーンの進展" />
              <?php endif; ?>

            </div>
            <div class="case-wrap__con__block__head2">
              <h3>
                <?php
                $case_study_subtitle_2 = get_field('case_study_subtitle_2');
                echo $case_study_subtitle_2 ? $case_study_subtitle_2 : 'ブロックチェーン';
                ?>
              </h3>
            </div>
            <div class="case-wrap__con__block__txt2">
              <p>
                <?php
                $case_study_text_2 = get_field('case_study_text_2');
                echo $case_study_text_2 ? $case_study_text_2 : '低電力で高速に計算が可能な量子コンピュータは注目を集めていますが、その高速な計算力は既存の情報通信システムの脅威となります。量子コンピュータにより、現行の主要な暗号が数分で解読され、全ての情報通信システムがハッキングの対象となります。ハッカー達は既にその時のために暗号化された機密情報を蓄え始めています。';
                ?>
              </p>
            </div>
          </div>
        </div>
        <div class="case-wrap__con__block __second">
          <div class="case-wrap__con__block__body __inner2">
            <div class="case-wrap__con__block__ttl">
              <h2>
                <?php
                $case_study_title_2 = get_field('case_study_title_2');
                echo $case_study_title_2 ? $case_study_title_2 : '量子コンピュータ';
                ?>
              </h2>
            </div>
            <div class="case-wrap__con__block__head">
              <h3>
                <?php
                $case_study_subtitle_3 = get_field('case_study_subtitle_3');
                echo $case_study_subtitle_3 ? $case_study_subtitle_3 : '量子コンピュータの進展';
                ?>
              </h3>
            </div>
            <div class="case-wrap__con__block__txt">
              <p>
                <?php
                $case_study_text_3 = get_field('case_study_text_3');
                echo $case_study_text_3 ? $case_study_text_3 : '2019年、Googleはスパコンを凌駕する速さで量子コンピュータが計算できることを実演しました。そして2023年12月、Harvard大学の研究チームが、量子コンピュータの最大の技術的課題であったエラー訂正を実現しました。人類は遂に量子コンピュータの全要素技術を手中に収め、残る課題は量子ビットの数を拡大することのみとなりました。2019年に53、2022年に433、そして来年初めには1121と、量子ビット数は毎年倍増しています。これにより、量子コンピュータの実現予測は、「どうやって?」から「あと何年?」に変わりました。';
                ?>
              </p>
            </div>
            <div class="case-wrap__con__block__img">
              <?php
              // ACFの画像フィールドの値を取得
              $image = get_field('case_study_image_2');

              // 画像が設定されているか確認
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/service-quantum.jpeg" alt="量子コンピュータの進展" class="__second" />
              <?php endif; ?>

            </div>
            <div class="case-wrap__con__block__head2">
              <h3>
                <?php
                $case_study_subtitle_4 = get_field('case_study_subtitle_4');
                echo $case_study_subtitle_4 ? $case_study_subtitle_4 : '量子コンピュータの脅威';
                ?>
              </h3>
            </div>
            <div class="case-wrap__con__block__txt2">
              <p>
                <?php
                $case_study_text_4 = get_field('case_study_text_4');
                echo $case_study_text_4 ? $case_study_text_4 : '低電力で高速に計算が可能な量子コンピュータは注目を集めていますが、その高速な計算力は既存の情報通信システムの脅威となります。量子コンピュータにより、現行の主要な暗号が数分で解読され、全ての情報通信システムがハッキングの対象となります。ハッカー達は既にその時のために暗号化された機密情報を蓄え始めています。';
                ?>
              </p>
            </div>
          </div>
          <div class="w-btn2 c-btn">
            <a href="<?php echo get_permalink(get_page_by_path('service')->ID); ?>">
              <span class="__icon-arrow__rev">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                  <path fill="currentColor" d="M8.2 751.4c0 8.6 3.4 17.401 10 24.001c13.2 13.2 34.8 13.2 48 0l451.8-451.8l445.2 445.2c13.2 13.2 34.8 13.2 48 0s13.2-34.8 0-48L542 251.401c-13.2-13.2-34.8-13.2-48 0l-475.8 475.8c-6.8 6.8-10 15.4-10 24.2z" />
                </svg>
              </span>
              <span>Back</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>