<?php
	$enable_links = $links['enable_links'];
	$square_class = '';
	if($enable_links) {
		$square_class = 'links';
	} else {
		$square_class = 'no-links';
	}
?>
	<div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/assets/img/bg_space_large.jpg');"></div>
	<div class="wrapper">
		<div class="row">
			<div class="col">
				<div class="square <?php echo $square_class; ?>">
					<?php if($enable_links) : ?>
						<?php if(have_rows('hero_4_links')) : while(have_rows('hero_4_links')) : the_row(); ?>
							<div class="buttons">
								<?php if(have_rows('links')) : $counter = 1; while(have_rows('links')) : the_row(); ?>
									<?php
										$link = get_sub_field('link');
									?>
									<a href="<?php echo esc_url($link['url']); ?>" class="btn-hero">
										<?php if($counter == 2) : ?>
											<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/ky.svg" class="svg ky" alt="Kentucky is NBA Ready">
										<?php endif; ?>
										<?php echo $link['title']; ?>
									</a>
								<?php $counter++; endwhile; endif; ?>
							</div>
						<?php endwhile; endif; ?>
                    	<a class="scroll" href="#layout-2">Scroll Down<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/arrow-down.svg" class="svg" alt="Down arrow"></a>
						<img class="lines svg" src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/basketball_lines.svg" alt="Lines">
					<?php endif; ?>
                    <img class="basketball" src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/basketball_shadow.png" alt="Basketball">
				</div>
			</div>
		</div>
	</div>
