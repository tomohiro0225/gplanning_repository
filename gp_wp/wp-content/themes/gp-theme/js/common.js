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

  
});