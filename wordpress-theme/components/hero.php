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
  <div class="hero__bg">
    <img src="https://picsum.photos/id/1016/1200/200" alt>
  </div>
</div>
<!-- ▲▲▲ ヒーロー ▲▲▲ -->