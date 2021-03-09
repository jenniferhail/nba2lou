<?php

    //======================================================================
    // WILD APRICOT API - STORING DATA OBJECT FROM THE API
    //======================================================================
    function wa_store_api_object() {
        if(is_page('407') || is_page('358')) {
            $wa_contacts = Wild_Apricot_Api_Public::get_contacts();
            return $wa_contacts;
        }
    }

    //======================================================================
    // REMOVING THE CONTENT EDITOR ON PAGES
    //======================================================================
    function remove_textarea() {
            remove_post_type_support( 'page', 'editor' );
    }

    //======================================================================
    // FACETWP - ADDING A SORT BY FACET AND CHANGING THE DEFAULT OPTIONS/LABELS
    //======================================================================
    function custom_sortby( $options, $params ) {
        unset( $options['title_asc'] );
        unset( $options['title_desc'] );

        $options['default']['label'] = 'Date';
        $options['date_asc']['label'] = 'New to Old';
        $options['date_desc']['label'] = 'Old to New';


        return $options;
    }
    //======================================================================
    // FACETWP - ADDING RESET BUTTON TO FACETWP
    //======================================================================
    function add_facetwp_submit() {
    ?>
    <script>(function($) {
    $(document).on('facetwp-loaded', function() {
        $('.fieldset.search-filters').each(function() {
            if ($(this).find('.facetwp-search-reset').length < 1) {
                $(this).append('<a href="javascript:void(0)" class="styled-link facetwp-search-reset" onclick="FWP.reset()">Reset</a>');
            }
        });
        $('.facetwp-dropdown').selectmenu();
        $('.facetwp-sort-select').selectmenu();
    });
    })(jQuery);
    </script>
    <?php
    }

    //======================================================================
    // FACETWP - ADDING LABELS TO FACETWP
    //======================================================================
    function fwp_add_facet_labels() {
        ?>
        <script>
        (function($) {
            $(document).on('facetwp-loaded', function() {
                $('.facetwp-facet').each(function() {
                    var $facet = $(this);
                    var facet_name = $facet.attr('data-name');
                    var facet_label = FWP.settings.labels[facet_name];
        
                    if ($facet.closest('.facet-wrap').length < 1 && $facet.closest('.facetwp-flyout').length < 1) {
                        $facet.wrap('<div class="facet-wrap"></div>');
                        $facet.before('<h3 class="h6 facet-label">' + facet_label + '</h3>');
                    }
                });
            });
        })(jQuery);
        </script>
        <?php
        }

    //======================================================================
    // ACF - Hero Style 3 and 4 - conditionally showing the button field based on Hero Style field input
    //======================================================================
    function acf_hero_style() {
        ?>
        <script type="text/javascript">
        (function($) {
            
                acf.add_action('ready', function( $el ){

                    // //Identify the fields you want to check against.
                    var heroStyles = acf.getFields({
                        key: 'field_5e84c33d8942c'
                    });
                    heroStyles.forEach(fieldValues);
                    heroStyles.forEach(loadfieldValues);

                    // function to addClass 'acf-hidden' to the given element
                    function addHidden(el1, el2) {
                        el1.$el.closest('.layout').find(el2).addClass('acf-hidden');
                    }
                    // function to removeClass 'acf-hidden' to the given element
                    function removeHidden(el1, el2) {
                        el1.$el.closest('.layout').find(el2).removeClass('acf-hidden');
                    }

                    // Add hidden class on ready if the hero style is 'style-1'
                    function loadfieldValues(item) {
                        // hide button on style-3 and 4
                        if(item.val() == 'style-3' || item.val() == 'style-4') {
                            // hide 'enable button'
                            addHidden(item, '.acf-field-5ad37fcda5f62[data-name="enable_button"]');
                            // hide 'button'
                            addHidden(item, '.acf-field-5e84b97fad708[data-name="buttons"]');
                        }
                    }
                    
                    // Add/Remove hidden class on 'change'
                    function fieldValues(item) {
                        item.on('change', function() {
                            
                            if(item.val() == 'style-3' || item.val() == 'style-4') {
                                // hide 'enable button'
                                addHidden(item, '.acf-field-5ad37fcda5f62[data-name="enable_button"]');
                                // hide 'button'
                                addHidden(item, '.acf-field-5e84b97fad708[data-name="buttons"]');
                            } else {
                                // show 'enable button'
                                removeHidden(item, '.acf-field-5ad37fcda5f62[data-name="enable_button"]');
                                // show 'button'
                                removeHidden(item, '.acf-field-5e84b97fad708[data-name="buttons"]');
                            }
                                
                        });
                    }
                    
                

                });
            
            
        })(jQuery);	
        </script>
        <?php
            
    }

    //======================================================================
    // ACF - Hero Style 3 and 4 - conditionally showing the button field based on Hero Style field input
    //======================================================================
    function acf_background_style() {
        ?>
        <script type="text/javascript">
        (function($) {
            
                acf.add_action('ready', function( $el ){

                    // //Identify the layout you want to check against.
                    var heroLayouts = $('.layout[data-layout="hero"]');
                    
                    heroLayouts.each( function() {
                        $(this).find('.acf-field-5ea3514ae1bbc[data-name="layout_background"]').addClass('acf-hidden');
                    });
                
                });
            
            
        })(jQuery);	
        </script>
        <?php
            
    }

    //======================================================================
    // ACF & Content Editor - conditionally showing Content Editor
    //======================================================================
    function acf_content_editor() {
        ?>
        <script type="text/javascript">
        (function($) {
            
                acf.add_action('ready', function( $el ){

                    // //Identify the fields you want to check against.
                    var fields = acf.getFields({
                        key: 'field_5e9095a1f3dee'
                    });
                    var content = $('.postarea.wp-editor-expand')
                    fields.forEach(fieldValues);
                    fields.forEach(loadfieldValues);

                    // Add hidden class on ready if the hero style is 'style-1'
                    function loadfieldValues(item) {
                        if(item.val() == false) {
                            // hide Content Editor
                            content.css( "display", "none" );
                        } 
                    }
                    
                    // Add/Remove hidden class on 'change'
                    function fieldValues(item) {
                        item.on('change', function() {
                            if(item.val() == false) {
                                // hide Content Editor
                                content.css( "display", "none" );
                            } else {
                                // show Content Editor
                                content.css( "display", "block" );
                            }
                        });
                    }
                    
                

                });
            
            
        })(jQuery);	
        </script>
        <?php
            
    }
        
    //======================================================================
    // ADD AN ADMIN SCRIPT TO MANAGE JS
    //======================================================================
    function admin_resources() {
        wp_register_script('admin_script', get_stylesheet_directory_uri() . '/app/assets/js/admin-scripts.min.js');
        wp_enqueue_script('admin_script');
    }
    add_action('admin_enqueue_scripts', 'admin_resources');

    //======================================================================
    // Add responsive container to embeds
    //======================================================================
    function video_embed_wrapper($html) {
        return '<div class="video-wrapper">' . $html . '</div>';
    }

    //======================================================================
    // REPLACE EXCERPT
    //======================================================================
    // Replaces the excerpt "Read More" text with a link
    function new_excerpt_more($more) {
        global $post;
        return '...';
        // return '<a class="moretag" href="'. get_permalink($post->ID) . '"> ...read more.</a>';
    }

    //======================================================================
    // CUSTOM EXCERPT
    //======================================================================
    function custom_excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(' ', $excerpt) . '...';
        } else {
            $excerpt = implode(' ', $excerpt);
        }
        $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
        return $excerpt;
    }

    // =========================================================================
    // REGISTERING SIDEBAR
    // =========================================================================
    if (function_exists('register_sidebar')) {
        register_sidebar([
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ]);
    }

    // =========================================================================
    // REGISTERING MENUS
    // =========================================================================
    function register_my_menus() {
        register_nav_menus(
            array(
            'home-menu' => __( 'Home Menu' ),
            'main-menu' => __( 'Main Menu' ),
            'mobile-menu' => __( 'Mobile Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            )
        );
    }

    // =========================================================================
    // ENABLES 100% JPEG QUALITY
    // =========================================================================
    // Wordpress will compress uploads to 90% of their original size
    function high_jpg_quality() {
        return 100;
    }