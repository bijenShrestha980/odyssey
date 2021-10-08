jQuery(document).ready(function ($) {
  ("use strict");

  /*-----------------------------------
    Back To Top Button
    -----------------------------------*/

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      $(".button-top").addClass("show");
    } else {
      $(".button-top").removeClass("show");
    }
    if ($(window).scrollTop() > 300) {
      $(".jobkunja-header-vaccancy").addClass("show");
    } else {
      $(".jobkunja-header-vaccancy").removeClass("show");
    }
  });
  var btn = $(".button-top");

  btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });
});
