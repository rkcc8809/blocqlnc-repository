<section class="breadcrumb __section2" id="breadcrumb">
  <div class="breadcrumb-wrap __inner">
    <nav class="breadcrumb-wrap__nav">
      <ol class="breadcrumb-wrap__nav__list">
        <li class="breadcrumb-wrap__nav__list__item">
          <a href="<?php echo home_url(); ?>">HOME</a>
        </li>
        <?php
        if (is_page() && !is_front_page()) {
          $ancestors = get_post_ancestors($post);
          $ancestors = array_reverse($ancestors);
          foreach ($ancestors as $ancestor) {
            echo '<li class="breadcrumb-wrap__nav__list__item"><p>-</p></li>';
            echo '<li class="breadcrumb-wrap__nav__list__item"><a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
          }
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>-</p></li>';
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>' . get_the_title() . '</p></li>';
        } elseif (is_single()) {
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>-</p></li>';
          // カスタム投稿タイプをチェック
          if (get_post_type() == 'news') {
            $news_page_id = get_page_by_path('news-all')->ID;
            echo '<li class="breadcrumb-wrap__nav__list__item"><a href="' . get_permalink($news_page_id) . '">NEWS</a></li>';
          } elseif (get_post_type() == 'blog') {
            $blog_page_id = get_page_by_path('blog-all')->ID;
            echo '<li class="breadcrumb-wrap__nav__list__item"><a href="' . get_permalink($blog_page_id) . '">BLOG</a></li>';
          }
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>-</p></li>';
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>' . get_the_title() . '</p></li>';
        } elseif (is_home()) {
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>-</p></li>';
          $blog_page_id = get_page_by_path('blog-all')->ID;
          echo '<li class="breadcrumb-wrap__nav__list__item"><a href="' . get_permalink($blog_page_id) . '">BLOG</a></li>';
        } elseif (is_category() || is_tag() || is_archive()) {
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>-</p></li>';
          $blog_page_id = get_page_by_path('blog-all')->ID;
          echo '<li class="breadcrumb-wrap__nav__list__item"><a href="' . get_permalink($blog_page_id) . '">BLOG</a></li>';
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>-</p></li>';
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>' . single_cat_title('', false) . '</p></li>';
        }
        ?>
      </ol>
    </nav>
  </div>
</section>