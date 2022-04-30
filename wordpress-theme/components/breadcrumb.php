<!-- ▼▼▼ パンくず ▼▼▼ -->
<div class="breadcrumb">
  <div class="container">
    <ul class="breadcrumb__items">
      <li class="breadcrumb__item">
        <a href="<?php echo home_url(); ?>" class="breadcrumb__link">HOME</a>
      </li>
      <?php if (is_404()) : ?>
        <li class="breadcrumb__item">
          <span class="breadcrumb__link --active">ページが見つかりませんでした</span>
        </li>
      <?php else : ?>
        <?php if ($post->post_parent) : ?>
          <li class="breadcrumb__item">
            <a href="<?php echo get_page_link($post->post_parent); ?>" class="breadcrumb__link"><?php echo get_the_title($post->post_parent); ?></a>
          </li>
        <?php elseif (is_single()) : ?>
          <li class="breadcrumb__item">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="breadcrumb__link">お知らせ</a>
          </li>
        <?php endif; ?>
        <li class="breadcrumb__item">
          <span class="breadcrumb__link --active"><?php the_title(); ?></span>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</div>
<!-- ▲▲▲ パンくず ▲▲▲ -->