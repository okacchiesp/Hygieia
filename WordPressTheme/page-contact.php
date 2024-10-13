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
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <div class="contact-form contact-form--top-margin page-body">
    <div class="contact-form__inner inner">
      <?php
      echo do_shortcode('[contact-form-7 id="097321a" title="お問い合わせ"]');
      ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>