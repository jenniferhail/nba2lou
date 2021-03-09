<?php
    //======================================================================
    // WORDPRESS ACTIONS
    //======================================================================
    add_action('wp_enqueue_scripts', 'mightyResources');

    add_action('after_setup_theme', 'theme_slug_setup');
    add_action('wp_head', 'add_meta_tags', 1);
    // add_action('wp_head', 'wa_store_api_object'); // Running the WA API and returning the JSON Object
    add_action( 'init', 'register_my_menus' );
    add_action('admin_init', 'remove_textarea'); // REMOVING CONTENT EDITOR ON PAGES
    add_action( 'wp_footer', 'add_usersnap' );
    add_action( 'wp_footer', 'footerJS' );


    remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
    remove_action('wp_head', 'wp_generator'); // remove wordpress version
    remove_action('wp_head', 'feed_links', 2); // remove rss feed links
    remove_action('wp_head', 'feed_links_extra', 3); // remove all extra rss feed links
    remove_action('wp_head', 'index_rel_link'); // remove link to index page
    remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
    remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
    remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'rest_output_link_wp_head'); // remove JSON link from head
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);


    //======================================================================
    // WORDPRESS FILTERS
    //======================================================================
    add_filter('embed_oembed_html', 'video_embed_wrapper', 10, 3);
    add_filter('video_embed_html', 'video_embed_wrapper'); // Jetpack
    add_filter('excerpt_more', 'new_excerpt_more');
    add_filter('jpg_quality', 'high_jpg_quality');
    // add_filter( 'gform_ajax_spinner_url', 'spinner_url', 10, 2 ); // Gravity forms custom spinner

    //======================================================================
    // FACET
    //======================================================================
    // add_action( 'wp_footer', 'fwp_add_facet_labels', 100 );
    add_action('wp_footer', 'add_facetwp_submit', 100);
    add_filter( 'facetwp_sort_options', 'custom_sortby', 10, 2);

    //======================================================================
    // ACF
    //======================================================================
    add_action('acf/input/admin_footer', 'acf_hero_style'); // Conditionally show Intro field on Hero Style
    add_action('acf/input/admin_footer', 'acf_content_editor'); // Conditionally show the Content Editor based on an ACF field
    add_action('acf/input/admin_footer', 'acf_background_style'); // Conditionally hide the Layout - Background setting on Hero Layouts 