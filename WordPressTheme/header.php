<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- Googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Gotu&family=Noto+Sans+JP:wght@500&family=Lato:wght@400;700&display=swap"
    rel="stylesheet" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logolink"><img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png"
            alt="<?php bloginfo('name'); ?>" /></a>
      </h1>
    </div>
    <div class="header__drawer hamburger js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav class="header__pc-nav pc-nav">
      <ul class="pc-nav__items">
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="pc-nav__link">Campaign<span>キャンペーン</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/about')); ?>" class="pc-nav__link">About us<span>私たちについて</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/information')); ?>"
            class="pc-nav__link">Information<span>ダイビング情報</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/blog')); ?>" class="pc-nav__link">Blog<span>ブログ</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/voice')); ?>" class="pc-nav__link">Voice<span>お客様の声</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/price')); ?>" class="pc-nav__link">Price<span>料金一覧</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/faq')); ?>" class="pc-nav__link">FAQ<span>よくある質問</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="pc-nav__link">Contact<span>お問合せ</span></a>
        </li>
      </ul>
    </nav>
  </header>

  <nav class="header__sp-nav sp-nav js-sp-nav">
    <div class="sp-nav__inner">
      <ul class="sp-nav__items">
        <li class="sp-nav__item">
          <a href="<?php echo esc_url(home_url('/campaign')); ?>">キャンペーン</a>
          <ul class="sp-nav__sublist">
            <li class="sp-nav__subitem"><a href="<?php echo esc_url(home_url('/campaign#license')); ?>">ライセンス取得</a></li>
            <li class="sp-nav__subitem">
              <a href="<?php echo esc_url(home_url('/campaign#experience')); ?>">貸切体験ダイビング</a>
            </li>
            <li class="sp-nav__subitem"><a href="<?php echo esc_url(home_url('/campaign#night')); ?>">ナイトダイビング</a></li>
          </ul>
        </li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/about')); ?>">私たちについて</a></li>
        <li class="sp-nav__item">
          <a href="<?php echo esc_url(home_url('/information')); ?>">ダイビング情報</a>
          <ul class="sp-nav__sublist">
            <li class="sp-nav__subitem"><a href="<?php echo esc_url(home_url('/information#license')); ?>">ライセンス講習</a>
            </li>
            <li class="sp-nav__subitem"><a
                href="<?php echo esc_url(home_url('/information#experience')); ?>">体験ダイビング</a></li>
            <li class="sp-nav__subitem"><a href="<?php echo esc_url(home_url('/information#fun')); ?>">ファンダイビング</a></li>
          </ul>
        </li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
      </ul>
      <ul class="sp-nav__items">
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a></li>
        <li class="sp-nav__item">
          <a href="<?php echo esc_url(home_url('/price')); ?>">料金一覧</a>
          <ul class="sp-nav__sublist">
            <li class="sp-nav__subitem"><a href="<?php echo esc_url(home_url('/price#license')); ?>">ライセンス講習</a></li>
            <li class="sp-nav__subitem"><a href="<?php echo esc_url(home_url('/price#experience')); ?>">体験ダイビング</a></li>
            <li class="sp-nav__subitem"><a href="<?php echo esc_url(home_url('/price#fun')); ?>">ファンダイビング</a></li>
          </ul>
        </li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/faq')); ?>">よくある質問</a></li>
        <li class="sp-nav__item">
          <a href="<?php echo esc_url(home_url('/privacypolicy')); ?>">プライバシー<br class="u-mobile" />ポリシー</a>
        </li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/terms-of-service')); ?>">利用規約</a></li>
        <li class="sp-nav__item"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問合せ</a></li>
      </ul>
    </div>
  </nav>