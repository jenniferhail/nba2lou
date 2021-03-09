<div data-aos="fade-up" data-aos-offset="300">
    <?php if($image_or_video == 'image') : ?>
        <?php if($image) : ?>
            <img class="bg-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php endif; ?>
        <?php if($copy) : ?>
            <div class="wrapper">
                <p class="text-align-center orange"><?php echo $copy; ?></p>	
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <?php if($image_or_video == 'video' && $video) : ?>
        <div class="bg-video">
            <div class="embed-container">
                <?php echo $video; ?>
            </div>
        </div>
    <?php endif; ?>
</div>