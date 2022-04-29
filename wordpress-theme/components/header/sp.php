<?php
$NAV_ITEMS = array(
  array(
    'id' => 'about',
    'link' => '/about.html',
    'label' => '○○○○について',
  ),
  array(
    'id' => 'menu',
    'link' => '/menu.html',
    'label' => 'メニュー',
  ),
  array(
    'id' => 'cafe',
    'link' => '/cafe.html',
    'label' => '店内設備',
  ),
  array(
    'id' => 'news',
    'link' => '/news/',
    'label' => 'お知らせ',
  ),
  array(
    'id' => 'recruit',
    'link' => '/recruit.html',
    'label' => '採用情報',
  ),
);
?>

<!-- ▼▼▼ ヘッダー（SP） ▼▼▼ -->
<div class="header-sp__wrapper">
  <div class="header-sp">
    <div class="header-sp__logo">
      <!-- <span href="/">社名○○○○</span> -->
      <a href="/">社名○○○○</a>
    </div>
    <button id="js-header-sp-button" class="header-sp__button">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
  <div id="js-header-sp-menu" class="header-sp__menu">
    <div class="header-sp__menu-content">
      <ul class="header-sp__menu-nav-items">
        <?php foreach($NAV_ITEMS as $ITEM): ?>
          <li class="header-sp__menu-nav-item">
            <a class="link --current" href="<?php echo $ITEM['link']; ?>"><?php echo $ITEM['label']; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
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