<?php if($background) : ?>
    <div class="bg-image" style="background-image: url('<?php echo $background['url']; ?>');"></div>
<?php endif; ?>
<div class="wrapper">
    <div class="row">
        <div class="col">
            <?php if($headline) : ?>
                <div class="image">
                    <?php if($headline_image['url']) : ?>
                        <img src="<?php echo $headline_image['url']; ?>" class="svg" alt="<?php echo $headline_image['alt']; ?>">
                        <p class="visually-hide-text"><?php echo $headline['text']; ?></p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col">
            <div class="content">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
    <?php include(locate_template('layouts/component-button.php')); ?>
</div>
