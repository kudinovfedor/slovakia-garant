<?php
/**
 * The Single Posts Loop
 * =====================
 */
?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article id="post_<?php the_ID() ?>" <?php post_class() ?>>
        <header>
            <h1 class="single-title"><?php the_title() ?></h1>
            <div class="sp-xs-1 sp-sm-1 sp-md-1 sp-lg-1 sp-xl-1"></div>
            <p class="text-muted">
                <?php the_time( get_option( 'date_format' ) ); ?>
            </p>
            <div class="sp-xs-1 sp-sm-1 sp-md-1 sp-lg-1 sp-xl-1"></div>
        </header>
        <section>
           <?php the_post_thumbnail('full'); ?>
            <?php the_content() ?>
            <?php wp_link_pages(); ?>
        </section>
    </article>
    <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
    <hr>
    <div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
    <?php comments_template('/loops/comments.php'); ?>
    <div class="sp-xs-4 sp-sm-4 sp-md-4 sp-lg-4 sp-xl-4"></div>
<?php endwhile; ?>

<?php else : ?>
    <?php get_template_part('loops/content', 'none'); ?>
<?php endif; ?>