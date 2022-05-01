<!-- ▼▼▼ サイドメニュー ▼▼▼ -->
<!-- <div class="aside-menu">
  <ul class="aside-menu__items">
    <li class="aside-menu__item">
      <a href="#" class="aside-menu__link">おすすめリンク1</a>
    </li>
    <li class="aside-menu__item">
      <a href="#" class="aside-menu__link">おすすめリンク2</a>
    </li>
    <li class="aside-menu__item">
      <a href="#" class="aside-menu__link">おすすめリンク3</a>
    </li>
  </ul>
</div> -->
<?php if (is_active_sidebar('sidebar')) : ?>
  <ul class="widgets">
    <?php dynamic_sidebar('sidebar'); ?>
  </ul>
<?php endif; ?>
<!-- ▲▲▲ サイドメニュー ▲▲▲ -->