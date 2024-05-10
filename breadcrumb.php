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
          echo '<li class="breadcrumb-wrap__nav__list__item"><a href="' . get_permalink(get_option('page_for_posts')) . '">BLOG</a></li>';
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>-</p></li>';
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>' . get_the_title() . '</p></li>';
        } elseif (is_home()) {
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>-</p></li>';
          echo '<li class="breadcrumb-wrap__nav__list__item"><p>BLOG</p></li>';
        }
        ?>
      </ol>
    </nav>
  </div>
</section>