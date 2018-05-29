<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body(); ?>

<div class="wrapper">

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo"><?php get_default_logo_link(true); ?></div>
                </div>
                <div class="col-lg-10">
                    <div class="header-top">
                        <?php
                        $email    = get_theme_mod('bw_additional_email');
                        $skype    = get_theme_mod('bw_additional_skype');
                        $viber    = get_theme_mod('bw_additional_viber');
                        $whatsapp = get_theme_mod('bw_additional_whatsapp');
                        $telegram = get_theme_mod('bw_additional_telegram');
                        ?>
                        <div class="header-item">
                            <?php if ($email) { ?>
                                <a class="header-email" href="mailto:<?php echo $email; ?>">
                                    <span class="header-icon"><i class="fas fa-envelope" aria-hidden="true"></i></span>
                                    <?php echo $email; ?>
                                </a>
                            <?php } ?>
                            <?php if ($skype) { ?>
                                <a class="header-skype" href="tel:<?php echo $skype; ?>">
                                    <span class="header-icon"><i class="fab fa-skype" aria-hidden="true"></i></span>
                                    <?php _e('SlovakiaGarant', 'brainworks'); ?>
                                </a>
                            <?php } ?>
                        </div>

                        <div class="header-item">
                            <?php if ($viber || $whatsapp || $telegram) { ?>
                                <ul class="messenger header-messenger">
                                    <?php if ($viber) { ?>
                                        <li class="messenger-item">
                                            <a href="tel:<?php echo $viber; ?>" class="messenger-link">
                                                <i class="fab fa-viber" aria-hidden="true"
                                                   aria-label="<?php _e('Viber', 'brainworks'); ?>"></i>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <?php if ($whatsapp) { ?>
                                        <li class="messenger-item">
                                            <a href="tel:<?php echo $whatsapp; ?>" class="messenger-link">
                                                <i class="fab fa-whatsapp" aria-hidden="true"
                                                   aria-label="<?php _e('WhatsApp', 'brainworks'); ?>"></i>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <?php if ($telegram) { ?>
                                        <li class="messenger-item">
                                            <a href="tel:<?php echo $telegram; ?>" class="messenger-link">
                                                <i class="fab fa-telegram-plane" aria-hidden="true"
                                                   aria-label="<?php _e('Telegram', 'brainworks'); ?>"></i>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                            <?php if (has_phones()) { ?>
                                <ul class="phone header-phone">
                                    <?php foreach (get_phones() as $phone) { ?>
                                        <li class="phone-item">
                                            <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>"
                                               class="phone-number">
                                                <span class="header-icon"><i class="fas fa-phone"
                                                                             aria-hidden="true"></i></span>
                                                <?php echo esc_html($phone); ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                        <div class="header-item text-right">
                            <?php if (has_social()) { ?>
                                <ul class="social header-social">
                                    <?php foreach (get_social() as $social) { ?>
                                        <li class="social-item">
                                            <a href="<?php echo esc_attr(esc_url($social['url'])); ?>"
                                               class="social-link" target="_blank">
                                                <i class="<?php echo esc_attr($social['icon']); ?>" aria-hidden="true"
                                                   aria-label="<?php echo esc_attr($social['text']); ?>"></i>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                            <button type="button"
                                    class="button-medium header-btn <?php the_lang_class('js-call-back'); ?>"><?php _e('Call back',
                                    'brainworks'); ?></button>
                        </div>
                    </div>
                    <div class="header-bottom">
                        <div class="header-item">
                            <?php if (has_nav_menu('main-nav')) { ?>
                                <nav class="nav js-menu">
                                    <button type="button" tabindex="0"
                                            class="menu-item-close menu-close js-menu-close"></button>
                                    <?php wp_nav_menu(array(
                                        'theme_location' => 'main-nav',
                                        'container'      => false,
                                        'menu_class'     => 'menu-container',
                                        'menu_id'        => '',
                                        'fallback_cb'    => 'wp_page_menu',
                                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth'          => 3
                                    )); ?>
                                </nav>
                            <?php } ?>
                        </div>
                        <div class="header-item text-right">
                            <button type="button" class="header-search-icon js-search">
                                <i class="fas fa-search" aria-hidden="true"></i>
                            </button>
                            <?php if (function_exists('pll_the_languages')) { ?>
                                <div class="lang">
                                    <?php pll_the_languages(array(
                                        'show_flags'       => 1,
                                        'show_names'       => 0,
                                        'hide_if_empty'    => 0,
                                        'dropdown'         => 1,
                                        'display_names_as' => 'name'
                                    )); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <form class="header-search search-form" role="search" method="get" id="header-search-form"
                  action="<?php echo esc_url(home_url('/')); ?>">
                <input class="header-search-field" type="search" name="s" id="s"
                       value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search', 'brainworks') ?>">
                <button class="header-search-btn" type="submit">
                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </header>

    <div class="page-wrapper <?php echo ! is_front_page() ? 'container' : ''; ?>">

        <div class="nav-mobile-header">
            <button class="hamburger js-hamburger" type="button" tabindex="0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
            <div class="logo"><?php get_default_logo_link(true); ?></div>
        </div>

        <?php /*

    get_default_logo_link();

    <?php if (function_exists('pll_the_languages')) { ?>
        <ul class="lang">
            <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 0, 'hide_if_empty' => 0, 'display_names_as' => 'name')); ?>
        </ul>
    <?php } ?>

    <?php if (has_social()) { ?>
        <ul class="social">
            <?php foreach (get_social() as $social) { ?>
                <li class="social-item">
                    <a href="<?php echo esc_attr(esc_url($social['url'])); ?>" class="social-link" target="_blank">
                        <i class="fa <?php echo esc_attr($social['icon']); ?>" aria-hidden="true"
                           aria-label="<?php echo esc_attr($social['text']); ?>"></i>
                    </a>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php if (has_phones()) { ?>
        <ul class="phone">
            <?php foreach (get_phones() as $phone) { ?>
                <li class="phone-item">
                    <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>" class="phone-number">
                        <?php echo esc_html($phone); ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

    <button type="button" class="button-medium <?php the_lang_class('js-call-back'); ?>"><?php _e('Call back', 'brainworks'); ?></button>

    <h1><?php echo esc_html(get_bloginfo('name')); ?></h1>
    <h3><?php bloginfo('description'); ?></h3>
    <h3><?php bloginfo('admin_email'); ?></h3>
    */ ?>
