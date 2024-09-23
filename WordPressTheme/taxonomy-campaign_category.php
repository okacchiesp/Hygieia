<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Campaign</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign-img.jpg" alt="海亀の写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign/campaign-img_sp.jpg" alt="" />
      </picture>
    </div>
  </section>
  <nav class="breadcrumbs breadcrumbs--top-margin">
    <div class="breadcrumb__inner inner">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display')) {
            bcn_display();
        }?>
      </div>
    </div>
  </nav>
  <section class="campaign-section page-body page-body--top-margin">
    <div class="campaign-section__inner inner">
      <div class="campaign-section__tags category-tags">
        <ul class="category-tags__list">
          <li
            class="category-tags__item category-tag <?php if (is_post_type_archive('campaign')) echo 'category-tag--active'; ?>">
            <a href="<?php echo get_post_type_archive_link('campaign'); ?>">ALL</a>
          </li>
          <?php
          $current_term = get_queried_object();
          $terms = get_terms(array(
              'taxonomy' => 'campaign_category',
              'hide_empty' => false,
          ));
          foreach ($terms as $term) {
              $active_class = ($current_term->term_id == $term->term_id) ? 'category-tag--active' : '';
              echo '<li class="category-tags__item category-tag ' . $active_class . '"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
          }
          ?>
        </ul>
      </div>
      <div class="campaign-section__content">
        <div class="campaign-section__cards campaign-cards">
          <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $args = array(
                'post_type' => 'campaign',
                'paged' => $paged,
                'posts_per_page' => 4,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'campaign_category',
                        'field' => 'slug',
                        'terms' => $current_term->slug,
                    ),
                ),
          );
          $the_query = new WP_Query( $args );
          if( $the_query->have_posts() ) :
            while( $the_query->have_posts() ) :
              $the_query->the_post(); ?>
          <section class="campaign-cards__item campaign-card campaign-card--big">
            <div class="campaign-card__image">
              <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail(); ?>
              <?php endif; ?>
            </div>
            <div class="campaign-card__meta">
              <div class="campaign-card__meta-head">
                <p class="campaign-card__category category-tag">
                  <?php
                  $terms = get_the_terms(get_the_ID(), 'campaign_category');
                  if ($terms && !is_wp_error($terms)) {
                      $term_links = array();
                      foreach ($terms as $term) {
                          $term_links[] = '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
                      }
                      echo join(", ", $term_links);
                  }
                  ?>
                </p>
                <h2 class="campaign-card__title"><?php the_title(); ?></h2>
              </div>
              <div class="campaign-card__meta-body">
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price">
                  <?php
                  $price = get_field('price');
                  $c_price = get_field('campaign-price');
                  ?>
                  <span>¥<?php echo number_format($price); ?></span>¥<?php echo number_format($c_price); ?>
                </p>
                <div class="campaign-card__detail">
                  <p class="campaign-card__textbox"><?php the_content(); ?></p>
                  <p class="campaign-card__date"><?php the_field('startday'); ?>-<?php the_field('endday'); ?></p>
                  <p class="campaign-card__reserve">ご予約・お問い合わせはコチラ</p>
                  <div class="campaign-card__btn">
                    <a href="<?php echo get_permalink(54); ?>" class="button">Contact us<span></span></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <?php endwhile;?>
        </div>
        <div class="pagination pagination--top-margin">
          <?php
          if ( function_exists( 'wp_pagenavi' ) ) {
            wp_pagenavi( array( 'query' => $the_query ) );
          }
          wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>