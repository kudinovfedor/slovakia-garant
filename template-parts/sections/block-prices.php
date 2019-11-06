<?php if (function_exists('ot_get_option')) {
    $prices = array(
        'display' => ot_get_option('prices_display'),
        'title'   => ot_get_option('prices_title'),
        'desc'    => ot_get_option('prices_desc'),
        'lists'   => ot_get_option('prices_lists', array()),
    );

    $query = new WP_Query(array(
	    'post_type' => 'service-prices',
	    'post_status' => 'publish',
	    'posts_per_page' => -1,
    ));

    if ($prices['display'] === 'on') { ?>
        <!-- Prices Block -->
        <div class="section">
            <div class="container">
                <header class="section-head">
                    <?php if ( ! empty($prices['title'])) { ?>
                        <h2 class="section-headline"><?php echo esc_html($prices['title']); ?></h2>
                    <?php } ?>
                    <?php if ( ! empty($prices['desc'])) { ?>
                        <p class="section-desc"><?php echo esc_html(strip_tags($prices['desc'])); ?></p>
                    <?php } ?>
                </header>

	            <?php if ( $query->have_posts() ) { ?>
                    <ul class="service-price">
			            <?php
			            $i = 0;
			            while ( $query->have_posts() ) {
				            $query->the_post();
				            $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
				            $alt = trim( strip_tags( get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true ) ) );
				            $j = $i % 2; ?>
                            <li class="service-price-item">
                                <div class="row">
                                    <?php if(has_post_thumbnail()) { ?>
                                        <div class="col-md-6 service-price-column <?php echo $j === 0 ? 'pull-right' : ''; ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ) ?>" alt="<?php echo $alt; ?>">
                                        </div>
                                    <?php } ?>
                                    <div class="<?php echo has_post_thumbnail() ? 'col-md-6' : 'col-md-12'; ?> service-price-column">
				                        <?php if(has_post_thumbnail()) { ?>
                                            <h3 class="service-price-title"><?php the_title(); ?></h3>
				                        <?php } ?>
							            <?php the_content(); ?>
                                    </div>
                                </div>
                            </li>
				            <?php $i ++;
			            } ?>
			            <?php wp_reset_postdata(); ?>
                    </ul>
	            <?php } ?>

                <div class="text-center">
                    <a href="/uslugi/vse-soputstvuyushhie-uslugi/" class="button-medium button-outline">
                        <?php _e('See all services', 'brainworks'); ?>
                    </a>
                </div>

                <?php /*if (count($prices['lists'])) { ?>
                    <ul class="service-price">
                        <?php foreach ($prices['lists'] as $key => $item) {
                            $i = $key % 2; ?>
                            <li class="service-price-item">
                                <div class="row">
                                    <div class="col-md-6 service-price-column <?php echo $i === 0 ? 'pull-right' : ''; ?>">
                                        <img src="<?php echo esc_attr(esc_url($item['src'])); ?>" alt="">
                                    </div>
                                    <div class="col-md-6 service-price-column">
                                        <h3 class="service-price-title"><?php echo $item['title']; ?></h3>
                                        <?php echo $item['desc']; ?>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } */?>
            </div>
        </div>
        <!-- End Prices Block -->
    <?php }
} ?>
