<?php get_header('company'); ?>
<main>
  <section class="top" id="top">
    <div class="top-wrap">
      <div class="top-wrap__ttl">
        <h1>
          <span class="initial-text__sub">
            <?php
            $company_initial_text = get_field('company_initial_text');
            echo $company_initial_text ? $company_initial_text : 'C';
            ?></span><?php
          $company_main_ttl = get_field('company_main_ttl');
          echo $company_main_ttl ? $company_main_ttl : 'OMPANY';
          ?><br />
          <span class="ttl__sub">
            <?php
            $company_sub_ttl = get_field('company_sub_ttl');
            echo $company_sub_ttl ? $company_sub_ttl : '会社概要';
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
            <a href="#">COMPANY</a>
          </li>
        </ol>
      </nav>
    </div>
  </section> -->

  <section class="our" id="our">
    <div class="our-wrap">
      <div class="our-wrap__ttl">
        <h2>
          <span class="initial-text">
            <?php
            $company_initial_text_2 = get_field('company_initial_text_2');
            echo $company_initial_text_2 ? $company_initial_text_2 : 'O';
            ?></span><?php
          $company_our_ttl = get_field('company_our_ttl');
          echo $company_our_ttl ? $company_our_ttl : 'UR ';
          ?><span class="initial-text">
            <?php
            $company_initial_text_3 = get_field('company_initial_text_3');
            echo $company_initial_text_3 ? $company_initial_text_3 : 'M';
            ?></span><?php
          $company_our_ttl_2 = get_field('company_our_ttl_2');
          echo $company_our_ttl_2 ? $company_our_ttl_2 : 'ISSION';
          ?>
        </h2>
        <p>
          <?php
          $company_our_text = get_field('company_our_text');
          echo $company_our_text ? $company_our_text : '量子コンピュータの良い所は利用し、危険な所は対策する。';
          ?><br />
          <?php
          $company_our_text_2 = get_field('company_our_text_2');
          echo $company_our_text_2 ? $company_our_text_2 : 'それによりブロックチェーンを始めとする情報通信を、';
          ?><br class="__sp" />
          <?php
          $company_our_text_3 = get_field('company_our_text_3');
          echo $company_our_text_3 ? $company_our_text_3 : '守るだけでなくより安全で低コストな方式へと進化させる。';
          ?>
        </p>
      </div>
    </div>
  </section>
  <section class="greet __section2" id="greet">
    <div class="greet-wrap __inner2">
      <div class="greet-wrap__top">
        <div class="greet-wrap__top__img">
          <?php
          // ACFの画像フィールドの値を取得
          $image = get_field('company_greet_image_1');

          // 画像が設定されているか確認
          if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/corporate- philosophy.jpeg" alt="企業理念" />
          <?php endif; ?>

        </div>
        <div class="greet-wrap__top__ttl">
          <h2>
            <?php
            $company_greet_ttl = get_field('company_greet_ttl');
            echo $company_greet_ttl ? $company_greet_ttl : 'corporate philosophy';
            ?>
          </h2>
          <p>
            <?php
            $company_greet_sub_ttl_1 = get_field('company_greet_sub_ttl_1');
            echo $company_greet_sub_ttl_1 ? $company_greet_sub_ttl_1 : '人々の生活に価値の交換が';
            ?><br />
            <?php
            $company_greet_sub_ttl_2 = get_field('company_greet_sub_ttl_2');
            echo $company_greet_sub_ttl_2 ? $company_greet_sub_ttl_2 : '自然で当たり前になること';
            ?>
          </p>
        </div>
      </div>
      <div class="greet-wrap__bottom">
        <div class="greet-wrap__bottom__img">
          <?php
          // ACFの画像フィールドの値を取得
          $image = get_field('company_greet_image_2');

          // 画像が設定されているか確認
          if ($image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/ceo-1.png" alt="ceo" />
          <?php endif; ?>

        </div>
        <div class="greet-wrap__bottom__txt">
          <p>
            <?php
            $company_greet_message = get_field('company_greet_message');
            echo $company_greet_message ? $company_greet_message : 'CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。CEO挨拶が入ります。';
            ?>
          </p>
          <p>
            <?php
            $company_greet_name = get_field('company_greet_name');
            echo $company_greet_name ? $company_greet_name : '杉浦祥, Ph.D.';
            ?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="intro __section1" id="intro">
    <div class="intro-wrap __inner2">
      <div class="intro-wrap__ttl">
        <h2>
          <?php
          $company_team_ttl = get_field('company_team_ttl');
          echo $company_team_ttl ? $company_team_ttl : 'チーム紹介';
          ?>
        </h2>
        <p>
          <?php
          $company_team_text_1 = get_field('company_team_text_1');
          echo $company_team_text_1 ? $company_team_text_1 : '2023年夏に学術レベルで論文が出始めたばかりであり、';
          ?><br />
          <?php
          $company_team_text_2 = get_field('company_team_text_2');
          echo $company_team_text_2 ? $company_team_text_2 : 'まだプロダクトが世の中にない段階で、日米に跨った開発体制を作り上げつつある。';
          ?>
        </p>
      </div>
      <div class="intro-wrap__team">
        <div class="intro-wrap__team__block">
          <div class="intro-wrap__team__block__item __inner2">
            <div class="intro-wrap__team__block__item__img">
              <?php
              // ACFの画像フィールドの値を取得
              $image = get_field('company_intro_image_1');

              // 画像が設定されているか確認
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/ceo-2.png" alt="ceo" />
              <?php endif; ?>

            </div>
            <div class="intro-wrap__team__block__item__con">
              <div class="intro-wrap__team__block__item__con__ttl">
                <h3>
                  <?php
                  $company_intro_name_1 = get_field('company_intro_name_1');
                  echo $company_intro_name_1 ? $company_intro_name_1 : '名前：杉浦 祥 Sho Sugiura, Ph.D.';
                  ?>
                  <span>
                    <?php
                    $company_intro_name_position_1 = get_field('company_intro_name_position_1');
                    echo $company_intro_name_position_1 ? $company_intro_name_position_1 : '肩書：CEO';
                    ?>
                  </span>
                </h3>
              </div>
              <div class="intro-wrap__team__block__item__con__icon">
                <div class="intro-wrap__team__block__item__con__icon__link">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-icon.png" alt="facebook" />
                  <a href="https://www.facebook.com/sho.sugiura.1" target="_blank">
                    facebook
                  </a>
                </div>
                <div class="intro-wrap__team__block__item__con__icon__link">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-icon.png" alt="linkedin" />
                  <a href="https://www.linkedin.com/in/sho-sugiura-27608725b/" target="_blank">
                    linkedin
                  </a>
                </div>
              </div>
              <div class="intro-wrap__team__block__item__con__txt">
                <p>
                  <?php
                  $company_intro_text_1_1 = get_field('company_intro_text_1_1');
                  echo $company_intro_text_1_1 ? $company_intro_text_1_1 : '略歴：Ph.D. from the University of Tokyo, postdoctoral research fellow at Harvard University (Eugene Demler group), Senior Research';
                  ?><br />
                  <?php
                  $company_intro_text_1_2 = get_field('company_intro_text_1_2');
                  echo $company_intro_text_1_2 ? $company_intro_text_1_2 : 'Scientist at NTT Research, Inc. collaborating with MIT (Isaac L. Chuang group). With 13 years of research experience in quantum computers, I am passionate about making a meaningful impact on society. This drive led me to establish Blocq, Inc., dedicated to cyber security against quantum computers.';
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="intro-wrap__team__block __margin __rev">
          <div class="intro-wrap__team__block__item __inner2 __rev">
            <div class="intro-wrap__team__block__item__img __rev __rev2">
              <?php
              // ACFの画像フィールドの値を取得
              $image = get_field('company_intro_image_2');

              // 画像が設定されているか確認
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/Head of Research.png" alt="Head of Research" />
              <?php endif; ?>

            </div>
            <div class="intro-wrap__team__block__item__con __rev">
              <div class="intro-wrap__team__block__item__con__ttl">
                <h3>
                  <?php
                  $company_intro_name_2 = get_field('company_intro_name_2');
                  echo $company_intro_name_2 ? $company_intro_name_2 : '名前：渡邉 真隆 Masataka Watanabe, Ph.D.';
                  ?><span><?php
                          $company_intro_name_position_2 = get_field('company_intro_name_position_2');
                          echo $company_intro_name_position_2 ? $company_intro_name_position_2 : '肩書：Head of Research';
                          ?></span>
                </h3>
              </div>
              <div class="intro-wrap__team__block__item__con__icon">
                <div class="intro-wrap__team__block__item__con__icon__link">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-icon.png" alt="linkedin" />
                  <a href="https://www.linkedin.com/in/masataka--watanabe" target="_blank">
                    linkedin
                  </a>
                </div>
              </div>
              <div class="intro-wrap__team__block__item__con__txt">
                <p>
                  <?php
                  $company_intro_text_2 = get_field('company_intro_text_2');
                  echo $company_intro_text_2 ? $company_intro_text_2 : '略歴：Ph.D. in Quantum Physics from the University of Tokyo. Currently an assistant professor at Graduate School of Informatics, Nagoya University, after postdoc experiences at Weizmann Institute of Science (Israel), Kyoto University (Japan), and other institutions around the world. With 10 years of research experience covering string theory, condensed matter physics, and quantum information theory, one of my current passions lies in finding real and early use of quantum computers in our society.';
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="intro-wrap__team__block __margin">
          <div class="intro-wrap__team__block__item __inner2">
            <div class="intro-wrap__team__block__item__img">
              <?php
              // ACFの画像フィールドの値を取得
              $image = get_field('company_intro_image_3');

              // 画像が設定されているか確認
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/Lead Engineer-1.png" alt="Lead Engineer" />
              <?php endif; ?>

            </div>
            <div class="intro-wrap__team__block__item__con">
              <div class="intro-wrap__team__block__item__con__ttl">
                <h3>
                  <?php
                  $company_intro_name_3 = get_field('company_intro_name_3');
                  echo $company_intro_name_3 ? $company_intro_name_3 : '名前：日向 理彦 Masahiko Hyuga';
                  ?><span><?php
                          $company_intro_name_position_3 = get_field('company_intro_name_position_3');
                          echo $company_intro_name_position_3 ? $company_intro_name_position_3 : '肩書：Lead Engineer';
                          ?></span>
                </h3>
              </div>
              <div class="intro-wrap__team__block__item__con__txt">
                <p>
                  <?php
                  $company_intro_text_3 = get_field('company_intro_text_3');
                  echo $company_intro_text_3 ? $company_intro_text_3 : '略歴：Master of Engineering from Yokohama National University. 10years of experience in Web Development and Blockchain Engineering.';
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="intro-wrap__team__block __margin __rev">
          <div class="intro-wrap__team__block__item __inner2 __rev">
            <div class="intro-wrap__team__block__item__img __rev">
              <?php
              // ACFの画像フィールドの値を取得
              $image = get_field('company_intro_image_4');

              // 画像が設定されているか確認
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/Lead Engineer-2.png" alt="Lead Engineer" />
              <?php endif; ?>

            </div>
            <div class="intro-wrap__team__block__item__con __rev">
              <div class="intro-wrap__team__block__item__con__ttl">
                <h3>
                  <?php
                  $company_intro_name_4 = get_field('company_intro_name_4');
                  echo $company_intro_name_4 ? $company_intro_name_4 : '名前：佐藤 直人 Naoto Sato';
                  ?><span><?php
                          $company_intro_name_position_4 = get_field('company_intro_name_position_4');
                          echo $company_intro_name_position_4 ? $company_intro_name_position_4 : '肩書：Lead Engineer';
                          ?></span>
                </h3>
              </div>
              <div class="intro-wrap__team__block__item__con__icon">
                <div class="intro-wrap__team__block__item__con__icon__link">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-icon.png" alt="facebook" />
                  <a href="https://www.facebook.com/profile.php?id=100004217709192" target="_blank">
                    facebook
                  </a>
                </div>
              </div>
              <div class="intro-wrap__team__block__item__con__txt">
                <p>
                  <?php
                  $company_intro_text_4 = get_field('company_intro_text_4');
                  echo $company_intro_text_4 ? $company_intro_text_4 : '略歴：Master of Engineering from Yokohama National University. 10years of experience in Web Development and Blockchain Engineering.';
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="intro-wrap__team__block __margin">
          <div class="intro-wrap__team__block__item __inner2">
            <div class="intro-wrap__team__block__item__img">
              <?php
              // ACFの画像フィールドの値を取得
              $image = get_field('company_intro_image_5');

              // 画像が設定されているか確認
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/backoffice.png" alt="ceo" />
              <?php endif; ?>

            </div>
            <div class="intro-wrap__team__block__item__con">
              <div class="intro-wrap__team__block__item__con__ttl">
                <h3>
                  <?php
                  $company_intro_name_5 = get_field('company_intro_name_5');
                  echo $company_intro_name_5 ? $company_intro_name_5 : '名前：長谷川 瑠巳 Rumi Hasegawa';
                  ?><span><?php
                          $company_intro_name_position_5 = get_field('company_intro_name_position_5');
                          echo $company_intro_name_position_5 ? $company_intro_name_position_5 : '肩書：Back office';
                          ?></span>
                </h3>
              </div>
              <div class="intro-wrap__team__block__item__con__icon">
                <div class="intro-wrap__team__block__item__con__icon__link">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-icon.png" alt="linkedin" />
                  <a href="https://www.linkedin.com/in/cactusrumi/" target="_blank">
                    linkedin
                  </a>
                </div>
              </div>
              <div class="intro-wrap__team__block__item__con__txt">
                <p>
                  <?php
                  $company_intro_text_5 = get_field('company_intro_text_5');
                  echo $company_intro_text_5 ? $company_intro_text_5 : '略歴：While enrolled in the graduate school of Niigata University, I am involved in mentoring in various fields such as internship management, crowdfunding operations, new business development, and entrepreneurship. My expertise lies in theoretical particle physics.';
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="info __section1" id="info">
    <div class="info-wrap __inner4">
      <div class="info-wrap__ttl">
        <h2 class="c-ttl">
          <?php
          $company_info_ttl = get_field('company_info_ttl');
          echo $company_info_ttl ? $company_info_ttl : '基本情報';
          ?>
        </h2>
      </div>
      <div class="info-wrap__body">
        <ul class="info-wrap__body__list">
          <li class="info-wrap__body__list__item">
            <div class="info-wrap__body__list__item__left">
              <p>
                <?php
                $company_info_left_1 = get_field('company_info_left_1');
                echo $company_info_left_1 ? $company_info_left_1 : '社名';
                ?>
              </p>
            </div>
            <div class="info-wrap__body__list__item__right">
              <p>
                <?php
                $company_info_right_1 = get_field('company_info_right_1');
                echo $company_info_right_1 ? $company_info_right_1 : 'Blocq, Inc.';
                ?>
              </p>
            </div>
          </li>
          <li class="info-wrap__body__list__item">
            <div class="info-wrap__body__list__item__left">
              <p>
                <?php
                $company_info_left_2 = get_field('company_info_left_2');
                echo $company_info_left_2 ? $company_info_left_2 : '設立';
                ?>
              </p>
            </div>
            <div class="info-wrap__body__list__item__right">
              <p>
                <?php
                $company_info_right_2 = get_field('company_info_right_2');
                echo $company_info_right_2 ? $company_info_right_2 : '20××年4月';
                ?>
              </p>
            </div>
          </li>
          <li class="info-wrap__body__list__item">
            <div class="info-wrap__body__list__item__left">
              <p>
                <?php
                $company_info_left_3 = get_field('company_info_left_3');
                echo $company_info_left_3 ? $company_info_left_3 : 'CEO';
                ?>
              </p>
            </div>
            <div class="info-wrap__body__list__item__right">
              <p>
                <?php
                $company_info_right_3 = get_field('company_info_right_3');
                echo $company_info_right_3 ? $company_info_right_3 : '杉浦祥,Ph.D.';
                ?>
              </p>
            </div>
          </li>
          <li class="info-wrap__body__list__item">
            <div class="info-wrap__body__list__item__left">
              <p>
                <?php
                $company_info_left_4 = get_field('company_info_left_4');
                echo $company_info_left_4 ? $company_info_left_4 : '資本金';
                ?>
              </p>
            </div>
            <div class="info-wrap__body__list__item__right">
              <p>
                <?php
                $company_info_right_4 = get_field('company_info_right_4');
                echo $company_info_right_4 ? $company_info_right_4 : '●●●万円';
                ?>
              </p>
            </div>
          </li>
          <li class="info-wrap__body__list__item">
            <div class="info-wrap__body__list__item__left">
              <p>
                <?php
                $company_info_left_5 = get_field('company_info_left_5');
                echo $company_info_left_5 ? $company_info_left_5 : '所在地';
                ?>
              </p>
            </div>
            <div class="info-wrap__body__list__item__right">
              <p>
                <?php
                $company_info_right_5_1 = get_field('company_info_right_5_1');
                echo $company_info_right_5_1 ? $company_info_right_5_1 : '〒105-6416 東京都港区虎ノ門1-17-1';
                ?><br />
                <?php
                $company_info_right_5_2 = get_field('company_info_right_5_2');
                echo $company_info_right_5_2 ? $company_info_right_5_2 : '虎ノ門ヒルズ ビジネスタワー15階';
                ?>
              </p>
            </div>
          </li>
          <li class="info-wrap__body__list__item">
            <div class="info-wrap__body__list__item__left">
              <p>
                <?php
                $company_info_left_6 = get_field('company_info_left_6');
                echo $company_info_left_6 ? $company_info_left_6 : 'アクセス';
                ?>
              </p>
            </div>
          </li>
        </ul>
      </div>
      <div class="info-wrap__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.3722659735927!2d139.74745741072314!3d35.66783467247718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b930082800d%3A0xbd9a31ee2f8f015!2z6JmO44OO6ZaA44OS44Or44K6IOODk-OCuOODjeOCueOCv-ODr-ODvA!5e0!3m2!1sja!2sjp!4v1714418826338!5m2!1sja!2sjp" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>