<?php get_header('main'); ?>
<main>
  <section class="top" id="top">
    <div class="top-wrap">
      <div class="top-wrap__ttl">
        <h1>
          <span class="initial-text">H</span>arnessing the power of
          quantum<br />
          computing for maximum security.
        </h1>
        <span class="ttl__sub">最硬のセキュリティを量子コンピュータで。</span>
      </div>
    </div>
  </section>
  <section class="our" id="our">
    <div class="our-wrap">
      <div class="our-wrap__ttl">
        <h2>
          <span class="initial-text">O</span>UR<span class="initial-text"> M</span>ISSION
        </h2>
        <p>
          量子コンピュータの良い所は利用し、危険な所は対策する。<br />
          それによりブロックチェーンを始めとする情報通信を、<br class="__sp">守るだけでなくより安全で低コストな方式へと進化させる。
        </p>
      </div>
    </div>
  </section>
  <section class="about __section1" id="about">
    <div class="about-wrap __inner">
      <div class="about-wrap__con">
        <div class="about-wrap__con__block">
          <div class="about-wrap__con__block__left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/service-bg.jpeg" alt="事業概要" />
          </div>
          <div class="about-wrap__con__block__right">
            <div class="about-wrap__con__block__right__ttl">
              <h2>
                <span class="initial-text">S</span>ERVICE
                <span class="s-ttl__sub">事業概要</span>
              </h2>
            </div>
            <div class="about-wrap__con__block__right__txt">
              <p>
                顧客の持つシステム上で量子コンピュータによるセキュリティリスクを検出・解決する
                総合量子セキュリティサービス
              </p>
              <p>
                私たちは、世界初のB.のサービスをブロックチェーンにおいて実現します。
              </p>
            </div>
            <div class="outer-btn-s r-btn a-btn">
              <div class="inner-btn-s">
                <a href="<?php echo get_permalink(get_page_by_path('service')->ID); ?>" class="__arrow">
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
        <div class="about-wrap__con__block">
          <div class="about-wrap__con__block__left">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company-bg.jpeg" alt="企業概要" />
          </div>
          <div class="about-wrap__con__block__right">
            <div class="about-wrap__con__block__right__ttl">
              <h2>
                <span class="initial-text">C</span>OMPANY
                <span class="s-ttl__sub">企業概要</span>
              </h2>
            </div>
            <div class="about-wrap__con__block__right__txt">
              <p>
                Blocq, Inc.
                は、ブロックチェーン技術と量子コンピューティングの活用を目指すスタートアップです。
              </p>
              <p>
                私たちは、当社の量子ソリューションが量子コンピューティングとブロックチェーン技術の両方に利益をもたらすと信じています。
              </p>
            </div>
            <div class="outer-btn-s r-btn a-btn">
              <div class="inner-btn-s">
                <a href="<?php echo get_permalink(get_page_by_path('company')->ID); ?>" class="__arrow">
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
      </div>
    </div>
  </section>
  <section class="news __section1" id="news">
    <div class="news-wrap __inner">
      <div class="news-wrap__ttl">
        <h2 class="c-ttl">NEWS</h2>
      </div>
      <div class="news-wrap__link">
        <a href="<?php echo get_permalink(get_page_by_path('news-all')->ID); ?>">
          <span>NEWS</span>
          <span>ALL</span>
          <span class="__icon-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
              <path fill="currentColor" d="M8.2 751.4c0 8.6 3.4 17.401 10 24.001c13.2 13.2 34.8 13.2 48 0l451.8-451.8l445.2 445.2c13.2 13.2 34.8 13.2 48 0s13.2-34.8 0-48L542 251.401c-13.2-13.2-34.8-13.2-48 0l-475.8 475.8c-6.8 6.8-10 15.4-10 24.2z" />
            </svg>
          </span>
        </a>
      </div>
      <div class="news-wrap__con">
        <?php
        $news_query = new WP_Query(array(
          'post_type' => 'news',
          'posts_per_page' => 3,
          'post_status' => 'publish'
        ));

        if ($news_query->have_posts()) :
          while ($news_query->have_posts()) : $news_query->the_post();
        ?>
            <div class="news-wrap__con__block">
              <div class="news-wrap__con__block__img">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
              </div>
              <div class="news-wrap__con__block__txt">
                <p class="news-wrap__con__block__txt__date"><?php echo get_the_date('Y.m.d'); ?></p>
                <p class="news-wrap__con__block__txt__text">
                  <?php the_title(); ?>
                </p>
                <div class="w-btn r-btn">
                  <a href="<?php the_permalink(); ?>">
                    <span>MORE</span>
                    <span class="__icon-arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                        <path fill="currentColor" d="M8.2 751.4c0 8.6 3.4 17.401 10 24.001c13.2 13.2 34.8 13.2 48 0l451.8-451.8l445.2 445.2c13.2 13.2 34.8 13.2 48 0s13.2-34.8 0-48L542 251.401c-13.2-13.2-34.8-13.2-48 0l-475.8 475.8c-6.8 6.8-10 15.4-10 24.2z" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          <?php
          endwhile;
          wp_reset_postdata();
        else :
          ?>
          <p>現在、ニュース記事はありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

<section class="blog __section1" id="blog">
  <div class="blog-wrap __inner">
    <div class="blog-wrap__ttl">
      <h2 class="c-ttl">BLOG</h2>
    </div>
    <div class="blog-wrap__link">
      <a href="<?php echo get_permalink(get_page_by_path('blog-all')->ID); ?>">
        <span>BLOG</span>
        <span>ALL</span>
        <span class="__icon-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
            <path fill="currentColor" d="M8.2 751.4c0 8.6 3.4 17.401 10 24.001c13.2 13.2 34.8 13.2 48 0l451.8-451.8l445.2 445.2c13.2 13.2 34.8 13.2 48 0s13.2-34.8 0-48L542 251.401c-13.2-13.2-34.8-13.2-48 0l-475.8 475.8c-6.8 6.8-10 15.4-10 24.2z" />
          </svg></span>
      </a>
    </div>
    <div class="blog-wrap__con">
      <ul class="blog-wrap__con__list">
        <?php
        $blog_query = new WP_Query(array(
          'post_type' => 'blog',
          'posts_per_page' => 4,
          'post_status' => 'publish'
        ));

        if ($blog_query->have_posts()) :
          while ($blog_query->have_posts()) : $blog_query->the_post();
        ?>
            <li class="blog-wrap__con__list__item">
              <a href="<?php the_permalink(); ?>" class="blog-wrap__con__list__item__link">
                <div class="blog-wrap__con__list__item__link__left">
                  <p><span><?php echo get_the_date('Y'); ?></span><?php echo get_the_date('m.d'); ?></p>
                </div>
                <div class="blog-wrap__con__list__item__link__right">
                  <p><?php the_title(); ?></p>
                </div>
              </a>
            </li>
            <hr />
          <?php
          endwhile;
          wp_reset_postdata();
        else :
          ?>
          <p>現在、ブログ記事はありません。</p>
        <?php endif; ?>
        <!-- <li class="blog-wrap__con__list__item">
            <a href="blog-each.html" class="blog-wrap__con__list__item__link">
              <div class="blog-wrap__con__list__item__link__left">
                <p><span>2024</span>02.29</p>
              </div>
              <div class="blog-wrap__con__list__item__link__right">
                <p>お知らせタイトル</p>
              </div>
            </a>
          </li>
          <hr />
          <li class="blog-wrap__con__list__item">
            <a href="blog-each.html" class="blog-wrap__con__list__item__link">
              <div class="blog-wrap__con__list__item__link__left">
                <p><span>2024</span>02.29</p>
              </div>
              <div class="blog-wrap__con__list__item__link__right">
                <p>お知らせタイトル</p>
              </div>
            </a>
          </li>
          <hr />
          <li class="blog-wrap__con__list__item">
            <a href="blog-each.html" class="blog-wrap__con__list__item__link">
              <div class="blog-wrap__con__list__item__link__left">
                <p><span>2024</span>02.29</p>
              </div>
              <div class="blog-wrap__con__list__item__link__right">
                <p>お知らせタイトル</p>
              </div>
            </a>
          </li>
          <hr /> -->
      </ul>
    </div>
  </div>
</section>
</main>
<?php get_footer(); ?>