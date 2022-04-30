<!-- ▼▼▼ ヒーロー ▼▼▼ -->
<div class="hero">
  <div class="hero__text">
    <div class="container">
      <h1 class="hero__title"><?php the_title(); ?></h1>
      <?php if (get_field('sub_title')) : ?>
        <p class="hero__sub-title"><?php echo the_field('sub_title'); ?></p>
      <?php endif; ?>
    </div>
  </div>
  <?php if (is_home()) : ?>
    <div class="hero__bg --has-img">
      <img src="https://picsum.photos/id/1031/1200/200" alt="">
    </div>
  <?php elseif (get_field('hero_img')) : ?>
    <div class="hero__bg --has-img">
      <img src="<?php echo the_field('hero_img'); ?>" alt="">
    </div>
  <?php else : ?>
    <div class="hero__bg"></div>
  <?php endif; ?>
</div>
<!-- ▲▲▲ ヒーロー ▲▲▲ -->