<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div id="js-layout-content" class="layout__content" <?php post_class(); ?>>
      <?php include('components/hero.php'); ?>
      <?php include('components/breadcrumb.php'); ?>
      <div class="container --single pt-5 pb-5">
        <main>
          <?php the_content(); ?>
        </main>
      </div>
      <?php include('components/go-top.php'); ?>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <h2>投稿が見つかりません。</h2>
<?php endif; ?>

<?php get_footer();