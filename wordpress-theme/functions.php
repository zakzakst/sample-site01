<?php
add_theme_support( 'title-tag' );
remove_filter('the_content', 'wpautop');

function add_menus() {
  register_nav_menus(array(
    'header-nav' => 'ヘッダーナビゲーション',
    'footer-nav' => 'フッターナビゲーション',
  ));
}

add_action('after_setup_theme', 'add_menus');