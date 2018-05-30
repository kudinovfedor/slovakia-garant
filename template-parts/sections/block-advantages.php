<?php if (function_exists('ot_get_option')) {
    $adv = array(
        'display' => ot_get_option('advantages_display'),
        'title'   => ot_get_option('advantages_title'),
        'desc'    => ot_get_option('advantages_desc'),
        'lists'   => ot_get_option('advantages_lists', array()),
    );

    $adv_icons = array(
        'professionals' => array(
            'width'  => 101,
            'height' => 92,
            'fill'   => '#c9d5e4',
        ),
        'support-man'   => array(
            'width'  => 77,
            'height' => 100,
            'fill'   => '#c9d5e4',
        ),
        'contract'      => array(
            'width'  => 88,
            'height' => 86,
            'fill'   => '#c9d5e4',
        ),
        'support'       => array(
            'width'  => 93,
            'height' => 99,
            'fill'   => '#c9d5e4',
        ),
    );

    $inform = array(
        'display' => ot_get_option('inform_display'),
        'title'   => ot_get_option('inform_title'),
        'desc'    => ot_get_option('inform_desc'),
    );

    if ($adv['display'] === 'on' || $inform['display'] === 'on') { ?>
        <!-- Advantages Block -->
        <div class="section">
            <div class="container">
                <header class="section-head">
                    <?php if ( ! empty($adv['title'])) { ?>
                        <h2 class="section-headline"><?= esc_html($adv['title']); ?></h2>
                    <?php } ?>
                    <?php if ( ! empty($adv['desc'])) { ?>
                        <p class="section-desc"><?= esc_html(strip_tags($adv['desc'])); ?></p>
                    <?php } ?>
                </header>
                <?php if ($adv['display'] === 'on' && count($adv['lists'])) { ?>
                    <ul class="adv">
                        <?php foreach ($adv['lists'] as $key => $item) { ?>
                            <li class="adv-item">
                                <h3 class="adv-title"><?= esc_html($item['title']); ?></h3>
                                <p class="adv-desc"><?= esc_html($item['desc']); ?></p>
                                <?php if (array_key_exists($item['icon'], $adv_icons)) {
                                    $width  = $adv_icons[$item['icon']]['width'];
                                    $height = $adv_icons[$item['icon']]['height'];
                                    $color  = $adv_icons[$item['icon']]['fill'];
                                    ?>
                                    <svg class="adv-icon svg-icon" width="<?= esc_attr($width); ?>"
                                         height="<?= esc_attr($height); ?>" fill="<?= esc_attr($color); ?>">
                                        <use xlink:href="#<?= esc_attr($item['icon']); ?>"></use>
                                    </svg>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="text-center">
                        <button class="button-medium <?= get_lang_class('js-adv-order-service') ?>" type="button"><?php _e('Order service', 'brainworks'); ?></button>
                    </div>
                <?php }
                if ($inform['display'] === 'on') { ?>
                    <div class="row inform">
                        <?php if ( ! empty($inform['title'])) { ?>
                            <div class="col-md-6">
                                <h3 class="inform-title"><?= esc_html($inform['title']); ?></h3>
                            </div>
                        <?php }
                        if ( ! empty($inform['desc'])) { ?>
                            <div class="col-md-6 inform-desc"><?= strip_tags($inform['desc'], '<p><br>'); ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- End Advantages Block -->
    <?php }
} ?>
