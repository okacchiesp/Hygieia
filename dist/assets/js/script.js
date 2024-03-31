"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  //ドロワーメニュー
  $(".js-hamburger").click(function () {
    if ($(".js-hamburger").hasClass("is-active")) {
      $(this).removeClass("is-active");
      $(".js-sp-nav").css("opacity", "0");
    } else {
      $(this).addClass("is-active");
      $(".js-sp-nav").css("opacity", "1");
    }
  });
});