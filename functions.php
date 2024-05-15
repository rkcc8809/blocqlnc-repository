<?php
// カスタムメニュー機能
add_theme_support('menus');

function register_my_menus()
{
  register_nav_menus(
    array(
      'sp_menu_links' => __('Mobile Menu - Links', 'theme-name'),
      'sp_menu_contact' => __('Mobile Menu - Contact', 'theme-name'),
      'sp_menu_links_en' => __('Mobile Menu - Links EN', 'theme-name'),
      'sp_menu_contact_en' => __('Mobile Menu - Contact EN', 'theme-name')
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


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}



// メタボックスの追加
add_action('admin_menu', 'add_noindex_metabox');
function add_noindex_metabox()
{
  add_meta_box('custom_noindex', 'インデックス設定', 'create_noindex', array('post', 'page'), 'side');
}

// 管理画面にフィールドを出力
function create_noindex()
{
  $keyname = 'noindex';
  global $post;
  $get_value = get_post_meta($post->ID, $keyname, true);
  wp_nonce_field('action_' . $keyname, 'nonce_' . $keyname);
  $value = 'noindex';
  $checked = '';
  if ($value === $get_value) $checked = ' checked';
  echo '<label><input type="checkbox" name="' . $keyname . '" value="' . $value . '"' . $checked . '>' . $keyname . '</label>';
}

// カスタムフィールドの保存
add_action('save_post', 'save_custom_noindex');
function save_custom_noindex($post_id)
{
  $keyname = 'noindex';
  if (isset($_POST['nonce_' . $keyname])) {
    if (check_admin_referer('action_' . $keyname, 'nonce_' . $keyname)) {
      if (isset($_POST[$keyname])) {
        update_post_meta($post_id, $keyname, $_POST[$keyname]);
      } else {
        delete_post_meta($post_id, $keyname, get_post_meta($post_id, $keyname, true));
      }
    }
  }
}


if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'    => 'テーマオプション',
    'menu_title'    => 'テーマオプション',
    'menu_slug'     => 'theme-options',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));
}

// メニューの登録
function my_theme_register_menus()
{
  register_nav_menus(
    array(
      'menu' => __('Japanese Menu'),
      'menu-en' => __('English Menu')
    )
  );
}
add_action('init', 'my_theme_register_menus');


function my_theme_widgets_init()
{
  register_sidebar(array(
    'name'          => __('サイドバー', 'my-theme'),
    'id'            => 'sidebar-1',
    'description'   => __('メインのサイドバーエリア。', 'my-theme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'my_theme_widgets_init');


