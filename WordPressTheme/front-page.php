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
            <div class="news__meta"><time>2024年11月16日</time><span class="news__tag tag">IR情報</span></div>サンプルテキストサンプルテキストサンプルテキスト
          </li>
          <li class="news__item">
            <div class="news__meta"><time>2024年11月16日</time><span class="news__tag tag">IR情報</span></div>サンプルテキストサンプルテキストサンプルテキスト
          </li>
          <li class="news__item">
            <div class="news__meta"><time>2024年11月16日</time><span class="news__tag tag">IR情報</span></div>サンプルテキストサンプルテキストサンプルテキスト
          </li>
        </ul>
      </div>
      <div class="news__link"><a href="">お知らせ一覧へ<img src="<?php echo get_theme_file_uri(); ?>/assets/images/top/arrow.png" alt=""></a></div>
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
  <section class="blog blog--top-margin">
    <div class="blog__inner inner">
      <div class="blog__header section-header">
        <p class="section-header__title section-header--white">Blog</p>
        <h2 class="section-header__subtitle section-header--white">ブログ</h2>
      </div>
      <div class="blog__items blog-cards">
        <?php
        $args = array(
          'posts_per_page' => 3, // 最新3件を取得
        );
        $latest_posts = new WP_Query($args);
        if ($latest_posts->have_posts()) :
          while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
              <div class="blog-card__image">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png" alt="デフォルト画像" />
                <?php endif; ?>
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
                    <?php
                    $age = get_field('age');
                    $gender = get_field('gender');
                    if ($age && $gender):
                    ?>
                      <p class="voice-card__age"><?php echo esc_html($age); ?>(<?php echo esc_html($gender); ?>)</p>
                    <?php endif; ?>
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
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                      alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png" alt="デフォルト画像" />
                  <?php endif; ?>
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