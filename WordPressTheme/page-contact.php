<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Contact</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/contact/contact-img.jpg" alt="ビーチの写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact/contact-img_sp.jpg" alt="ビーチの写真" />
      </picture>
    </div>
  </section>
  <nav class="breadcrumbs breadcrumbs--top-margin">
    <div class="breadcrumb__inner inner">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div>
  </nav>
  <div class="contact-form contact-form--top-margin page-body">
    <div class="contact-form__inner inner">
      <?php the_content(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>