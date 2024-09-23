<?php get_header(); ?>
<div class="loading js-loading">
  <div class="loading__title title title--green js-loading-title">
    <p class="title__main">DIVING</p>
    <small class="title__sub">into the ocean</small>
  </div>
  <div class="loading__images">
    <div class="loading__image js-loading-image">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/loading_1.jpg" alt="" class="" />
    </div>
    <div class="loading__image js-loading-image">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/loading_2.jpg" alt="" class="" />
    </div>
  </div>
</div>
<main class="top">
  <section class="mv">
    <dvi class="mv__title title">
      <p class="title__main">DIVING</p>
      <small class="title__sub">into the ocean</small>
    </dvi>
    <div class="swiper js-mv-swiper mv__slide">
      <div class="swiper-wrapper">
        <div class="mv__image swiper-slide">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/top/mv.jpg" alt="海亀の写真"
              media="(min-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/mv-sp.jpg" alt="" />
          </picture>
        </div>
        <div class="mv__image swiper-slide">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/top/mv_2.jpg" alt="海亀の写真"
              media="(min-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/mv-sp_2.jpg" alt="" />
          </picture>
        </div>
        <div class="mv__image swiper-slide">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/top/mv_3.jpg" alt="海亀の写真"
              media="(min-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/mv-sp_3.jpg" alt="" />
          </picture>
        </div>
        <div class="mv__image swiper-slide">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/top/mv_4.jpg" alt="海亀の写真"
              media="(min-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/mv-sp_4.jpg" alt="" />
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="campaign campaign--top-margin">
    <div class="campaign__inner inner">
      <div class="campaign__header section-header">
        <p class="section-header__title">Campaign</p>
        <h2 class="section-header__subtitle">キャンペーン</h2>
      </div>
      <div class="swiper js-campaign-swiper campaign__slide">
        <div class="campaigncontroller swiper-btn">
          <div class="swiper-btn__prev js-campaign-prev"></div>
          <div class="swiper-btn__next js-campaign-next"></div>
        </div>
        <div class="swiper-wrapper">
          <a href="campaign.html#license" class="swiper-slide campaign__link">
            <div class="campaign__item campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/campaign_01.jpg" alt="海中の写真" />
              </div>
              <div class="campaign-card__meta">
                <div class="campaign-card__meta-head">
                  <p class="campaign-card__category category-tag">
                    ライセンス講習
                  </p>
                  <h3 class="campaign-card__title">ライセンス取得ライセンス取得ライセンス取得ライセンス取得ライセンス取得</h3>
                </div>
                <div class="campaign-card__meta-body">
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <p class="campaign-card__price">
                    <span>¥56,000</span>¥46,000
                  </p>
                </div>
              </div>
            </div>
          </a>
          <a href="campaign.html#experience" class="swiper-slide campaign__link">
            <div class="campaign__item campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/campaign_02.jpg" alt="海岸の写真" />
              </div>
              <div class="campaign-card__meta">
                <div class="campaign-card__meta-head">
                  <p class="campaign-card__category category-tag">
                    体験ダイビング
                  </p>
                  <h3 class="campaign-card__title">貸切体験ダイビング貸切体験ダイビング貸切体験ダイビング貸切体験ダイビング</h3>
                </div>
                <div class="campaign-card__meta-body">
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <p class="campaign-card__price">
                    <span>¥24,000</span>¥18,000
                  </p>
                </div>
              </div>
            </div>
          </a>
          <a href="campaign.html#experience" class="swiper-slide campaign__link">
            <div class="campaign__item campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/campaign_03.jpg" alt="クラゲの写真" />
              </div>
              <div class="campaign-card__meta">
                <div class="campaign-card__meta-head">
                  <p class="campaign-card__category category-tag">
                    体験ダイビング
                  </p>
                  <h3 class="campaign-card__title">ナイトダイビング</h3>
                </div>
                <div class="campaign-card__meta-body">
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <p class="campaign-card__price"><span>¥10,000</span>¥8,000</p>
                </div>
              </div>
            </div>
          </a>
          <a href="campaign.html#fun" class="swiper-slide campaign__link">
            <div class="campaign__item campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/campaign_04.jpg" alt="ダイビングの写真" />
              </div>
              <div class="campaign-card__meta">
                <div class="campaign-card__meta-head">
                  <p class="campaign-card__category category-tag">
                    ファンダイビング
                  </p>
                  <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                </div>
                <div class="campaign-card__meta-body">
                  <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                  <p class="campaign-card__price">
                    <span>¥20,000</span>¥16,000
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="campaign__btn">
        <a href="campaign.html" class="button">View more<span></span></a>
      </div>
    </div>
  </section>
  <section class="about u-section-margin">
    <div class="about__inner inner">
      <div class="about__header section-header">
        <p class="section-header__title">About us</p>
        <h2 class="section-header__subtitle">私たちについて</h2>
      </div>
      <div class="about__contents">
        <div class="about__images">
          <div class="about__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/about_2.jpg" alt="シーサーの写真" />
          </div>
          <div class="about__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/about_1.jpg" alt="黄色と黒の魚の写真" />
          </div>
        </div>
        <div class="about__content">
          <p class="about__title">Dive into<br />the Ocean</p>
          <div class="about__body">
            <p class="about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="about__btn">
              <a href="about.html" class="button">View more<span></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="information u-section-margin">
    <div class="information__inner inner">
      <div class="information__header section-header">
        <p class="section-header__title">Information</p>
        <h2 class="section-header__subtitle">ダイビング情報</h2>
      </div>
      <div class="information__content">
        <div class="information__image js-slidein">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/information.jpg" alt="オレンジ色の魚の写真" />
        </div>
        <div class="information__body">
          <h3 class="information__title">ライセンス講習</h3>
          <p class="information__text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information__btn">
            <a href="information.html" class="button">View more<span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog blog--top-margin">
    <div class="blog__inner inner">
      <div class="blog__header section-header">
        <p class="section-header__title section-header--white">Blog</p>
        <h2 class="section-header__subtitle section-header--white">ブログ</h2>
      </div>
      <div class="blog__items blog-cards">
        <a href="blog.html" class="blog-cards__item blog-card">
          <div class="blog-card__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/blog_1.jpg" alt="珊瑚礁の写真" />
          </div>
          <div class="blog-card__body">
            <time class="blog-card__date" datetime="2023-11-17">2023/11/17</time>
            <h3 class="blog-card__title">ライセンス取得</h3>
            <p class="blog-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </a>
        <a href="blog.html" class="blog-cards__item blog-card">
          <div class="blog-card__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/blog_2.jpg" alt="ウミガメの写真" />
          </div>
          <div class="blog-card__body">
            <time class="blog-card__date" datetime="2023-11-17">2023/11/17</time>
            <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
            <p class="blog-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </a>
        <a href="blog.html" class="blog-cards__item blog-card">
          <div class="blog-card__image">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/blog_3.jpg" alt="カクレクマノミの写真" />
          </div>
          <div class="blog-card__body">
            <time class="blog-card__date" datetime="2023-11-17">2023/11/17</time>
            <h3 class="blog-card__title">ライセンス取得</h3>
            <p class="blog-card__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </div>
        </a>
      </div>
      <div class="blog__btn">
        <a href="blog.html" class="button">View more<span></span></a>
      </div>
    </div>
  </section>
  <section class="voice u-section-margin">
    <div class="voice__inner inner">
      <div class="voice__header section-header">
        <p class="section-header__title">Voice</p>
        <h2 class="section-header__subtitle">お客様の声</h2>
      </div>
      <div class="voice__items voice-cards">
        <div class="voice-cards__item voice-card">
          <div class="voice-card__head">
            <div class="voice-card__meta">
              <div class="voice-card__metahead">
                <p class="voice-card__age">20代(女性)</p>
                <p class="voice-card__category category-tag">ライセンス講習</p>
              </div>
              <h3 class="voice-card__title">
                ここにタイトルが入ります。ここにタイトル
              </h3>
            </div>
            <div class="voice-card__image js-slidein">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/voice_1.jpg" alt="女性の写真" />
            </div>
          </div>
          <p class="voice-card__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
        <div class="voice-cards__item voice-card">
          <div class="voice-card__head">
            <div class="voice-card__meta">
              <div class="voice-card__metahead">
                <p class="voice-card__age">30代(男性)</p>
                <p class="voice-card__category category-tag">ライセンス講習</p>
              </div>
              <h3 class="voice-card__title">
                ここにタイトルが入ります。ここにタイトル
              </h3>
            </div>
            <div class="voice-card__image js-slidein">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/voice_2.jpg" alt="男性の写真" />
            </div>
          </div>
          <p class="voice-card__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
            ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
      <div class="voice__btn">
        <a href="voice.html" class="button">View more<span></span></a>
      </div>
    </div>
  </section>
  <section class="price u-section-margin">
    <div class="price__inner inner">
      <div class="price__header section-header">
        <p class="section-header__title">Price</p>
        <h2 class="section-header__subtitle">料金一覧</h2>
      </div>
      <div class="price__contents">
        <div class="price__image js-slidein">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/top/price_2.jpg" alt="海亀の写真"
              media="(min-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/price.jpg" alt="海亀の写真" />
          </picture>
        </div>
        <div class="price__lists">
          <table class="price__list">
            <tbody>
              <tr>
                <th colspan="2">ライセンス講習</th>
              </tr>
              <tr>
                <td>オープンウォーターダイバーコース</td>
                <td>¥50,000</td>
              </tr>
              <tr>
                <td>アドバンスドオープンウォーターコース</td>
                <td>¥60,000</td>
              </tr>
              <tr>
                <td>レスキュー＋EFRコース</td>
                <td>¥70,000</td>
              </tr>
            </tbody>
          </table>
          <table class="price__list">
            <tbody>
              <tr>
                <th colspan="2">体験ダイビング</th>
              </tr>
              <tr>
                <td>ビーチ体験ダイビング(半日)</td>
                <td>¥7,000</td>
              </tr>
              <tr>
                <td>ビーチ体験ダイビング(1日)</td>
                <td>¥14,000</td>
              </tr>
              <tr>
                <td>ボート体験ダイビング(半日)</td>
                <td>¥10,000</td>
              </tr>
              <tr>
                <td>ボート体験ダイビング(1日)</td>
                <td>¥18,000</td>
              </tr>
            </tbody>
          </table>
          <table class="price__list">
            <tbody>
              <tr>
                <th colspan="2">ファンダイビング</th>
              </tr>
              <tr>
                <td>ビーチダイビング(2ダイブ)</td>
                <td>¥14,000</td>
              </tr>
              <tr>
                <td>ボートダイビング(2ダイブ)</td>
                <td>¥18,000</td>
              </tr>
              <tr>
                <td>スペシャルダイビング(2ダイブ)</td>
                <td>¥24,000</td>
              </tr>
              <tr>
                <td>ナイトダイビング(1ダイブ)</td>
                <td>¥10,000</td>
              </tr>
            </tbody>
          </table>
          <table class="price__list">
            <tbody>
              <tr>
                <th colspan="2">スペシャルダイビング</th>
              </tr>
              <tr>
                <td>貸切ダイビング(2ダイブ)</td>
                <td>¥24,000</td>
              </tr>
              <tr>
                <td>1日ダイビング(3ダイブ)</td>
                <td>¥32,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="price__btn">
        <a href="price.html" class="button">View more<span></span></a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>