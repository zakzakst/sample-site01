<?php get_header(); ?>

<div id="js-layout-content" class="layout__content">
  <?php include('components/hero.php'); ?>
  <?php include('components/breadcrumb.php'); ?>
  <!-- ▼▼▼ ヒーロー ▼▼▼ -->
  <!-- <div class="hero">
    <div class="hero__text">
      <div class="container">
        <h1 class="hero__title">404</h1>
        <p class="hero__sub-title">NOT FOUND</p>
      </div>
    </div>
    <div class="hero__bg --has-img">
      <img src="https://picsum.photos/id/1065/1200/200" alt>
    </div>
  </div> -->
  <!-- ▲▲▲ ヒーロー ▲▲▲ -->
  <!-- ▼▼▼ パンくず ▼▼▼ -->
  <!-- <div class="breadcrumb">
    <div class="container">
      <ul class="breadcrumb__items">
        <li class="breadcrumb__item">
          <a href="/" class="breadcrumb__link">トップ</a>
        </li>
        <li class="breadcrumb__item">
          <span class="breadcrumb__link --active">ページが見つかりませんでした</span>
        </li>
      </ul>
    </div>
  </div> -->
  <!-- ▲▲▲ パンくず ▲▲▲ -->
  <div class="container --single pt-5 pb-5">
    <main>
      <section>
        <h2 class="heading"> ページが見つかりませんでした <span class="heading__decoration"></span>
        </h2>
        <div class="content">
          <p>申し訳ありません。お探しのページが見つかりませんでした。一時的にアクセスできない状況にあるか、移動・削除された可能性があります。</p>
        </div>
        <div class="button__container mt-4">
          <a href="/" class="button --accent --rounded">TOPに戻る</a>
        </div>
      </section>
    </main>
  </div>
  <?php include('components/go-top.php'); ?>
</div>

<?php get_footer();