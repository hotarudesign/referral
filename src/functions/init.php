<?php
// imageパス
define('ImgPath', get_template_directory_uri() . "/assets/images");

// ナビメニューの追加
function theme_setup()
{
    //メニュー
    register_nav_menus(
        array(
            'g-nav' => 'ヘッダーメニュー',
            'f-nav' => 'フッターメニュー',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');

// interviewのエディター非表示
add_action('init', function () {
    remove_post_type_support('interview', 'editor');
}, 99);

add_action('init', function () {
    remove_post_type_support('news', 'editor');
}, 99);

add_action('init', function () {
    remove_post_type_support('reqruit', 'editor');
}, 99);

// タームの並び替え
function taxonomy_orderby_description($orderby, $args)
{

    if ($args['orderby'] == 'description') {
        $orderby = 'tt.description';
    }
    return $orderby;
}
add_filter('get_terms_orderby', 'taxonomy_orderby_description', 10, 2);
