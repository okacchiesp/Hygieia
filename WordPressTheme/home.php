<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Column</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/column/column-head.jpg" alt="手紙と赤いボールペン"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/column/column-head_sp.jpg" alt="手紙と赤いボールペン" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <div class="column-contents column-contents--top-margin page-body">
    <div class="column-contents__inner inner">
      <div class="column-contents__content column-content">
        <section class="column-content__items column-cards column-cards--2column">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="column-cards__item column-card">
            <div class="column-card__image">
              <?php if (has_post_thumbnail()) : ?>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
              <?php else : ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png" alt="デフォルト画像" />
              <?php endif; ?>
            </div>
            <div class="column-card__body">
              <time class="column-card__date"
                datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
              <h2 class="column-card__title"><?php the_title(); ?></h2>
              <p class="column-card__text">
                <?php echo wp_trim_words(get_the_content(), 85, '...'); ?>
              </p>
            </div>
          </a>
          <?php endwhile;
          else : ?>
          <p>投稿が見つかりませんでした。</p>
          <?php endif; ?>
        </section>
        <?php get_template_part('template/parts', 'wppagenavi'); ?>
      </div>
      <div class="column-contents__sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>