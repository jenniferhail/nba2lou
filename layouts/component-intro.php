<?php 
    $enable_intro = get_sub_field('enable_intro');
?>
<?php if($enable_intro) : ?>
    <div class="component intro">
        <div class="wrapper">
            <?php if(have_rows('intro')) : while(have_rows('intro')) : the_row(); ?>
                <div class="<?php the_sub_field('text_alignment'); ?>">
                    <<?php the_sub_field('element_tag'); ?> class="<?php echo get_sub_field('font_size'); ?>">
                        <?php if(have_rows('title')) : while(have_rows('title')) : the_row(); ?>
                            <span class="<?php the_sub_field('color'); ?> <?php the_sub_field('line_break'); ?>"><?php the_sub_field('span'); ?></span>
                        <?php endwhile; endif; ?>
                    </<?php the_sub_field('element_tag'); ?>>
                    <?php if(get_sub_field('subtitle')) : ?>
                        <h3 class="subtitle"><?php the_sub_field('subtitle'); ?></h3>
                    <?php endif;?>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
<?php endif; ?>
