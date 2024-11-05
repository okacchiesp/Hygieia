<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Voice</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/voice/voice-img.jpg" alt="ダイビングの写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice/voice-img_sp.jpg" alt="" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <div class="voice-section voice-section--top-margin page-body">
    <div class="voice-section__inner inner">
      <div class="voice-section__tags category-tags">
        <ul class="category-tags__list">
          <li
            class="category-tags__item category-tag <?php if (is_post_type_archive('voice')) echo 'category-tag--active'; ?>">
            <a href="<?php echo get_post_type_archive_link('voice'); ?>">ALL</a>
          </li>
          <?php
          $current_term = get_queried_object();
          $terms = get_terms(array(
            'taxonomy' => 'voice_category',
            'hide_empty' => false,
          ));
          foreach ($terms as $term) {
            $active_class = ($current_term->term_id == $term->term_id) ? 'category-tag--active' : '';
            echo '<li class="category-tags__item category-tag ' . $active_class . '"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
          }
          ?>
        </ul>
      </div>
      <div class="voice-section__content">
        <div class="voice__items voice-cards">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>
              <section class="voice-cards__item voice-card">
                <div class="voice-card__head">
                  <div class="voice-card__meta">
                    <div class="voice-card__metahead">
                      <?php
                      $age = get_field('age');
                      $gender = get_field('gender');
                      if ($age && $gender):
                      ?>
                        <p class="voice-card__age"><?php echo esc_html($age); ?>代(<?php echo esc_html($gender); ?>)</p>
                      <?php endif; ?>
                      <p class="voice-card__category category-tag">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'voice_category');
                        if ($terms && !is_wp_error($terms)) :
                          foreach ($terms as $term) : ?>
                            <a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo esc_html($term->name); ?></a>
                        <?php endforeach;
                        endif; ?>
                      </p>
                    </div>
                    <h2 class="voice-card__title">
                      <?php the_title(); ?>
                    </h2>
                  </div>
                  <div class="voice-card__image js-slidein">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png" alt="デフォルト画像" />
                    <?php endif; ?>
                  </div>
                </div>
                <p class="voice-card__text">
                  <?php the_content(); ?>
                </p>
              </section>
            <?php endwhile; ?>
        </div>
        <?php get_template_part('template/parts', 'wppagenavi'); ?>
      <?php endif; ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>