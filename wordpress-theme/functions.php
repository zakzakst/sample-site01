<?php
add_theme_support( 'title-tag' );
remove_filter('the_content', 'wpautop');

// メニューの追加
function add_menus() {
  register_nav_menus(array(
    'header-nav' => 'ヘッダーナビゲーション',
    'footer-nav' => 'フッターナビゲーション',
  ));
}
add_action('after_setup_theme', 'add_menus');

// ページネーションのカスタマイズ
function custom_pagination_html($template) {
  $template = '
  <div class="pagination__items mt-6">
    %3$s
  </div>';
  return $template;
}
add_filter('navigation_markup_template','custom_pagination_html');

// ウィジェットの設定
function add_widget_area() {
  register_sidebar(array(
    'id' => 'sidebar',
    'name' => 'サイドバー',
    'description' => 'サイドバーに表示する内容',
  ));
}
add_action('widgets_init', 'add_widget_area');