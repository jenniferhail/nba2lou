<?php
    // Layout Spacing Settings
    include(locate_template('layouts/setting-layout_settings.php'));
?>
<section id="layout-<?php echo $layout_index; ?>" class="component link-bar" <?php echo $inline_style; ?>>
    <?php echo $the_background; ?>
    <div data-aos="fade-up" data-aos-offset="300">
        <div class="wrapper">
            <?php if(have_rows('link_bar')) : ?>
                <ul class="list">
                    <?php while(have_rows('link_bar')) : the_row(); ?>
                        <li class="item"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>