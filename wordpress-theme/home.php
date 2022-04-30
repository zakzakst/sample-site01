<?php get_header(); ?>

<div id="js-layout-content" class="layout__content" <?php post_class(); ?>>
  <?php include('components/hero.php'); ?>
  <?php include('components/breadcrumb.php'); ?>
  <div class="layout__container --has-aside container pt-5 pb-5">
    <main class="layout__main">
      <!-- ▼▼▼ ニュース一覧 ▼▼▼ -->
      <ul class="news-list">
        <li class="news-list__item">
          <a href="/news/detail.html" class="news-list__link">
            <span class="news-list__info">
              <span class="news-list__date">2022.01.03</span>
              <span class="news-list__category">お知らせ</span>
            </span>
            <span class="news-list__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</span>
            <span class="news-list__icon">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </li>
        <li class="news-list__item">
          <a href="/news/detail.html" class="news-list__link">
            <span class="news-list__info">
              <span class="news-list__date">2022.01.02</span>
              <span class="news-list__category">イベント</span>
            </span>
            <span class="news-list__text">テキストが入ります。テキストが入ります。テキストが入ります。</span>
            <span class="news-list__icon">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </li>
        <li class="news-list__item">
          <a href="/news/detail.html" class="news-list__link">
            <span class="news-list__info">
              <span class="news-list__date">2022.01.01</span>
              <span class="news-list__category">お知らせ</span>
            </span>
            <span class="news-list__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</span>
            <span class="news-list__icon">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </li>
        <li class="news-list__item">
          <a href="/news/detail.html" class="news-list__link">
            <span class="news-list__info">
              <span class="news-list__date">2022.01.03</span>
              <span class="news-list__category">お知らせ</span>
            </span>
            <span class="news-list__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</span>
            <span class="news-list__icon">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </li>
        <li class="news-list__item">
          <a href="/news/detail.html" class="news-list__link">
            <span class="news-list__info">
              <span class="news-list__date">2022.01.02</span>
              <span class="news-list__category">イベント</span>
            </span>
            <span class="news-list__text">テキストが入ります。テキストが入ります。テキストが入ります。</span>
            <span class="news-list__icon">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </li>
        <li class="news-list__item">
          <a href="/news/detail.html" class="news-list__link">
            <span class="news-list__info">
              <span class="news-list__date">2022.01.01</span>
              <span class="news-list__category">お知らせ</span>
            </span>
            <span class="news-list__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</span>
            <span class="news-list__icon">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </li>
        <li class="news-list__item">
          <a href="/news/detail.html" class="news-list__link">
            <span class="news-list__info">
              <span class="news-list__date">2022.01.03</span>
              <span class="news-list__category">お知らせ</span>
            </span>
            <span class="news-list__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</span>
            <span class="news-list__icon">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </li>
        <li class="news-list__item">
          <a href="/news/detail.html" class="news-list__link">
            <span class="news-list__info">
              <span class="news-list__date">2022.01.02</span>
              <span class="news-list__category">イベント</span>
            </span>
            <span class="news-list__text">テキストが入ります。テキストが入ります。テキストが入ります。</span>
            <span class="news-list__icon">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </li>
        <li class="news-list__item">
          <a href="/news/detail.html" class="news-list__link">
            <span class="news-list__info">
              <span class="news-list__date">2022.01.01</span>
              <span class="news-list__category">お知らせ</span>
            </span>
            <span class="news-list__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</span>
            <span class="news-list__icon">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </li>
        <li class="news-list__item">
          <a href="/news/detail.html" class="news-list__link">
            <span class="news-list__info">
              <span class="news-list__date">2022.01.01</span>
              <span class="news-list__category">お知らせ</span>
            </span>
            <span class="news-list__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</span>
            <span class="news-list__icon">
              <i class="fas fa-angle-right"></i>
            </span>
          </a>
        </li>
      </ul>
      <!-- ▲▲▲ ニュース一覧 ▲▲▲ -->
    </main>
    <aside class="layout__aside">
      <div class="layout__aside-content">
        <?php include('components/aside/aside-menu.php'); ?>
      </div>
    </aside>
  </div>
  <?php include('components/go-top.php'); ?>
</div>

<?php get_footer();