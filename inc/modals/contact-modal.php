<div id="contact" class="modal micromodal-slide contact" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="wrapper">
            <header class="modal__header">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/logo-vertical.svg" class="svg" alt="NBA2Lou Logo">
                </div>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <?php gravity_form( 2, true, true, true, '', true ); ?>
            </div>
        </div>
    </div>
</div>