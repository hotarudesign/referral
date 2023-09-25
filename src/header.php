<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Unbounded:wght@500&display=swap" rel="stylesheet">
    <title>test_wp</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <picture>
                        <source srcset='<?php echo ImgPath; ?>/webp/logo.webp' type='image/webp'>
                        <img src='<?php echo ImgPath; ?>/logo.png' alt='Kashiwabara Corporation Referral Recruiting Site'>
                    </picture>
                </a>
            </h1>
            <nav class="g-nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'g-nav',
                        'container' => '',
                        'menu_class' => 'g-nav__list',
                    )
                );
                ?>
            </nav>
            <a href="https://thkd5375.talent-p.net/EntryFormMng/Entryform?url_token=b71d970ffcf54e6c9b2478287e7757e1" target="_blank" rel="noopener noreferrer" class="header__btn">エントリー</a>
            <button class="toggle-btn" id="toggleBtn"><span></span><span></span><span></span></button>
            <div class="slide-menu" id="slideMenu">
                <div class="slide-menu__head">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-sp">
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/logo-slide.webp' type='image/webp'>
                            <img src='<?php echo ImgPath; ?>/logo-slide.png' alt='Kashiwabara Corporation Referral Recruiting Site'>
                        </picture>
                    </a>
                </div>
                <nav class="g-nav-sp">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'g-nav',
                            'container' => '',
                            'menu_class' => 'g-nav__list',
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </header>