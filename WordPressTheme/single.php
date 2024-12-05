<?php get_header(); ?>
<?php if (!is_user_logged_in() && !is_bot()) {
  setPostViews(get_the_ID());
} ?>
<main>
  <div class="page-head">
    <div class="page-head__title">Blog</div>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-img.jpg" alt="海中の写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/blog-img_sp.jpg" alt="海中の写真" />
      </picture>
    </div>
  </div>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
  <div class="blog-contents blog-contents--top-margin page-body">
    <div class="blog-contents__inner inner">
      <section class="blog-contents__content blog-content">
        <div class="blog-content__archive blog-archive">
          <time class="blog-archive__date"
            datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
          <h1 class="blog-archive__title"><?php the_title(); ?></h1>
          <div class="blog-archive__image">
            <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>"
              alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
            <?php else : ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png" alt="デフォルト画像" />
            <?php endif; ?>
          </div>
          <div class="blog-archive__body">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="blog-contents__pagination">
          <?php if (get_previous_post_link()) : ?>
          <div class="blog-contents__prev">
            <?php previous_post_link('%link', '<span></span>'); ?>
          </div>
          <?php endif; ?>
          <?php if (get_next_post_link()) : ?>
          <div class="blog-contents__next">
            <?php next_post_link('%link', '<span></span>'); ?>
          </div>
          <?php endif; ?>
        </div>
      </section>
      <div class="blog-contents__sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php
    endwhile;
  endif; ?>
  <?php get_footer(); ?>