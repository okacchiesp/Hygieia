
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
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

});
