<?php get_header('blog-all'); ?>
<main>
  <section class="top" id="top">
    <div class="top-wrap">
      <div class="top-wrap__ttl">
        <h1>
          <span class="initial-text__sub">
            <?php
            $blog_initial_text = get_field('blog_initial_text');
            echo $blog_initial_text ? $blog_initial_text : 'B';
            ?></span><?php
                      $blog_main_ttl = get_field('blog_main_ttl');
                      echo $blog_main_ttl ? $blog_main_ttl : 'LOG';
                      ?>
          <br />
          <span class="ttl__sub">
            <?php
            $blog_sub_ttl = get_field('blog_sub_ttl');
            echo $blog_sub_ttl ? $blog_sub_ttl : '記事';
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
            <a href="#">BLOG</a>
          </li>
        </ol>
      </nav>
    </div>
  </section> -->

  <section class="article __section3" id="article">
    <div class="article-wrap __inner2">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $blog_query = new WP_Query(array(
        'post_type' => 'blog',
        'posts_per_page' => 5,
        'paged' => $paged,
        'post_status' => 'publish'
      ));

      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
      ?>
          <article class="article-wrap__block">
            <a href="<?php the_permalink(); ?>" class="article-wrap__block__link">
              <div class="article-wrap__block__link__txt">
                <div class="article-wrap__block__link__txt__ttl">
                  <h3><?php the_title(); ?></h3>
                </div>
                <div class="article-wrap__block__link__txt__para">
                  <p>
                    <?php the_excerpt(); ?>
                  </p>
                </div>
                <div class="article-wrap__block__link__txt__date">
                  <p><?php echo get_the_date('Y.m.d'); ?></p>
                </div>
              </div>
            </a>
          </article>
        <?php
        endwhile;
      else :
        ?>
        <p>現在、ブログ記事はありません。</p>
      <?php
      endif;
      wp_reset_postdata();
      ?>
      <!-- <article class="article-wrap__block">
        <a href="blog-each.html" class="article-wrap__block__link">
          <div class="article-wrap__block__link__txt">
            <div class="article-wrap__block__link__txt__ttl">
              <h3>記事タイトル</h3>
            </div>
            <div class="article-wrap__block__link__txt__para">
              <p>
                記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事・・・・・・・・・・・・
              </p>
            </div>
            <div class="article-wrap__block__link__txt__date">
              <p>2024.2.29</p>
            </div>
          </div>
        </a>
      </article>
      <article class="article-wrap__block">
        <a href="blog-each.html" class="article-wrap__block__link">
          <div class="article-wrap__block__link__txt">
            <div class="article-wrap__block__link__txt__ttl">
              <h3>記事タイトル</h3>
            </div>
            <div class="article-wrap__block__link__txt__para">
              <p>
                記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事・・・・・・・・・・・・
              </p>
            </div>
            <div class="article-wrap__block__link__txt__date">
              <p>2024.2.29</p>
            </div>
          </div>
        </a>
      </article>
      <article class="article-wrap__block">
        <a href="blog-each.html" class="article-wrap__block__link">
          <div class="article-wrap__block__link__txt">
            <div class="article-wrap__block__link__txt__ttl">
              <h3>記事タイトル</h3>
            </div>
            <div class="article-wrap__block__link__txt__para">
              <p>
                記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事・・・・・・・・・・・・
              </p>
            </div>
            <div class="article-wrap__block__link__txt__date">
              <p>2024.2.29</p>
            </div>
          </div>
        </a>
      </article>
      <article class="article-wrap__block">
        <a href="blog-each.html" class="article-wrap__block__link">
          <div class="article-wrap__block__link__txt">
            <div class="article-wrap__block__link__txt__ttl">
              <h3>記事タイトル</h3>
            </div>
            <div class="article-wrap__block__link__txt__para">
              <p>
                記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事詳細が入ります。記事・・・・・・・・・・・・
              </p>
            </div>
            <div class="article-wrap__block__link__txt__date">
              <p>2024.2.29</p>
            </div>
          </div>
        </a>
      </article> -->

      <!-- <li class="article-wrap__btn__list__item">
            <a href="#" class="article-wrap__btn__list__item__link __now"> 1 </a>
          </li>
          <li class="article-wrap__btn__list__item">
            <a href="#" class="article-wrap__btn__list__item__link"> 2 </a>
          </li>
          <li class="article-wrap__btn__list__item">
            <a href="#" class="article-wrap__btn__list__item__link"> 3 </a>
          </li>
          <li class="article-wrap__btn__list__item">
            <a href="#" class="article-wrap__btn__list__item__link"> 4 </a>
          </li>
          <li class="article-wrap__btn__list__item">
            <a href="#" class="article-wrap__btn__list__item__link __next">
              次へ
            </a>
          </li> -->
      <nav class="article-wrap__btn">
        <ul class="article-wrap__btn__list">
          <?php
          $big = 999999999; // 予測不可能な整数
          $pagination_links = paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $blog_query->max_num_pages,
            'prev_text' => '前へ',
            'next_text' => '次へ',
            'type' => 'array'
          ));

          if (is_array($pagination_links)) {
            foreach ($pagination_links as $link) {
              if (strpos($link, 'prev') !== false) {
                echo '<li class="article-wrap__btn__list__item"><a href="' . esc_url(get_previous_posts_page_link()) . '" class="article-wrap__btn__list__item__link __prev">前へ</a></li>';
              } elseif (strpos($link, 'next') !== false) {
                echo '<li class="article-wrap__btn__list__item"><a href="' . esc_url(get_next_posts_page_link()) . '" class="article-wrap__btn__list__item__link __next">次へ</a></li>';
              } elseif (strpos($link, 'current') !== false) {
                echo '<li class="article-wrap__btn__list__item"><span class="article-wrap__btn__list__item__link __now">' . strip_tags($link) . '</span></li>';
              } elseif (strpos($link, 'dots') !== false) { // Handle the dots
                echo '<li class="article-wrap__btn__list__item"><span class="article-wrap__btn__list__item__link dots" style="color: #FE4D02;">' . $link . '</span></li>';
              } else {
                echo '<li class="article-wrap__btn__list__item">' . str_replace('<a', '<a class="article-wrap__btn__list__item__link"', $link) . '</li>';
              }
            }
          }
          ?>
        </ul>
      </nav>

    </div>
  </section>
</main>
<?php get_footer(); ?>