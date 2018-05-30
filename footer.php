</div><!-- .page-wrapper end-->

<footer class="footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col col-sm-6 col-md-5">&copy; 2018, &laquo;SlovakiaGarant&raquo;</div>
                <div class="col col-sm-6 col-md-7"><?php _e('Developed by', 'brainworks') ?>
                    <a href="https://brainworks.com.ua/" target="_blank">BRAIN WORKS</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<button class="btn-sticky on-mobile-hide <?php echo get_lang_class('js-stock'); ?>" type="button">
    <?php _e('STOCK! -10% for all prices', 'brainworks'); ?>
</button>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
        <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
        <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_login_logo" }'>
        <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
    </button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
