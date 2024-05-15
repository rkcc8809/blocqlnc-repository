<?php get_header('single-news'); ?>
<main>
  <section class="top" id="top">
    <div class="top-wrap">
      <div class="top-wrap__ttl">
        <h1>
          <span class="initial-text__sub">
            <?php
            $single_news_initial_text = get_field('single_news_initial_text');
            echo $single_news_initial_text ? $single_news_initial_text : 'N';
            ?></span><?php
          $single_news_main_ttl = get_field('single_news_main_ttl');
          echo $single_news_main_ttl ? $single_news_main_ttl : 'EWS';
          ?>
          <br />
          <span class="ttl__sub">
            <?php
            $single_news_sub_ttl = get_field('single_news_sub_ttl');
            echo $single_news_sub_ttl ? $single_news_sub_ttl : 'お知らせ';
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
            <a href="<?php echo get_permalink(get_page_by_path('news-all')->ID); ?>">NEWS</a>
          </li>
          <li class="breadcrumb-wrap__nav__list__item">
            <p>-</p>
          </li>
          <li class="breadcrumb-wrap__nav__list__item">
            <a href="#"><?php the_title(); ?></a>
          </li>
        </ol>
      </nav>
    </div>
  </section> -->

  <section class="content __section3" id="content">
    <article class="content-wrap __inner2">
      <div class="content-wrap__date">
        <p><?php echo get_the_date('Y.m.d'); ?></p>
      </div>
      <div class="content-wrap__ttl">
        <h2><?php the_title(); ?></h2>
      </div>
      <?php if (has_post_thumbnail()) : ?>
        <div class="content-wrap__img">
          <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" />
        </div>
      <?php endif; ?>
      <div class="content-wrap__txt">
        <?php the_content(); ?>
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
    </article>
  </section>
</main>
<?php get_footer(); ?>