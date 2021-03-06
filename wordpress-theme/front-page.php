<?php get_header(); ?>

<!-- ▼▼▼ 読み込みファイル（ページ専用） ▼▼▼ -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css">
<!-- ▲▲▲ 読み込みファイル（ページ専用） ▲▲▲ -->

<!-- ▼▼▼ ページ内容 ▼▼▼ -->
<div id="js-layout-content" class="layout__content">
  <main>
    <!-- ▼▼▼ ヒーロー ▼▼▼ -->
    <div class="top-hero">
      <div class="container">
        <div class="top-hero__title">
          <p class="top-hero__title-line">タイトルが入ります</p>
          <p class="top-hero__title-line">サブタイトルが入ります</p>
        </div>
        <ul class="top-hero__imgs">
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
          <li class="top-hero__img"></li>
        </ul>
      </div>
    </div>
    <!-- ▲▲▲ ヒーロー ▲▲▲ -->
    <!-- ▼▼▼ ○○○○について ▼▼▼ -->
    <div class="container --single pt-5 pb-5 js-top-anim">
      <h2 class="heading"> 見出しが入ります <span class="heading__decoration"></span>
      </h2>
      <div class="content">
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
      <div class="text-center mt-3">
        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="circle-button">
          <span class="circle-button__text">○○○○について</span>
          <span class="circle-button__circle"></span>
        </a>
      </div>
      <div class="top-about__imgs mt-3">
        <div class="top-about__img">
          <img src="https://picsum.photos/id/237/300/300" alt>
        </div>
        <div class="top-about__img">
          <img src="https://picsum.photos/id/238/300/300" alt>
        </div>
      </div>
    </div>
    <!-- ▲▲▲ ○○○○について ▲▲▲ -->
    <!-- ▼▼▼ メニュー ▼▼▼ -->
    <div class="top-menu">
      <div class="container --single js-top-anim">
        <div class="row">
          <div class="col-md-6">
            <h2 class="top-menu__heading">見出しが入ります</h2>
            <div class="content mt-2">
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
              <div class="text-center text-md-left mt-2">
                <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="circle-button --light">
                  <span class="circle-button__text">メニュー</span>
                  <span class="circle-button__circle"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="top-menu__img">
              <img src="https://picsum.photos/id/239/450/450" alt>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ▲▲▲ メニュー ▲▲▲ -->
    <!-- ▼▼▼ 店内設備 ▼▼▼ -->
    <div class="container --single pt-5 pb-5 js-top-anim">
      <h2 class="heading"> 見出しが入ります <span class="heading__decoration"></span>
      </h2>
      <div class="content">
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
      <div class="text-center mt-3">
        <a href="<?php echo esc_url(home_url('/cafe/')); ?>" class="circle-button">
          <span class="circle-button__text">店内設備</span>
          <span class="circle-button__circle"></span>
        </a>
      </div>
    </div>
    <!-- ▲▲▲ 店内設備 ▲▲▲ -->
    <!-- ▼▼▼ お知らせ ▼▼▼ -->
    <div class="container --single pt-5 pb-5 js-top-anim">
      <h2 class="heading"> お知らせ <span class="heading__decoration"></span>
      </h2>
      <!-- ▼▼▼ ニュース一覧 ▼▼▼ -->
      <ul class="news-list">
        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
          );
          $new_query = new WP_Query($args);
          if ($new_query->have_posts()) :
        ?>
          <?php
            while($new_query->have_posts()) :
            $new_query->the_post();
          ?>
            <li class="news-list__item">
              <a href="<?php the_permalink(); ?>" class="news-list__link">
                <span class="news-list__info">
                  <span class="news-list__date"><?php echo get_the_date(); ?></span>
                  <span class="news-list__category"><?php echo the_field('news_category'); ?></span>
                </span>
                <span class="news-list__text"><?php the_title(); ?></span>
                <span class="news-list__icon">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </li>
          <?php
            endwhile;
            wp_reset_postdata();
          ?>
        <?php endif; ?>
      </ul>
      <!-- ▲▲▲ ニュース一覧 ▲▲▲ -->
      <div class="text-center mt-3">
        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="circle-button">
          <span class="circle-button__text">お知らせ一覧</span>
          <span class="circle-button__circle"></span>
        </a>
      </div>
    </div>
    <!-- ▲▲▲ お知らせ ▲▲▲ -->
    <!-- ▼▼▼ 採用情報 ▼▼▼ -->
    <div class="container --single pt-5 pb-5 js-top-anim">
      <div class="recruit-bnr">
        <div class="recruit-bnr__heading">採用情報</div>
        <div class="recruit-bnr__button">
          <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="button --white --rounded">もっと見る</a>
        </div>
      </div>
    </div>
    <!-- ▲▲▲ 採用情報 ▲▲▲ -->
  </main>
  <!-- ▼▼▼ トップへ戻る ▼▼▼ -->
  <div id="js-go-top" class="go-top">
    <button class="go-top__button">
      <i class="fas fa-arrow-up"></i>
    </button>
  </div>
  <!-- ▲▲▲ トップへ戻る ▲▲▲ -->
</div>
<!-- ▲▲▲ ページ内容 ▲▲▲ -->

<!-- ▼▼▼ 読み込みファイル（ページ専用） ▼▼▼ -->
<script src="<?php echo get_template_directory_uri(); ?>/js/top.js"></script>
<!-- ▲▲▲ 読み込みファイル（ページ専用） ▲▲▲ -->

<?php get_footer();