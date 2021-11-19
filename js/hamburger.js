
jQuery(function($) {
  var menuWidth = $('#js-global-menu').outerWidth();
  $('#js-hamburger').click(function () {
  //toggleClassでclassをつけたり外したりする
    $('body').toggleClass('is-drawerActive')
  //attr()でaria-expandedがfalseの場合、thisはクリックした要素そのもの
  // attr:HTML要素の 属性 を取得,変更,新規追加 attr('変更前','変更後')
    if ($(this).attr('aria-expanded') == 'false') {
      $(this).attr('aria-expanded', true)
      //jQueryでcss操作、アニメーションにはdisplayではなく、visibilityを使う
      $('#js-global-menu').css('visibility', 'visible')
      $('#js-global-menu').attr('area-hidden','false')
      $('#js-global-menu').addClass('open-menu')
      $('#bg-wrapper').addClass('bg-musk')
      $(document.body).addClass('no-scroll') 
    } else {
      $(this).attr('aria-expanded', false)
      $('#js-global-menu').css('visibility', 'hidden')
      $('#js-global-menu').attr('area-hidden','true')
      $('#js-global-menu').removeClass('open-menu')
      $('#bg-wrapper').removeClass('bg-musk') 
      $(document.body).removeClass('no-scroll') 
    }
  })
});

