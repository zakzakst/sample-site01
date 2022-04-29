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

<!-- ▼▼▼ ヘッダー（PC） ▼▼▼ -->
<header class="header">
  <div class="header__logo">
    <!-- <h1>社名○○○○</h1> -->
    <a href="/">社名○○○○</a>
  </div>
  <ul class="header__nav-items">
    <?php foreach ($NAV_ITEMS as $ITEM) : ?>
      <li class="header__nav-item">
        <a class="link --current" href="<?php echo $ITEM['link']; ?>"><?php echo $ITEM['label']; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
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