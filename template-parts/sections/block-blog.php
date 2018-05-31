<?php
$args = array(
    'port_type'      => 'post',
    'posts_per_page' => 3,
    'meta_query'     => array(
        'relation' => 'OR',
        array(
            'key'   => 'bw-post-on-front',
            'value' => 1,
        ),
    ),
);

$query = new WP_Query($args);

if (function_exists('ot_get_option')) {
    $blog = array(
        'display' => ot_get_option('blog_display'),
        'title'   => ot_get_option('blog_title'),
        'desc'    => ot_get_option('blog_desc'),
    );
}

$displayed = isset($blog) ? $blog['display'] === 'on' : true;

if ($query->have_posts() && $displayed) { ?>
    <!-- Blog Block -->
    <div class="section">
        <div class="container">
            <?php if (function_exists('ot_get_option')) { ?>
                <header class="section-head">
                    <?php if ( ! empty($blog['title'])) { ?>
                        <h2 class="section-headline"><?php echo esc_html($blog['title']); ?></h2>
                    <?php } ?>
                    <?php if ( ! empty($blog['desc'])) { ?>
                        <p class="section-desc"><?php echo esc_html(strip_tags($blog['desc'])); ?></p>
                    <?php } ?>
                </header>
            <?php } ?>
            <ul class="row blog-list">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <li id="post-<?php the_ID(); ?>" <?php post_class('col-sm-6 col-md-6 col-lg-4 blog-item'); ?>>
                        <?php if (has_post_thumbnail()) { ?>
                            <figure class="blog-preview">
                                <?php the_post_thumbnail('medium_large', array('class' => 'blog-thumbnail')); ?>
                            </figure>
                        <?php } ?>
                        <h3 class="blog-title">
                            <a href="<?php the_permalink(); ?>" class="blog-permalink"><?php the_title(); ?></a>
                        </h3>
                        <div class="blog-desc"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="blog-link"><?php _e('Read more',
                                'brainworks'); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="text-center">
                <a href="<?php echo get_page_link(11); ?>" class="button-medium button-outline"><?php _e('View all articles',
                        'brainworks'); ?></a>
            </div>
        </div>
    </div>
    <!-- End Blog Block -->
<?php } ?>

