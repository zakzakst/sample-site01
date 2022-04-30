<?php get_header(); ?>

<div id="js-layout-content" class="layout__content" <?php post_class(); ?>>
  <?php include('components/hero.php'); ?>
  <?php include('components/breadcrumb.php'); ?>
  <div class="layout__container --has-aside container pt-5 pb-5">
    <main class="layout__main">
      <?php if (have_posts()) : ?>
        <ul class="news-list">
          <?php while (have_posts()) : the_post(); ?>
            <li class="news-list__item">
              <a href="<?php the_permalink(); ?>" class="news-list__link">
                <span class="news-list__info">
                  <time class="news-list__date"><?php echo get_the_date(); ?></time>
                  <span class="news-list__category"><?php echo the_field('news_category'); ?></span>
                </span>
                <span class="news-list__text"><?php the_title(); ?></span>
                <span class="news-list__icon">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <h2>投稿が見つかりません。</h2>
      <?php endif; ?>
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