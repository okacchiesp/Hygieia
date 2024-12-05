<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- Googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
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
          <a href="<?php echo esc_url(home_url('/company')); ?>" class="pc-nav__link">Company<span>会社案内</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/product')); ?>"
            class="pc-nav__link">Product<span>製品情報</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/works')); ?>" class="pc-nav__link">Works<span>実績</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="pc-nav__link">Recruit<span>採用情報</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/faq')); ?>" class="pc-nav__link">FAQ<span>よくある質問</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/column')); ?>" class="pc-nav__link">Column<span>コラム</span></a>
        </li>
        <li class="pc-nav__item">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="pc-nav__link">Contact<span>お問合せ</span></a>
        </li>
      </ul>
    </nav>
  </header>

  <nav class="header__sp-nav sp-nav js-sp-nav">
    <ul class="sp-nav__items">
      <li class="sp-nav__item">
        <a href="<?php echo esc_url(home_url('/company')); ?>">会社案内</a>
      </li>
      <li class="sp-nav__item">
        <a href="<?php echo esc_url(home_url('/product')); ?>">製品情報</a>
      </li>
      <li class="sp-nav__item">
        <a href="<?php echo esc_url(home_url('/works')); ?>">実績</a>
      </li>
      <li class="sp-nav__item">
        <a href="<?php echo esc_url(home_url('/recruit')); ?>">採用情報</a>
      </li>
      <li class="sp-nav__item">
        <a href="<?php echo esc_url(home_url('/faq')); ?>">よくある質問</a>
      </li>
      <li class="sp-nav__item">
        <a href="<?php echo esc_url(home_url('/column')); ?>">コラム</a>
      </li>
      <li class="sp-nav__item">
        <a href="<?php echo esc_url(home_url('/contact')); ?>">お問合せ</a>
      </li>
    </ul>
  </nav>