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
  <div class="contact-thanks contact-thanks--top-margin page-body">
    <div class="contact-thanks__inner inner">
      <p class="contact-thanks__head">お問い合わせ内容を送信完了しました。</p>
      <p class="contact-thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile">
        誠にありがとうございます。<br>
        お送り頂きました内容を確認の上、<br class="u-mobile">
        3営業日以内に折り返しご連絡させて頂きます。<br>
        また、ご記入頂いたメールアドレスへ、<br class="u-mobile">
        自動返信の確認メールをお送りしております。</p>
    </div>
  </div>
</main>
<?php get_footer(); ?>