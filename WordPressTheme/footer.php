<section class="contact u-section-margin">
  <div class="contact__inner inner">
    <div class="contact__box">
      <div class="contact__detail">
        <div class="contact__logo">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green_pc.png" alt="緑のロゴ"
              media="(min-width: 768px)" />
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green.png" alt="" />
          </picture>
        </div>
        <div class="contact__contents">
          <div class="contact__content">
            <address class="contact__address">
              <p class="contact__address-number">沖縄県那覇市1-1</p>
              <a href="tel:0120-000-0000" class="contact__tel">TEL:0120-000-0000</a>
            </address>
            <p class="contact__time">営業時間:8:30-19:00</p>
            <p class="contact__holiday">定休日:毎週火曜日</p>
          </div>
          <div class="contact__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.5242133031666!2d127.67657937614526!3d26.212151377071688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd6e046d289%3A0x345ffb669fadbd4f!2z6YKj6KaH5biC5b255omA!5e0!3m2!1sja!2sjp!4v1712233821988!5m2!1sja!2sjp"
              style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="contact__link">
        <div class="contact__header section-header">
          <p class="section-header__title section-header--big">
            Contact
          </p>
          <h2 class="section-header__contact-subtitle">お問合せ</h2>
        </div>
        <p class="contact__text">ご予約・お問い合わせはコチラ</p>
        <div class="contact__btn">
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">Contact us<span></span></a>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
<div class="to-top">
  <a href="#top"></a>
</div>
<footer class="footer footer--top-margin">
  <div class="footer__inner inner">
    <div class="footer__head">
      <div class="footer__logo">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png" alt="" />
      </div>
      <div class="footer__sns">
        <a href="https://www.facebook.com/" class="footer__snslink" target="_blank"><img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook.png" alt="" /></a><a
          href="https://www.instagram.com/" class="footer__snslink" target="_blank"><img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram.png" alt="" /></a>
      </div>
    </div>
    <nav class="footer__nav footer-nav">
      <div class="footer-nav__lists">
        <ul class="footer-nav__list">
          <li class="footer-nav__item">
            <a href="<?php echo esc_url(home_url('/campaign')); ?>">キャンペーン</a>
            <ul class="footer-nav__sublist">
              <li class="footer-nav__subitem">
                <a href="<?php echo esc_url(home_url('/campaign#license')); ?>">ライセンス取得</a>
              </li>
              <li class="footer-nav__subitem">
                <a href="<?php echo esc_url(home_url('/campaign#diving')); ?>">貸切体験ダイビング</a>
              </li>
              <li class="footer-nav__subitem">
                <a href="<?php echo esc_url(home_url('/campaign#night')); ?>">ナイトダイビング</a>
              </li>
            </ul>
          </li>
          <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/about-us')); ?>">私たちについて</a></li>
        </ul>
        <ul class="footer-nav__list">
          <li class="footer-nav__item">
            <a href="<?php echo esc_url(home_url('/information')); ?>">ダイビング情報</a>
            <ul class="footer-nav__sublist">
              <li class="footer-nav__subitem">
                <a href="<?php echo esc_url(home_url('/information#license')); ?>">ライセンス講習</a>
              </li>
              <li class="footer-nav__subitem">
                <a href="<?php echo esc_url(home_url('/information#diving')); ?>">体験ダイビング</a>
              </li>
              <li class="footer-nav__subitem">
                <a href="<?php echo esc_url(home_url('/information#fun')); ?>">ファンダイビング</a>
              </li>
            </ul>
          </li>
          <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/blog')); ?>">ブログ</a></li>
        </ul>
        <ul class="footer-nav__list">
          <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a></li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url(home_url('/price')); ?>">料金一覧</a>
            <ul class="footer-nav__sublist">
              <li class="footer-nav__subitem">
                <a href="<?php echo esc_url(home_url('/price#license')); ?>">ライセンス講習</a>
              </li>
              <li class="footer-nav__subitem">
                <a href="<?php echo esc_url(home_url('/price#experience')); ?>">体験ダイビング</a>
              </li>
              <li class="footer-nav__subitem">
                <a href="<?php echo esc_url(home_url('/price#fun')); ?>">ファンダイビング</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="footer-nav__list">
          <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/faq')); ?>">よくある質問</a></li>
          <li class="footer-nav__item">
            <a href="<?php echo esc_url(home_url('/privacypolicy')); ?>">プライバシー<br class="u-mobile" />ポリシー</a>
          </li>
          <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/terms-of-service')); ?>">利用規約</a></li>
          <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問合せ</a></li>
          <li class="footer-nav__item"><a href="<?php echo esc_url(home_url('/sitemap')); ?>">サイトマップ</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="footer__copyright">
    Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>