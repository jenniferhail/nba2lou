<?php

    if ( get_the_post_thumbnail() ) {
        $thumbnail = get_the_post_thumbnail( $post->ID, 'medium_large', array( 'class' => 'visually-hidden' ) );
        $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'medium_large' );
    } else {
        $thumbnail = '<img class="visually-hidden" src="' . get_template_directory_uri() . '/dist/assets/img/nba2lou-news.jpg" alt="NBA2Lou" >';
        $thumbnail_url = get_template_directory_uri() . '/dist/assets/img/nba2lou-news.jpg';
    }
    
    $content_type = '';
    $cats = wp_get_post_categories($post->ID);
    if(in_array(6, $cats)) {
        $content_type = 'event';
    } else {
        $content_type = 'post';
    }


    if($content_type == 'event') {
        $event_info = get_field('event_info', get_the_ID());
        $location = $event_info['event_location'];
        $date = $event_info['event_date'];
        $time = $event_info['event_time'];
        $date_time = NULL;
        if($date || $time) {
            $date_time = '<p class="date-time">';
            if($date) {
                $date_time .= $date;
            }
            if($time) {
                $date_time .= ' | ' . $time;
            }
            $date_time .= '</p>';
        }
    } 

    if($content_type == 'post') {
        $author_date = '';
        $the_date = get_the_date('F j, Y');
        // $author_name = get_the_author_meta('display_name');
        $author_name = get_field('author', get_the_ID());
        if($author_name || $the_date) {
            $author_date = '<p class="author-date">';
            if($author_name && $the_date) {
                $author_date .= 'By: ' . $author_name . ' | ' . $the_date;
            } 
            elseif($author_name && !$the_date) {
                $author_date .= 'By: ' . $author_name;
            }
            elseif(!$author_name && $the_date) {
                $author_date .= $the_date;
            }
            $author_date .= '</p>';
        }
    }

?>
<div class="image" style="background-image: url('<?php echo $thumbnail_url; ?>');">
    <?php echo $thumbnail; ?>
</div>
<h4 class="title"><a href="<?php the_permalink($post->ID); ?>"><?php the_title(); ?></a></h4>
<?php if ($content_type == 'event') : ?>
    <?php if($location) : ?>
        <p class="location"><?php echo $location; ?></p>
    <?php endif; ?>
    <?php echo $date_time; ?>
<?php endif; ?>
<?php if ($content_type == 'post') : echo $author_date; endif; ?>
