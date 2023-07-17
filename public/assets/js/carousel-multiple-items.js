$(document).ready(function(){
    $('.carousel').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  
    $('.prev-btn').click(function() {
      $(this).siblings('.carousel').slick('slickPrev');
    });
  
    $('.next-btn').click(function() {
      $(this).siblings('.carousel').slick('slickNext');
    });
  });
  