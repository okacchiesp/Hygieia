<?php get_header(); ?>
<main>
  <div class="page-green">
    <nav class="breadcrumbs breadcrumbs--top-margin">
      <div class="breadcrumbs__inner inner">
        <ul class="breadcrumbs__list">
          <li class="breadcrumbs__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
          <li class="breadcrumbs__item"><a href="#">404</a></li>
        </ul>
      </div>
    </nav>
    <div class="error">
      <div class="error__inner inner">
        <p class="error__title">404</p>
        <p class="error__text">申し訳ありません。<br>
          お探しのページが見つかりません。</p>
        <div class="error__btn">
          <a href="" class="button button--white">Page TOP<span></span></a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>