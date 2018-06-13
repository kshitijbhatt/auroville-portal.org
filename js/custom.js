jQuery(document).ready(function($) {
  var alterClass = function() {
    var ww = document.body.clientWidth;
    if (ww <= 768) {
      $('#footer').removeClass('fixed-bottom');
    } else if (ww >= 768) {
      $('#footer').addClass('fixed-bottom');
    };
  };
  $(window).resize(function(){
    alterClass();
  });
  //Fire it when the page first loads:
  alterClass();
});