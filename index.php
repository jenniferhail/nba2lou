<?php get_header(); ?>

	<div class="interior-page">

		<?php if(acf_activated() && have_rows('layouts')) : ?>

			<?php while (acf_activated() && have_rows('layouts')) : the_row(); ?>

				<?php $layout_type = get_row_layout(); $layout_index = get_row_index(); ?>
				<?php include(locate_template('layouts/layout-' . $layout_type . '.php')); ?>

			<?php endwhile; ?>

		<?php endif; ?>
	</div>

<?php get_footer(); ?>
