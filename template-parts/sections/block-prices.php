<?php if (function_exists('ot_get_option')) {
    $prices = array(
        'display' => ot_get_option('prices_display'),
        'title'   => ot_get_option('prices_title'),
        'desc'    => ot_get_option('prices_desc'),
        'lists'   => ot_get_option('prices_lists', array()),
    );

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
                <?php if (count($prices['lists'])) { ?>
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
                        <?php /*
                        <li class="service-price-item">
                            <div class="row">
                                <div class="col-md-6 service-price-column pull-right">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/businessman.jpg'; ?>"
                                         alt="">
                                </div>
                                <div class="col-md-6 service-price-column">
                                    <h3 class="service-price-title">ВНЖ в Словакии на основании ИП (ЧП) или
                                        фирмы</h3>
                                    <ul>
                                        <li>Подготовка документов, регистрация ИП или фирмы;</li>
                                        <li>Директор на время оформления ВНЖ (для фирмы);</li>
                                        <li>Официальный перевод на словацкий язык всех необходимых документов;</li>
                                        <li>Предоставление юридического адреса на 1 год;</li>
                                        <li>Открытие личного и фирменного счетов в банке, получение выписок со
                                            счетов;
                                        </li>
                                        <li>Нотариальные услуги для заверения подписей;</li>
                                        <li>Предоставление адреса прописки в Словакии на 1 год;</li>
                                        <li>Медицинская страховка;</li>
                                        <li>Все гос. пошлины (регистрация ИП, подача документов в полиции, выпуск
                                            карточки
                                            ВНЖ,
                                            получение справок и т.д.);
                                        </li>
                                        <li>Полное сопровождение во все инстанции (банк, нотариус, полиция,
                                            медосмотр);
                                        </li>
                                        <li>Подготовка к собеседованию в полиции или консульстве Словакии в Вашей
                                            стране;
                                        </li>
                                        <li>Помощь в составлении бизнес плана, а также его перевод на словацкий язык
                                            (в
                                            случаи
                                            возможного запроса с полиции);
                                        </li>
                                        <li><b>В цену пакета включены все возможные расходы. Больше клиент ни за что
                                                не
                                                платит.</b>
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
                            </div>
                        </li>
                        <li class="service-price-item">
                            <div class="row">
                                <div class="col-md-6 service-price-column">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/bartislava.jpg'; ?>"
                                         alt="">
                                </div>
                                <div class="col-md-6 service-price-column">
                                    <h3 class="service-price-title">Воссоединение семьи</h3>
                                    <ul>
                                        <li>Подготовка и подача документов необходимых для получения ВНЖ по
                                            воссоединению
                                            семьи;
                                        </li>
                                        <li>Официальный перевод на словацкий язык всех необходимых документов;</li>
                                        <li>Нотариальные услуги для заверения подписей;</li>
                                        <li>Предоставление адреса прописки в Словакии на 1 год;</li>
                                        <li>Медицинская страховка;</li>
                                        <li>Все гос. пошлины (подача документов в полиции, выпуск карточки ВНЖ,
                                            получение
                                            справок и
                                            т.д.);
                                        </li>
                                        <li>Полное сопровождение во все инстанции (банк, нотариус, полиция,
                                            медосмотр);
                                        </li>
                                        <li>Подготовка к собеседованию в полиции или консульстве Словакии в Вашей
                                            стране;
                                        </li>
                                        <li><b>В цену пакета включены все возможные расходы. Больше клиент ни за что не
                                                платит.</b>
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
                                <div class="col-md-6 service-price-column pull-right">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/family.jpg'; ?>"
                                         alt="">
                                </div>
                                <div class="col-md-6 service-price-column">
                                    <h3 class="service-price-title">Продлить ВНЖ</h3>
                                    <ul>
                                        <li>Подготовка и подача документов необходимых для продления ВНЖ</li>
                                        <li>Нотариальные услуги для заверения подписей</li>
                                        <li>Все гос. пошлины (подача документов в полиции, выпуск карточки ВНЖ,
                                            получение
                                            справок и
                                            т.д.)
                                        </li>
                                        <li>Полное сопровождение во все инстанции (нотариус, полиция)</li>
                                        <li><b>В цену пакета включены все возможные расходы. Больше клиент ни за что не
                                                платит.</b>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Цена для 1го предпринимателя или директора фирмы:
                                                <span>1800 &euro;</span>
                                            </p>
                                            <p>Цена для 1го взрослого по воссоединению семьи: <span>1200 &euro;</span>
                                            </p>
                                            <p>Цена для 1го ребенка по воссоединению семьи: <span>800 &euro;</span></p>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="button-medium" type="button">Заказать</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="service-price-item">
                            <div class="row">
                                <div class="col-md-6 service-price-column">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/workers.jpg'; ?>"
                                         alt="">
                                </div>
                                <div class="col-md-6 service-price-column">
                                    <h3 class="service-price-title">Другие услуги</h3>
                                    <ul class="list-space">
                                        <li>Трудоустройство в Словакии <a href="#">Подробнее</a></li>
                                        <li>Купить/Арендовать недвижимость <a href="#">Подробнее</a></li>
                                        <li>Замена водительского удостоверения <a href="#">Подробнее</a></li>
                                        <li>Открытие счета в словацком банке <a href="#">Подробнее</a></li>
                                        <li>Услуги бухгалтерского учета <a href="#">Подробнее</a></li>
                                        <li>Официальный перевод документов на словацкий язык <a href="#">Подробнее</a>
                                        </li>
                                        <li>Нострификация дипломов <a href="#">Подробнее</a></li>
                                    </ul>
                                    <button class="button-medium" type="button">Заказать</button>
                                </div>
                            </div>
                        </li>*/ ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
        <!-- End Prices Block -->
    <?php }
} ?>
