<?php
    $social = get_field('social', 'option');
?>
<footer>
    <div class="wrapper">
        <div class="row">
            <a href="/" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/logo-horizontal.svg" class="svg" alt="NBA2Lou Logo">
            </a>
            <nav class="footer-menu">
                <ul class="menu">
                    <?php
                        $args = array(
                            'theme_location' => 'footer-menu',
                            'menu' => 'footer-menu',
                            'container' => 'false',
                            'items_wrap' => '%3$s'
                        );
                    ?>
                    <?php wp_nav_menu($args); ?>
                </ul>
            </nav>

            <?php if($social) : ?>
                <ul class="social footer-social">
                    <?php if($social['facebook']) : ?>
                        <li class="social-item">
                            <a href="<?php echo $social['facebook']; ?>" target="_blank"><span class="visually-hide-text">Facebook</span><i class="fab fa-facebook-f icon"></i></a>
                        </li>
                    <?php endif; ?>
                    <?php if($social['twitter']) : ?>
                        <li class="social-item">
                            <a href="<?php echo $social['twitter']; ?>" target="_blank"><span class="visually-hide-text">Twitter</span><i class="fab fa-twitter icon"></i></a>
                        </li>
                    <?php endif; ?>
                    <?php if($social['instagram']) : ?>
                        <li class="social-item">
                            <a href="<?php echo $social['instagram']; ?>" target="_blank"><span class="visually-hide-text">Instagram</span><i class="fab fa-instagram icon"></i></a>
                        </li>
                    <?php endif; ?>
                    <?php if($social['youtube']) : ?>
                        <li class="social-item">
                            <a href="<?php echo $social['youtube']; ?>" target="_blank"><span class="visually-hide-text">YouTube</span><i class="fab fa-youtube icon"></i></a>
                        </li>
                    <?php endif; ?>
                    <?php if($social['linkedin']) : ?>
                        <li class="social-item">
                            <a href="<?php echo $social['linkedin']; ?>" target="_blank"><span class="visually-hide-text">LinkedIn</span><i class="fab fa-linkedin-in icon"></i></a>
                        </li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>

            <?php echo(file_get_contents('http://mightily.com/tidbit/tidbitL.html')); ?>
        </div>
    </div>
</footer>
<?php include(locate_template('inc/modals/subscribe-modal.php')); ?>
<?php include(locate_template('inc/modals/contact-modal.php')); ?>

<?php wp_footer(); ?>

</body>
</html>
