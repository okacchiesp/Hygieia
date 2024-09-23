<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Information</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/information/information-img.jpg"
          alt="ダイビングの写真" media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/information-img_sp.jpg"
          alt="ダイビングの写真" />
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
  <section class="diving-information diving-information--top-margin page-body">
    <div class="diving-information__inner inner">
      <ul class="diving-information__tabs tabs">
        <li class="tabs__button tab tab--active js-tab">
          <a href="#license">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/whale.png" alt="鯨のアイコン"
              class="tab__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/whale__white.png" alt="鯨のアイコン"
              class="tab__icon--active">ライセンス<br class="u-mobile">講習
          </a>
        </li>
        <li class="tabs__button tab js-tab">
          <a href="#fundiving">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/shark.png" alt="鮫のアイコン"
              class="tab__icon"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/shark_white.png"
              alt="鮫のアイコン" class="tab__icon--active">ファン<br class="u-mobile">ダイビング
          </a>
        </li>
        <li class="tabs__button tab js-tab">
          <a href="#diving">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/fish.png" alt="魚のアイコン"
              class="tab__icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information/fish_white.png" alt="魚のアイコン"
              class="tab__icon--active">体験<br class="u-mobile">ダイビング
          </a>
        </li>
      </ul>
      <div class="diving-information__contents">
        <section id="license-content"
          class="diving-information__content tab-content tab-content--active js-tab-content">
          <div class="tab-content__inner">
            <h2 class="tab-content__title">ライセンス講習</h2>
            <p class="tab-content__text">
              泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
            </p>
          </div>
          <div class="tab-content__image"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/information/license.jpg" alt="ライセンス講習の写真"></div>
        </section>
        <section id="fundiving-content" class="diving-information__content tab-content js-tab-content">
          <div class="tab-content__inner">
            <h2 class="tab-content__title">ファンダイビング</h2>
            <p class="tab-content__text">
              ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
            </p>
          </div>
          <div class="tab-content__image"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/information/fundiving.jpg" alt="ライセンス講習の写真">
          </div>
        </section>
        <section id="diving-content" class="diving-information__content tab-content js-tab-content">
          <div class="tab-content__inner">
            <h2 class="tab-content__title">体験ダイビング</h2>
            <p class="tab-content__text">
              ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
            </p>
          </div>
          <div class="tab-content__image"><img
              src="<?php echo get_theme_file_uri(); ?>/assets/images/information/diving.jpg" alt="ライセンス講習の写真"></div>
        </section>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>