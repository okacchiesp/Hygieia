<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Company</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri('/assets/images/company/company.jpg'); ?>" alt="オフィスの写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri('/assets/images/company/company-sp.jpg'); ?>" alt="オフィスの写真" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <section class="mission mission-margin">
    <div class="mission__inner inner">
      <div class="mission__header section-header">
        <p class="section-header__title">Mission</p>
        <h2 class="section-header__subtitle">企業理念</h2>
      </div>
      <p class="mission__message">「清潔が生む安心、技術が築く未来。」</p>
      <div class="mission__contents">
        <div class="mission__content">
          <div class="mission__box">
            <span>1</span>
            <h3 class="mission__name">清潔さと衛生を最優先に</h3>
            <p class="mission__text">衛生は食品製造の根幹です。私たちは、最高水準の清潔さを実現する製品とサービスを提供し、人々が安心して食べられる食品の生産を支援します。</p>
          </div>
          <div class="mission__image"><img
              src="<?php echo get_theme_file_uri('/assets/images/company/mission01.jpg'); ?>" alt=""></div>
        </div>
        <div class="mission__content">
          <div class="mission__box">
            <span>2</span>
            <h3 class="mission__name">清潔さと衛生を最優先に</h3>
            <p class="mission__text">衛生は食品製造の根幹です。私たちは、最高水準の清潔さを実現する製品とサービスを提供し、人々が安心して食べられる食品の生産を支援します。</p>
          </div>
          <div class="mission__image"><img
              src="<?php echo get_theme_file_uri('/assets/images/company/mission02.jpg'); ?>" alt=""></div>
        </div>
        <div class="mission__content">
          <div class="mission__box">
            <span>3</span>
            <h3 class="mission__name">清潔さと衛生を最優先に</h3>
            <p class="mission__text">衛生は食品製造の根幹です。私たちは、最高水準の清潔さを実現する製品とサービスを提供し、人々が安心して食べられる食品の生産を支援します。</p>
          </div>
          <div class="mission__image"><img
              src="<?php echo get_theme_file_uri('/assets/images/company/mission03.jpg'); ?>" alt=""></div>
        </div>
        <div class="mission__content">
          <div class="mission__box">
            <span>4</span>
            <h3 class="mission__name">清潔さと衛生を最優先に</h3>
            <p class="mission__text">衛生は食品製造の根幹です。私たちは、最高水準の清潔さを実現する製品とサービスを提供し、人々が安心して食べられる食品の生産を支援します。</p>
          </div>
          <div class="mission__image"><img
              src="<?php echo get_theme_file_uri('/assets/images/company/mission04.jpg'); ?>" alt=""></div>
        </div>
      </div>
    </div>
    <section class="company-about company-about-margin">
      <div class="company-about__inner inner">
        <div class="company-about__header section-header">
          <p class="section-header__title">About</p>
          <h2 class="section-header__subtitle">企業概要</h2>
        </div>
        <dl class="company-about__list">
          <div class="company-about__item">
            <dt class="company-about__title">会社名</dt>
            <dd class="company-about__text">Hygieia Systems（ハイジア システムズ）</dd>
          </div>
          <div class="company-about__item">
            <dt class="company-about__title">設立</dt>
            <dd class="company-about__text">2003年</dd>
          </div>
          <div class="company-about__item">
            <dt class="company-about__title">本社所在地</dt>
            <dd class="company-about__text">東京都千代田区丸の内1-1-1　Hygieiaビル</dd>
          </div>
          <div class="company-about__item">
            <dt class="company-about__title">代表者</dt>
            <dd class="company-about__text">代表取締役社長 山田太郎</dd>
          </div>
          <div class="company-about__item">
            <dt class="company-about__title">従業員数</dt>
            <dd class="company-about__text">150名</dd>
          </div>
          <div class="company-about__item">
            <dt class="company-about__title">資本金</dt>
            <dd class="company-about__text">1億円</dd>
          </div>
          <div class="company-about__item">
            <dt class="company-about__title">事業所</dt>
            <dd class="company-about__text">国内拠点: 東京、名古屋、大阪<br>
              海外拠点: シンガポール、ドイツ（フランクフルト）</dd>
          </div>
        </dl>
      </div>
    </section>
    <section class="company-history company-history-margin">
      <div class="company-history__inner inner">
        <div class="company-history__header section-header">
          <p class="section-header__title">History</p>
          <h2 class="section-header__subtitle">沿革</h2>
        </div>
        <dl class="company-history__list table-list">
          <div class="table-list__item table-item">
            <dt class="table-item__title">2024.01</dt>
            <dd class="table-item__text">Hygieia Systems（ハイジア システムズ）</dd>
          </div>
          <div class="table-list__item table-item">
            <dt class="table-item__title">20xx.01</dt>
            <dd class="table-item__text">2003年</dd>
          </div>
          <div class="table-list__item table-item">
            <dt class="table-item__title">20xx.01</dt>
            <dd class="table-item__text">東京都千代田区丸の内1-1-1　Hygieiaビル</dd>
          </div>
          <div class="table-list__item table-item">
            <dt class="table-item__title">20xx.01</dt>
            <dd class="table-item__text">代表取締役社長 山田太郎</dd>
          </div>
          <div class="table-list__item table-item">
            <dt class="table-item__title">20xx.01</dt>
            <dd class="table-item__text">150名</dd>
          </div>
          <div class="table-list__item table-item">
            <dt class="table-item__title">20xx.01</dt>
            <dd class="table-item__text">1億円</dd>
          </div>
          <div class="table-list__item table-item">
            <dt class="table-item__title">2024.12</dt>
            <dd class="table-item__text">国内拠点: 東京、名古屋、大阪<br>国内拠点: 東京、名古屋、大阪<br>
              海外拠点: シンガポール、ドイツ（フランクフルト）</dd>
          </div>
        </dl>
      </div>
    </section>
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
      <section class="company-gallery company-gallery-margin">
        <div class="company-gallery__inner inner">
          <div class="company-gallery__images">
            <?php foreach ($gallery_images as $image) :
              $image_url = wp_get_attachment_image_url($image['gallery-image'], 'full');
              $text = $image['image_description'];
              if ($image_url) :
            ?>
                <a href="<?php echo esc_url($image_url); ?>" class="company-gallery__image js-modal">
                  <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo $text; ?>"></a>
            <?php
              endif;
            endforeach;
            ?>
            <div id="modal" class="company-gallery__modal">
              <span class="company-gallery__close">&times;</span>
              <div class="company-gallery__content">
                <img id="modal-image" src="" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
  </section>
  <?php get_footer(); ?>