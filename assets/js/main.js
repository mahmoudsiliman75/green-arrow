$(document).ready(function() {

  // START:: STIKY NAVBAR
  // $(window).on('scroll', function() {
  //   if( $(window).scrollTop() ) {
  //     $('#navBar').addClass('stiky');
  //   } else {
  //     $('#navBar').removeClass('stiky');
  //   }
  // });
  // END:: STIKY NAVBAR

  // START:: MOBILE MENU
  $('.mobile-menu-content').css('display', 'none');
  $(".menu-btn").on('click', () => {
    $('.mobile-menu-content').toggle();
  });
  // END:: MOBILE MENU

  // START:: LIGHTBOX
  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
  });
  // END:: LIGHTBOX

  // START:: HOME GALLERY SLIDER
  $('#gallery-slider').owlCarousel({
    dots: false,
    loop:true,
    rtl:true,
    margin:10,
    responsiveClass:true,
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:3,
        nav:false
      },
      1000:{
        items:4,
        nav:true,
        loop:false
      }
    }
  });
  // END:: HOME GALLERY SLIDER

  // START:: VIDEOS SLIDER
  $('#videos-slider').owlCarousel({
    dots: false,
    loop:true,
    rtl:true,
    margin:10,
    responsiveClass:true,
    responsive:{
      0:{
        items:1,
        nav:true
      },
      600:{
        items:3,
        nav:false
      },
      1000:{
        items:3,
        nav:true,
        loop:false
      }
    }
  });
  // START:: VIDEOS SLIDER
});