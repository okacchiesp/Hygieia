<?php get_header(); ?>
<?php if (!is_user_logged_in() && !is_bot()) {
  setPostViews(get_the_ID());
} ?>
<main>
  <div class="page-head">
    <div class="page-head__title">Column</div>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/column/column-head.jpg" alt="手紙と赤いボールペン"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/column/column-head_sp.jpg" alt="手紙と赤いボールペン" />
      </picture>
    </div>
  </div>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
  <div class="column-contents column-contents--top-margin page-body">
    <div class="column-contents__inner inner">
      <section class="column-contents__content column-content">
        <div class="column-content__archive column-archive">
          <time class="column-archive__date"
            datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
          <h1 class="column-archive__title"><?php the_title(); ?></h1>
          <div class="column-archive__image">
            <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>"
              alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
            <?php else : ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png" alt="デフォルト画像" />
            <?php endif; ?>
          </div>
          <div class="column-archive__body">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="column-contents__pagination">
          <?php if (get_previous_post_link()) : ?>
          <div class="column-contents__prev">
            <?php previous_post_link('%link', '<span></span>'); ?>
          </div>
          <?php endif; ?>
          <?php if (get_next_post_link()) : ?>
          <div class="column-contents__next">
            <?php next_post_link('%link', '<span></span>'); ?>
          </div>
          <?php endif; ?>
        </div>
      </section>
      <div class="column-contents__sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php
    endwhile;
  endif; ?>
  <?php get_footer(); ?>