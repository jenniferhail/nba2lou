<?php if($background) : ?>
    <div class="bg-image" style="background-image: url('<?php echo $background['url']; ?>');"></div>
<?php endif; ?>
<div class="wrapper" data-aos="fade-up" data-aos-offset="300">
    <div class="row">
        <div class="col">
            <div class="content">
                <h2 class="h1">
                    <?php if(have_rows('title')) : while(have_rows('title')) : the_row(); ?>
                        <span class="<?php the_sub_field('color'); ?> <?php the_sub_field('line_break'); ?>"><?php the_sub_field('span'); ?></span>
                    <?php endwhile; endif; ?>
                </h2>
                <?php echo $content; ?>
                <?php include(locate_template('layouts/component-button.php')); ?>
            </div>
        </div>
    </div>
</div>
