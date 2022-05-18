/*header meun*/
$(document).ready(function(){
    $('.top_nav .depth > li').mouseover(function(){
        $(this).find('>a').addClass('on');
      $('.depth2').stop().show();
        $('.bg').show();
      });
      $('.top_nav .depth li').mouseleave(function(){
        $(this).find('>a').removeClass('on');
         $('.depth2').stop().hide();
        $('.bg').hide();
    });

    /* header lng */
$('.langbox > a').click(function(){
  $(this).next('.depth_lang').slideToggle('fast');
});

$('.lag > a').click(function(){
  $(this).next('.depth_lang').slideToggle('fast');
});

  /* footer site */
   $('.f_site > button').click(function(){
    $('.customSelect').show();
  });

  $('.custom_close').click(function(){
    $('.customSelect').hide();
  });
   /*메인슬라이드*/
 $('.main_visual').slick({
    autoplay: true,
    arrows: true,
    dots: true,
    autoplaySpeed:3000
});
$('.right > .mid_slide').slick({
  autoplay: true,
  arrows: true,
  dots: true,
});
$('.pro_list > .list_box').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  dots: true,
  autoplay: true,
  arrows: false,
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 501,
      settings: {
        centerMode: false,
        centerPadding: '40px',
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.center_mode').slick({
  centerMode: true,
  centerPadding: '400px',
  slidesToShow: 1,
  focusOnSelect:true,
  responsive: [
    {
      breakpoint: 1201,
      settings: {
        centerMode: true,
        centerPadding: '150px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 1025,
      settings: {
        centerMode: true,
        centerPadding: '70px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        centerMode: false,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: false,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
// $('.location > li').click(function(){
//   $(this).children('.loc_depth2').slideToggle('fast');
// });
/*sub 메뉴 클릭시 */
  $(".location > li").hover(function () {
      if ($(this).children('.loc_depth2').is(":visible")) {
          $(this).children('.loc_depth2').slideUp();
      } else {
          $(this).siblings().find(".loc_depth2").slideUp();
          $(this).children('.loc_depth2').slideDown();
      }
      // 열리는 스크립트
  });

/*메뉴 열림 */
		var wrapH = $("#wrapper").height();
		var menuH= $(".allmenu").height();
		$( ".menu_btn").off('click').click(function() {
			if ($(this).hasClass("on")){
				$(this).removeClass("on")
				$( ".allmenu" ).slideUp(150);
				$( ".allmenu_bg" ).slideUp(150);
			}else{
				$(this).addClass("on")
					$( ".allmenu" ).slideDown(150);
					$( ".allmenu_bg" ).css({"display":"block","height":$("#wrapper").height()});
			}
		});

		$(".allmenu_bg,.allmenu_x").off('click').click(function(){
			$( ".allmenu" ).slideUp(150);
			$(".menu_btn").removeClass("on")
			$( ".allmenu_bg" ).css({"display":"none","height":""});
		});
	$("#lnb_m > li > a").click(function(){
	$("#lnb_m > li > a").removeClass("on");
	   $(".allmenu .dep_meun").slideUp();
	   if(!$(this).next().is(":visible"))
	   {
		   $(this).next().slideDown();
		   $(this).addClass("on");
	   }else{
		 $(this).removeClass("on");
	   }
	   // if(!$(this).is(":visible"))
	   // {
	   // }
	   return false;
	});

	$(".lang button").click(function(){
		$(".lang .depth").toggle();
	})

});

$(document).ready(function(){
  if ($('.info_slider-main').length) {
      var $slider = $('.info_slider-main')
          .on('init', function(slick) {
              $('.info_slider-main').fadeIn(1000);
          })
          .slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              autoplay: true,
              lazyLoad: 'ondemand',
              autoplaySpeed: 3000,
              nextArrow: '.sw-next',
              prevArrow: '.sw-prev',
              asNavFor: '.info_slider-thmb'
          });

      var $slider2 = $('.info_slider-thmb')
          .on('init', function(slick) {
              $('.info_slider-thmb').fadeIn(1000);
          })
          .slick({
              slidesToShow: 6,
              slidesToScroll: 1,
              lazyLoad: 'ondemand',
              asNavFor: '.info_slider-main',
              dots: false,
              arrows: false,
              centerMode: false,
              focusOnSelect: true,
              responsive: [{
                      breakpoint: 1024,
                      settings: {
                          slidesToShow: 5,
                          slidesToScroll: 1
                      }
                  },
                  {
                      breakpoint: 600,
                      settings: {
                          slidesToShow: 4,
                          slidesToScroll: 1
                      }
                  },
                  {
                      breakpoint: 480,
                      settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                      }
                  }

              ]
          });


      $('.info_slider-thmb .slick-slide').removeClass('slick-active');


      $('.info_slider-thmb .slick-slide').eq(0).addClass('slick-active');


      $('.info_slider-main').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
          var mySlideNumber = nextSlide;
          $('.info_slider-thmb .slick-slide').removeClass('slick-active');
          $('.info_slider-thmb .slick-slide').eq(mySlideNumber).addClass('slick-active');
      });

  }

  $('.sub_info_s > .c_slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    autoplay: false,
    arrows: false,
    responsive: [{
      breakpoint: 1024,
      settings: {
          slidesToShow: 2,
          slidesToScroll: 1
      }
  },
  {
      breakpoint: 641,
      settings: {
          slidesToShow: 1,
          slidesToScroll: 1
      }
  }
]
  });

    $('.gnb li.topm').mouseover(function(){
    $('.gnb li.topm > div').show();
    });
    $('.gnb li.topm').mouseleave(function(){
    $('.gnb li.topm > div').hide();
    })

    $(function(){

                      $(window).scroll(function( e ){
			var scrTop = $(window).scrollTop();

				if( scrTop>=5 ){
					//브라우저에 붙기
					$("#header").addClass("on");
                    $("#header .header_top").hide();
                    $(".bg").css({"top":"40px"});
				}else{
					//브라우저에서 떼기
					$("#header").removeClass("on");
                    $("#header .header_top").show();
                    $(".bg").css({"top":"130px"});
				}
	       	});

          });



});

// $(function () {
//   var lnb = $(".top_nav").offset().top;
//   $(window).scroll(function() {
//     var window = $(this).scrollTop();
//
//     if(lnb <= window) {
//       $(".top_nav").addClass("fixed");
//     } else {
//       $(".top_nav").removeClass("fixed");
//     }
//   });
// });


/*달력*/
$(function () {
  $('.calendar').datetimepicker({
    format: "YYYY/MM/DD"
  });
  $("#inDate_start, #inDate_end").focus().blur();
});

// $(function(){ // document ready
//   if (!!$('.top_nav').offset()) { // make sure "#sticky" element exists
//     var stickyTop = $('.top_nav').offset().top; // returns number
//     $(window).scroll(function(){ // scroll event
//       var windowTop = $(window).scrollTop(); // returns number
//       if (stickyTop < windowTop){
//           $('.top_nav').css({ position: 'fixed', top: 60 });
//         }
//         else {
//           $('.top_nav').css('position','static');
//         }
//       });
//     }
//   });

// position: fixed 사용시 ie 떨림 현상 방지
if( navigator.userAgent.match(/Trident\/7\./) ){
  $('body').on("mousewheel", function(){
    event.preventDefault();

    var wheelDelta = event.wheelDelta,
      currentScrollPosition = window.pageYOffset;

    window.scrollTo(0, currentScrollPosition - wheelDelta);
  });
  $('body').keydown(function(e){
    e.preventDefault();
    var currentScrollPosition = window.pageYOffset;

    switch (e.which){
      case 38: //up
        window.scrollTo(0, currentScrollPosition - 120);
        break;
      case 40: //down
        window.scrollTo(0, currentScrollPosition + 120);
        break;
      default: return;
    }
  });
}
