<?php
    // Layout Spacing Settings
    include(locate_template('layouts/setting-layout_settings.php'));
?>
<section id="layout-<?php echo $layout_index; ?>" class="layout cards" <?php echo $inline_style; ?>>
    <?php echo $the_background; ?>
    <div data-aos="fade-up" data-aos-offset="300">
        <?php include(locate_template('layouts/component-intro.php')); ?>   
        <div class="wrapper">
            <div class="rows">
                <div class="col">
                    <?php if(have_rows('cards')) : ?>
                        <ul class="card-list">
                            <?php while(have_rows('cards')) : the_row(); ?>
                                <?php 
                                    $image = get_sub_field('image'); 
                                    $link = get_sub_field('link');
                                ?>
                                <li class="card">
                                    <?php if ( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    <?php endif; ?>
                                    <h3 class="h5 title"><?php the_sub_field('title'); ?></h3>
                                    <?php if (get_sub_field('content')) : ?>
                                        <p><?php the_sub_field('content'); ?></p>
                                    <?php endif; ?>
                                    <?php if ($link) : ?>
                                        <a class="btn" href="<?php echo $link['url']; ?>" alt="<?php echo $link['alt']; ?>"><?php echo $link['title']; ?></a>
                                    <?php endif; ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    <?php if(have_rows('list')) : ?>
                        <ul class="items">
                            <?php while(have_rows('list')) : the_row(); ?>
                                <?php $company_link = get_sub_field('link'); ?>
                                <li class="item">
                                    <?php if($company_link) : ?>
                                        <a href="<?php echo esc_url($company_link['url']); ?>" target="<?php echo esc_url($company_link['target']); ?>" alt="<?php echo $company_link['title']; ?>">
                                    <?php endif; ?>
                                        <h4 class="h5 title"><?php the_sub_field('title'); ?></h4>
                                        <?php if (get_sub_field('content')) : ?>
                                            <p><?php the_sub_field('content'); ?></p>
                                        <?php endif; ?>
                                    <?php if($company_link) : ?>
                                        </a>
                                    <?php endif; ?>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
