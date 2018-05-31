<?php if (function_exists('ot_get_option')) {
    $callback = array(
        'display' => ot_get_option('callback_display'),
        'title'   => ot_get_option('callback_title'),
        'desc'    => ot_get_option('callback_desc'),
        'form'    => ot_get_option('callback_form'),
    );

    if ($callback['display'] === 'on') { ?>
        <!-- Callback Block -->
        <div class="section section-dark">
            <div class="container section-container">
                <header class="section-head">
                    <?php if ( ! empty($callback['title'])) { ?>
                        <h2 class="section-headline"><?php echo esc_html($callback['title']); ?></h2>
                    <?php } ?>
                    <?php if ( ! empty($callback['desc'])) { ?>
                        <p class="section-desc"><?php echo esc_html(strip_tags($callback['desc'])); ?></p>
                    <?php } ?>
                </header>
                <div class="section-form">
                    <?php if ( ! empty($callback['form'])) {
                        echo do_shortcode(trim(strip_tags($callback['form'])));
                    } else { ?>
                        <form action="#" method="post" class="form">
                            <div class="row">
                                <div class="col-md-4 form-row">
                                    <input class="form-field" type="text" name="name" placeholder="<?php _e('Your name', 'brainworks'); ?>">
                                </div>
                                <div class="col-md-4 form-row">
                                    <input class="form-field" type="email" name="email" placeholder="<?php _e('Your e-mail', 'brainworks'); ?>">
                                </div>
                                <div class="col-md-4 form-row">
                                    <input class="form-field" type="tel" name="tel" placeholder="<?php _e('Your phone number', 'brainworks'); ?>">
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-12">
                                    <textarea name="comment" class="form-field" placeholder="<?php _e('Briefly describe what kind of service you are interested in', 'brainworks'); ?>"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="button-medium" type="submit"><?php _e('Order a call', 'brainworks'); ?></button>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- End Callback Block -->
    <?php }
} ?>
