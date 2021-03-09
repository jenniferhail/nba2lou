<?php

    // Query
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => 9,
        'facetwp'           => true,
        'order'             => 'DESC',
        'order_by'          => 'date',

    );
    $query = new WP_Query($args);
?>

<section class="layout listing post grid">
	<div class="wrapper">
        <?php if($query->have_posts()) : ?>
            <div class="row">
                <ul class="items">
                    <?php while($query->have_posts()) : $query->the_post(); ?>
                        <li class="item">
                            <?php include(locate_template('layouts/items/news-loop-item.php')); ?>
                        </li>
                    <?php endwhile; wp_reset_postdata(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php echo facetwp_display( 'facet', 'load_more' ); ?>
	</div>
</section>