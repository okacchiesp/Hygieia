"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  //ドロワーメニュー
  $(".js-hamburger").click(function () {
    if ($(".js-hamburger").hasClass("is-active")) {
      $(this).removeClass("is-active");
      $(".js-sp-nav").fadeOut("500");
      $(".header").css("background-color", "rgba(13, 41, 54, 0.68)");
    } else {
      $(this).addClass("is-active");
      $(".js-sp-nav").fadeIn("500");
      $(".header").css("background-color", "#408f95");
    }
    // 現在のbodyタグのoverflowスタイルを確認
    if ($("body").css("overflow") === "hidden") {
      // hiddenなら、bodyのスタイルを元に戻す
      $("body").css({
        height: "",
        overflow: ""
      });
    } else {
      // bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
      $("body").css({
        height: "100%",
        overflow: "hidden"
      });
    }
  });
  $(document).ready(function () {
    // ウィンドウのリサイズ時にメニューを閉じる
    $(window).on("resize", function () {
      if ($(window).width() >= 768) {
        $(".js-hamburger").removeClass("is-active");
        $(".js-sp-nav").css("display", "none");
        $("body").css({
          height: "",
          overflow: ""
        });
        $(".header").css("background-color", "rgba(13, 41, 54, 0.68)");
      }
    });
  });

  // Swiper
  var swiper = new Swiper(".js-campaign-swiper", {
    slidesPerView: "auto",
    spaceBetween: 24,
    grabCursor: true,
    navigation: {
      nextEl: ".js-campaign-next",
      prevEl: ".js-campaign-prev"
    },
    breakpoints: {
      768: {
        spaceBetween: 40
      }
    }
  });
  var mvswiper = new Swiper(".js-mv-swiper", {
    slidesPerView: 1,
    effect: "fade",
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
  var slidein = $(".js-slidein"),
    speed = 700;
  slidein.each(function () {
    $(this).append('<div class="slidein"></div>');
    var color = $(this).find($(".slidein")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    //inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          width: "100%"
        }, speed, function () {
          image.css("opacity", "1");
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // loadingアニメーション
  $(document).ready(function () {
    $(".js-loading-title").animate({
      opacity: "0"
    }, 2000, function () {
      $(".js-loading-image").animate({
        top: "0"
      }, 1500, function () {
        $(".js-loading").animate({
          opacity: "0"
        }, 5000, function () {
          $(".js-loading").css("display", "none");
        });
      });
    });
  });
  function PageTopAnime() {
    var scroll = $(window).scrollTop(); //スクロール値を取得
    if (scroll >= 200) {
      //200pxスクロールしたら
      $(".to-top").removeClass("DownMove"); // DownMoveというクラス名を除去して
      $(".to-top").addClass("UpMove"); // UpMoveというクラス名を追加して出現
    } else {
      //それ以外は
      if ($(".to-top").hasClass("UpMove")) {
        //UpMoveというクラス名が既に付与されていたら
        $(".to-top").removeClass("UpMove"); //  UpMoveというクラス名を除去し
        $(".to-top").addClass("DownMove"); // DownMoveというクラス名を追加して非表示
      }
    }
    var wH = window.innerHeight; //画面の高さを取得
    var footerPos = $(".footer").offset().top; //footerの位置を取得
    if (scroll + wH >= footerPos + 16) {
      var pos = scroll + wH - footerPos + 16; //スクロールの値＋画面の高さからfooterの位置＋10pxを引いた場所を取得し
      $(".to-top").css("bottom", pos); //.to-topに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
    } else {
      //それ以外は
      if ($(".to-top").hasClass("UpMove")) {
        //UpMoveというクラス名がついていたら
        $(".to-top").css("bottom", "10px"); // 下から10pxの位置にページリンクを指定
      }
    }
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on("load", function () {
    PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  });

  // .to-topをクリックした際の設定
  $(".to-top").click(function () {
    $("body,html").animate({
      scrollTop: 0 //ページトップまでスクロール
    }, 500); //ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false; //リンク自体の無効化
  });
  $(".js-faq-question").on("click", function () {
    var $answer = $(this).next(".faq-item__answer");
    var $icon = $(this).find(".faq-item__icon");
    var isOpen = $answer.is(":visible");
    if (!isOpen) {
      $answer.slideDown();
      $icon.addClass("open");
    } else {
      $answer.slideUp();
      $icon.removeClass("open");
    }
  });

  // 初期状態では、サブメニューを非表示に設定
  $(".archive-date__sub").hide();

  // 年の部分をクリックしたときのイベント
  $(".archive-date__year").click(function (e) {
    e.preventDefault(); // aタグのデフォルトの動作を無効化
    $(this).toggleClass("open");
    // 次のサブメニューをスライドで開閉
    $(this).next(".archive-date__sub").slideToggle();
  });
  $(document).ready(function () {
    // タブをクリックしたときの処理
    $(".js-tab a").click(function (e) {
      e.preventDefault();
      var targetTab = $(this).attr("href"); // クリックされたタブのhref属性を取得
      showTab(targetTab); // タブの切り替えを行う
    });

    // ページ読み込み時にハッシュに基づいてタブを表示
    function initializeTab() {
      var hash = window.location.hash; // URLのハッシュ部分を取得

      if (hash) {
        showTab(hash); // ハッシュがある場合、そのタブを表示
      }
    }

    // タブを表示する関数
    function showTab(tabId) {
      // すべてのタブコンテンツを非表示にし、タブリンクのアクティブクラスを削除
      $(".js-tab-content").removeClass("tab-content--active");
      $(".js-tab").removeClass("tab--active");

      // 対応するタブコンテンツを表示し、タブリンクにアクティブクラスを追加
      $(tabId + "-content").addClass("tab-content--active");
      $('a[href="' + tabId + '"]').parent(".js-tab").addClass("tab--active");

      // URLのハッシュを更新
      window.location.hash = tabId;
    }

    // 初期化処理
    initializeTab();
  });
  $(document).ready(function () {
    // モーダル要素を取得
    var modal = document.getElementById("modal");
    var modalImg = document.getElementById("modal-image");
    var closeModal = document.querySelector(".gallery__close");

    // デバッグ用
    console.log(modal, modalImg, closeModal); // 要素が正しく取得できているか確認

    // 画像リンクをクリックしたときにモーダルを開く
    $(".js-modal").each(function () {
      $(this).on("click", function (event) {
        event.preventDefault(); // デフォルトのリンク動作を無効化

        var imgSrc = $(this).attr("href"); // 画像のパスを取得
        modal.style.display = "flex"; // モーダルを表示
        modalImg.src = imgSrc; // 画像をモーダルに設定
        $("body").css("overflow", "hidden"); // モーダルが開いたときにスクロールを無効にする
      });
    });

    // モーダルの閉じるボタンをクリックしたときにモーダルを閉じる
    $(closeModal).on("click", function () {
      modal.style.display = "none"; // モーダルを非表示に
      $("body").css("overflow", "auto"); // モーダルが閉じたときにスクロールを再有効化
    });

    // モーダル外をクリックしたときにもモーダルを閉じる
    $(window).on("click", function (event) {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    });
  });
});