<!-- ▼▼▼ ヘッダー（PC） ▼▼▼ -->
<header class="header">
  <div class="header__logo">
    <?php if (is_home() || is_front_page()) : ?>
      <h1>社名○○○○</h1>
    <?php else : ?>
      <a href="/">社名○○○○</a>
    <?php endif; ?>
  </div>
  <?php
    $args = array(
      'theme_location' => 'header-nav',
      'container_class' => 'header-nav__container',
      'menu_class' => 'header-nav__menu',
    );
    wp_nav_menu($args);
  ?>
  <div class="header__form">
    <!-- <a class="button --secondary --rounded --has-icon">
      <span><i class="fas fa-phone button__icon"></i>00-0000-0000</span>
    </a> -->
    <a href="/contact/" class="button --accent --rounded --has-icon">
      <span><i class="fas fa-envelope button__icon"></i>お問い合わせ</span>
    </a>
  </div>
</header>
<!-- ▲▲▲ ヘッダー（PC） ▲▲▲ -->