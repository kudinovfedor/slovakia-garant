<?php if (function_exists('ot_get_option')) {
    $steps = array(
        'display' => ot_get_option('steps_display'),
        'title'   => ot_get_option('steps_title'),
        'desc'    => ot_get_option('steps_desc'),
        'lists'   => ot_get_option('steps_lists', array()),
    );

    //dump($steps);

    if ($steps['display'] === 'on') { ?>
        <!-- Steps Block-->
        <div class="section">
            <div class="container">
                <header class="section-head">
                    <?php if ( ! empty($steps['title'])) { ?>
                        <h2 class="section-headline section-without-dash"><?= esc_html($steps['title']); ?></h2>
                    <?php } ?>
                    <?php if ( ! empty($steps['desc'])) { ?>
                        <p class="section-desc section-desc-md"><?= esc_html(strip_tags($steps['desc'])); ?></p>
                    <?php } ?>
                </header>
                <?php if (count($steps['lists'])) { ?>
                    <ul class="stage">
                        <?php foreach ($steps['lists'] as $key => $item) {
                            $i = $key % 2; ?>
                            <li class="stage-item row">
                                <div class="col-md-6 stage-column <?= $i === 0 ? 'pull-right text-left' : 'pull-left text-right'; ?>">
                                    <span class="stage-index <?= $i === 0 ? 'is-left' : 'is-right'; ?>"><?= ++$key; ?></span>
                                    <div class="stage-days"><?= esc_html($item['days']); ?></div>
                                    <div class="stage-desc">
                                        <?= strip_tags($item['desc'], '<p><b><strong><br>'); ?>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
        <!-- End Steps Block -->
    <?php }
} ?>
