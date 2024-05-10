<?php get_header('service'); ?>
<main>
  <section class="top" id="top">
    <div class="top-wrap">
      <div class="top-wrap__ttl">
        <h1>
          <span class="initial-text__sub">S</span>ERVICE<br />
          <span class="ttl__sub">事業概要</span>
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
        <h2>サービスの特徴</h2>
      </div>
    </div>
  </section>
  <section class="feature __section3" id="feature">
    <div class="feature-wrap">
      <div class="feature-wrap__con">
        <div class="feature-wrap__con__block">
          <div class="feature-wrap__con__block__left">
            <div class="feature-wrap__con__block__left__img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/service-blockchain.jpg" alt="ブロックチェーン" />
            </div>
          </div>
          <div class="feature-wrap__con__block__right __sp__rev">
            <div class="feature-wrap__con__block__right__ttl">
              <h3>blockchain</h3>
              <span>ブロックチェーン</span>
            </div>
            <div class="feature-wrap__con__block__right__txt">
              <p>
                インターネット上に分散化して情報を記録する技術<br />
                記録する仕組みとしてマイニングがある<br />
                送金履歴を記録すれば仮想通貨、<br />
                資産の記録をしたものにNFTがある
              </p>
            </div>
          </div>
        </div>
        <div class="feature-wrap__con__block">
          <div class="feature-wrap__con__block__left">
            <div class="feature-wrap__con__block__left__img different-style">
              <img src="<?php echo get_template_directory_uri(); ?>/img/service-quantum.jpeg" alt="量子コンピュータ" />
            </div>
          </div>
          <div class="feature-wrap__con__block__right">
            <div class="feature-wrap__con__block__right__ttl">
              <h3>quantum</h3>
              <h3>computer</h3>
              <span>量子コンピュータ</span>
            </div>
            <div class="feature-wrap__con__block__right__txt">
              <p>
                いくつかの問題を、高速に低エネルギーで計算できる<br class="__sp">次世代コンピュータ<br />
                アメリカと中国が先行しているものの、<br class="__sp">日本含め世界規模の競争が続いている
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