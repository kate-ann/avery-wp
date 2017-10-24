/* ==========================================================================

    Project: Avery
    Last updated: August 2017

   ========================================================================== */

(function($) {

	'use strict';
	
	
	var Main = {
	
	  /**
	   * Init function
	   */
	  init: function() {
	    Main.initMobileMenu();
    	Main.initSlideshow();
    	Main.initCountdownTimer();
	  },
	
		/*
		 * Init mobile menu
		 */
		initMobileMenu: function() {

			if ($('#menu-btn').length > 0) {
			  $('.menu-item-has-children').append('<div class="open-menu-link open"></div>');
			  $('.menu-item-has-children').append('<div class="open-menu-link close"></div>');
			  $('.open').addClass('visible');

			  $('#menu-btn').click(function() {
			    $('.responsive-menu').slideToggle();
			  });

			  $('.open-menu-link').click(function(e) {

			    var childMenu = e.currentTarget.parentNode.children[1];

			    if ($(childMenu).hasClass('visible')) {
			      $(childMenu).slideToggle();
			      $(e.currentTarget.parentNode.children[3]).removeClass("visible");
			      $(e.currentTarget.parentNode.children[3]).removeClass("visible");
			      $(e.currentTarget.parentNode.children[2]).addClass("visible");
			    } else {
			      $(childMenu).addClass("visible");
			      $(e.currentTarget.parentNode.children[2]).removeClass("visible");
			      $(e.currentTarget.parentNode.children[3]).addClass("visible");
			    }
			  });
			}
		},

		/*
		 * Init slideshow
		 */
		initSlideshow: function() {
			if ($('#testimonials').length > 0) {
			  $('#testimonials').royalSlider({
			    keyboardNavEnabled: true,
			    autoScaleSlider: true,
			    autoHeight: true,
			    controlNavigation: 'bullets',
			    navigateByClick: true,
			    startSlideId: 0,
			    loop: true,
			    autoPlay: {
			      enabled: false,
			      delay: 3000,
			      pauseOnHover: true
			    },
			    transitionType: 'move',
			    globalCaption: false
			  });
			}
		},

		/*
		 * Init Countdown timer
		 */
		initCountdownTimer: function() {
			if ($('#timer').length > 0) {
			  $('#timer').countdown(x5_timer_vars.countdownTime, function(event) {
			    $(this).html(event.strftime(
			      '<ul>' +
			      '<li><span class="number">%D</span> days </li>' +
			      '<li><span class="number">%H</span> hr </li>' +
			      '<li><span class="number">%M</span> min </li>' +
			      '<li><span class="number">%S</span> sec </li>' +
			      '</ul>'));
			  });		  
			}
		}	  
	};
	
	document.addEventListener('DOMContentLoaded', function() {
		Main.init();
	});
})( jQuery );