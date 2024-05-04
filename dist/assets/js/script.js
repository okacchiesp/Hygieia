"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  //ドロワーメニュー
  $(".js-hamburger").click(function () {
    if ($(".js-hamburger").hasClass("is-active")) {
      $(this).removeClass("is-active");
      $(".js-sp-nav").fadeOut("500");
    } else {
      $(this).addClass("is-active");
      $(".js-sp-nav").fadeIn("500");
    }
  });

  // Swiper
  var swiper = new Swiper('.js-campaign-swiper', {
    slidesPerView: 'auto',
    spaceBetween: 24,
    grabCursor: true,
    navigation: {
      nextEl: '.swiper__next',
      prevEl: '.swiper__prev'
    },
    breakpoints: {
      768: {
        spaceBetween: 40
      }
    }
  });
  var mvswiper = new Swiper('.js-mv-swiper', {
    slidesPerView: 1,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    loop: true,
    speed: 1000,
    autoplay: {
      // 自動再生させる
      delay: 3000,
      // 次のスライドに切り替わるまでの時間（ミリ秒）
      disableOnInteraction: false,
      // ユーザーが操作しても自動再生を止めない
      waitForTransition: false // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）
    }
  });

  // Slidein
  var slidein = $('.js-slidein'),
    speed = 700;
  slidein.each(function () {
    $(this).append('<div class="slidein"></div>');
    var color = $(this).find($('.slidein')),
      image = $(this).find('img');
    var counter = 0;
    image.css('opacity', '0');
    color.css('width', '0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed, function () {
          image.css('opacity', '1');
          $(this).css({
            'left': '0',
            'right': 'auto'
          });
          $(this).animate({
            'width': '0%'
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // loadingアニメーション
  $(document).ready(function () {
    $('.js-loading__title').animate({
      opacity: '0'
    }, 2000, function () {
      $('.js-loading__image').animate({
        top: '0'
      }, 1500, function () {
        $('.js-loading').animate({
          opacity: '0'
        }, 5000, function () {
          $('.js-loading').css('display', 'none');
        });
      });
    });
  });
  function PageTopAnime() {
    var scroll = $(window).scrollTop(); //スクロール値を取得
    if (scroll >= 200) {
      //200pxスクロールしたら
      $('.to-top').removeClass('DownMove'); // DownMoveというクラス名を除去して
      $('.to-top').addClass('UpMove'); // UpMoveというクラス名を追加して出現
    } else {
      //それ以外は
      if ($('.to-top').hasClass('UpMove')) {
        //UpMoveというクラス名が既に付与されていたら
        $('.to-top').removeClass('UpMove'); //  UpMoveというクラス名を除去し
        $('.to-top').addClass('DownMove'); // DownMoveというクラス名を追加して非表示
      }
    }

    var wH = window.innerHeight; //画面の高さを取得
    var footerPos = $('.footer').offset().top; //footerの位置を取得
    if (scroll + wH >= footerPos + 16) {
      var pos = scroll + wH - footerPos + 16; //スクロールの値＋画面の高さからfooterの位置＋10pxを引いた場所を取得し
      $('.to-top').css('bottom', pos); //.to-topに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
    } else {
      //それ以外は
      if ($('.to-top').hasClass('UpMove')) {
        //UpMoveというクラス名がついていたら
        $('.to-top').css('bottom', '10px'); // 下から10pxの位置にページリンクを指定
      }
    }
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  });

  // .to-topをクリックした際の設定
  $('.to-top').click(function () {
    $('body,html').animate({
      scrollTop: 0 //ページトップまでスクロール
    }, 500); //ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false; //リンク自体の無効化
  });
});