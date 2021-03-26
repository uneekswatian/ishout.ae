(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 56)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 57
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Scroll reveal calls
  
  window.sr = ScrollReveal();
  
  sr.reveal('.bannerPic', {
    delay: 200,
	rotate: {
		x: 360,
		y: 30,
		z: 60
	},
	scale: 0
	
  });
  
  sr.reveal('.bannerText', {
    delay: 400,
	origin: 'top',
	easing: 'ease-in',
	scale: 0
	
  });

  sr.reveal('.sr-icon-1', {
    delay: 400,
	rotate: {
		x: 360,
		y: 30,
		z: 60
	},
	scale: 2
	
  });
  
  sr.reveal('.sr-icon-2', {
    delay: 600,
	rotate: {
		x: 360,
		y: 30,
		z: 60
	},
	scale: 2
	
  });
  
  sr.reveal('.sr-icon-3', {
    delay: 800,
	rotate: {
		x: 360,
		y: 30,
		z: 60
	},
	scale: 2
	
  });
  
  
  sr.reveal('.animate', { delay: 600, distance: '200px' , easing: 'ease-in' });
  
  sr.reveal('.process-box', { delay: 200, distance: '50px' , easing: 'ease-in' });
  
  sr.reveal('.case-study-img', { delay: 300, distance: '80px' , easing: 'ease-in' });
 

  // Magnific popup calls
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });

})(jQuery); // End of use strict


		$('.clients-slider').slick({
			  slidesToShow: 7,
			  slidesToScroll: 1,
			  autoplay: true,
				autoplaySpeed: 1500,
				speed: 1000,
			  arrows: true,
			  dots: false,
			  prevArrow: '<a href="javascript:void(0);" class="btnPrev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>',
              nextArrow: '<a href="javascript:void(0);" class="btnNext"><i class="fa fa-angle-right" aria-hidden="true"></i></a>',
			  responsive: [
						{
						  breakpoint: 1100,
						  settings: {
							slidesToShow: 2
						  }
						}
				]
			});
			
			$('.case-studies-slider').slick({
			  slidesToShow: 3,
			  slidesToScroll: 1,
			  autoplay: false,
			  centerMode: true,
			  centerPadding: '0',
			  focusOnSelect: true,
			  arrows: false,
			  dots: true,
			  prevArrow: '<a href="javascript:void(0);" class="btnPrev"><i class="fa fa-angle-left fa-2x" aria-hidden="true"></i></a>',
              nextArrow: '<a href="javascript:void(0);" class="btnNext"><i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></a>',
			  responsive: [
						{
						  breakpoint: 520,
						  settings: {
							slidesToShow: 1
						  }
						}
				]
			});
