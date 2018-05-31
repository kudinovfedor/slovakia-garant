<?php if (function_exists('ot_get_option')) {
    $default_bg = get_template_directory_uri() . '/assets/img/hero-bg.jpg';

    $hero = array(
        'display' => ot_get_option('hero_display'),
        'title'   => ot_get_option('hero_title'),
        'desc'    => ot_get_option('hero_desc'),
        'bg'      => ot_get_option('hero_background', array('background-image' => $default_bg)),
    );

    if ($hero['display'] === 'on') { ?>
        <!-- Hero Block -->
        <div class="hero" style="background-image: url('<?php echo esc_url($hero['bg']['background-image']); ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <?php if ( ! empty($hero['title'])) { ?>
                            <div class="hero-title"><?php echo strip_tags($hero['title'], '<br>'); ?></div>
                        <?php } ?>
                        <?php if ( ! empty($hero['desc'])) { ?>
                            <p class="hero-desc"><?php echo strip_tags($hero['desc'], '<br>'); ?></p>
                        <?php } ?>
                        <button class="button-medium hero-btn <?php the_lang_class('js-free-consult'); ?>"
                                type="button"><?php _e('Free consultation', 'brainworks'); ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Block -->
    <?php }
} ?>
