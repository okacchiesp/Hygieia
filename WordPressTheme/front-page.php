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
        <?php
        $args = array(
          'post_type' => 'news', // カスタム投稿タイプ「works」を指定
          'posts_per_page' => 3,  // 表示する投稿数
          'orderby' => 'date',    // 日付順で並び替え
          'order' => 'DESC'       // 降順（新しい順）
        );
        $news = new WP_Query($args);
        ?>
        <?php if (have_posts()) : ?>
          <ul class="news__list news-list">
            <?php while ($news->have_posts()) : $news->the_post(); ?>
              <li class="news-list__item">
                <div class="news-list__meta">
                  <time><?php the_time('Y.m.d'); ?></time>
                  <span class="news-list__tag tag">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'news_category');
                    if ($terms && !is_wp_error($terms)) :
                      foreach ($terms as $term) : ?>
                        <?php echo esc_html($term->name); ?>
                    <?php endforeach;
                    endif; ?>
                  </span>
                </div>
                <?php echo the_title(); ?>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
      <div class="news__link arrow-link"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ一覧へ<img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/top/arrow.png" alt=""></a></div>
    </div>
  </section>
  <section class="about about-margin">
    <a href="<?php echo esc_url(home_url('/company')); ?>" class="about__inner">
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
        <a href="<?php echo esc_url(home_url('/product#clean')); ?>" class="product-cards__item product-card">
          <div class="product-card__body">
            <h3 class="product-card__name">CleanLine</h3>
            <p class="product-card__text">CleanLineシリーズは、Hygieia Systemsが提供する食品製造現場向けの衛生管理と効率性を追求した製造ライン機器の製品群です。高水準の清潔さを保ちながら、生産効率と安全性を同時に向上させる設計が特徴です。</p>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/product#pack')); ?>" class="product-cards__item product-card">
          <div class="product-card__body">
            <h3 class="product-card__name">PackPro</h3>
            <p class="product-card__text">PackProシリーズは、Hygieia Systemsが提供する食品製造業界向けの次世代包装機器の製品群です。正確で効率的な包装を実現し、食品の品質維持、衛生、安全性を最適化することを目的としています。</p>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/product#saniti')); ?>" class="product-cards__item product-card">
          <div class="product-card__body">
            <h3 class="product-card__name">SanitiFlow</h3>
            <p class="product-card__text">SanitiFlowシステムは、食品製造現場向けにHygieia Systemsが開発した次世代の衛生管理および自動化ソリューションです。食品の安全性と効率性を最大化するために設計されており、以下のような特長があります。</p>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/product#eco')); ?>" class="product-cards__item product-card">
          <div class="product-card__body">
            <h3 class="product-card__name">EcoTrack</h3>
            <p class="product-card__text">EcoTrackテクノロジーは、Hygieia Systemsが開発した食品製造プロセスのエネルギー効率化と環境負荷削減を目的とした統合ソリューションです。生産現場でのリソース最適化を支援し、持続可能な運営を可能にします。</p>
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
      <?php
      $args = array(
        'post_type' => 'works', // カスタム投稿タイプ「works」を指定
        'posts_per_page' => 10,  // 表示する投稿数
        'orderby' => 'date',    // 日付順で並び替え
        'order' => 'DESC'       // 降順（新しい順）
      );
      $query = new WP_Query($args);
      ?>
      <?php if (have_posts()) : ?>
        <div class="works__slider swiper js-works-swiper">
          <div class="swiper-wrapper">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
              <div class="swiper-slide">
                <a href="" class="works__link works-card">
                  <div class="works-card__image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/product01.jpg" alt="">
                    <?php endif; ?>
                  </div>
                  <div class="works-card__meta">
                    <h2 class="works-card__title">
                      <?php the_title(); ?>
                    </h2>
                    <p class="works-card__category">
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'works_category');
                      if ($terms && !is_wp_error($terms)) :
                        foreach ($terms as $term) : ?>
                          <?php echo esc_html($term->name); ?>
                      <?php endforeach;
                      endif; ?>
                    </p>
                  </div>
                </a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); // クエリのリセット 
            ?>
          </div>
        </div>
      <?php endif; ?>
      <div class="works__all arrow-link"><a href="<?php echo esc_url(home_url('/works')); ?>">実績一覧へ<img
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
        <a href="<?php echo esc_url(home_url('/recruit#engineer')); ?>" class="recruit__content">
          <div class="recruit__image"><span></span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/recruit01.jpg"
              alt=""></div>
          <div class="recruit__body">
            <p class="recruit__text">
              サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
            </p>
            <div class="recruit__arrow arrow-link">先輩の声へ<img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/top/arrow.png" alt=""></div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/recruit#point')); ?>" class="recruit__content">
          <div class="recruit__image"><span></span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/recruit02.jpg"
              alt=""></div>
          <div class="recruit__body">
            <p class="recruit__text">
              サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト
            </p>
            <div class="recruit__arrow arrow-link">募集要項へ<img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/top/arrow.png" alt="">
            </div>
          </div>

        </a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>