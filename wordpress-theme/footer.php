<?php
$SNS_ITEMS = array(
  array(
    'href' => '#',
    'icon' => 'fab fa-facebook-f',
  ),
  array(
    'href' => '#',
    'icon' => 'fab fa-instagram',
  ),
  array(
    'href' => '#',
    'icon' => 'fab fa-twitter',
  ),
);

$TABLE_ITEMS = array(
  array(
    'term' => '所在地',
    'definition' => '東京都○○区○○町 0-00-00',
  ),
  array(
    'term' => 'TEL',
    'definition' => '00-1234-5678',
  ),
  array(
    'term' => 'MAIL',
    'definition' => 'xxxx@co.jp',
  ),
);

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

<!-- ▼▼▼ フッター ▼▼▼ -->
<footer id="js-footer" class="footer">
  <div class="footer__content-wrapper">
    <div class="footer__content">
      <div class="footer__content-map">
        <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.0459159529737!2d139.80315461529614!3d35.74967618017841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e4fa6644e8d%3A0x6bc4e612ab55d171!2z5YyX5Y2D5L2P6aeF!5e0!3m2!1sja!2sjp!4v1611569782550!5m2!1sja!2sjp" tabindex="0" width="100%"></iframe>
      </div>
      <div class="footer__content-info">
        <ul class="footer__content-sns">
          <?php foreach($SNS_ITEMS as $ITEM): ?>
            <li>
              <!-- <a href="<?php echo $ITEM->href; ?>" class="footer__content-sns-link">
                <i class="<?php echo $ITEM->icon; ?>"></i>
              </a> -->
            </li>
          <?php endforeach; ?>
        </ul>
        <dl class="footer__content-table">
          <?php foreach($TABLE_ITEMS as $ITEM): ?>
            <!-- <dt><?php echo $ITEM->term; ?></dt>
            <dd><?php echo $ITEM->definition; ?></dd> -->
          <?php endforeach; ?>
        </dl>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <ul class="footer__nav-items">
        <?php foreach($NAV_ITEMS as $ITEM): ?>
          <li class="footer__nav-item">
            <!-- <a href="<?php echo $ITEM->link; ?>"><?php echo $ITEM->label; ?></a> -->
          </li>
        <?php endforeach; ?>
      </ul>
      <p class="footer__copy">Copyright &copy; XXXXX <?php echo date('Y'); ?>. All Rights Reserved.</p>
    </div>
  </div>
</footer>
<!-- ▲▲▲ フッター ▲▲▲ -->

<?php wp_footer(); ?>
</body>
</html>