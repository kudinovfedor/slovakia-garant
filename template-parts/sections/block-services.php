<?php if (function_exists('ot_get_option')) {
    $services = array(
        'display' => ot_get_option('services_display'),
        'title'   => ot_get_option('services_title'),
        'desc'    => ot_get_option('services_desc'),
        'lists'   => ot_get_option('services_lists', array()),
    );

    if ($services['display'] === 'on') { ?>
        <!-- Services Block -->
        <div class="section">
            <div class="container">
                <header class="section-head">
                    <?php if ( ! empty($services['title'])) { ?>
                        <h2 class="section-headline"><?php echo esc_html($services['title']); ?></h2>
                    <?php } ?>
                    <?php if ( ! empty($services['desc'])) { ?>
                        <p class="section-desc"><?php echo esc_html($services['desc']); ?></p>
                    <?php } ?>
                </header>
                <?php if (count($services['lists'])) {
                    $half = round(count($services['lists']) / 2);
                    ?>
                    <ul class="service">
                        <li class="service-column text-right">
                            <?php foreach ($services['lists'] as $key => $item) {
                                if ($key >= $half) {
                                    continue;
                                } ?>
                                <section class="service-item">
                                    <?php if ( ! empty($item['title'])) { ?>
                                        <h3 class="service-title"><?php echo esc_html($item['title']); ?></h3>
                                    <?php }
                                    if ( ! empty(trim($item['desc']))) { ?>
                                        <p class="service-desc"><?php echo esc_html($item['desc']); ?></p>
                                    <?php }
                                    if ( ! empty($item['list'])) { ?>
                                        <div class="service-desc"><?php echo strip_tags($item['list'], '<ul><li>'); ?></div>
                                    <?php } ?>
                                </section>
                            <?php } ?>
                        </li>
                        <li class="service-column on-tablet-hide">
                            <span class="service-hexagon text-center">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/service-hexagon.png'; ?>"
                                     alt="<?php _e('Service Hexagon', 'brainworks'); ?>">
                                <span class="service-button">
                                    <span class="d-block">
                                        <svg class="svg-icon" width="177" height="132">
                                            <use xlink:href="#<?php echo get_lang_class('logo'); ?>"></use>
                                        </svg>
                                    </span>
                                    <br>
                                    <button class="button-medium <?php echo get_lang_class('js-order-service'); ?>"
                                            type="button"><?php _e('Order service', 'brainworks'); ?></button>
                                </span>
                            </span>
                        </li>
                        <li class="service-column">
                            <?php foreach ($services['lists'] as $key => $item) {
                                if ($key < $half) {
                                    continue;
                                } ?>
                                <section class="service-item">
                                    <?php if ( ! empty($item['title'])) { ?>
                                        <h3 class="service-title"><?php echo esc_html($item['title']); ?></h3>
                                    <?php }
                                    if ( ! empty(trim($item['desc']))) { ?>
                                        <p class="service-desc"><?php echo esc_html($item['desc']); ?></p>
                                    <?php }
                                    if ( ! empty($item['list'])) { ?>
                                        <div class="service-desc"><?php echo strip_tags($item['list'], '<ul><li>'); ?></div>
                                    <?php } ?>
                                </section>
                            <?php } ?>
                        </li>
                    </ul>
                <?php } ?>
            </div>
        </div>
        <!-- End Services Block -->
    <?php }
} ?>
