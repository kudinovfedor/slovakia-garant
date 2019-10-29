<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="sp-xs-2"></div>
        <h1 class="col-sm-12 text-center page-name"><?php post_type_archive_title(); ?></h1>
        <div class="sp-xs-4"></div>
        
<p style="text-align: justify;">&nbsp; На этой странице Вы можете найти скриншоты отзывов, которые наши благодарные клиенты оставляют в <a class="link" href="https://www.facebook.com/pg/SlovakiaGarant/reviews/?ref=page_internal" target="_blank" rel="noopener">Facebook</a> и <a class="link" href="http://g.page/SlovakiaGarant/review" target="_blank" rel="noopener">Google</a>.</p>
<p style="text-align: justify;">&nbsp; Если Вы наш клиент, которому мы предоставили услуги, или мы взаимодействовали любым другим способом, и Вы хотите написать честный отзыв о нашем сотрудничестве — можете это сделать здесь:</p>
<p style="text-align: justify;"><a class="link" href="https://www.facebook.com/pg/SlovakiaGarant/reviews/?ref=page_internal" target="_blank" rel="noopener">Оставить отзыв на&nbsp;Facebook</a></p>
<p style="text-align: justify;"><a class="link" href="http://g.page/SlovakiaGarant/review" target="_blank" rel="noopener">Оставить отзыв на&nbsp;Google</a></p>
<p style="text-align: justify;">&nbsp; Мы очень благодарны за Ваши отзывы и время, которое уделили для него. Для нас это очень важно. Надеемся, что Вы остались довольны нашим сотрудничеством, и мы смогли в полной мере решить поставленную перед нами задачу для Вас.</p>
        
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
