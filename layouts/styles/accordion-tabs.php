<div class="col">
    <div class="tab-nav">
        <span class="tab-select">Select One:</span>
        <ul class="tab-list">
            <?php while(have_rows('acc_item')) : the_row(); ?>
                <li class="tab-link">
                    <a href="#tab-<?php the_row_index(); ?>"><?php the_sub_field('title'); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <div class="content">
        <?php while(have_rows('acc_item')) : the_row(); ?>
            <div class="acc-item">
                <div id="tab-<?php the_row_index(); ?>" class="acc-item-wrap">
                    <?php the_sub_field('content'); ?>
                    <?php include(locate_template('layouts/component-button.php')); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>