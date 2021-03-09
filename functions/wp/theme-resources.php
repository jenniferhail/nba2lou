<?php
    // =========================================================================
    // REGISTER & ENQUEUE
    // =========================================================================
    function mightyResources() {        
        wp_enqueue_style('adobe-typekit', '//use.typekit.net/xwb2qyk.css', '', '');
        wp_enqueue_script('font-awesome', '//kit.fontawesome.com/fd529e539f.js', '', '', false);
        $bundleCss = get_stylesheet_directory() . '/dist/assets/css/style.min.css';
        wp_enqueue_style('mightily', get_stylesheet_directory_uri() . '/dist/assets/css/style.min.css', '', filemtime($bundleCss));

        wp_deregister_script('jquery');
        wp_register_script('jquery', ('//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'), '', '2.2.4', false);
        wp_enqueue_script('jquery');

        wp_enqueue_style('jquery-ui-css', '//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css', '', '');
        wp_enqueue_script('jquery-ui-js', '//code.jquery.com/ui/1.11.0/jquery-ui.js', ['jquery'], '' , '');

        // wp_enqueue_script('waypoints', '//cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js', ['jquery'], '', true);
        // wp_enqueue_script('anime-js', '//cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js', ['jquery'], '', true);

        // Commenting out vue since we do not use it on this site.
        // wp_enqueue_script('vue', '//cdn.jsdelivr.net/npm/vue/dist/vue.js', '', '2.6.11', true);
        
        $bundleJs = get_stylesheet_directory() . '/dist/assets/js/bundle.js';
        wp_enqueue_script('mightily', get_stylesheet_directory_uri() . '/dist/assets/js/bundle.js', ['jquery'], filemtime($bundleJs) , true);

    }

    //======================================================================
    // Foodter JS
    //======================================================================
    function footerJS() { ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
        <script>
            // Footer JS

            if ( $('.facetwp-dropdown').length > 0 ) {
                $('.facetwp-dropdown').selectmenu();
                $('.facetwp-sort-select').selectmenu();
            }

            // Animating the hero SVGs
            // 1. Target a wrapper div around the svg with AOS 
            // 2. Use AOS Next to detect the event
            // 3. Create an anime.js function to animate the svg
            // 4. Play the anime function on the AOS next event

            if ( $('.layout.hero.style-1').find('.svg').length > 0 ) {

                // ***********************************
                // Venu Hero Animation
                // ***********************************

                // Reset the svg pieces before animation starts
                var setupVenue = function () {
                    $('#Venue').css( 'opacity', '0' );
                    $('#Venue #THIS_IS_A').css({ 'transform':'translateX(-100%)', 'opacity':'0' });
                    $('#Venue #TEAM').css({ 'transform':'translateY(100px)', 'opacity':'0' });
                    $('#Venue #EFFORT').css({ 'transform':'translateY(-100px)', 'opacity':'0' });
                    $('#Venue #PLAYER').css({ 'transform':'translateY(-300px)', 'opacity':'0' });
                    $('#Venue #image').css( 'opacity', '0' );
                }
                setTimeout( function() {
                    setupVenue();
                }, 200);	

                // ***********************************
                // Basketball Culture
                // ***********************************

                // Reset the svg pieces before animation starts
                var setupBasketballCulture = function () {
                    $('#Basketball_Culture').css('opacity', '0');
                    $('#Basketball_Culture #Cards_fans').css({ 'transform':'translateY(100px)', 'opacity':'0' });
                    $('#Basketball_Culture #_').css({ 'transform':'translateY(-100px)', 'opacity':'0' });
                    $('#Basketball_Culture #CaTS_fans').css({ 'transform':'translateY(-100px)', 'opacity':'0' });
                    $('#Basketball_Culture #can_all_agree_on').css({ 'transform':'translateX(100%)', 'opacity':'0' });
                    $('#Basketball_Culture #player').css({ 'opacity':'0', 'transform':'translateX(-200px)translateY(200px)' });
                    $('#Basketball_Culture #image').css( 'opacity', '0' );
                    $('#Basketball_Culture #image-2').css( 'opacity', '0' );
                }
                setupBasketballCulture();
            }

            $('.layout.hero.style-1').waypoint(
                function (direction) {
                    var layoutID = $(this.element).attr('id');
                    if (direction == 'up') { 
                        // console.log(layoutID + ' up');
                        $('#Venue').css('opacity', '0');
                        setupBasketballCulture();

                        $('#Basketball_Culture').css('opacity', '0');
                        setupBasketballCulture();
                    }
                    if (direction == 'down') {
                        // console.log(layoutID + ' down');
                        $('#Venue').css('opacity', '1');
                        anime({
                            targets: '#Venue #THIS_IS_A',
                            translateX: ['-100%', '0'],
                            opacity: [0, 1],
                            autoplay: true,
                            duration: 500,
                            easing: 'spring(1, 80, 20, 0)'
                        });
                        anime({
                            targets: '#Venue #TEAM',
                            translateY: ['100px', '0'],
                            opacity: [0, 1],
                            autoplay: true,
                            duration: 750,
                            delay: 1000
                        });
                        anime({
                            targets: '#Venue #EFFORT',
                            translateY: ['-100px', '0'],
                            opacity: [0, 1],
                            autoplay: true,
                            duration: 750,
                            delay: 1000
                        });
                        anime({
                            targets: '#Venue #PLAYER',
                            translateY: ['-100px', '0'],
                            opacity: [0, 1],
                            autoplay: true,
                            duration: 2000,
                            delay: 1250
                        });
                        anime({
                            targets: '#Venue #image',
                            autoplay: true,
                            easing: 'easeInCubic',
                            opacity: [0, 1], 
                            duration: 500, 
                            delay: 1500
                        })


                        $('#Basketball_Culture').css('opacity', '1');
                        anime({
                            targets: '#Basketball_Culture #Something',
                            translateX: ['-100%', '0'],
                            opacity: [0, 1],
                            autoplay: true,
                            duration: 250,
                            easing: 'spring(1, 80, 20, 0)'
                        });
                        anime({
                            targets: '#Basketball_Culture #Cards_fans',
                            translateY: ['100px', '0'],
                            opacity: [0, 1],
                            autoplay: true,
                            duration: 400,
                            delay: 500,
                            easing: 'easeInOutQuint'
                        });
                        anime({
                            targets: '#Basketball_Culture #_',
                            translateY: ['-100px', '0'],
                            opacity: [0, 1],
                            autoplay: true,
                            duration: 400,
                            delay: 1150
                        });
                        anime({
                            targets: '#Basketball_Culture #CaTS_fans',
                            translateY: ['-100px', '0'],
                            opacity: [0, 1],
                            autoplay: true,
                            duration: 400,
                            delay: 1300,
                            easing: 'easeInOutQuint'
                        });
                        anime({
                            targets: '#Basketball_Culture #can_all_agree_on',
                            translateX: ['100%', '0'],
                            opacity: [0, 1],
                            autoplay: true,
                            duration: 250,
                            delay: 1500,
                            easing: 'spring(1, 80, 20, 0)'
                        });
                        anime({
                            targets: '#Basketball_Culture #player',
                            translateX: ['-200px', '0'],
                            translateY: ['200px', '0'],
                            opacity: [0, 1],
                            autoplay: true,
                            duration: 1500,
                            delay: 1700,
                            easing: 'spring(1, 80, 20, 1)'
                        });
                        anime({
                            targets: ['#Basketball_Culture #image-2', '#Basketball_Culture #image'],
                            autoplay: true,
                            easing: 'easeInCubic',
                            opacity: [
                                { value: [0, 1], duration: 500, delay: 2000 }
                            ]
                        })
                    }
                },
                {
                    offset: '40%'
                }
            );
        </script>
    <?php }

    //======================================================================
    // META TAGS
    //======================================================================
    // Adding meta so that we can load it in non Wordpress pages i.e. Netforum
    function add_meta_tags() {
        echo '<meta name="viewport" content="width=device-width,initial-scale=1" />' . "\n";
    }

    //======================================================================
    // ACF Options Page
    //======================================================================
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' 	=> 'App Options',
            'menu_title'	=> 'App Options',
            'menu_slug' 	=> 'app-options',
            'capability'	=> 'manage_sites',
            'redirect'		=> false
        ]);
    }
