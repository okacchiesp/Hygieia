<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Privacy Policy</h1>
    <div class="page-haed__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri('/assets/images/sitemap/sitemap-img.jpg'); ?>" alt="ビーチの写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri('/assets/images/sitemap/sitemap-img_sp.jpg'); ?>" alt="ビーチの写真" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <section class="legal legal--top-margin page-body">
    <div class="legal__inner inner">
      <h2 class="legal__title"><?php the_title(); ?></h2>
      <div class="legal__text">
        <?php the_content(); ?>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>