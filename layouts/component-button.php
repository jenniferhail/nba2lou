<?php if(get_sub_field('enable_button')) : ?>
    <?php if(have_rows('buttons')) : while(have_rows('buttons')) : the_row(); ?>
    <?php $button_style = get_sub_field('button_style'); ?>
        <div class="component buttons <?php echo get_sub_field('button_alignment'); ?>">
            <?php if(have_rows('button')) : while(have_rows('button')) : the_row(); ?>
                <?php
                    $link = get_sub_field('link');
                    if ($link) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'];

                        if ($link_target == NULL) {
                            $link_target = '_self';
                        }
                        echo '<a href="' . $link_url . '" target="' . $link_target . '" class="' . $button_style . '">' . $link_title . '</a>';
                    }
                ?>
            <?php endwhile; endif; ?>
        </div>
    <?php endwhile; endif; ?>
<?php endif; ?>
