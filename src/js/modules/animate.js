var $ = require('jquery');
var AOS = require('aos');
var anime = require('animejs');

module.exports = {
	init: function () {
		// Review anime documention below
		// https://animejs.com/documentation/#cssSelector

		// The loader element helps to hide the page until all SVG assets are loaded
		setTimeout(function () {
			anime({
				targets: '.loader',
				opacity: [1, 0],
				autoplay: true,
				duration: 2000,
				delay: 2000
			});
		}, 250);

		// Set timeout on all SVG elements below to give them time to load
		anime({
			targets: '.loader svg',
			autoplay: true,
			easing: 'easeInOutCubic',
			elasticity: 200,
			loop: 6,
			direction: 'alternate',
			scale: [
				{ value: [1, 1.5], duration: 1000, delay: 0 }
			]
		});

		setTimeout(function () {
			anime({
				targets: '.hero.style-4 svg #circle',
				strokeDashoffset: [anime.setDashoffset, 0],
				autoplay: true,
				duration: 2000,
				delay: 900,
				easing: 'cubicBezier(.5, .05, .1, .3)'
			});
		}, 250);

		setTimeout(function () {
			anime({
				targets: '.hero.style-4 svg .dot',
				opacity: [0, 1],
				autoplay: true,
				duration: 2000,
				delay: 900,
				easing: 'cubicBezier(.5, .05, .1, .3)'
			});
		}, 250);

		setTimeout(function () {
			anime({
				targets: '.hero.style-4 svg polyline',
				strokeDashoffset: [anime.setDashoffset, 0],
				opacity: [0, 1],
				autoplay: true,
				duration: 2000,
				delay: 900,
				easing: 'cubicBezier(.5, .05, .1, .3)'
			});
		}, 200);

		setTimeout(function () {
			anime({
				targets: '.hero.style-4 svg line',
				strokeDashoffset: [anime.setDashoffset, 0],
				opacity: [0, 1],
				autoplay: true,
				duration: 2000,
				delay: 900,
				easing: 'cubicBezier(.5, .05, .1, .3)'
			});
		}, 200);

		anime({
			targets: '.hero.style-4 .basketball',
			translateY: [300, 0],
			translateY: {
				value: [300, 0],
				duration: 5000
			},
			translateX: {
				value: ['-50%'],
				duration: 0
			},
			opacity: {
				value: [0, 1],
				duration: 5000
			},
			autoplay: true,
			// duration: 5000,
			delay: 3000
		});

		var introButtons = document.querySelectorAll('.hero.style-4 .buttons .btn-hero');
		if (introButtons.length > 0) {
			setTimeout( function() {
				introButtons.forEach( function(item, index) {
					setTimeout( function() {
						item.classList.add('reveal');
					},
					500 * index);
				});
			}, 4000);
		}

		anime({
			targets: '.hero.style-4 .scroll',
			opacity: [0, 0.4],
			autoplay: true,
			duration: 6000,
			delay: 6000
		});

		setTimeout(function () {
			anime({
				targets: '.hero.style-4 .scroll svg',
				translateY: [0, 2, 0],
				autoplay: true,
				loop: true,
				duration: 1000
			});
		}, 200);
		
	}
}