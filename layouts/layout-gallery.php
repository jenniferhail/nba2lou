<?php
    // Layout Spacing Settings
    include(locate_template('layouts/setting-layout_settings.php'));

    $images_or_logos = get_sub_field('images_or_logos');
    $images = get_sub_field('gallery');
    $i = 0;
?>
<section id="layout-<?php echo $layout_index; ?>" class="layout gallery" <?php echo $inline_style; ?>>
    <?php echo $the_background; ?>
    <div data-aos="fade-up" data-aos-offset="300">
        <?php include(locate_template('layouts/component-intro.php')); ?>  
        <div class="wrapper">
            <div class="row">
                <div class="col">
                    <?php if($images): ?>
                        <div class="glide <?php echo $images_or_logos; ?>">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <?php foreach( $images as $image ): ?>
                                        <li class="glide__slide slide-<?php echo $i; ?>"><img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></li>
                                    <?php $i++; endforeach; ?>
                                </ul>
                            </div>
                            <div class="glide__controls" data-glide-el="controls">
                                <button data-glide-dir="<"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/arrow-left.svg" class="svg" alt="Left arrow"></button>
                                <button data-glide-dir=">"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/arrow-right.svg" class="svg" alt="Right arrow"></button>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <div class="content text-align-center">
                        <?php if(get_sub_field('content')) : ?>
                        <p><?php the_sub_field('content'); ?></p> 
                        <?php endif; ?>
                        <?php include(locate_template('layouts/component-button.php')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

