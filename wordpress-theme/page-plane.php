<?php
/*
Template Name: プレーン
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div id="js-layout-content" class="layout__content" <?php post_class(); ?>>
      <main>
        <?php the_content(); ?>
      </main>
      <?php include('components/go-top.php'); ?>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <h2>投稿が見つかりません。</h2>
<?php endif; ?>

<?php get_footer();