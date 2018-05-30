<?php if (function_exists('ot_get_option')) {
    $map = array(
        'display' => ot_get_option('map_display'),
        'address' => ot_get_option('map_address'),
    );

    if ($map['display'] === 'on') { ?>
        <!-- Map Block -->
        <div class="map">
            <div class="container">
                <div class="map-info">
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <?= strip_tags($map['address'], '<br>'); ?>
                        </li>
                        <li>
                            <?php if (has_phones()) { ?>
                                <ul class="phone">
                                    <?php foreach (get_phones() as $phone) { ?>
                                        <li class="phone-item">
                                            <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>"
                                               class="phone-number">
                                                <i class="fas fa-phone" aria-hidden="true"></i>
                                                <?php echo esc_html($phone); ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Map Block -->
    <?php }
} ?>
