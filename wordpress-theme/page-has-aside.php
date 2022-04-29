<?php
/*
Template Name: サイドカラム付き
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <div id="js-layout-content" class="layout__content" <?php post_class(); ?>>
      <?php include('components/hero.php'); ?>
      <?php include('components/breadcrumb.php'); ?>
      <div class="layout__container --has-aside container pt-5 pb-5">
        <main class="layout__main">
          <?php the_content(); ?>
        </main>
        <aside class="layout__aside">
          <div class="layout__aside-content">
            <?php include('components/aside/aside-menu.php'); ?>
          </div>
        </aside>
      </div>
      <?php include('components/go-top.php'); ?>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <h2>投稿が見つかりません。</h2>
<?php endif; ?>

<?php get_footer();