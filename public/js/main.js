(function($) {

	"use strict";

	$(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });


	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() {
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	// Scrollax
   $.Scrollax();

	var carousel = function() {
		$('.carousel-testimony').owlCarousel({
			center: false,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 4
				}
			}
		});

	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');
				}
			}
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
				}
			}
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');
				}

				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();

	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
			BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
			iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
			Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
			Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
			any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	var counter = function() {

		$('#section-counter, .hero-wrap, .ftco-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});

			}

		} , { offset: '95%' } );

	}
	counter();


	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});

				}, 100);

			}

		} , { offset: '95%' } );
	};
	contentWayPoint();


	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });


  $('.checkin_date, .checkout_date').datepicker({
	  'format': 'm/d/yyyy',
	  'autoclose': true
	});




})(jQuery);





(function($) {

  var App = {

    /**
    * Init Function
    */
    init: function() {
    App.homeHeight();
    App.counter();
    App.HomeOpacity();
    App.ScrollToContact();
    App.ScrollBack();
    App.iosdetect();
    App.Preloader();
    App.HomeBackground();
    App.FormValidation();
    },



     /**
     * Home Screen Height
     */
     homeHeight: function() {
     var h = window.innerHeight;
     $('#home').height(h);

     $(window).resize(function(){
        var h = window.innerHeight;
        $('#home').height(h);
        });
     },

     /**
      * Home Screen Counter
      */
     counter: function() {
     $('.countdown').countdown({ date: "February 7, 2014 15:03:26" });
     },


     /**
      * Home Screen Opacity control
      */
     HomeOpacity: function() {

     var h = window.innerHeight;
     $(window).on('scroll', function() {
                  var st = $(this).scrollTop();
                  $('body').pseudoCss(':after', 'opacity', st/h );
                  $('#home').css('opacity', (1-st/h) );
                  });

     },


     /**
      * Scroll To Contact
      */
     ScrollToContact: function() {
     $('#arrow').click(function () {
       $.scrollTo('#contact',1200,{easing:'easeOutExpo',offset:0,'axis':'y'});
     });
     },



     /**
      * Scroll Back
      */
     ScrollBack: function() {
     $('#arrow_back').click(function () {
     $.scrollTo('#home',1500,{easing:'easeInOutExpo',offset:0,'axis':'y'});
                       });
     },


     /**
      * iosdetect
      */
     iosdetect: function() {
     var deviceAgent = navigator.userAgent.toLowerCase();
     $iOS = deviceAgent.match(/(iphone|ipod|ipad)/);

     if ($iOS) {
     var divs = $('#home_content');
     var h = window.innerHeight;
     var divh = $("#home_content").height();
     divs.css({ "position": "relative", "top": (h-divh)/2, "margin-top": "0" });
     $(window).resize(function() {
                  var divs = $('#home_content');
                  var h = window.innerHeight;
                  var divh = $("#home_content").height();
                  divs.css({ "position": "relative", "top": (h-divh)/2, "margin-top": "0" });
                  });

     // use fancy CSS3 for hardware acceleration
     } else {


     // use standard things like jQuery.animate
     }
     },


      /**
      * Preloader
      */
      Preloader: function() {
      $(window).load(function() {

                function logo_fade() {$('#logo').css({"opacity":"1"})};
                function logo_header_fade() {$('#logo_header').css({"opacity":"1"})};
                function counter_box_fade() {$('#counter_box').css({"opacity":"1"})};
                function slogan_fade() {$('#slogan').css({"opacity":"1"})};
                function newsletter_form_fade() {$('#newsletter_form').css({"opacity":"1"})};
                function arrow_fade() {$('#arrow').css({"opacity":"1"})};
                function preview_fade() {$('#preview').css({"opacity":"1"})};
                function contact_fade() {$('#contact').css({"opacity":"1"})};

                $('#logo_header').css({"opacity":"0"});
                $('#counter_box').css({"opacity":"0"});
                $('#slogan').css({"opacity":"0"});
                $('#newsletter_form').css({"opacity":"0"});
                $('#arrow').css({"opacity":"0"});
                $('#preview').css({"opacity":"0"});
                $('#contact').css({"opacity":"0"});

                $('#status').delay(100).fadeOut('slow');
                $('#preloader').delay(500).fadeOut('slow');
                $('body').delay(500).css({'overflow':'visible'});
                       setTimeout(logo_fade,700);
                       setTimeout(logo_header_fade,100);
                       setTimeout(counter_box_fade,300);
                       setTimeout(slogan_fade,600);
                       setTimeout(newsletter_form_fade,900);
                       setTimeout(arrow_fade,1200);
                       setTimeout(contact_fade,1200);
                })
        },

         /**
          * Vegas Slider
          */
         HomeBackground: function() {

                   $.vegas({
                           src:'images/home_bg.jpg'
                           });
                   $.vegas('overlay', {
                           src:'images/overlays/10.png'
                           });

         },

         /**
          * Form Validation
          */
         FormValidation: function() {
         $('#subscribe-form').ketchup();
         },




 }

$(function() {
  App.init();
  });


})(jQuery);
