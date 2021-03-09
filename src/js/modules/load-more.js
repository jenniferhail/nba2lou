var $ = require('jquery');

module.exports = {
	init: function () {

        var $parent = $('.layout.listing.ambassadors .items')
        var $items = $parent.find('li');
        var $loadMoreBtn = $('.load-more .btn');
        var maxItems = 25;

        if ( $items.length < maxItems ) {
            $loadMoreBtn.hide();
        }
        
        // add visually hidden class to items beyond maxItems
        $.each($items, function(idx,item) {
            if(idx > maxItems - 1) {
                $(this).addClass('visually-hidden');
            }
        });
        
        // onclick of show more button show more = maxItems
        // if there are none left to show kill show more button
        $loadMoreBtn.on('click', function(e) {
            $( '.visually-hidden' ).each(function(idx,item) {
                if( idx < maxItems ) {
                    $(this).removeClass('visually-hidden');
                }
                // kill button if no more to show
                if( $('.item.visually-hidden').length === 0 ){
                    $loadMoreBtn.hide();
                }
            });
        });

	}
}