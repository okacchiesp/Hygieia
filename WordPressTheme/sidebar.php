<aside class="sidebar">
  <secrion class="sidebar__popular popular-article">
    <h2 class="popular-article__title sidebar-title">人気記事</h2>
    <?php
    $popular_args = array(
      'meta_key'        => 'post_views_count',  // 閲覧数を指定
      'orderby'         => 'meta_value_num',    // ソートの基準を閲覧数に
      'post_status'     => 'publish',           // 投稿ステータスは公開済み
      'posts_per_page'  => 3,                   // 投稿表示件数は5件
    );
    $popular_query = new WP_Query($popular_args);
    if ($popular_query->have_posts()):
    ?>
    <div class="popular-article__list popular-cards">
      <?php while ($popular_query->have_posts()): $popular_query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="popular-cards__item popular-card">
        <div class="popular-card__image">
          <?php if (has_post_thumbnail()) : ?>
          <img src="<?php echo get_the_post_thumbnail_url(); ?>"
            alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
          <?php else : ?>
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png" alt="デフォルト画像" />
          <?php endif; ?>
        </div>
        <div class="popular-card__inner">
          <time class="popular-card__date"
            datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m/d'); ?></time>
          <h3 class="popular-card__title"><?php the_title(); ?></h3>
        </div>
      </a>
      <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
    <?php else: ?>
    <p>現在、人気記事はありません</p>
    <?php endif; ?>
  </secrion>
  <section class="side__archive archive">
    <h2 class="comment__title sidebar-title">アーカイブ</h2>
    <ul class="archive__list archive-date">
      <?php
      global $wpdb;
      // 年ごとにアーカイブをグループ化して表示
      $years = $wpdb->get_results("SELECT DISTINCT YEAR(post_date) AS year FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
      foreach ($years as $year) :
      ?>
      <li class="archive-date__year"><?php echo $year->year; ?></li>
      <ul class="archive-date__sub">
        <?php
          $months = $wpdb->get_results("SELECT DISTINCT MONTH(post_date) AS month FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '$year->year' ORDER BY post_date DESC");
          foreach ($months as $month) :
          ?>
        <li class="archive-date__month"><a
            href="<?php echo get_month_link($year->year, $month->month); ?>"><?php echo $month->month; ?>月</a></li>
        <?php endforeach; ?>
      </ul>
      <?php endforeach; ?>
    </ul>
  </section>
</aside>