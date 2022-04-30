<!-- ▼▼▼ ヘッダー（SP） ▼▼▼ -->
<div class="header-sp__wrapper">
  <div class="header-sp">
    <div class="header-sp__logo">
      <?php if (is_front_page()) : ?>
        <span>社名○○○○</span>
      <?php else : ?>
        <a href="/">社名○○○○</a>
      <?php endif; ?>
    </div>
    <button id="js-header-sp-button" class="header-sp__button">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
  <div id="js-header-sp-menu" class="header-sp__menu">
    <div class="header-sp__menu-content">
      <?php
        $args = array(
          'theme_location' => 'header-nav',
          'container_class' => 'header-nav__container --sp',
          'menu_class' => 'header-nav__menu',
        );
        wp_nav_menu($args);
      ?>
      <div class="header-sp__menu-form">
        <a href="tel:0012345678" class="button --secondary --rounded --has-icon">
          <span><i class="fas fa-phone button__icon"></i>00-1234-5678</span>
        </a>
        <a href="/contact/" class="button --accent --rounded --has-icon">
          <span><i class="fas fa-envelope button__icon"></i>お問い合わせ</span>
        </a>
      </div>
    </div>
    <div id="js-header-sp-menu-bg" class="header-sp__menu-bg"></div>
  </div>
</div>
<!-- ▲▲▲ ヘッダー（SP） ▲▲▲ -->