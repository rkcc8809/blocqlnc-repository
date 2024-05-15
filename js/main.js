"use strict";

$(document).ready(function() {
    $("#backButton").on("click", function(event) {
      event.preventDefault();
      window.history.back();
    });
  });






$(document).ready(function() {
    $('.__arrow').on('mouseenter', function () {
        const $thisArrow = $(this);
        const $diagonalLines = $thisArrow.find('.diagonal-line1, .diagonal-line2');
        let diagonal1Finished = false;
        let diagonal2Finished = false;

        // ホバーされた要素のみに対してアニメーションをリセット
        $diagonalLines.css({
            transform: 'rotate(0deg) translateX(0)',
            top: '0',
            width: '16px'
        });

        // 各アニメーションの終了を検出
        $thisArrow.find('.diagonal-line1').one('transitionend', function() {
            diagonal1Finished = true;
            checkAnimationsComplete($thisArrow.find('.simple1-1'), $diagonalLines, diagonal1Finished, diagonal2Finished);
        });

        $thisArrow.find('.diagonal-line2').one('transitionend', function() {
            diagonal2Finished = true;
            checkAnimationsComplete($thisArrow.find('.simple1-1'), $diagonalLines, diagonal1Finished, diagonal2Finished);
        });
    });

    function checkAnimationsComplete($target, $diagonalLines, diagonal1Finished, diagonal2Finished) {
        if (diagonal1Finished && diagonal2Finished) {
            diagonal1Finished = false;
            diagonal2Finished = false;
            $target.addClass('fadeOut');

            // fadeOut アニメーションの終了を検知して fadeIn を実行
            $target.one('animationend', function() {
                $diagonalLines.css({
                    transform: '',
                    top: '',
                    width: ''
                });

                // fadeIn アニメーションを開始
                $(this).removeClass('fadeOut').addClass('fadeIn');

                // fadeIn 終了後に初期状態にリセット
                $(this).one('animationend', function() {
                    resetToInitialState($(this).closest('.__arrow'));
                });
            });
        }
    }

    function resetToInitialState($element) {
        $element.find('.simple1-1').removeClass('fadeOut fadeIn');
        $element.find('.diagonal-line1, .diagonal-line2').css({
            transform: '',
            top: '',
            width: ''
        });
    }
});


// Ensure the DOM is ready before running the script
$(document).ready(function() {
    // Add a click event listener to the .scroll-to-top element
    $('.scroll-to-top').on('click', function(e) {
        e.preventDefault(); // Prevent the default behavior of the anchor
        $('html, body').animate({ scrollTop: 0 }, 'smooth'); // Smoothly scroll to the top
    });
});


