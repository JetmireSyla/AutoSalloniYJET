(function ($,window, document) {

	// body...
	$(function (){
		// body...

		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					nav:false
				},
				600:{
					items:4,
					nav:false
				},
				1000:{
					items:5,
					nav:true,
					loop:false
				}
			}
		})

	})
}(window.jQuery,window, document));
