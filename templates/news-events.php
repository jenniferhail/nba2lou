<?php
/* Template Name: News and Events */
get_header();
?>
<div class="interior-page">
    <?php if(acf_activated() && have_rows('layouts')) : ?>
        <?php while (acf_activated() && have_rows('layouts')) : the_row(); ?>
            <?php $layout_type = get_row_layout(); $layout_index = get_row_index(); ?>
            <?php include(locate_template('layouts/layout-' . $layout_type . '.php')); ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if(facetwp_activated()) : ?>
        <?php get_template_part('inc/news/news-search-form'); ?>
        <?php get_template_part('inc/news/news-search-query'); ?>
    <?php else : ?>
        <h1>Error: FacetWP is not installed or activated.</h1>
    <?php endif; ?>
</div>

<?php get_footer(); ?>