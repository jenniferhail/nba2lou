var $ = require('jquery');

module.exports = {
	init: function () {
		// $('.accordion .title').on('click', function () {
		// 	$(this).closest('.acc-item').find('.content').slideToggle('3000', function () {
		// 		// Animation complete.
		// 	});
		// });

		// Tabs 
		$('.layout.accordion.tabs').each(function( index ) {
			$('.tab-link:first-child').addClass('active');
			$('.acc-item:first-child').addClass('active');
		});

		$('.layout.accordion.tabs .tab-link').on('click', function (evt) {
			evt.preventDefault();
			var accLinks = this.closest('.layout.accordion.tabs').querySelectorAll('.tab-link');
			var accItems = this.closest('.layout.accordion.tabs').querySelectorAll('.acc-item');

			// Remove active class from all selected tabs, accordion groups, nav item, and accordion item
			for ( var i = 0; i < accLinks.length; i++ ) {
				accLinks[i].classList.remove('active');
			}
			for ( var i = 0; i < accItems.length; i++ ) {
				accItems[i].classList.remove('active');
			}

			// Add active class to selected tab & item
			this.classList.add('active');
			var index = $(this).find('a')[0].hash.replace(/[^0-9]/g, '');
			index -= 1;
			// console.log('Accordion index: ' + index);
			for ( var i = 0; i < accItems.length; i++ ) {
				accItems[index].classList.add('active');
			}
			
		});
	}
}