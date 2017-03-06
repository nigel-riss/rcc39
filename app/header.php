<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>

<body>
    <a id="top" href="#"></a>
    <header id="site-header" class="site-header">
        <div class="wrapper">
            <div class="site-header__logo-n-title">
                <div class="site-header__logo">RCC<span>39</span></div>
                <h1 class="site-header__title">Электроснабжение<br> частных домов под ключ</h1>
            </div>
            <div class="site-header__contacts">
                <div class="site-header__phone"><a href="tel:+74012403900"><small>+7 (4012)</small> 40-39-00</a></div>
                <a class="site-header__button" href="<?php echo esc_url(home_url('/')); ?>order">Оставить заявку</a>
            </div>
        </div>
        <div class="site-header__menu-icon">
            <div class="site-header__menu-icon__middle"></div>
        </div>
        <div class="site-header__menu-content">
            <nav class="main-nav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('')); ?>#top">Главная</a></li>
                    <li><a class="special" href="<?php echo esc_url(home_url('')); ?>#promo">Акция</a></li>
                    <li><a href="<?php echo esc_url(home_url('')); ?>#services">Услуги</a></li>
                    <li><a href="<?php echo esc_url(home_url('')); ?>#price">Прайс</a></li>
                    <li><a href="<?php echo esc_url(home_url('')); ?>#folio">Наши работы</a></li>
                    <li><a href="<?php echo esc_url(home_url('')); ?>#feedback">Отзыв</a></li>
                    <li><a href="<?php echo esc_url(home_url('')); ?>#contacts">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="site-main">