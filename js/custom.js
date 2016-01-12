/*===============================================================
  Home Page Right Menu 
===============================================================*/

   // Navigation Menu Slider
    $('#nav-expander').on('click',function(e){
      e.preventDefault();
      $('body').toggleClass('nav-expanded');
    });
    $('#nav-close').on('click',function(e){
      e.preventDefault();
      $('body').removeClass('nav-expanded');
    });
     
    // Initialize navgoco with default options
    $(".main-menu").navgoco({
        caret: '<span class="caret"></span>',
        accordion: false,
        openClass: 'open',
        save: true,
        cookie: {
          name: 'navgoco',
          expires: false,
          path: '/'
        },
        slide: {
          duration: 300,
          easing: 'swing'
        }
    });    
 
// 
 $(document).mouseup(function (e){
    var container = $('header');
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        $('#nav-expander').trigger('click');
        $('body').removeClass('nav-expanded');
    }
});
$(document).ready(function() {
  $('.nav-expander').click(function() {
    $('#nav-expander1').toggleClass("visibility-block");
  });
  $('#nav-expander1').on("click" ,function() {
    $("html").find("body.nav-expanded").removeClass('nav-expanded')
  });
});


/*===============================================================
  Home Page Sticky Header
===============================================================*/

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('#sticky').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('#sticky').removeClass('header-show').addClass('header-hide');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('#sticky').removeClass('header-hide').addClass('header-show');
        }
    }
    
    lastScrollTop = st;
}

/*===============================================================
  Home Page Video Popup 
===============================================================*/

  $('.video_content').click(function() {
    $('.thevideo').show('300');
  });
  $('.videoclose').click(function() {
    $('.thevideo').hide('300', function() {
      
    });
  });

/*===============================================================
  Home Page Video Section Dynamic Height 
===============================================================*/

  windowHeight = $(window).height();
  headerHeight = $('header').height();
  awardsHeight = $('.awards_laurels_content').height();
  videoContainerHeight = windowHeight - (headerHeight + awardsHeight);
  $('.slider_video').height(videoContainerHeight);


/*===============================================================
  About Us Page Select Box
===============================================================*/

  // $('.our-team-select').change(function(event) {
  //   var value = $(this).val();
  //   $('.bx-pager .bx-pager-item a[data-slide-index="' + value + '"]').trigger('click');
  //   // current selected class remove and add
  //   var ourselected = $('.our-team-select').find(":selected");
  //   $(ourselected).addClass('class_name');
  //   $(ourselected).siblings().removeClass('class_name').removeAttr( 'style' );;
  //   $('.class_name').hide();
  // });

 $(document).on('click','.bx-pager .bx-pager-item a ',function(event) {
   $('.cs-options li').removeClass('cs-selected');
   option = $('.cs-options li[data-value="' + value + '"]');
   option.addClass('cs-selected');
   $('span.cs-placeholder').text(option.first().find('span').text());
 });
  $(document).on('click','.cs-options ul li',function(event) {
     $(".cs-options ul li span").attr("href", "http://www.w3schools.com/jquery");
    option = $(this);
    optionText = option.find('span').text();
    value = $(this).data('value');
    $('.cs-options li').removeClass('cs-selected');
    $('.cs-options li[data-value="' + value + '"]').addClass('cs-selected');
    $('span.cs-placeholder').text(optionText);
    $('.bx-pager .bx-pager-item a[data-slide-index="' + value + '"]').trigger('click');
   
 });
// $(document).on('click','.cs-options ul li a',function(event) {
//   val = $( '.cs-options ul li a').html();
//   document.location.href = val+".html";
// });
//jQuery(document).ready(function($) {
 // value = $('.cs-options ul li span').data("value");
  //$(document).on('click','.cs-options ul li',function(event) {

   //});
  //alert(value);
     //$( ".cs-options ul li span" ).wrap('<a href="" />');
//});


/*===============================================================
  Right Menu On Click Trigger
===============================================================*/

// $('.ggs_about_team').click(function(event) {
//   $('#nav-expander').trigger('click');
//   setTimeout(function() {
//     $('.main-menu li').first().find('a').trigger('click');
//   }, 400);
// });
// $('.academics_page').click(function(event) {
//   $('#nav-expander').trigger('click');
//   setTimeout(function() {
//     $('.main-menu li:nth-child(2)').find('a').trigger('click');
//   }, 400);
// });


$(".h3_trigger").click(function(){
  var clickedClass = $(this).attr("class").split(' ')[1];
  var clickedid= $(this).attr("id").split(' ')[0];
  if(clickedid=="1"){
    $('#nav-expander').trigger('click');
    setTimeout(function() {
    $('.main-menu li').first().find('a').trigger('click');
    }, 400);
  }
  else{
  
    $('#nav-expander').trigger('click');
    setTimeout(function() {
    $('.main-menu li:nth-child('+clickedid+'').find('a').trigger('click');
    }, 400);
 
    }
});

/*===============================================================
  Faq Page onclick scroll 
===============================================================*/

$('.faq_container ul li a').click(function(event) {
  event.preventDefault();
  var data = $(this).data('id');
  if(data){
    $('body,html').animate({scrollTop:$(data).offset().top - 90},1500);
  }
});

/*===============================================================
  Faq Page onclick scroll top then show arrow
===============================================================*/

 $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1500);
        return false;
    });




