<?php
    // Layout Spacing Settings
    include(locate_template('layouts/setting-layout_settings.php'));

    $hero_style = get_sub_field('hero_style');
    $links = get_sub_field('hero_4_links');
    $media = get_sub_field('media');
        $headline = $media['headline'];
            $headline_image = $headline['image'];
            $headline_text = $headline['text'];
        $image_or_video = $media['image_or_video'];
        $image = $media['image'];
        $video = $media['video'];
        $background = $media['background'];
    $content = get_sub_field('content');
    $copy = get_sub_field('copy');

?>

<section id="layout-<?php echo $layout_index; ?>" class="layout hero <?php echo $hero_style; ?>" <?php echo $inline_style; ?>>
    <?php
        switch ($hero_style) {
            case 'style-1':
                include(locate_template('layouts/styles/hero-style-1.php'));
                break;
            case 'style-2':
                include(locate_template('layouts/styles/hero-style-2.php'));
                break;
            case 'style-3':
                include(locate_template('layouts/styles/hero-style-3.php'));
                break;
            case 'style-4':
                include(locate_template('layouts/styles/hero-style-4.php'));
                break;
                // code...
                break;
        }
    
    ?>
</section>
