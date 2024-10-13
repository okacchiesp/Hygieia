<?php get_header(); ?>
<main>
  <div class="page-green">
    <?php get_template_part('parts/parts', 'contact'); ?>
    <div class="error">
      <div class="error__inner inner">
        <p class="error__title">404</p>
        <p class="error__text">申し訳ありません。<br>
          お探しのページが見つかりません。</p>
        <div class="error__btn">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--white">Page TOP<span></span></a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>