<!-- ▼▼▼ パンくず ▼▼▼ -->
<div class="breadcrumb">
  <div class="container">
    <ul class="breadcrumb__items">
      <li class="breadcrumb__item">
        <a href="<?php echo home_url(); ?>" class="breadcrumb__link">HOME</a>
      </li>
      <?php
        $parent_id = $post->post_parent;
        if ($parent_id) :
      ?>
        <li class="breadcrumb__item">
          <a href="<?php echo get_page_link($parent_id); ?>" class="breadcrumb__link"><?php echo get_the_title($parent_id); ?></a>
        </li>
      <?php elseif (is_single()) : ?>
        <li class="breadcrumb__item">
          <a href="<?php echo esc_url(home_url('/news/')); ?>" class="breadcrumb__link">お知らせ</a>
        </li>
      <?php endif; ?>
      <li class="breadcrumb__item">
        <span class="breadcrumb__link --active"><?php the_title(); ?></span>
      </li>
    </ul>
  </div>
</div>
<!-- ▲▲▲ パンくず ▲▲▲ -->