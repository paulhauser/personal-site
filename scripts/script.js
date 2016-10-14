var toggle = 0;
var responsiveLi = $(".responsive-li");

$(function(){

  $(".icon").click(function() {
    if(toggle === 0) {
      responsiveLi.css("float", "none");
      responsiveLi.css("display", "block");
      toggle = 1;
    } else {
      responsiveLi.css("display", "none");
      toggle = 0;
    }
  });

  $(window).resize(function() {
    var winSize = $(window).width();
      if(winSize > 720) {
        responsiveLi.css("float", "right");
        responsiveLi.css("display", "inline-block");
        toggle = 0;
      } else {
        responsiveLi.css("display", "none")
      }

  });
});
