<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Campaign</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign-img.jpg" alt="海亀の写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign-img_sp.jpg" alt="" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <section class="campaign-section  page-body page-body--top-margin">
    <div class="campaign-section__inner inner">
      <div class="campaign-section__tags category-tags">
        <ul class="category-tags__list">
          <li class="category-tags__item category-tag category-tag--active">
            <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">ALL</a>
          </li>
          <?php
          $terms = get_terms(array(
            'taxonomy' => 'campaign_category',
            'hide_empty' => false,
          ));
          if (!is_wp_error($terms) && !empty($terms)) :
            foreach ($terms as $term) : ?>
          <li class="category-tags__item category-tag">
            <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
          </li>
          <?php endforeach;
          endif; ?>
        </ul>

      </div>
      <div class="campaign-section__content">
        <?php if (have_posts()) : ?>
        <div class="campaign-section__cards campaign-cards">
          <?php while (have_posts()) : the_post(); ?>
          <?php
              $price = get_field('price');
              $date = get_field('schedule');
              ?>
          <?php if ($price['normal-price'] && $price['campaign-price'] && $date['start'] && $date['end']): ?>
          <section class="campaign-cards__item campaign-card campaign-card--big">
            <div class="campaign-card__image">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
              <?php endif; ?>
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
                <h2 class="campaign-card__title"><?php the_title(); ?></h2>
              </div>

              <div class="campaign-card__meta-body">
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price">
                  <span>¥<?php echo number_format($price['normal-price']); ?></span>¥<?php echo number_format($price['campaign-price']); ?>
                </p>
                <div class="campaign-card__detail">
                  <p class="campaign-card__textbox"><?php the_content(); ?>
                  </p>
                  <p class="campaign-card__date"><?php echo $date['start']; ?>-<?php echo $date['end']; ?></p>
                  <p class="campaign-card__reserve">ご予約・お問い合わせはコチラ</p>
                  <div class="campaign-card__btn">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">Contact us<span></span></a>
                  </div>
                </div>
              </div>

            </div>
          </section>
          <?php endif; ?>
          <?php endwhile; ?>
        </div>
        <?php get_template_part('template/parts', 'wppagenavi'); ?>
        <?php else : ?>
        <p>キャンペーンはありません。</p>
        <?php endif; ?>

      </div>
    </div>
    <?php get_footer(); ?>