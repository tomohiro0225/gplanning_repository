$(function () {
// ハンバーガーメニュー
  $('.menuTrigger__wrap').click(function() {
    $('.sp-menu').addClass('clicked');
})
  $('.sp-menu__line').click(function() {
    $('.sp-menu').removeClass('clicked');
})
  $('.sp-menu__solo').click(function() {
    $('.sp-menu').removeClass('clicked');
})

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