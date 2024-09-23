<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">FAQ</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/faq/faq-img.jpg" alt="ビーチの写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/faq/faq-img_sp.jpg" alt="ビーチの写真" />
      </picture>
    </div>
  </section>
  <nav class="breadcrumbs breadcrumbs--top-margin">
    <div class="breadcrumb__inner inner">
      <ul class="breadcrumbs__list">
        <li class="breadcrumbs__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li class="breadcrumbs__item"><a href="#">よくある質問</a></li>
      </ul>
    </div>
  </nav>
  <div class="faq-list faq-list--top-margin page-body">
    <div class="faq-list__inner inner">
      <?php $group = SCF::get('faq');
      foreach ($group as $faq):
      ?>
      <section class="faq-list__item faq-item">
        <h2 class="faq-item__question js-faq-question">
          <?php echo $faq['question']; ?>
          <span class="faq-item__icon open"></span>
        </h2>
        <div class="faq-item__answer">
          <?php echo $faq['answer']; ?>
        </div>
      </section>
      <?php
      endforeach;
      ?>
    </div>
  </div>
  <?php get_footer(); ?>