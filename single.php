<?php get_header(); ?>

<?php

    $author_date = '';
    $the_date = get_the_date('F j, Y');
    // $author_name = get_the_author_meta('display_name');
    $author_name = get_field('author', get_the_ID());
    if($author_name || $the_date) {
        $author_date = '<div class="meta">';
        if($author_name && $the_date) {
            $author_date .= 'By: ' . $author_name . ' | ' . $the_date;
        } 
        elseif($author_name && !$the_date) {
            $author_date .= 'By: ' . $author_name;
        }
        elseif(!$author_name && $the_date) {
            $author_date .= $the_date;
        }
        $author_date .= '</div>';
    }

    $enable_content = get_field('show_normal_post_content', $post->ID);

    $thumbnail = '';
    if(get_the_post_thumbnail()) {
        $thumbnail = get_the_post_thumbnail($post->ID, 'large');
    } else {
        $thumbnail = '<img src="' . get_template_directory_uri() . '/dist/assets/img/nba2lou-news.jpg" alt="NBA2Lou" >';
    }


?>
<div class="interior-page">

    <?php if($enable_content !== false) : ?>
        <article id="article" class="layout article post">
            <div class="wrapper">
                <div class="row">
                    <div class="col left">
                        <h1 class="h5 title"><?php the_title(); ?></h1>
                        <?php echo $author_date; ?>
                    </div>
                    <div class="col right">
                        <div class="social-share">
                            <input type="checkbox" href="javascript:void(0)" class="share-checkbox" name="share-open" id="share-open"/>
                            <label class="share-label" for="share-open">Share <i class="fas fa-share" aria-hidden="true"></i></label>
                            <ul class="social">
                                <li class="social-item"><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><span class="visually-hide-text">Facebook</span><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" target="_blank"><span class="visually-hide-text">Twitter</span><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" target="_blank"><span class="visually-hide-text">LinkedIn</span><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <?php echo $thumbnail; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php echo get_the_content('', '', $post->ID); ?>
                    </div>
                </div>
            </div>
        </article>
    <?php endif; ?>

    <?php if(acf_activated() && have_rows('layouts')) : ?>
        <?php while (acf_activated() && have_rows('layouts')) : the_row(); ?>
            <?php $layout_type = get_row_layout(); $layout_index = get_row_index(); ?>
            <?php include(locate_template('layouts/layout-' . $layout_type . '.php')); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    
</div>


<?php get_footer(); ?>
