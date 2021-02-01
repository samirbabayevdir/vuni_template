// Burger
$(document).ready(function () {
  $('.header__burger,.header__bg').click(function (event) {
    $('.header__burger,.header__menu,.header__bg').toggleClass('active');
    $('body').toggleClass('lock');
  });

  $(".mobile__acc").dcAccordion({
    speed: 300
  });

  $(window).scroll(function () {
    var $heightScrolled = $(window).scrollTop();
    var $defaultHeight = 0;

    if ($heightScrolled > $defaultHeight) {
      $('.header').addClass("transition");
    }
    else {
      $('.header').removeClass("transition");
    }
  });
});

