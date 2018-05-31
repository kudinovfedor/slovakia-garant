<?php
$args = array(
    'post_type'      => 'reviews',
    'posts_per_page' => 10,
    'meta_query'     => array(
        'relation' => 'OR',
        array(
            'key'   => 'bw-review-on-front',
            'value' => 1,
        ),
    ),
);

$query = new WP_Query($args);

if (function_exists('ot_get_option')) {
    $reviews = array(
        'display' => ot_get_option('reviews_display'),
        'title'   => ot_get_option('reviews_title'),
        'desc'    => ot_get_option('reviews_desc'),
    );
}

$displayed = isset($reviews) ? $reviews['display'] === 'on' : true;

if ($query->have_posts() && $displayed) : ?>
    <!-- Reviews Block -->
    <div class="section">
        <div class="container">
            <?php if (function_exists('ot_get_option')) { ?>
                <header class="section-head">
                    <?php if ( ! empty($reviews['title'])) { ?>
                        <h2 class="section-headline"><?php echo esc_html($reviews['title']); ?></h2>
                    <?php } ?>
                    <?php if ( ! empty($reviews['desc'])) { ?>
                        <p class="section-desc"><?php echo esc_html(strip_tags($reviews['desc'])); ?></p>
                    <?php } ?>
                </header>
            <?php } ?>
            <div class="review-wrapper">
                <div class="review-container">
                    <div class="review-list js-reviews">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="review-item">
                                <?php if (has_post_thumbnail()) { ?>
                                    <div class="review-avatar">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                <?php } ?>
                                <div class="review-content">
                                    <?php if (function_exists('rwmb_meta')) {
                                        $name = rwmb_meta('bw-review-name');
                                        $pos  = rwmb_meta('bw-review-position');
                                        ?>
                                        <div class="review-user"><?php echo esc_html($name); ?>,</div>
                                        <div class="review-position"><b><?php echo esc_html($pos); ?></b></div>
                                    <?php } ?>
                                    <div class="review-desc"><?php the_excerpt(); ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="review-navigation">
                        <button class="review-btn review-btn-prev" type="button">
                            <i class="fas fa-angle-left" aria-hidden="true"></i>
                        </button>
                        <button class="review-btn review-btn-next" type="button">
                            <i class="fas fa-angle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <svg class="svg-icon review-quote" width="90" height="75" fill="#fff">
                    <use xlink:href="#quote"></use>
                </svg>
                <div class="text-right">
                    <a href="<?php echo get_post_type_archive_link('reviews'); ?>"
                       class="button-medium button-outline"><?php _e('See all reviews', 'brainworks'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Reviews Block -->
<?php endif; ?>
