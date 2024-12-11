<?php if (!is_page('contact') && !is_404()) : ?>
  <section class="contact u-section-margin">
    <div class="contact__inner inner">
      <div class="contact__header section-header">
        <p class="section-header__title">Contact</p>
        <h2 class="section-header__subtitle">お問い合わせ</h2>
      </div>
      <p class="contact__text">製品や事業内容についてご不明点やお困りごとがありましたら、お気軽にお問い合わせください。</p>
      <div class="contact__tel"><a href="tel:048-000-0000">TEL：048-000-0000</a><span>FAX：048-000-0000</span></div>
      <div class="contact__time"><small>営業時間 8:30~17:30</small><small>休業日 土日祝日（弊社カレンダーによる）</small></div>
      <div class="contact__btn"><a href="<?php echo esc_url(home_url('/')); ?>" class="button"><img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mail.png" alt="">お問い合わせフォーム</a></div>
    </div>
  </section>
  <div class="map"><iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5938.9981144078165!2d139.3910060613415!3d36.13881705107622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1733316535487!5m2!1sja!2sjp"
      style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
<?php endif; ?>
</main>
<!-- <div class="to-top">
  <a href="#top"></a>
</div> -->
<footer class="footer <?php if (is_page('contact')) echo 'footer-margin'; ?>">
  <div class="footer__inner inner">
    <nav class="footer__nav footer-nav">
      <ul class="footer-nav__list">
        <li class="footer-nav__item">
          <a href="<?php echo esc_url(home_url('/company')); ?>" class="footer-nav__link">会社案内</a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo esc_url(home_url('/product')); ?>" class="footer-nav__link">製品情報</a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo esc_url(home_url('/works')); ?>" class="footer-nav__link">実績</a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="footer-nav__link">採用情報</a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo esc_url(home_url('/faq')); ?>" class="footer-nav__link">よくある質問</a>
        </li>
      </ul>
      <ul class="footer-nav__list">
        <li class="footer-nav__item">
          <a href="<?php echo esc_url(home_url('/column')); ?>" class="footer-nav__link">コラム</a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="footer-nav__link">お問合せ</a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo esc_url(home_url('/privacy')); ?>" class="footer-nav__link">プライバシーポリシー</a>
        </li>
        <li class="footer-nav__item">
          <a href="<?php echo esc_url(home_url('/sitemap')); ?>" class="footer-nav__link">サイトマップ</a>
        </li>
      </ul>
    </nav>
    <div class="footer__sns">
      <a href="https://www.facebook.com/" class="footer__snslink" target="_blank"><img
          src="<?php echo get_theme_file_uri(); ?>/assets/images/top/facebook.png" alt="" /></a><a
        href="https://www.instagram.com/" class="footer__snslink" target="_blank"><img
          src="<?php echo get_theme_file_uri(); ?>/assets/images/top/youtube.png" alt="" /></a>
    </div>

  </div>
  <div class="footer__copyright">
    Copyright &copy; 2021 - 2023 Hygieia LLC. All Rights Reserved.
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>