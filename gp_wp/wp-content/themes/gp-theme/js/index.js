$(function () {
  $('.top-work__slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    cssEase: "linear",
  });

  

  $(window).on('load scroll', function (){

    var fade_in = $('[data-fadeIn]');
    var fade_left = $('[data-leftIn]');
    var fade_top = $('[data-topIn]');
    var fade_right = $('[data-rightIn]');
    var animated = 'is-over';
    
    fade_in.each(function(){
    
      var boxOffset = $(this).offset().top;
      var scrollPos = $(window).scrollTop();
      var wh = $(window).height();
  
      if(scrollPos > boxOffset - wh - 500 ){
        $(this).addClass(animated);
      }
    });
    
    fade_left.each(function(){
    
      var boxOffset = $(this).offset().top;
      var scrollPos = $(window).scrollTop();
      var wh = $(window).height();
  
      if(scrollPos > boxOffset - wh - 500 ){
        $(this).addClass(animated);
      }
    });
    
    fade_top.each(function(){
    
      var boxOffset = $(this).offset().top;
      var scrollPos = $(window).scrollTop();
      var wh = $(window).height();
  
      if(scrollPos > boxOffset - wh + 0 ){
        $(this).addClass(animated);
      }
    });
    
    fade_right.each(function(){
    
      var boxOffset = $(this).offset().top;
      var scrollPos = $(window).scrollTop();
      var wh = $(window).height();
  
      if(scrollPos > boxOffset - wh - 500 ){
        $(this).addClass(animated);
      }
    });


  });
});