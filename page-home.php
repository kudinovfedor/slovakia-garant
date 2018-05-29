<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>

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
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/service-hexagon.png'; ?>"
                             alt="<?php _e('Service Hexagon', 'brainworks'); ?>">
                        <span class="service-button">
                            <span class="d-block">
                                <svg class="svg-icon" width="177" height="132"><use
                                        xlink:href="#<?php echo get_lang_class('logo'); ?>"></use></svg>
                            </span>
                            <button class="button-medium <?php echo get_lang_class('js-order-service'); ?>"
                                    type="button"><?php _e('Order service', 'brainworks'); ?></button>
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
                <p class="adv-desc">Профессионализм и опыт наших сотрудников дает 100% уверенность, что каждый клиент,
                    который обращается
                    к нам, получит ВНЖ. За всю историю нашей компании мы не получили ни одного отказа в выдаче ВНЖ. Даже
                    в самых безнадежных ситуациях мы способны помочь.</p>
                <svg class="adv-icon svg-icon" width="101" height="92" fill="#c9d5e4">
                    <use xlink:href="#professionals"></use>
                </svg>
            </li>
            <li class="adv-item">
                <h3 class="adv-title">Поддержка на всех этапах</h3>
                <p class="adv-desc">Мы постоянно на связи: предоставляем клиенту пошаговою инструкцию, консультируем по
                    всем вопросам, рекомендуем проверенные компании и людей (например, риелтора, финансового
                    консультанта и т.д.). У нас нет секретов от клиентов. Всё полностью прозрачно и дружественно.</p>
                <svg class="adv-icon svg-icon" width="77" height="100" fill="#c9d5e4">
                    <use xlink:href="#support-man"></use>
                </svg>
            </li>
            <li class="adv-item">
                <h3 class="adv-title">Вы получаете услугу «ПОД КЛЮЧ»</h3>
                <p class="adv-desc">Наши предложения сформированы в пакеты. Приобретая подходящий пакет, клиент может
                    быть уверен в том, что ему не придется ни за что беспокоится. Мы в буквальном смысле берем клиента
                    «за ручку» и водим по всем необходимым инстанциям. Всю рутинную работу по сбору, переводу,
                    комплектации документов, а также все затраты мы берем на себя.</p>
                <svg class="adv-icon svg-icon" width="88" height="86" fill="#c9d5e4">
                    <use xlink:href="#contract"></use>
                </svg>
            </li>
            <li class="adv-item">
                <h3 class="adv-title">Мы не берем денег за дополнительные консультации</h3>
                <p class="adv-desc">Двери нашего офиса всегда открыты. Мы с радостью угостим Вас вкусным кофе,
                    внимательно выслушаем, и сделаем все возможное, чтобы помочь решить Ваш вопрос.</p>
                <svg class="adv-icon svg-icon" width="93" height="99" fill="#c9d5e4">
                    <use xlink:href="#support"></use>
                </svg>
            </li>
        </ul>
        <div class="row inform">
            <div class="col-md-6">
                <h3 class="inform-title">«Помощь в получении ВНЖ — это не простой бизнес. В нем главное —
                    репутация!»</h3>
            </div>
            <div class="col-md-6 inform-desc">
                <p>Никакой красивый сайт или большой рекламный бюджет не поможет компании создать хорошую репутацию. Это
                    делают исключительно довольные клиенты и их положительные отзывы.</p>
                <p>Мы хотим, чтобы Вы порекомендовали нас своим друзьям и знакомым. Поэтому сделаем все возможное, чтобы
                    Вы не просто были довольны нашими услугами, а воодушевлены от сотрудничества с нашей компанией.</p>
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
                        <textarea name="comment" class="form-field"
                                  placeholder="В двух словах опишите, какая именно услга Вас интересует"></textarea>
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
                <div class="row">
                    <div class="col-md-6 service-price-column">
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
                            <li><b>В цену пакета включены все возможные расходы. Больше клиент ни за что не платит.</b>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-md-8 text-right">
                                <p>Цена: &nbsp; &nbsp; <span>3950 &euro;</span></p>
                            </div>
                            <div class="col-md-4 text-right">
                                <button class="button-medium" type="button">Заказать</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 service-price-column">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/businessman.jpg'; ?>" alt="">
                    </div>
                </div>
            </li>
            <li class="service-price-item">
                <div class="row">
                    <div class="col-md-6 service-price-column">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/bartislava.jpg'; ?>" alt="">
                    </div>
                    <div class="col-md-6 service-price-column">
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
                            <li><b>В цену пакета включены все возможные расходы. Больше клиент ни за что не платит.</b>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-md-8">
                                <p>Цена для 1 взрослого: <span>1800 &euro;</span></p>
                                <p>Цена для 1 ребенка <br>(младше 18 лет): <span>1200 &euro;</span></p>
                            </div>
                            <div class="col-md-4">
                                <button class="button-medium" type="button">Заказать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-price-item">
                <div class="row">
                    <div class="col-md-6 service-price-column">
                        <h3 class="service-price-title">Продлить ВНЖ</h3>
                        <ul>
                            <li>Подготовка и подача документов необходимых для продления ВНЖ</li>
                            <li>Нотариальные услуги для заверения подписей</li>
                            <li>Все гос. пошлины (подача документов в полиции, выпуск карточки ВНЖ, получение справок и
                                т.д.)
                            </li>
                            <li>Полное сопровождение во все инстанции (нотариус, полиция)</li>
                            <li><b>В цену пакета включены все возможные расходы. Больше клиент ни за что не платит.</b>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Цена для 1го предпринимателя или директора фирмы: <span>1800 &euro;</span></p>
                                <p>Цена для 1го взрослого по воссоединению семьи: <span>1200 &euro;</span></p>
                                <p>Цена для 1го ребенка по воссоединению семьи: <span>800 &euro;</span></p>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="button-medium" type="button">Заказать</button>
                        </div>
                    </div>
                    <div class="col-md-6 service-price-column">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/family.jpg'; ?>" alt="">
                    </div>
                </div>
            </li>
            <li class="service-price-item">
                <div class="row">
                    <div class="col-md-6 service-price-column">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/workers.jpg'; ?>" alt="">
                    </div>
                    <div class="col-md-6 service-price-column">
                        <h3 class="service-price-title">Другие услуги</h3>
                        <ul class="list-space">
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

if ($query->have_posts()) : ?>
    <div class="section">
        <div class="container">
            <header class="section-head">
                <h2 class="section-headline">Отзывы</h2>
            </header>
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
                       class="button-medium"><?php _e('See all reviews', 'brainworks'); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

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

if ($query->have_posts()) { ?>
    <div class="section">
        <div class="container">
            <header class="section-head">
                <h2 class="section-headline">Блог</h2>
            </header>

            <ul class="row blog-list">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <li id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 col-lg-4 blog-item'); ?>>
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
                <a href="<?php echo get_page_link(11); ?>" class="button-medium"><?php _e('View all articles',
                        'brainworks'); ?></a>
            </div>
        </div>
    </div>
<?php } ?>

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

<?php get_footer(); ?>

