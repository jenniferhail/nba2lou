<?php
	// Layout Spacing Settings
	include(locate_template('layouts/setting-layout_settings.php'));
	
	$alignment = get_sub_field('alignment');
	$intro_icon = get_sub_field('intro_icon');
	$image = get_sub_field('image');
	$basic_content = get_sub_field('basic_content');
	$orange_text = get_sub_field('orange_text');
	$text_direction = $orange_text['text_direction'];

?>
<section id="layout-<?php echo $layout_index; ?>" class="layout basic-content <?php echo $alignment; ?>" <?php echo $inline_style; ?>>
	<?php echo $the_background; ?>
	<div data-aos="fade-up" data-aos-offset="300">
		<div class="wrapper">
			<div class="row">
				<div class="col">
					<div class="content">
						<?php if($intro_icon) : ?>
							<img src="<?php echo $intro_icon['url']; ?>" class="svg ky" alt="<?php echo $intro_icon['alt']; ?>">
						<?php endif; ?>
						<?php if($image) : ?>
							<img src="<?php echo $image['url']; ?>" class="image" alt="<?php echo $image['alt']; ?>">
						<?php endif; ?>
						<?php include(locate_template('layouts/component-intro.php')); ?>
						<?php echo $basic_content; ?>
						<?php if($orange_text) : ?>
							<?php if(have_rows('orange_text')) : while(have_rows('orange_text')) : the_row(); ?>
								<?php if(have_rows('items')) : ?>
									<p class="orange <?php echo $text_direction; ?>">
										<?php while(have_rows('items')) : the_row(); ?>
											<span><?php the_sub_field('span'); ?></span>
										<?php endwhile; ?>
									</p>
								<?php endif;?>
							<?php endwhile; endif; ?>
						<?php endif; ?>
						<?php include(locate_template('layouts/component-button.php')); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
