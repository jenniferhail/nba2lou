var $ = require('jquery');

module.exports = {
    init: function () {
        var activate = function (ele, evt) {
            // console.log('activate');
            // console.log(ele);
            // console.log(evt.type);
            var fancylabelInputs = $('.ginput_container input, .ginput_container textarea');

            fancylabelInputs.each(function () {
                var thisItem = $(this);
                var parentItem = $(this).parent().parent();
                if (thisItem.val()) {
                    parentItem.addClass('active');
                } else {
                    parentItem.removeClass('active');
                }
            });
            if (evt.type === 'focusin') {
                var eventParentItem = $(ele).parent().parent();
                eventParentItem.addClass('active');
            }
        }

        $(document).on('focusout', '.ginput_container input, .ginput_container textarea', function (evt) {
            console.log('focus out');
            activate(this, evt);
        });
        $(document).on('focusin', '.ginput_container input, .ginput_container textarea', function (evt) {
            console.log('focus in');
            activate(this, evt);
        });
    }
}