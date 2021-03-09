var $ = require('jquery');
var anime = require('animejs');
var glide = require('@glidejs/glide');

module.exports = {
	init: function () {

		// const Testing = function(Glide,Components,Events) {
		// 	var example = {
		// 		fadeout: function(Glide) {
		// 			var currentslide = slide /* function/method to find current slide */;
		// 			Glide.Autoplay.stop();
		// 			currentslide.addClass('fadeout');
		// 			currentslide.onTransitionEnd(Glide.Autoplay.start());
		// 		}
		// 	};
		// 	//This is borrowed from the Homepage Slide on glidejs.com
		// 	return Events.on('run', function() {
		// 		example.fadeout(Components.Html.slides[Glide.index]);
		// 	}),
		// 	example
		// };

		// Image sliders
		var images = $('.glide.images');
		if (images.length > 0) {
			for (var i = 0; i < images.length; i++) {
				var allSlides = $(images[i]).find('.glide__slide');
				var slideCount = allSlides.length;

				var glideSlide = new glide(images[i], {
					type: 'carousel',
					startAt: 0,
					perView: 3,
					gap: 0,
					focusAt: 'center',
					// animationTimingFunc: 'cubic-bezier(0.165, 0.840, 0.440, 1.000)',
					breakpoints: {
						// 1200: {
						// 	perView: 5
						// },
						// 960: {
						// 	perView: 3
						// },
						600: {
							perView: 1
						}
					}
				});

				var galleryAnimation = function () {
					var i = glideSlide.index;
					var lastIndex = slideCount - 1;
					// console.log(i);
					if (i == 0) {
						var first = lastIndex;
						var second = 0;
						var third = 1;
					} else if (i == lastIndex) {
						var first = lastIndex - 1;
						var second = lastIndex;
						var third = 0;
						// } else if ( i == lastIndex - 1 ) {
						// 	var first = i - 1;
						// 	var second = lastIndex;
						// 	var third = 0;
					} else {
						var first = i - 1;
						var second = i;
						var third = i + 1;
					}

					// var secondSlide = '.slide-' + second + ' img';
					// var thirdSlide = '.slide-' + i + ' img';
					// var fourthSlide = '.slide-' + fourth + ' img';
					// var fifthSlide = '.slide-' + fifth + ' img';

					var firstSlide = '.slide-' + first + ' img'
					var secondSlide = '.slide-' + second + ' img';
					var thirdSlide = '.slide-' + third + ' img';

					// All slides
					anime({
						targets: '.glide__slide img',
						translateX: '0',
						scale: '0.75',
						opacity: '0.5',
						autoplay: true,
						delay: anime.stagger(0) // increase delay by 100ms for each elements.
					});
					// 1st slide
					anime({
						targets: firstSlide,
						translateX: '53px',
						scale: '0.75',
						opacity: '0.5',
						autoplay: true,
						delay: anime.stagger(0) // increase delay by 100ms for each elements.

					});
					// 2nd slides / current slide
					anime({
						targets: secondSlide,
						translateX: '0',
						scale: '1',
						opacity: '1',
						autoplay: true,
						delay: anime.stagger(0) // increase delay by 100ms for each elements.
					});
					// // 3rd / current slide
					anime({
						targets: thirdSlide,
						translateX: '-53px',
						scale: '0.75',
						opacity: '0.5',
						autoplay: true,
						delay: anime.stagger(0) // increase delay by 100ms for each elements.
					});
					// // 4th slide
					// anime({
					// 	targets: fourthSlide,
					// 	translateZ: '2px',
					// 	translateX: '26px',
					// 	perspective: '100px',
					// 	scale: '1',
					// 	// zIndex: 2,
					// 	autoplay: true,
					// 	delay: anime.stagger(0) // increase delay by 100ms for each elements.
					// });	
					// // 5th slide
					// anime({
					// 	targets: fifthSlide,
					// 	translateZ: '1px',
					// 	translateX: '0',
					// 	perspective: '100px',
					// 	scale: '0.75',
					// 	// zIndex: 2,
					// 	autoplay: true,
					// 	delay: anime.stagger(0) // increase delay by 100ms for each elements.
					// });		
				}

				glideSlide.on('run', function () {
					// console.log('run, index: ' + glideSlide.index);
					galleryAnimation();
				});

				glideSlide.on('mount.after', function () {
					// console.log('mount.after, index: ' + glideSlide.index);
					galleryAnimation();
				});

				glideSlide.mount();
			}
		}

		// Logo sliders
		var logos = $('.glide.logos');
		if (logos.length > 0) {
			for (var i = 0; i < logos.length; i++) {
				var logoSlide = new glide(logos[i], {
					type: 'carousel',
					startAt: 0,
					perView: 3,
					// focusAt: 'center',
					// animationTimingFunc: 'cubic-bezier(0.165, 0.840, 0.440, 1.000)',
					breakpoints: {
						// 1200: {
						// 	perView: 5
						// },
						// 960: {
						// 	perView: 3
						// },
						600: {
							perView: 1
						}
					}
				});

				logoSlide.mount();
			}
		}

	}
}