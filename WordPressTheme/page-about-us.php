<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">About us</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri('/assets/images/about/about-img.jpg'); ?>" alt="シーサーの写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri('/assets/images/about/about-img_sp.jpg'); ?>" alt="シーサーの写真" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <section class="about about--no-icon about--top-margin page-body">
    <div class="about__inner inner">
      <div class="about__contents about-pc">
        <div class="about__images">
          <div class="about__image">
            <img src="<?php echo get_theme_file_uri('/assets/images/top/about_2.jpg'); ?>" alt="シーサーの写真" />
          </div>
          <div class="about__image">
            <img src="<?php echo get_theme_file_uri('/assets/images/top/about_1.jpg'); ?>" alt="黄色と黒の魚の写真" />
          </div>
        </div>
        <div class="about__content">
          <h2 class="about__title">Dive into<br />the Ocean</h2>
          <div class="about__body">
            <p class="about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </div>
      </div>
      <div class="about-sp">
        <div class="about-sp__image">
          <img src="<?php echo get_theme_file_uri('/assets/images/top/about_1.jpg'); ?>" alt="黄色と黒の魚の写真" />
        </div>
        <p class="about-sp__title">Dive into<br />the Ocean</p>
        <div class="about-sp__body">
          <p class="about-sp__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
    </div>
    <?php
    $gallery_images = SCF::get('gallery-images');
    if (!empty($gallery_images) && is_array($gallery_images)):
      $check = false;
      foreach ($gallery_images as $item) {
        if (!empty($item['gallery-image'])) {
          $check = true;
          break;
        }
      }
    endif; ?>
    <?php if ($check): ?>
    <section class="about__gallery gallery">
      <div class="about__gallery__inner inner">
        <div class="gallery__header section-header">
          <p class="section-header__title">Gallery</p>
          <h2 class="section-header__subtitle">フォト</h2>
        </div>
        <div class="gallery__images">
          <?php foreach ($gallery_images as $image) :
              $image_url = wp_get_attachment_image_url($image['gallery-image'], 'full');
              $text = $image['image_description'];
              if ($image_url) :
            ?>
          <a href="<?php echo esc_url($image_url); ?>" class="gallery__image js-modal">
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo $text; ?>"></a>
          <?php
              endif;
            endforeach;
            ?>
          <div id="modal" class="gallery__modal">
            <span class="gallery__close">&times;</span>
            <div class="gallery__content">
              <img id="modal-image" src="" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
  </section>
  <?php get_footer(); ?>