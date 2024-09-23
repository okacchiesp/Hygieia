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
  <nav class="breadcrumbs breadcrumbs--top-margin">
    <div class="breadcrumb__inner inner">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div>
  </nav>
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
    <section class="about__gallery gallery">
      <div class="about__gallery__inner inner">
        <div class="gallery__header section-header">
          <p class="section-header__title">Gallery</p>
          <h2 class="section-header__subtitle">フォト</h2>
        </div>
        <div class="gallery__images">
          <?php
          $gallery_images = SCF::get('gallery-images');
          if ($gallery_images && is_array($gallery_images)) :
            foreach ($gallery_images as $image) :
              $image_url = wp_get_attachment_image_url($image['gallery-image'], 'full');
              if ($image_url) :
          ?>
          <a href="<?php echo esc_url($image_url); ?>" class="gallery__image js-modal">
            <img src="<?php echo esc_url($image_url); ?>" alt=""></a>
          <?php
              endif;
            endforeach;
          endif;
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
  </section>
  <?php get_footer(); ?>