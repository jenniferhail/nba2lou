var $ = require('jquery');
var AOS = require('aos');
// var polyfill = require('./modules/polyfill-modal.js'); // polyfill for micromodal
var microModal = require('micromodal'); // commonjs module

var accordions = require('./modules/accordions.js');
var svg = require('./modules/svg.js');
var anchors = require('./modules/anchors.js');
var loadmore = require('./modules/load-more.js');
var menu = require('./modules/menu.js');
var styleguide = require('./modules/style-guide.js');
var buttons = require('./modules/buttons.js');
var glide = require('./modules/glide.js');
var animate = require('./modules/animate.js');
var fancylabels = require('./modules/fancylabels.js');

AOS.init();
svg.init();
styleguide.init();
accordions.init();
anchors.init();
loadmore.init();
menu.init();
buttons.init();
glide.init();
microModal.init();
fancylabels.init();
animate.init();

$('.menu-item.subscribe-modal').on('click', function () {
    MicroModal.show('subscribe');
});

$('.menu-item.contact-modal').on('click', function () {
    MicroModal.show('contact');
});

// jQuery UI is included in functions/wp/theme-resources.php