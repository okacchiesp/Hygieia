<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Site MAP</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/sitemap/sitemap-img.jpg" alt="ビーチの写真" media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/sitemap/sitemap-img_sp.jpg" alt="ビーチの写真" />
      </picture>
    </div>
  </section>
  <nav class="breadcrumbs breadcrumbs--top-margin">
    <div class="breadcrumb__inner inner">
      <ul class="breadcrumbs__list">
        <li class="breadcrumbs__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="breadcrumbs__item"><a href="#">サイトマップ</a></li>
      </ul>
    </div>
  </nav>
  <nav class="sitemap sitemap--top-margin">
    <div class="sitemap__inner inner">
      <div class="sitemap__lists">
        <ul class="sitemap__list">
          <li class="sitemap__item">
            <a href="">キャンペーン</a>
            <ul class="sitemap__sublist">
              <li class="sitemap__subitem">
                <a href="">ライセンス取得</a>
              </li>
              <li class="sitemap__subitem">
                <a href="">貸切体験ダイビング</a>
              </li>
              <li class="sitemap__subitem">
                <a href="">ナイトダイビング</a>
              </li>
            </ul>
          </li>
          <li class="sitemap__item"><a href="">私たちについて</a></li>
        </ul>
        <ul class="sitemap__list">
          <li class="sitemap__item">
            <a href="">ダイビング情報</a>
            <ul class="sitemap__sublist">
              <li class="sitemap__subitem">
                <a href="">ライセンス講習</a>
              </li>
              <li class="sitemap__subitem">
                <a href="">体験ダイビング</a>
              </li>
              <li class="sitemap__subitem">
                <a href="">ファンダイビング</a>
              </li>
            </ul>
          </li>
          <li class="sitemap__item"><a href="">ブログ</a></li>
        </ul>
        <ul class="sitemap__list">
          <li class="sitemap__item"><a href="">お客様の声</a></li>
          <li class="sitemap__item">
            <a href="">料金一覧</a>
            <ul class="sitemap__sublist">
              <li class="sitemap__subitem">
                <a href="">ライセンス講習</a>
              </li>
              <li class="sitemap__subitem">
                <a href="">体験ダイビング</a>
              </li>
              <li class="sitemap__subitem">
                <a href="">ファンダイビング</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="sitemap__list">
          <li class="sitemap__item"><a href="">よくある質問</a></li>
          <li class="sitemap__item">
            <a href="">プライバシー<br class="u-mobile" />ポリシー</a>
          </li>
          <li class="sitemap__item"><a href="">利用規約</a></li>
          <li class="sitemap__item"><a href="">お問合せ</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php get_footer(); ?>