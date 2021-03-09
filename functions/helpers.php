<?php
    //======================================================================
    // Adding Usersnap
    //======================================================================
    function spinner_url( $image_src, $form ) {
        return get_template_directory_url() . '/dist/assets/img/basketball-ball-light.svg';
    }

    //======================================================================
    // Adding Usersnap
    //======================================================================
    function add_usersnap() { ?>
        <?php if ( is_user_logged_in() && is_admin() ) : ?>
        <script type="text/javascript">
        (function() {
            var s = document.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            s.src = '//api.usersnap.com/load/6ee16f4a-5643-481b-8900-c7283fd58cb4.js';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
        </script>
        <?php endif; ?>
        <?php
    }

    //======================================================================
    // Checking if FacetWP is Activated
    //======================================================================
    function facetwp_activated() {
        if (function_exists('facetwp_display')) {
            return true;
        }

        return false;
    }

    //======================================================================
    // Checking if ACF is Activated
    //======================================================================
    function acf_activated() {
        if (function_exists('get_field')) {
            return true;
        }

        return false;
    }

    //======================================================================
    // ACF Responsive Image
    //======================================================================
    function acf_responsive_image($image_id, $image_size, $max_width) {

        // check the image ID is not blank
        if ($image_id != '') {

            // set the default src image size
            $image_src = wp_get_attachment_image_url($image_id, $image_size);

            // set the srcset with various image sizes
            $image_srcset = wp_get_attachment_image_srcset($image_id, $image_size);

            // generate the markup for the responsive image
            echo 'src="' . $image_src . '" srcset="' . $image_srcset . '" sizes="(max-width: ' . $max_width . ') 100vw, ' . $max_width . '"';
        }
    }
