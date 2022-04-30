<?php get_header(); ?>

<div id="js-layout-content" class="layout__content">
  <?php include('components/hero.php'); ?>
  <?php include('components/breadcrumb.php'); ?>
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