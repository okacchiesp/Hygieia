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
        <?php $image_id = get_post_meta(get_the_ID(), 'mv01', true);
        if (get_field('mv01') && get_field('sp-mv01')) :
          $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
          <div class="mv__image swiper-slide">
            <picture>
              <source srcset="<?php the_field('mv01'); ?>" alt="<?php echo esc_html($alt_text); ?>"
                media="(min-width: 768px)" />
              <img src="<?php the_field('sp-mv01'); ?>" alt="<?php echo esc_html($alt_text); ?>">
            </picture>
          </div>
        <?php endif; ?>
        <?php $image_id = get_post_meta(get_the_ID(), 'mv02', true);
        if (get_field('mv02') && get_field('sp-mv02')) :
          $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
          <div class="mv__image swiper-slide">
            <picture>
              <source srcset="<?php the_field('mv02'); ?>" alt="<?php echo esc_html($alt_text); ?>"
                media="(min-width: 768px)" />
              <img src="<?php the_field('sp-mv02'); ?>" alt="<?php echo esc_html($alt_text); ?>">
            </picture>
          </div>
        <?php endif; ?>
        <?php $image_id = get_post_meta(get_the_ID(), 'mv03', true);
        if (get_field('mv03') && get_field('sp-mv03')) :
          $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
          <div class="mv__image swiper-slide">
            <picture>
              <source srcset="<?php the_field('mv03'); ?>" alt="<?php echo esc_html($alt_text); ?>"
                media="(min-width: 768px)" />
              <img src="<?php the_field('sp-mv03'); ?>" alt="<?php echo esc_html($alt_text); ?>">
            </picture>
          </div>
        <?php endif; ?>
        <?php $image_id = get_post_meta(get_the_ID(), 'mv04', true);
        if (get_field('mv04') && get_field('sp-mv04')) :
          $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
          <div class="mv__image swiper-slide">
            <picture>
              <source srcset="<?php the_field('mv04'); ?>" alt="<?php echo esc_html($alt_text); ?>"
                media="(min-width: 768px)" />
              <img src="<?php the_field('sp-mv04'); ?>" alt="<?php echo esc_html($alt_text); ?>">
            </picture>
          </div>
        <?php endif; ?>
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
          <?php
          $args = array(
            'post_type' => 'campaign',
            'posts_per_page' => -1,
          );
          $campaigns = new WP_Query($args);
          if ($campaigns->have_posts()) :
            while ($campaigns->have_posts()) : $campaigns->the_post(); ?>
              <div class="swiper-slide campaign__link">
                <div class="campaign__item campaign-card">
                  <div class="campaign-card__image">
                    <?php if (has_post_thumbnail()) {
                      the_post_thumbnail();
                    } ?>
                  </div>
                  <div class="campaign-card__meta">
                    <div class="campaign-card__meta-head">
                      <p class="campaign-card__category category-tag">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'campaign_category');
                        if ($terms && !is_wp_error($terms)) :
                          foreach ($terms as $term) : ?>
                            <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
                        <?php endforeach;
                        endif; ?>
                      </p>
                      <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                    </div>
                    <?php
                    $price = get_field('price');
                    ?>
                    <div class="campaign-card__meta-body">
                      <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                      <?php if ($price['normal-price'] && $price['campaign-price']): ?>
                        <p class="campaign-card__price">
                          <span>¥<?php echo number_format($price['normal-price']); ?></span>¥<?php echo number_format($price['campaign-price']); ?>
                        </p>
                      <?php else: ?>
                        <p class="campaign-card__price">coming soon</p>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>

      <div class="campaign__btn">
        <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button">View more<span></span></a>
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
              <a href="<?php echo esc_url(home_url('/about-us')); ?>" class="button">View more<span></span></a>
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
            <a href="<?php echo esc_url(home_url('/information')); ?>" class="button">View more<span></span></a>
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
        <?php
        $args = array(
          'post_type' => 'post', // 通常の投稿タイプ
          'posts_per_page' => 3, // 最新3件を取得
        );
        $latest_posts = new WP_Query($args);
        if ($latest_posts->have_posts()) :
          while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
              <div class="blog-card__image">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } ?>
              </div>
              <div class="blog-card__body">
                <time class="blog-card__date"
                  datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
                <h3 class="blog-card__title"><?php the_title(); ?></h3>
                <p class="blog-card__text">
                  <?php echo wp_trim_words(get_the_excerpt(), 85, '...'); ?>
                </p>
              </div>
            </a>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
      <div class="blog__btn">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button">View more<span></span></a>
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
        <?php
        $args = array(
          'post_type' => 'voice', // カスタム投稿タイプ名
          'posts_per_page' => 2, // 最新2件を取得
        );
        $voices = new WP_Query($args);
        if ($voices->have_posts()) :
          while ($voices->have_posts()) : $voices->the_post(); ?>
            <div class="voice-cards__item voice-card">
              <div class="voice-card__head">
                <div class="voice-card__meta">
                  <div class="voice-card__metahead">
                    <p class="voice-card__age"><?php the_field('age'); ?>代(<?php the_field('gender'); ?>)</p>
                    <p class="voice-card__category category-tag">
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'voice_category');
                      if ($terms && !is_wp_error($terms)) :
                        foreach ($terms as $term) : ?>
                          <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
                      <?php endforeach;
                      endif; ?>
                    </p>
                  </div>
                  <h3 class="voice-card__title">
                    <?php the_title(); ?>
                  </h3>
                </div>
                <div class="voice-card__image js-slidein">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail();
                  } ?>
                </div>
              </div>
              <p class="voice-card__text">
                <?php the_content(); ?>
              </p>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
      <div class="voice__btn">
        <a href="<?php echo esc_url(home_url('/voice')); ?>" class="button">View more<span></span></a>
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
          <?php
          $price_page_id = get_page_by_path('price')->ID;
          $group = SCF::get('license', $price_page_id);
          if (!empty($group) && is_array($group)):
            $check = false;
            foreach ($group as $item) {
              if (!empty($item['license-course']) && !empty($item['license-price'])) {
                $check = true;
                break;
              }
            }
          endif; ?>
          <?php if ($check): ?>
            <table class="price__list">
              <tbody>
                <tr>
                  <th colspan="2">ライセンス講習</th>
                </tr>
                <?php foreach ($group as $license):
                  if (!empty($license['license-course']) && !empty($license['license-price'])): ?>
                    <tr>
                      <td><?php echo esc_html($license['license-course']); ?></td>
                      <td>¥<?php echo esc_html($license['license-price']); ?></td>
                    </tr>
                <?php endif;
                endforeach; ?>

              </tbody>
            </table>
          <?php
          endif;
          ?>
          <?php
          $price_page_id = get_page_by_path('price')->ID;
          $group = SCF::get('diving', $price_page_id);
          if (!empty($group) && is_array($group)):
            $check = false;
            foreach ($group as $item) {
              if (!empty($item['diving-course']) && !empty($item['diving-price'])) {
                $check = true;
                break;
              }
            }
          endif; ?>
          <?php if ($check): ?>
            <table class="price__list">
              <tbody>
                <tr>
                  <th colspan="2">体験ダイビング</th>
                </tr>
                <?php foreach ($group as $diving):
                  if (!empty($diving['diving-course']) && !empty($diving['diving-price'])): ?>
                    <tr>
                      <td><?php echo esc_html($diving['diving-course']); ?></td>
                      <td>¥<?php echo esc_html($diving['diving-price']); ?></td>
                    </tr>
                <?php endif;
                endforeach;
                ?>
              </tbody>
            </table>
          <?php endif; ?>
          <?php
          $price_page_id = get_page_by_path('price')->ID;
          $group = SCF::get('fun', $price_page_id);
          if (!empty($group) && is_array($group)):
            $check = false;
            foreach ($group as $item) {
              if (!empty($item['fun-course']) && !empty($item['fun-price'])) {
                $check = true;
                break;
              }
            }
          endif; ?>
          <?php if ($check): ?>
            <table class="price__list">
              <tbody>
                <tr>
                  <th colspan="2">ファンダイビング</th>
                </tr>
                <?php foreach ($group as $fun):
                  if (!empty($fun['fun-course']) && !empty($fun['fun-price'])): ?>
                    <tr>
                      <td><?php echo esc_html($fun['fun-course']); ?></td>
                      <td>¥<?php echo esc_html($fun['fun-price']); ?></td>
                    </tr>
                <?php endif;
                endforeach;
                ?>
              </tbody>
            </table>
          <?php endif; ?>
          <?php
          $price_page_id = get_page_by_path('price')->ID;
          $group = SCF::get('special', $price_page_id);
          if (!empty($group) && is_array($group)):
            $check = false;
            foreach ($group as $item) {
              if (!empty($item['special-course']) && !empty($item['special-price'])) {
                $check = true;
                break;
              }
            }
          endif; ?>
          <?php if ($check): ?>
            <table class="price__list">
              <tbody>
                <tr>
                  <th colspan="2">スペシャルダイビング</th>
                </tr>
                <?php foreach ($group as $special):
                  if (!empty($special['special-course']) && !empty($special['special-price'])): ?>
                    <tr>
                      <td><?php echo esc_html($special['special-course']); ?></td>
                      <td>¥<?php echo esc_html($special['special-price']); ?></td>
                    </tr>
                <?php endif;
                endforeach;
                ?>
              </tbody>
            </table>
          <?php endif; ?>
        </div>
      </div>
      <div class="price__btn">
        <a href="<?php echo esc_url(home_url('/price')); ?>" class="button">View more<span></span></a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>