<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Product</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/product/product-head.jpg" alt=""
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/product/product-head_sp.jpg" alt="" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <section class="product-series product-series--top-margin page-body">
    <div class="product-series__inner inner">
      <ul class="product-series__tabs tabs">
        <li class="tabs__button tab tab--active js-tab">
          <a href="#clean">
            CleanLine<br class="u-mobile">シリーズ
          </a>
        </li>
        <li class="tabs__button tab js-tab">
          <a href="#pack">
            PackPro<br class="u-mobile">シリーズ
          </a>
        </li>
        <li class="tabs__button tab js-tab">
          <a href="#saniti">
            SanitiFlow<br class="u-mobile">システム
          </a>
        </li>
        <li class="tabs__button tab js-tab">
          <a href="#eco">
            EcoTrack<br class="u-mobile">テクノロジー
          </a>
        </li>
      </ul>
      <div class="product-series__contents">
        <section id="clean-content" class="product-series__content tab-content tab-content--active js-tab-content">
          <div class="tab-content__inner">
            <h2 class="tab-content__title">CleanLineシリーズ</h2>
            <p class="tab-content__text">
              CleanLineシリーズは、Hygieia
              Systemsが提供する食品製造現場向けの衛生管理と効率性を追求した製造ライン機器の製品群です。高水準の清潔さを保ちながら、生産効率と安全性を同時に向上させる設計が特徴です。
            </p>
            <ul class="tab-content__list">
              <li>1. 高度な衛生管理</li>
              <li>2. 生産効率の向上</li>
              <li>3. データ駆動型の管理</li>
              <li>4. 持続可能性</li>
            </ul>
          </div>
          <div class="tab-content__image"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/product/cleanline.jpg" alt="ライセンス講習の写真"></div>
        </section>
        <section id="pack-content" class="product-series__content tab-content js-tab-content">
          <div class="tab-content__inner">
            <h2 class="tab-content__title">PackProシリーズ</h2>
            <p class="tab-content__text">
              PackProシリーズは、Hygieia Systemsが提供する食品製造業界向けの次世代包装機器の製品群です。正確で効率的な包装を実現し、食品の品質維持、衛生、安全性を最適化することを目的としています。
            </p>
            <ul class="tab-content__list">
              <li>1. 高度な衛生管理</li>
              <li>2. 生産効率の向上</li>
              <li>3. データ駆動型の管理</li>
              <li>4. 持続可能性</li>
            </ul>
          </div>
          <div class="tab-content__image"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/product/packpro.jpg" alt="ライセンス講習の写真">
          </div>
        </section>
        <section id="saniti-content" class="product-series__content tab-content js-tab-content">
          <div class="tab-content__inner">
            <h2 class="tab-content__title">SanitiFlowシステム</h2>
            <p class="tab-content__text">
              SanitiFlowシステムは、食品製造現場向けにHygieia
              Systemsが開発した次世代の衛生管理および自動化ソリューションです。食品の安全性と効率性を最大化するために設計されており、以下のような特長があります。
            </p>
            <ul class="tab-content__list">
              <li>1. 高度な衛生管理</li>
              <li>2. 生産効率の向上</li>
              <li>3. データ駆動型の管理</li>
              <li>4. 持続可能性</li>
            </ul>
          </div>
          <div class="tab-content__image"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/product/sanitiflow.jpg" alt="ライセンス講習の写真"></div>
        </section>
        <section id="eco-content" class="product-series__content tab-content js-tab-content">
          <div class="tab-content__inner">
            <h2 class="tab-content__title">EcoTrackテクノロジー</h2>
            <p class="tab-content__text">
              EcoTrackテクノロジーは、Hygieia
              Systemsが開発した食品製造プロセスのエネルギー効率化と環境負荷削減を目的とした統合ソリューションです。生産現場でのリソース最適化を支援し、持続可能な運営を可能にします。
            </p>
            <ul class="tab-content__list">
              <li>1. エネルギー消費の最適化</li>
              <li>2. 廃棄物削減</li>
              <li>3. 環境への配慮</li>
              <li>4. データ駆動型の管理</li>
            </ul>
          </div>
          <div class="tab-content__image"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/product/ecotrack.jpg" alt=""></div>
        </section>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>