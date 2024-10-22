<aside class="sidebar">
  <secrion class="sidebar__popular popular-article">
    <h2 class="popular-article__title sidebar-title"><img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/whale_black.png" alt=""
        class="sidebar-title__icon">人気記事</h2>
    <?php
    $popular_args = array(
      'post_type'       => 'post',              // 投稿タイプを指定
      'meta_key'        => 'post_views_count',  // 閲覧数を指定
      'orderby'         => 'meta_value_num',    // ソートの基準を閲覧数に
      'order'           => 'DESC',              // 降順（閲覧数が多い順）でソート
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
          <img src="<?php echo esc_url(get_the_post_thumbnail_url($post, 'post-thumbnail')); ?>" alt="">
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
  <section class="sidebar__comment comment">
    <h2 class="comment__title sidebar-title"><img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/whale_black.png" alt=""
        class="sidebar-title__icon">口コミ</h2>
    <div class="comment__list comment-cards">
      <?php
      $args = array(
        'post_type' => 'voice',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $voice_query = new WP_Query($args);
      if ($voice_query->have_posts()) : while ($voice_query->have_posts()) : $voice_query->the_post();
      ?>
      <div class="comment-cards__item comment-card">
        <div class="comment-card__image">
          <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
          <?php endif; ?></div>
        <p class="comment-card__age"><?php the_field('age'); ?>代(<?php the_field('gender'); ?>)</p>
        <h3 class="comment-card__title"><?php the_title(); ?></h3>
      </div>
      <?php endwhile;
        wp_reset_postdata();
      else : ?>
      <p>現在、口コミはありません</p>
      <?php endif; ?>
    </div>
    <div class="comment__btn">
      <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="button">View more<span></span></a>
    </div>
  </section>
  <section class="sidebar__campaign side-campaign">
    <h2 class="comment__title sidebar-title"><img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/whale_black.png" alt=""
        class="sidebar-title__icon">キャンペーン</h2>
    <div class="side-campaign__list side-campaign-cards">
      <?php
      $latest_campaign_posts = get_latest_archive_campaign_posts(2);
      if ($latest_campaign_posts->have_posts()) :
        while ($latest_campaign_posts->have_posts()) : $latest_campaign_posts->the_post();
      ?>
      <div class="side-campaign-cards__link">
        <div class="side-campaign-cards__item campaign-card">
          <div class="campaign-card__image">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
            <?php else : ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/no-image.png" alt="デフォルト画像" />
            <?php endif; ?>
          </div>
          <div class="campaign-card__meta">
            <div class="campaign-card__meta-head campaign-card__meta-head--center">
              <h3 class="campaign-card__title"><?php the_title(); ?></h3>
            </div>
            <div class="campaign-card__meta-body">
              <p class="campaign-card__text">全部コミコミ(お一人様)</p>
              <p class="campaign-card__price">
                <?php
                    $price = get_field('price');
                    ?>
                <span>¥<?php echo number_format($price['normal-price']); ?></span>¥<?php echo number_format($price['campaign-price']); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        ?>
      <p>キャンペーンが見つかりませんでした。</p>
      <?php endif; ?>
    </div>
    <div class="side-campaign__btn">
      <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="button">View more<span></span></a>
    </div>
  </section>
  <section class="side__archive archive">
    <h2 class="comment__title sidebar-title"><img
        src="<?php echo get_theme_file_uri(); ?>/assets/images/blog/whale_black.png" alt=""
        class="sidebar-title__icon">アーカイブ</h2>
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