<?php 
    // Layout Spacing Settings
    include(locate_template('layouts/setting-layout_settings.php'));

    $view = get_sub_field('view');
?>
<section id="layout-<?php echo $layout_index; ?>" class="layout accordion <?php echo $view; ?>" <?php echo $inline_style; ?> data-aos="fade-up" data-aos-offset="300">
    <?php echo $the_background; ?>
    <?php include(locate_template('layouts/component-intro.php')); ?>
	<div class="wrapper">
        <?php if(have_rows('acc_item')) : ?>
            <div class="row">
                <?php 
                    if($view == 'tabs') {
                        include(locate_template('layouts/styles/accordion-tabs.php'));
                    } else {
                        include(locate_template('layouts/styles/accordion-list.php'));
                    }
                ?>
            </div>
        <?php endif; ?>
	</div>
</section>
