<div class="col">
    <div class="acc-list">
        <?php while(have_rows('acc_item')) : the_row(); ?>
            <div class="acc-item">
                <div class="title">
                    <h2 class="h4"><?php the_sub_field('title'); ?></h2>
                    <div class="plus">
                        <div class="horizontal"></div>
                        <div class="vertical"></div>
                    </div>
                </div>
                <div class="content">
                    <?php the_sub_field('content'); ?>
                    <?php include(locate_template('layouts/component-button.php')); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>