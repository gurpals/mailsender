(function($) {
	/*---Owl-carousel----*/



	// ______________Testimonial-owl-carousel2
	var owl = $('.testimonial-owl-carousel2');
	owl.owlCarousel({
		margin: 25,
		loop: true,
		nav: false,
		autoplay: true,
		dots: false,
		animateOut: 'fadeOut',
		smartSpeed:450,
		responsive: {
			0: {
				items: 1
			}
		}
	})

	// ______________Testimonial-owl-carousel3
	var owl = $('.testimonial-owl-carousel3');
	owl.owlCarousel({
		margin: 25,
		loop: true,
		nav: false,
		autoplay: true,
		dots: true,
		responsive: {
			0: {
				items: 1
			}
		}
	})

	// ______________Testimonial-owl-carousel4
	var owl = $('.testimonial-owl-carousel4');
	owl.owlCarousel({
		margin: 25,
		loop: true,
		nav: false,
		autoplay: true,
		dots: true,
		responsive: {
			0: {
				items: 1
			},
            600: {
				items: 1
			},
            1000: {
				items: 1
			}
		}
	})

	// ______________Testimonial-owl-carousel
	var owl = $('.testimonial-owl-carousel');
	owl.owlCarousel({
		loop: true,
		rewind: true,
		margin: 25,
		autoplay: true,
		animateIn: 'fadeInDowm',
		animateOut: 'fadeOutDown',
		autoplay: true,
		autoplayTimeout: 5000, // set value to change speed
		autoplayHoverPause: true,
		dots: true,
		nav: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			1000: {
				items: 1,
			}
		}
	})



	
	// ______________bannner-owl-carousel
	var owl = $('.bannner-owl-carousel');
	owl.owlCarousel({
		margin: 0,
		padding:0,
		loop: true,
		nav: false,
		autoplay: true,
		dots: false,
		animateOut: 'fadeOut',
		smartSpeed:450,
		responsive: {
			0: {
				items: 1
			}
		}
	})

	// ______________bannner-owl-carousel1
	var owl = $('.bannner-owl-carousel1');
	owl.owlCarousel({
		margin: 0,
		loop: true,
		nav: true,
		autoplay: true,
		dots: false,
		animateOut: 'fadeIn',
		smartSpeed:450,
		responsive: {
			0: {
				items: 1
			}
		}
	})

})(jQuery);

