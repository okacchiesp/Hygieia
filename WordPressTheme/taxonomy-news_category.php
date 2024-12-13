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
  <section class="news-page news-page-margin">
    <div class="news-page__inner inner">
      <div class="news-page__tags category-tags">
        <ul class="category-tags__list">
          <li
            class="category-tags__item category-tag <?php if (is_post_type_archive('news')) echo 'category-tag--active'; ?>">
            <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">ALL</a>
          </li>
          <?php
          $terms = get_terms(array(
            'taxonomy' => 'news_category',
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
        <ul class="news-page__list news-list">
          <?php while (have_posts()) : the_post(); ?>
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
        <?php get_template_part('template/parts', 'wppagenavi'); ?>
      <?php else : ?>
        <p>お知らせはありません。</p>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>