<?php
    get_header();
?>

    <!--<main class="site-main">-->
        <!--
            Hero
        -->
        <section id="hero" class="hero">
            <div class="hero__content">
                <h2 class="hero__title">Комплекс услуг<br> для электроснабжения частного дома</h2>
                <ol class="hero__list">
                    <li class="hero__item"><a href="<?php echo esc_url(home_url('/')); ?>price#documents">Получение технических условий</a> от электроснабжающих организаций</li>
                    <li class="hero__item"><a href="<?php echo esc_url(home_url('/')); ?>price#documents">Разработка и согласование документации</a>, необходимой для подключения к электричеству</li>
                    <li class="hero__item"><a href="<?php echo esc_url(home_url('/')); ?>price#indoor">Выполнение электромонтажных работ</a> (наружное электроснабжение и внутреннее электрооборудование)</li>
                    <li class="hero__item"><a href="<?php echo esc_url(home_url('/')); ?>price#documents">Ввод электроустановки в эксплуатацию</a></li>
                    <li class="hero__item"><a href="<?php echo esc_url(home_url('/')); ?>price#documents">Подготовка и подача документов</a> в сбытовую организацию для заключения договора электроснабжения</li>
                </ol>
                <div class="hero__order">
                    Данные услуги могут быть оказаны в комплексе или по отдельности
                    <a class="hero__button" href="<?php echo esc_url(home_url('/')); ?>order">Оставить заявку</a>
                </div>
            </div>
        </section>

        <!--
            Promo
        -->
        <section class="promotion">
            <div id="promo" class="fake-anchor"></div>
            <div class="wrapper">
                <div class="promotion__title">
                    Акция!
                </div>
                <div class="promotion__text">
                    &nbsp;При заказе полного комплекса услуг<br>—&nbsp;проект электроснабжения Вашего дома
                </div>
                <div class="promotion__free">
                    Бесплатно<sup>*</sup>
                </div>
                <a href="<?php echo esc_url(home_url('/')); ?>promo" class="promotion__button">Подробности акции</a>
            </div>
        </section>

        <!--
            Services
        -->
        <section class="site-section  site-section--grey">
            <div id="services" class="fake-anchor"></div>
            <header class="site-section__header">
                <div class="wrapper">
                    <h2 class="site-section__title">
                        Наши услуги
                    </h2>
                    <p class="site-section__subtitle">
                        Выполняем электроснабжение домов индивидуальных и многоквартирных, коммерческой недвижимости под ключ
                    </p>
                </div>
            </header>
            <div class="wrapper">
                <div class="service">
                    <div class="service__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/case.svg" alt="">
                    </div>
                    <div class="service__description">
                        <h3 class="service__title">
                            Получение ТУ
                        </h3>
                        <ul class="service__list">
                            <li class="service__item">
                                Расчет потребляемой электрической мощности и подача заявки на Технические Условия для техприсоединения к электросетям
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="service">
                    <div class="service__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>//img/icons/docs.svg" alt="">
                    </div>
                    <div class="service__description">
                        <h3 class="service__title">
                            Разрешительные документы
                        </h3>
                        <ul class="service__list">
                            <li class="service__item">
                                Получение и согласование акта выбора трассы ЛЭП;
                            </li>
                            <li class="service__item">
                                Разработка и согласование проекта электроснабжения;
                            </li>
                            <li class="service__item">
                                Согласование раскопок и открытие Ордера на раскопки.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="service">
                    <div class="service__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/plier.svg" alt="">
                    </div>
                    <div class="service__description">
                        <h3 class="service__title">
                            Электромонтажные работы
                        </h3>
                        <ul class="service__list">
                            <li class="service__item">
                                Строительство, реконструкция, ремонт, а также вынос из зоны строительства:
                                <ul class="service__list">
                                    <li class="service__item">
                                        Линий электропередач кабельных (КЛ) и воздушных (ВЛ) напряжением 0,4/6/10/15 кВ;
                                    </li>
                                    <li class="service__item">
                                        Столбовых трансформаторных подстанций (ТП) до 63 кВА, мачтовых ТП до 250 кВА, КТП до и свыше 630 кВА;
                                    </li>
                                </ul>
                            </li>
                            <li class="service__item">
                                Выполняем внутренний электромонтаж домов, зданий и сооружений (электрооборудование, электроосвещение), наружное освещение;
                            </li>
                            <li class="service__item">
                                Устройство электрооборудования промышленных объектов;
                            </li>
                            <li class="service__item">
                                Закупка материалов по оптовым ценам.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="service">
                    <div class="service__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/documents.svg" alt="">
                    </div>
                    <div class="service__description">
                        <h3 class="service__title">
                            Техдокументация
                        </h3>
                        <ul class="service__list">
                            <li class="service__item">
                                Техдокументация и электролаборатория
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="service">
                    <div class="service__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/engineer.svg" alt="">
                    </div>
                    <div class="service__description">
                        <h3 class="service__title">Сдача работ</h3>
                        <ul class="service__list">
                            <li class="service__item">
                                Сдача электромонтажных работ энергонадзорным органам;
                            </li>
                            <li class="service__item">
                                Ввод электроустановки в эксплуатацию;
                            </li>
                            <li class="service__item">
                                Получение договора на электроснабжение объекта.
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="button" href="<?php echo esc_url(home_url('/')); ?>/order">Оформить заявку </a>
            </div>
        </section>


        <!--
            Price section
        -->
        <section class="site-section  site-section--price">
            <div id="price" class="fake-anchor"></div>
            <header class="site-section__header">
                <div class="wrapper">
                    <h2 class="site-section__title">
                        Прайс на услуги
                    </h2>
                    <p class="site-section__subtitle">
                        Список основных услуг и их стоимость, для уточнения любых вопросов расчета общей суммы проектов обратитесь к нашему менеджеру
                    </p>
                </div>
            </header>

            <div class="price">
                <div class="price__header">
                    <!--<h2 class="price__title">
                        <small>Чем мы можем вам помочь?</small> Основные услуги
                    </h2>-->
                </div>
                <div class="price__body">


                    <?php
                        $counter = 0;
                        if(have_posts()) {
                            while(have_posts() && $counter < 3) {
                                the_post();
                                the_content();
                            }
                        }
                    ?>

                    <div class="price-item price-item--border-top">
                        <div class="min-price">
                            <h3 class="min-price__title">
                                Минимальная стоимость
                            </h3>
                            <p class="min-price__subtitle">
                                Электромонтажных работ в городе Калининграде
                            </p>
                            <div class="min-price__price">
                                1 500 рублей
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
            Portfolio
        -->
        <section class="site-section site-section--grey">
            <div id="folio" class="fake-anchor"></div>
            <header class="site-section__header">
                <div class="wrapper">
                    <h2 class="site-section__title">
                        Наши работы
                    </h2>
                    <p class="site-section__subtitle">
                        Примеры работ выполненых нашей компанией.
                    </p>
                </div>
            </header>

            <div class="gallery">
            <?php echo photo_gallery(5); ?>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="wrapper">
            <div id="contacts" class="site-footer__contacts">
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/map.svg" alt="">
                    </div>
                    <div class="contact-item__content">
                        <h3 class="contact-item__title">
                            Схема проезда
                        </h3>
                        <p class="contact-item__text">
                            г. Калининград, ул. Больничная 42, БЦ «Альянс-2» 3 этаж, офис 35
                        </p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/clock.svg" alt="">
                    </div>
                    <div class="contact-item__content">
                        <h3 class="contact-item__title">
                            Часы работы
                        </h3>
                        <p class="contact-item__text">
                            Пн-Пт: 9<sup>00</sup> – 18<sup>00</sup>
                        </p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/email.svg" alt="">
                    </div>
                    <div class="contact-item__content">
                        <h3 class="contact-item__title">
                            Электропочта
                        </h3>
                        <p class="contact-item__text">
                            <a href="mailto:rcc39@mail.ru">rcc39@mail.ru</a>
                        </p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item__icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/phone.svg" alt="">
                    </div>
                    <div class="contact-item__content">
                        <h3 class="contact-item__title">
                            Телефон
                        </h3>
                        <p class="contact-item__text">
                            <a href="tel:+74012403900">+7 (4012) 40–39–00</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="site-footer__map">
                <a href="https://2gis.ru/kaliningrad/query/%D0%A0%D0%A1%D0%9A%2C%20%D0%9E%D0%9E%D0%9E/firm/5630028815352441?queryState=center%2F20.501926%2C54.711771%2Fzoom%2F18" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map.png" alt="rcc39 map"></a>
            </div>
            <div id="feedback" class="site-footer__feedback-form">
                <form method="POST" action="https://formspree.io/39rcc39@gmail.com" class="feedback-form">
                    <div class="feedback-form__header">
                        <div class="feedback-form__icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/feedback.svg" alt="">
                        </div>
                        <div class="feedback-form__subtitle">
                            Форма обратной связи
                        </div>
                        <h2 class="feedback-form__title">
                            Ваши отзывы
                        </h2>
                    </div>
                    <fieldset class="feedback-form__fieldset">
                        <input class="feedback-form__input" name="name" type="text" placeholder="Ваше Имя">
                        <input class="feedback-form__input" name="email" type="email" placeholder="Электропочта">
                        <input class="feedback-form__input" name="topic" type="text" placeholder="Тема">
                        <textarea class="feedback-form__textarea" name="message" id="" cols="30" rows="5" placeholder="Сообщение"></textarea>
                        <input class="feedback-form__submit" type="submit" value="Отправить сообщение"></input>
                        <p class="feedback-form__policy">
                        Нажимая «отправить сообщение» вы соглашаетесь с 
                        <a href="<?php echo esc_url(home_url('/'));?>policy">политикой конфиденциальности</a></p>
                    </fieldset>
                </form>
            </div>
        </div>

        <div class="wrapper">
            <div class="footer-logo">
                RCC<span>39</span>
            </div>

            <div class="footer-copyrights">
                © 2017 RCC39. Все права защищены <br>
                With Love by <a href="http://www.katzcantread.com/">Katz Can’t Read</a>
                <!-- Google Code for 5+ &#1084;&#1080;&#1085;&#1091;&#1090; &#1085;&#1072; &#1089;&#1072;&#1081;&#1090;&#1077; Conversion Page -->
                <script type="text/javascript">
                /* <![CDATA[ */
                var google_conversion_id = 857276055;
                var google_conversion_language = "en";
                var google_conversion_format = "3";
                var google_conversion_color = "ffffff";
                var google_conversion_label = "SoXeCLDw6W8Ql_3jmAM";
                var google_remarketing_only = false;
                /* ]]> */
                </script>
                <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
                </script>
                <noscript>
                <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/857276055/?label=SoXeCLDw6W8Ql_3jmAM&amp;guid=ON&amp;script=0"/>
                </div>
                </noscript>
            </div>
        </div>
    </footer>

    <script src="<?php echo get_stylesheet_directory_uri()?>/App.js"></script>
    <!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter43772214 = new Ya.Metrika({ id:43772214, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/43772214" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
    <?php wp_footer(); ?>
</body>

</html>