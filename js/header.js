"use strict";

// $(".h-open").click(function () {
//   //ボタンがクリックされたら
//   $(this).toggleClass('active');
//   //ボタン自身に activeクラスを付与する
//   $("#h-nav").toggleClass('panelactive');
//   //ナビゲーションにpanelactiveクラスを付与する
// });

// $("#h-nav a").click(function () {
//   //ナビゲーションのリンクがクリックされたら
//   $(".h-open").removeClass('active');
//   //ボタンの activeクラスを除去して
//   $("#h-nav").removeClass('panelactive');
//   //ナビゲーションのpanelactiveクラスも除去する
// });

"use strict";

$(".h-open").click(function () {
  // ボタンがクリックされた時
  $(this).toggleClass('active');
  // ボタンにactiveクラスを付与または削除する
  $("#h-nav").toggleClass('panelactive');
  // ナビゲーションにpanelactiveクラスを付与または削除する
});

$("#h-nav a").click(function (e) {
  // ナビゲーションのリンクがクリックされた時
  var href = $(this).attr('href'); // 遷移先のURLを取得
  e.preventDefault(); // 即座の遷移を防ぐ
  setTimeout(function() {
    window.location.href = href; // 遅延後に新しいページに遷移
  }, 200); // 200ミリ秒の遅延（必要に応じて調整）

  // クラス削除にも同様の遅延を追加する
  setTimeout(function() {
    $(".h-open").removeClass('active');
    $("#h-nav").removeClass('panelactive');
  }, 200); // クラス削除もナビゲーション遅延と同じ時間で遅延
});
