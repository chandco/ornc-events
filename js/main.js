$(document).ready(function() {

	

	// home slideshow init

	if ($('.main-carousel').length) {

	  homeSlideshow();

	}

	

	// fancybox popup

	if ($('.slides').length) {

	    fancyboxPopup();

	}

	

	// room features slider init

	if ($('.single-room-features').length) {

		roomFeatureSlider();

	}

	

	// resize image function

	imageResizer();

	

	if ($('.match').length) {

	   jsactiveClass();

	}

	

});



// FUNCTIONS



function homeSlideshow() {

	

	$('.main-carousel').flexslider({

        animation: "fade",

        animationLoop: true,

		keyboard: false,

		selector: ".slides > li",

        itemWidth: 400,

		slideshow: true, 

		directionNav: false,               

        slideshowSpeed: 6000,          

        animationSpeed: 900,

        itemMargin: 0,

		useCSS:false,

        start: function(slider){

          $('.main-carousel .slides').css('background-image', 'none');

        }

      });

}



function fancyboxPopup() {

	

	$(".fancybox").fancybox({

		nextEffect	: 'fade',

		prevEffect	: 'fade'

	});

}



function roomFeatureSlider() {

	

	$('.single-room-features').flexslider({

    animation: "slide",

	selector: ".slides > li",

    animationLoop: false,

	keyboard: false,

	controlNav: false,

	slideshow:false,

	easing: "easeInOutExpo",

	useCSS:false,

    itemWidth: 210,

    itemMargin: 8

  });

  

}



function imageResizer() {

	

	var theImages = $('.resize');

	

	theImages.each(function() {

		

		parent = $(this).parent();

		parentHeight = parent.height();

        imageHeight = $(this).height();

		

		if (imageHeight <= parentHeight) {

			$(this).css({"height":"100%", "width": "auto"});

		}

		else {

			$(this).css({"width":"100%", "height": "auto"});

		}

    });

	

}



function jsactiveClass() {

	

	var headingMatch = $('.match').html();

	var targetClass = $('.wp-tag-cloud li a');

	

	targetClass.each(function() {

        

		if (headingMatch == ($(this).html() ) ) {

			$(this).addClass('active');

		}

    });

	

	

}