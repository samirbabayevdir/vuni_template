$(document).ready(function() {
  $('.header__burger,.header__bg').click(function(event){
    $('.header__burger,.header__menu,.header__bg').toggleClass('active');
    $('body').toggleClass('lock');
  });
});