var $ = require('jquery');

module.exports = {
	init: function () {
		$('.layout .btn').each(function( index ) {
			$(this).prepend('<span class="line"></span>');
		});
		$('.facetwp-load-more').each(function( index ) {
			$(this).prepend('<span class="line"></span>');
		});
		$('.facetwp-facet-load_more').each(function( index ) {
			$(this).addClass('buttons');
		});
	}
}