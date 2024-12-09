<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Works</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/works/works-head.jpg" alt="ダイビングの写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/works/works-head_sp.jpg" alt="" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <div class="works-page works-page-margin">
    <div class="works-page__inner inner">
      <div class="works-page__tags category-tags">
        <ul class="category-tags__list">
          <li
            class="category-tags__item category-tag <?php if (is_post_type_archive('works')) echo 'category-tag--active'; ?>">
            <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>">ALL</a>
          </li>
          <?php
          $terms = get_terms(array(
            'taxonomy' => 'works_category',
            'hide_empty' => false,
          ));
          if (!is_wp_error($terms) && !empty($terms)) :
            foreach ($terms as $term) : ?>
              <li class="category-tags__item category-tag <?php if (is_tax($taxonomy, $term->slug)) echo 'category-tag--active' ?>">
                <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
              </li>
          <?php endforeach;
          endif; ?>
        </ul>
      </div>
      <?php if (have_posts()) : ?>
        <div class="works-page__items works-cards">
          <?php while (have_posts()) : the_post(); ?>
            <section class="works-cards__item works-card">
              <div class="works-card__image">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png" alt="デフォルト画像" />
                <?php endif; ?>
              </div>
              <div class="works-card__meta">
                <h2 class="works-card__title">
                  <?php the_title(); ?>
                </h2>
                <p class="works-card__category category-tag">
                  <?php
                  $terms = get_the_terms(get_the_ID(), 'works_category');
                  if ($terms && !is_wp_error($terms)) :
                    foreach ($terms as $term) : ?>
                      <?php echo esc_html($term->name); ?>
                  <?php endforeach;
                  endif; ?>
                </p>
              </div>
            </section>
          <?php endwhile; ?>
        </div>
        <?php get_template_part('template/parts', 'wppagenavi'); ?>
      <?php endif; ?>
    </div>
  </div>
  <?php get_footer(); ?>