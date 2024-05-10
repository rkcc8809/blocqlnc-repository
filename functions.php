<?php
// カスタムメニュー機能
add_theme_support('menus');


function register_my_menus()
{
  register_nav_menus(
    array(
      'sp_menu_links' => __('Mobile Menu - Links', 'theme-name'),
      'sp_menu_contact' => __('Mobile Menu - Contact', 'theme-name'),
    )
  );
}
add_action('init', 'register_my_menus');




// テーマセットアップ時にアイキャッチ画像を有効化
function my_theme_setup()
{
  add_theme_support('post-thumbnails');

  // 'news' カスタム投稿タイプにアイキャッチ画像をサポート
  add_post_type_support('news', 'thumbnail');

  // 'blog' カスタム投稿タイプにアイキャッチ画像をサポート
  add_post_type_support('blog', 'thumbnail');
}
add_action('after_setup_theme', 'my_theme_setup');

// カスタム投稿タイプの作成
function create_custom_post_types()
{
  // ニュース記事のカスタム投稿タイプ
  register_post_type('news', array(
    'labels' => array(
      'name' => __('News'),
      'singular_name' => __('News'),
      'add_new' => '新規追加',
      'add_new_item' => 'ニュースを追加',
      'edit_item' => 'ニュースを編集',
      'new_item' => '新しいニュース',
      'view_item' => 'ニュースを表示',
      'search_items' => 'ニュースを検索',
      'not_found' => 'ニュースが見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱にニュースは見つかりませんでした',
      'all_items' => 'すべてのニュース',
      'archives' => 'ニュースアーカイブ',
      'insert_into_item' => 'ニュースに挿入',
      'uploaded_to_this_item' => 'このニュースにアップロード',
      'featured_image' => 'アイキャッチ画像',
      'set_featured_image' => 'アイキャッチ画像を設定',
      'remove_featured_image' => 'アイキャッチ画像を削除',
      'use_featured_image' => 'アイキャッチ画像として使用'
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'author', 'page-attributes'),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-bell',
    'rewrite' => array('slug' => 'news'),
    'taxonomies' => array('category', 'post_tag') // カテゴリーとタグを追加
  ));

  // ブログ記事のカスタム投稿タイプ
  register_post_type('blog', array(
    'labels' => array(
      'name' => __('Blog'),
      'singular_name' => __('Blog'),
      'add_new' => '新規追加',
      'add_new_item' => 'ブログを追加',
      'edit_item' => 'ブログを編集',
      'new_item' => '新しいブログ',
      'view_item' => 'ブログを表示',
      'search_items' => 'ブログを検索',
      'not_found' => 'ブログが見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱にブログは見つかりませんでした',
      'all_items' => 'すべてのブログ',
      'archives' => 'ブログアーカイブ',
      'insert_into_item' => 'ブログに挿入',
      'uploaded_to_this_item' => 'このブログにアップロード',
      'featured_image' => 'アイキャッチ画像',
      'set_featured_image' => 'アイキャッチ画像を設定',
      'remove_featured_image' => 'アイキャッチ画像を削除',
      'use_featured_image' => 'アイキャッチ画像として使用'
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'author', 'page-attributes'),
    'show_in_rest' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-post',
    'rewrite' => array('slug' => 'blog'),
    'taxonomies' => array('category', 'post_tag') // カテゴリーとタグを追加
  ));
}
add_action('init', 'create_custom_post_types');

