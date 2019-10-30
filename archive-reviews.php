<?php
get_header();

$desc = function_exists( 'ot_get_option' ) ? ot_get_option( 'reviews_desc' ) : '';
?>

<div class="container-fluid">
    <div class="row">
        <div class="sp-xs-2"></div>
        <h1 class="col-sm-12 text-center page-name"><?php post_type_archive_title(); ?></h1>
        <div class="sp-xs-4"></div>

        <?php echo $desc; ?>
        
        <div class="sp-xs-4"></div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="review-item">
                    <?php /*
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
                    */ ?>
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('full');
                    } ?>
                </div>
            <?php endwhile; ?>

                <?php if (function_exists('bw_pagination')) {
                    bw_pagination();
                } elseif (is_paged()) { ?>
                    <ul class="pagination">
                        <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Previous',
                                    'brainworks')) ?></li>
                        <li class="newer"><?php previous_posts_link(__('Next',
                                    'brainworks') . ' <i class="fa fa-arrow-right"></i>') ?></li>
                    </ul>
                <?php } ?>

            <?php else : ?>
                <?php get_template_part('loops/content', 'none'); ?>
            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
            <?php get_sidebar(); ?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
