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

$(window).on("scroll", function() {
  //フェードイン
  $('[data-fadeIn]').each(function(index, el) {
      if( $(window).scrollTop() > ( $(el).offset().top - 300 ) ){
          $(el).addClass('is-over');
      }
  });
  $('[data-leftIn]').each(function(index, el) {
      if( $(window).scrollTop() > ( $(el).offset().top - 300 ) ){
          $(el).addClass('is-over');
      }
  });
  $('[data-topIn]').each(function(index, el) {
      if( $(window).scrollTop() > ( $(el).offset().top) ){
          $(el).addClass('is-over');
      }
  });
  $('[data-rightIn]').each(function(index, el) {
      if( $(window).scrollTop() > ( $(el).offset().top - 300 ) ){
          $(el).addClass('is-over');
      }
  });
});

});