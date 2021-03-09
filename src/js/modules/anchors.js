var $ = require('jquery');

module.exports = {
	init: function () {
        
        var headerHeight = 0;

        // Link is on the same page
        $('a[href*="#"]:not([href="#"])').click(function(e) {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {      
                var inTarget = $(this.hash);
                inTarget = inTarget.length ? inTarget : $('[name=' + this.hash.slice(1) +']');
                if (inTarget.length) {
                    $('html,body').stop().animate({
                    scrollTop: inTarget.offset().top - headerHeight - 160 // offsets for AOS sliding the layout in
                    }, 'linear');
                }
            }
        });

        // Link is on a different page
        var hash = window.location.hash
        if ( hash == '' || hash == '#' || hash == undefined ) {
            return false;
        } else {
            var exTarget = $(hash);
            exTarget = exTarget.length ? exTarget : $('[name=' + this.hash.slice(1) +']');
            if (exTarget.length) {
                $('html,body').stop().animate({
                scrollTop: exTarget.offset().top - headerHeight - 160 // offsets for AOS sliding the layout in
                }, 'linear');
            }
        }
        
	}
}