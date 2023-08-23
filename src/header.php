<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test_wp</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
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
    </header>