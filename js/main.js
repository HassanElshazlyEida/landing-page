//---------- navbar scrolled fixed
$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 100) {
        $('nav').addClass('scrolled');
    } else {
        $('nav').removeClass('scrolled');
    }

});
/*---------- carousel click
$(document).ready(function() {
    $('.carousel-control-next , .carousel-control-prev').on('click',function(){
        //$(".slide_content p").slideUp("slow");
        setInterval(function () {
            $('.carousel-control-prev-icon').click();
        }, 7000);
    });

});
*/
//---------- box hover
$(document).ready(function() {
    $(".info_box").hover(function(){
        $(this).children().children().css("color", "#ffb606");
    });
    $(".info_box").mouseleave(function(){
        $(this).children().children().css("color", "white");
    });
  
});

//------------
$(function() {
    'use strict';
    
      $('.carousel .carousel-item[data-src]').each(function() {
          var $this = $(this);
  
          $this.prepend([
              '<div style="background-image: url(', $this.attr('data-src'), ')"></div>'
          ].join(''));
      });
  });