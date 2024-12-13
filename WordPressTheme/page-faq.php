<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">FAQ</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/faq/faq-head.jpg" alt="はてなをもった人"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/faq/faq-head_sp.jpg" alt="はてなをもった人" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <?php $group = SCF::get('faq');
  if (!empty($group) && is_array($group)):
    $check = false;
    foreach ($group as $item) {
      if (!empty($item['question']) && !empty($item['answer'])) {
        $check = true;
        break;
      }
    }
  endif; ?>
  <?php if ($check): ?>
    <div class="faq-list faq-list--top-margin page-body">
      <div class="faq-list__inner inner">
        <?php
        foreach ($group as $faq):
          if (!empty($faq['question']) && !empty($faq['answer'])): ?>
            <section class="faq-list__item faq-item">
              <h2 class="faq-item__question js-faq-question">
                <?php echo $faq['question']; ?>
                <span class="faq-item__icon open"></span>
              </h2>
              <div class="faq-item__answer">
                <?php echo $faq['answer']; ?>
              </div>
            </section>
        <?php endif;
        endforeach;
        ?>
      </div>
    </div>
  <?php endif; ?>
  <?php get_footer(); ?>