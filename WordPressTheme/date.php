<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Blog</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-img.jpg" alt="海中の写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-img_sp.jpg" alt="海中の写真" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <div class="blog-contents blog-contents--top-margin page-body">
    <div class="blog-contents__inner inner">
      <div class="blog-contents__content blog-content">
        <section class="blog-content__items blog-cards blog-cards--2column">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
              <h2 class="blog-card__title"><?php the_title(); ?></h2>
              <p class="blog-card__text">
                <?php echo wp_trim_words(get_the_excerpt(), 85, '...'); ?>
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
      <div class="blog-contents__sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>