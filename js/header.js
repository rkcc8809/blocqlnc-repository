"use strict";

$(".h-open").click(function () {
  // ボタンがクリックされたら
  $(this).toggleClass('active');
  // ボタン自身に activeクラスを付与する
  $("#h-nav").toggleClass('panelactive');
  // ナビゲーションにpanelactiveクラスを付与する
});

$("#h-nav a").click(function (event) {
  // ナビゲーションのリンクがクリックされたら
  $(".h-open").removeClass('active');
  // ボタンの activeクラスを除去して
  $("#h-nav").removeClass('panelactive');
  // ナビゲーションのpanelactiveクラスも除去する

  // ページ遷移を遅延させる
  event.preventDefault(); // ページ遷移を一旦停止
  var href = $(this).attr('href'); // クリックされたリンクのURLを取得
  setTimeout(function() {
    window.location.href = href; // 遅延後にページ遷移
  }, 300); // 遅延時間（ミリ秒）
});
