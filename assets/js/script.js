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

mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}