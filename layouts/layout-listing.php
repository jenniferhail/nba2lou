<?php
    // Layout Spacing Settings
    include(locate_template('layouts/setting-layout_settings.php'));

    // Count and Order Settings
    $count = get_sub_field('count');
        $how_many = $count['how_many'];
        $amount = $count['amount'];
        $number = '';
        if($how_many == 'some') {
            $number = $amount;
        } else {
            $number = '-1';
        }
    $order_settings = get_sub_field('order_settings');
        $order =  $order_settings['order'];
        $order_by = $order_settings['order_by'];

    // Featured Post
    $featured = get_sub_field('featured_post');

    // General Settings
    $content_type = get_sub_field('content_type');
    $view = get_sub_field('view');
    $classes = $content_type . ' ' . $view;
    $post_type = '';
    $cat = '';
    $category__not_in = '';
    switch($content_type) {
        case 'post' :
            $post_type = 'post';
            $category__not_in = 12;
            break;
        case 'event' :
            $post_type = 'post';
            $cat = 12;
            break;
        break;
    }

    // Custom Post Items Settings
    $post__in = '';
    if($how_many == 'custom') {
        if($content_type == 'post') {
            $post__in = get_sub_field('custom_posts');
            $category__not_in = '';
        }
        if($content_type == 'event') {
            $post__in = get_sub_field('custom_events');
            $cat = '';
        }
        if($content_type == 'board') {
            $post__in = get_sub_field('custom_board_members');
        }
        $order = 'ASC';
        $order_by = $post__in;
    }



    // Query
    $args = array(
        'post_type'         => $post_type,
        'cat'               => $cat,
        'category__not_in'  => $category__not_in,
        'posts_per_page'    => $number,
        'order'             => $order,
        'order_by'          => $order_by,
        'post__in'          => $post__in,

    );
    $query = new WP_Query($args);
?>

<section id="layout-<?php echo $layout_index; ?>" class="layout listing <?php echo $classes; ?>" <?php echo $inline_style; ?>>
    <?php echo $the_background; ?>
    <div data-aos="fade-up" data-aos-offset="300">
        <?php include(locate_template('layouts/component-intro.php')); ?>   
        <div class="wrapper">
            <?php if($content_type == 'ambassadors') : ?>
                <?php include(locate_template('layouts/loops/ambassador-loop.php')); ?>
            <?php else : ?>
                <?php if($query->have_posts()) : ?>
                    <div class="row">
                        <ul class="items">
                            <?php while($query->have_posts()) : $query->the_post(); ?>
                                <li class="item">
                                    <?php include(locate_template('layouts/items/item.php')); ?>
                                </li>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
