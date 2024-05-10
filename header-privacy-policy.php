<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- OGP -->
  <meta property="og:url" content="本番環境URL" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="BlocQ,lnc." />
  <meta property="og:description" content="仮のページ概要です。" />
  <meta property="og:site_name" content="BlocQ,lnc." />
  <meta property="og:image" content="本番環境URL/img/logo.png" />
  <!-- ICON -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/本番環境URL/img/logo.png" />
  <!-- CSS-外部 -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet" />
  <link href="https://fonts.cdnfonts.com/css/lato" rel="stylesheet" />
  <!-- CSS-内部 -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common-main.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common-sub1.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common-sub2.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/privacy-policy.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header" id="header">
    <div class="header-wrap">
      <div class="header-wrap__logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ画像" />
        </a>
      </div>
      <nav class="header-wrap__nav">
        <!-- <ul class="header-wrap__nav__list">
          <li class="header-wrap__nav__list__item">
            <a href="/"> HOME </a>
          </li>
          <li class="header-wrap__nav__list__item">
            <a href="service.html"> SERVICE </a>
          </li>
          <li class="header-wrap__nav__list__item">
            <a href="company.html"> COMPANY </a>
          </li>
          <li class="header-wrap__nav__list__item">
            <a href="news-all.html"> NEWS </a>
          </li>
          <li class="header-wrap__nav__list__item">
            <a href="blog-all.html"> BLOG </a>
          </li>
          <li class="header-wrap__nav__list__item__contact">
            <a href="contact.html"> Contact us </a>
          </li>
        </ul> -->
        <?php
        $args = array(
          'menu' => 'menu', // 管理画面で作成したメニュー名
          'menu_class' => 'header-wrap__nav__list', // メニューを構成するulタグのクラス名
          'container' => false, // <ul>タグを囲んでいる<div>タグを削除
        );

        // カスタムメニューを表示
        wp_nav_menu($args);
        ?>
      </nav>
      <div class="h-open">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav id="h-nav">
        <div id="h-nav__list">
          <ul id="h-nav__list__first">
            <li>
              <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ画像" />
              </a>
            </li>
          </ul>
          <ul id="h-nav__list__second">
            <!-- <li><a href="/">HOME</a></li>
            <li><a href="service.html">SERVICE</a></li>
            <li><a href="company.html">COMPANY</a></li>
            <li><a href="news-all.html">NEWS</a></li>
            <li><a href="blog-all.html">BLOG</a></li> -->
            <?php wp_nav_menu(array(
              'theme_location' => 'sp_menu_links',
              'container' => false,
              'items_wrap' => '%3$s'
            )); ?>
          </ul>
          <ul id="h-nav__list__third">
            <!-- <li><a href="contact.html">Contact us</a></li> -->
            <?php wp_nav_menu(array(
              'theme_location' => 'sp_menu_contact',
              'container' => false,
              'items_wrap' => '%3$s'
            )); ?>
          </ul>
        </div>
      </nav>
    </div>
  </header>