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

    <?php $hero_bg = has_custom_header() ? esc_url(get_header_image()) : get_template_directory_uri() . '/assets/img/hero-bg.jpg'; ?>
    <div class="hero" style="background-image: url(<?php echo $hero_bg; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-title">Иммиграция в Словакию <br> без проблем</div>
                    <p class="hero-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br> eiusmod
                        tempor incididunt ut labore et dolore magna</p>
                    <button class="button-medium hero-btn <?php the_lang_class('js-free-consult'); ?>"
                            type="button"><?php _e('Free consultation', 'brainworks'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <header class="section-head">
                <h2 class="section-headline">Наши услуги</h2>
            </header>
            <ul class="service">
                <li class="service-column">
                    <section class="service-item">
                        <h3 class="service-title">ВНЖ в Словакии на основании ИП (ЧП) или фирмы</h3>
                        <p class="service-desc">Оформими ИП или учредим фирму, соберем за Вас все документы, замплатим
                            все расходы по оформлению, возьмем “за руку и собпроводим во все инстанции.</p>
                    </section>
                    <section class="service-item">
                        <h3 class="service-title">ВНЖ по воссоединению семьи</h3>
                        <p class="service-desc">Возьмем все вопросы по оформлению воссоединения супруга/супруги и детей
                            на себя. Ваши родные в короткие сроки получат ВНЖ в Словакии и будут легально жить вмести с
                            Вами!</p>
                    </section>
                    <section class="service-item">
                        <h3 class="service-title">Продлить ВНЖ</h3>
                        <p class="service-desc">Если Вы уже получили первое ВНЖ, мы поможем Вам и Вашей семье его
                            продить проанализируем Вашу ситуацию, поможем подтянуть "хвосты" для выполнения условий
                            продления, соберем для Вас все необходимые документы. Подготовим к собеседованию в полиции,
                            Вы будете готовы к любому вопросу.</p>
                    </section>
                </li>
                <li class="service-column">
                    <span class="service-hexagon text-center">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/service-hexagon.png'; ?>" alt="<?php _e('Service Hexagon', 'brainworks'); ?>">
                        <span class="service-button">
                            <span class="d-block">
                                <svg class="svg-icon" width="177" height="132"><use xlink:href="#<?php echo get_lang_class('logo'); ?>"></use></svg>
                            </span>
                            <button class="button-medium <?php echo get_lang_class('js-order-service'); ?>" type="button"><?php _e('Order service', 'brainworks'); ?></button>
                        </span>
                    </span>
                </li>
                <li class="service-column">
                    <section class="service-item">
                        <h3 class="service-title">Услуги бухгалтерского учета</h3>
                        <p class="service-desc">Абоненское бухгалтерсоке обслуживание ИП и фирм в Словакии, Сдача
                            годового налогового отчета, Получение свидетельства плательщика НДС, Консультации по бух
                            учету</p>
                    </section>
                    <section class="service-item">
                        <h3 class="service-title">Трудоустройство в Словакии</h3>
                        <p class="service-desc">Содействуем в трудоустройстве к самым крупным работодателям Словакии с
                            прямым трудовым договором и оформлением рабочего ВНЖ</p>
                    </section>
                    <section class="service-item">
                        <h3 class="service-title">Другие услуги</h3>
                        <div class="service-desc">
                            <ul>
                                <li>Получить ПМЖ</li>
                                <li>Купить/Арендовать недвижимость</li>
                                <li>Замена водительского удостоверения</li>
                                <li>Открытие счета в словацком банке</li>
                                <li>Официальный перевод документов на словацкий язык</li>
                                <li>Нострификация дипломов</li>
                                <li>И это далеко не все</li>
                            </ul>
                        </div>
                    </section>
                </li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <header class="section-head">
                <h2 class="section-headline">Преимущества</h2>
                <p class="section-desc">Чем мы отличаемся от конкурентов?</p>
            </header>
            <ul class="adv">
                <li class="adv-item">
                    <h3 class="adv-title">Уверенность в результате</h3>
                    <p class="adv-desc">Профессионализм и опыт наших сотрудников дает 100% уверенность, что каждый клиент, который обращается
                        к нам, получит ВНЖ. За всю историю нашей компании мы не получили ни одного отказа в выдаче ВНЖ. Даже
                        в самых безнадежных ситуациях мы способны помочь.</p>
                    <svg class="adv-icon svg-icon" width="101" height="92" fill="#c9d5e4"><use xlink:href="#professionals"></use></svg>
                </li>
                <li class="adv-item">
                    <h3 class="adv-title">Поддержка на всех этапах</h3>
                    <p class="adv-desc">Мы постоянно на связи: предоставляем клиенту пошаговою инструкцию, консультируем по всем вопросам, рекомендуем проверенные компании и людей (например, риелтора, финансового консультанта и т.д.). У нас нет секретов от клиентов. Всё полностью прозрачно и дружественно.</p>
                    <svg class="adv-icon svg-icon" width="77" height="100" fill="#c9d5e4"><use xlink:href="#support-man"></use></svg>
                </li>
                <li class="adv-item">
                    <h3 class="adv-title">Вы получаете услугу «ПОД КЛЮЧ»</h3>
                    <p class="adv-desc">Наши предложения сформированы в пакеты. Приобретая подходящий пакет, клиент может быть уверен в том, что ему не придется ни за что беспокоится. Мы в буквальном смысле берем клиента «за ручку» и водим по всем необходимым инстанциям. Всю рутинную работу по сбору, переводу, комплектации документов, а также все затраты мы берем на себя.</p>
                    <svg class="adv-icon svg-icon" width="88" height="86" fill="#c9d5e4"><use xlink:href="#contract"></use></svg>
                </li>
                <li class="adv-item">
                    <h3 class="adv-title">Мы не берем денег за дополнительные консультации</h3>
                    <p class="adv-desc">Двери нашего офиса всегда открыты. Мы с радостью угостим Вас вкусным кофе, внимательно выслушаем, и сделаем все возможное, чтобы помочь решить Ваш вопрос.</p>
                    <svg class="adv-icon svg-icon" width="93" height="99" fill="#c9d5e4"><use xlink:href="#support"></use></svg>
                </li>
            </ul>
            <div class="row inform">
                <div class="col-md-6">
                    <h3 class="inform-title">«Помощь в получении ВНЖ — это не простой бизнес. В нем главное — репутация!»</h3>
                </div>
                <div class="col-md-6 inform-desc">
                    <p>Никакой красивый сайт или большой рекламный бюджет не поможет компании создать хорошую репутацию. Это делают исключительно довольные клиенты и их положительные отзывы.</p>
                    <p>Мы хотим, чтобы Вы порекомендовали нас своим друзьям и знакомым. Поэтому сделаем все возможное, чтобы Вы не просто были довольны нашими услугами, а воодушевлены от сотрудничества с нашей компанией.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-dark">
        <div class="container section-container">
            <header class="section-head">
                <h2 class="section-headline">Заказать обратный звонок</h2>
                <p class="section-desc">Заполните форму, и мы перезвоним Вам для бесплатной консультации</p>
            </header>
            <div class="section-form">
                <form action="#" method="post" class="form">
                    <div class="row">
                        <div class="col-md-4 form-row">
                            <input class="form-field" type="text" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-4 form-row">
                            <input class="form-field" type="email" name="email" placeholder="Ваш e-mail">
                        </div>
                        <div class="col-md-4 form-row">
                            <input class="form-field" type="tel" name="tel" placeholder="Ваш номер телефона">
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-12">
                            <textarea name="comment" class="form-field" placeholder="В двух словах опишите, какая именно услга Вас интересует"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="button-medium" type="submit">Заказать звонок</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <header class="section-head">
                <h2 class="section-headline">Цены на услуги</h2>
            </header>
            <ul class="service-price">
                <li class="service-price-item">
                    <div class="service-price-column">
                        <h3 class="service-price-title">ВНЖ в Словакии на основании ИП (ЧП) или фирмы</h3>
                        <ul>
                            <li>Подготовка документов, регистрация ИП или фирмы;</li>
                            <li>Директор на время оформления ВНЖ (для фирмы);</li>
                            <li>Официальный перевод на словацкий язык всех необходимых документов;</li>
                            <li>Предоставление юридического адреса на 1 год;</li>
                            <li>Открытие личного и фирменного счетов в банке, получение выписок со счетов;</li>
                            <li>Нотариальные услуги для заверения подписей;</li>
                            <li>Предоставление адреса прописки в Словакии на 1 год;</li>
                            <li>Медицинская страховка;</li>
                            <li>Все гос. пошлины (регистрация ИП, подача документов в полиции, выпуск карточки ВНЖ,
                                получение справок и т.д.);
                            </li>
                            <li>Полное сопровождение во все инстанции (банк, нотариус, полиция, медосмотр);</li>
                            <li>Подготовка к собеседованию в полиции или консульстве Словакии в Вашей стране;</li>
                            <li>Помощь в составлении бизнес плана, а также его перевод на словацкий язык (в случаи
                                возможного запроса с полиции);
                            </li>
                            <li><b>В цену пакета включены все возможные расходы. Больше клиент ни за что не платит.</b></li>
                        </ul>
                    </div>
                    <div class="service-price-column">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/service-price-item-1.jpg'; ?>" alt="">
                    </div>
                </li>
                <li class="service-price-item">
                    <div class="service-price-column">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/service-price-item-1.jpg'; ?>" alt="">
                    </div>
                    <div class="service-price-column">
                        <h3 class="service-price-title">Воссоединение семьи</h3>
                        <ul>
                            <li>Подготовка и подача документов необходимых для получения ВНЖ по воссоединению семьи;
                            </li>
                            <li>Официальный перевод на словацкий язык всех необходимых документов;</li>
                            <li>Нотариальные услуги для заверения подписей;</li>
                            <li>Предоставление адреса прописки в Словакии на 1 год;</li>
                            <li>Медицинская страховка;</li>
                            <li>Все гос. пошлины (подача документов в полиции, выпуск карточки ВНЖ, получение справок и
                                т.д.);
                            </li>
                            <li>Полное сопровождение во все инстанции (банк, нотариус, полиция, медосмотр);</li>
                            <li>Подготовка к собеседованию в полиции или консульстве Словакии в Вашей стране;</li>
                            <li><b>В цену пакета включены все возможные расходы. Больше клиент ни за что не платит.</b></li>
                        </ul>
                    </div>
                </li>
                <li class="service-price-item">
                    <div class="service-price-column">
                        <h3 class="service-price-title">Продлить ВНЖ</h3>
                        <ul>
                            <li>Подготовка и подача документов необходимых для продления ВНЖ</li>
                            <li>Нотариальные услуги для заверения подписей</li>
                            <li>Все гос. пошлины (подача документов в полиции, выпуск карточки ВНЖ, получение справок и
                                т.д.)
                            </li>
                            <li>Полное сопровождение во все инстанции (нотариус, полиция)</li>
                            <li><b>В цену пакета включены все возможные расходы. Больше клиент ни за что не платит.</b></li>
                        </ul>
                        <div class="text-center">
                            <button class="button-medium" type="button">Заказать</button>
                        </div>
                    </div>
                    <div class="service-price-column">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/service-price-item-1.jpg'; ?>" alt="">
                    </div>
                </li>
                <li class="service-price-item">
                    <div class="service-price-column">
                        <h3 class="service-price-title">Другие услуги</h3>
                        <ul>
                            <li>Трудоустройство в Словакии <a href="#">Подробнее</a></li>
                            <li>Купить/Арендовать недвижимость <a href="#">Подробнее</a></li>
                            <li>Замена водительского удостоверения <a href="#">Подробнее</a></li>
                            <li>Открытие счета в словацком банке <a href="#">Подробнее</a></li>
                            <li>Услуги бухгалтерского учета <a href="#">Подробнее</a></li>
                            <li>Официальный перевод документов на словацкий язык <a href="#">Подробнее</a></li>
                            <li>Нострификация дипломов <a href="#">Подробнее</a></li>
                        </ul>
                        <button class="button-medium" type="button">Заказать</button>
                    </div>
                    <div class="service-price-column">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/service-price-item-1.jpg'; ?>" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <header class="section-head">
                <h2 class="section-headline section-without-dash">Процедура получения ВНЖ</h2>
                <p class="section-desc section-desc-md">на основании предпренимательства или фирмы</p>
            </header>
            <ul class="stage">
                <li class="stage-item"></li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <header class="section-head">
                <h2 class="section-headline">Отзывы</h2>
            </header>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <header class="section-head">
                <h2 class="section-headline">Блог</h2>
            </header>
            <?php
            $args = array(
                'port_type' => 'post',
                'posts_per_page' => 3,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) { ?>
                <ul class="row blog-list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 col-lg-4 blog-item'); ?>>
                            <?php if(has_post_thumbnail()) { ?>
                                <figure class="blog-preview">
                                    <?php the_post_thumbnail('medium_large', array('class' => 'blog-thumbnail')); ?>
                                </figure>
                            <?php } ?>
                            <h3 class="blog-title">
                                <a href="<?php the_permalink(); ?>" class="blog-permalink"><?php the_title(); ?></a>
                            </h3>
                            <div class="blog-desc"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="blog-link"><?php _e('Read more', 'brainworks'); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php } ?>
            <div class="text-center">
                <a href="<?php echo get_page_link(11); ?>" class="button-medium"><?php _e('View all articles', 'brainworks'); ?></a>
            </div>
        </div>
    </div>

    <div class="map">
        <div class="container">
            <div class="map-info">
                <ul>
                    <li>
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        Адрес офиса здесь в 2 строки Адрес офиса здесь в 2 строки
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

    <div class="page-wrapper container">

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
