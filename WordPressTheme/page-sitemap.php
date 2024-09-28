<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Site MAP</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/sitemap/sitemap-img.jpg" alt="ビーチの写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/sitemap/sitemap-img_sp.jpg" alt="ビーチの写真" />
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
  <nav class="sitemap sitemap--top-margin">
    <div class="sitemap__inner inner">
      <div class="sitemap__lists">
        <ul class="sitemap__list">
          <li class="sitemap__item">
            <a href="<?php echo esc_url(home_url('/campaign')); ?>">キャンペーン</a>
            <ul class="sitemap__sublist">
              <li class="sitemap__subitem">
                <a href="<?php echo esc_url(home_url('/campaign#license')); ?>">ライセンス取得</a>
              </li>
              <li class="sitemap__subitem">
                <a href="<?php echo esc_url(home_url('/campaign#experience')); ?>">貸切体験ダイビング</a>
              </li>
              <li class="sitemap__subitem">
                <a href="<?php echo esc_url(home_url('/campaign#night')); ?>">ナイトダイビング</a>
              </li>
            </ul>
          </li>
          <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/about-us')); ?>">私たちについて</a></li>
        </ul>
        <ul class="sitemap__list">
          <li class="sitemap__item">
            <a href="<?php echo esc_url(home_url('/information')); ?>">ダイビング情報</a>
            <ul class="sitemap__sublist">
              <li class="sitemap__subitem">
                <a href="<?php echo esc_url(home_url('/information#license')); ?>">ライセンス講習</a>
              </li>
              <li class="sitemap__subitem">
                <a href="<?php echo esc_url(home_url('/information#diving')); ?>">体験ダイビング</a>
              </li>
              <li class="sitemap__subitem">
                <a href="<?php echo esc_url(home_url('/information#fun')); ?>">ファンダイビング</a>
              </li>
            </ul>
          </li>
          <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
        </ul>
        <ul class="sitemap__list">
          <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a></li>
          <li class="sitemap__item">
            <a href="<?php echo esc_url(home_url('/price')); ?>">料金一覧</a>
            <ul class="sitemap__sublist">
              <li class="sitemap__subitem">
                <a href="<?php echo esc_url(home_url('/price#license')); ?>">ライセンス講習</a>
              </li>
              <li class="sitemap__subitem">
                <a href="<?php echo esc_url(home_url('/price#diving')); ?>">体験ダイビング</a>
              </li>
              <li class="sitemap__subitem">
                <a href="<?php echo esc_url(home_url('/price#fun')); ?>">ファンダイビング</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="sitemap__list">
          <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/faq')); ?>">よくある質問</a></li>
          <li class="sitemap__item">
            <a href="<?php echo esc_url(home_url('/privacypolicy')); ?>">プライバシー<br class="u-mobile" />ポリシー</a>
          </li>
          <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/terms-of-service')); ?>">利用規約</a></li>
          <li class="sitemap__item"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問合せ</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php get_footer(); ?>