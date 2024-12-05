<?php get_header(); ?>
<!-- <div class="loading js-loading">
  <div class="loading__title title title--green js-loading-title">
    <p class="title__main">DIVING</p>
    <small class="title__sub">into the ocean</small>
  </div>
  <div class="loading__images">
    <div class="loading__image js-loading-image">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/loading_1.jpg" alt="" />
    </div>
    <div class="loading__image js-loading-image">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/loading_2.jpg" alt="" />
    </div>
  </div>
</div> -->
<main class="top">
  <section class="mv">
    <dvi class="mv__title title">
      <p class="title__main">食品製造の<span>未来を清潔に</span></p>
    </dvi>
    <div class="swiper js-mv-swiper mv__slide">
      <div class="swiper-wrapper">
        <?php
        for ($i = 1; $i <= 4; $i++) {
          $group_field = 'mv0' . $i;
          $mv_img = get_field($group_field);

          if ($mv_img) :
            $pc_image_url = !empty($mv_img['pc']['url']) ? $mv_img['pc']['url'] : '';
            $pc_alt_text = !empty($mv_img['pc']['alt']) ? $mv_img['pc']['alt'] : 'PC版画像';

            $sp_image_url = !empty($mv_img['sp']['url']) ? $mv_img['sp']['url'] : '';
            $sp_alt_text = !empty($mv_img['sp']['alt']) ? $mv_img['sp']['alt'] : 'SP版画像';
        ?>
            <?php if ($pc_image_url && $sp_image_url) : ?>
              <div class="mv__image swiper-slide">
                <picture>
                  <source srcset="<?php echo esc_url($pc_image_url); ?>" media="(min-width: 768px)">
                  <img src="<?php echo esc_url($sp_image_url); ?>" alt="<?php echo esc_attr($sp_alt_text); ?>">
                </picture>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  <section class="news">
    <div class="news__inner">
      <div class="news__content">
        <div class="news__header section-header">
          <p class="section-header__title">News</p>
          <h2 class="section-header__subtitle">お知らせ</h2>
        </div>
        <ul class="news__list">
          <li class="news__item">
            <div class="news__meta"><time>2024年11月16日</time><span class="news__tag tag">IR情報</span></div>
            サンプルテキストサンプルテキストサンプルテキスト
          </li>
          <li class="news__item">
            <div class="news__meta"><time>2024年11月16日</time><span class="news__tag tag">IR情報</span></div>
            サンプルテキストサンプルテキストサンプルテキスト
          </li>
          <li class="news__item">
            <div class="news__meta"><time>2024年11月16日</time><span class="news__tag tag">IR情報</span></div>
            サンプルテキストサンプルテキストサンプルテキスト
          </li>
        </ul>
      </div>
      <div class="news__link arrow-link"><a href="">お知らせ一覧へ<img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/top/arrow.png" alt=""></a></div>
    </div>
  </section>
  <section class="about about-margin">
    <a href="" class="about__inner">
      <div class="about__header section-header">
        <p class="section-header__title section-header--white">About us</p>
        <h2 class="section-header__subtitle section-header--white">会社案内</h2>
      </div>
      <p class="about__text">最新のテクノロジーを駆使して食品製造プロセスを改善し、食品の安全性と品質を確保します。<br>また、環境への配慮も重要な使命と考え、持続可能なソリューションを提供しています。</p>
    </a>
  </section>
  <section class="product product-margin">
    <div class="product__inner inner">
      <div class="product__header section-header">
        <p class="section-header__title">Product</p>
        <h2 class="section-header__subtitle">製品情報</h2>
      </div>
      <div class="product__list product-cards">
        <a href="" class="product-cards__item product-card">
          <div class="product-card__body">
            <h3 class="product-card__name">ライセンス取得</h3>
            <p class="product-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
          </div>
        </a>
        <a href="" class="product-cards__item product-card">
          <div class="product-card__body">
            <h3 class="product-card__name">ライセンス取得</h3>
            <p class="product-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
          </div>
        </a>
        <a href="" class="product-cards__item product-card">
          <div class="product-card__body">
            <h3 class="product-card__name">ライセンス取得</h3>
            <p class="product-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
          </div>
        </a>
        <a href="" class="product-cards__item product-card">
          <div class="product-card__body">
            <h3 class="product-card__name">ライセンス取得</h3>
            <p class="product-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section class="works works-margin">
    <div class="works__inner inner">
      <div class="works__header section-header">
        <p class="section-header__title">Works</p>
        <h2 class="section-header__subtitle">実績</h2>
      </div>
      <div class="works__slider swiper js-works-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="" class="works__link">
              <div class="works__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/product01.jpg"
                  alt=""></div>
              <p class="works__text">株式会社〇〇様</p>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="" class="works__link">
              <div class="works__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/product01.jpg"
                  alt=""></div>
              <p class="works__text">株式会社〇〇様</p>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="" class="works__link">
              <div class="works__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/product02.jpg"
                  alt=""></div>
              <p class="works__text">株式会社〇〇様</p>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="" class="works__link">
              <div class="works__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/product03.jpg"
                  alt=""></div>
              <p class="works__text">株式会社〇〇様</p>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="" class="works__link">
              <div class="works__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/product04.jpg"
                  alt=""></div>
              <p class="works__text">株式会社〇〇様</p>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="" class="works__link">
              <div class="works__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/product01.jpg"
                  alt=""></div>
              <p class="works__text">株式会社〇〇様</p>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="" class="works__link">
              <div class="works__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/product02.jpg"
                  alt=""></div>
              <p class="works__text">株式会社〇〇様</p>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="" class="works__link">
              <div class="works__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/product03.jpg"
                  alt=""></div>
              <p class="works__text">株式会社〇〇様</p>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="" class="works__link">
              <div class="works__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/product04.jpg"
                  alt=""></div>
              <p class="works__text">株式会社〇〇様</p>
            </a>
          </div>
        </div>
      </div>
      <div class="works__all arrow-link"><a href="">実績一覧へ<img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/top/arrow.png" alt=""></a></div>
    </div>
  </section>
  <section class="recruit recruit-margin">
    <div class="recruit__inner inner">
      <div class="recruit__header section-header">
        <p class="section-header__title">Recruit</p>
        <h2 class="section-header__subtitle">採用情報</h2>
      </div>
      <div class="recruit__contents">
        <div class="recruit__content">
          <div class="recruit__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/recruit01.jpg"
              alt=""></div>
          <div class="recruit__body">
            <p class="recruit__text">
              サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
            </p>
            <div class="recruit__link arrow-link"><a href="">先輩の声へ<img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/top/arrow.png" alt=""></a></div>
          </div>
        </div>
        <div class="recruit__content">
          <div class="recruit__image"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/recruit02.jpg"
              alt=""></div>
          <div class="recruit__body">
            <p class="recruit__text">
              サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
            </p>
            <div class="recruit__link arrow-link"><a href="">募集要項へ<img
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/top/arrow.png" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>