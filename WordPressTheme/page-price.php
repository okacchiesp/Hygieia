<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Price</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/price/price-img.jpg" alt="海に潜る写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/price-img_sp.jpg" alt="海に潜る写真" />
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
  <div class="price-lists price-lists--top-margin page-body">
    <div class="price-lists__inner inner">
      <section class="price-lists__item price-list" id="license">
        <h2 class="price-list__header">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/whale__white.png" alt="">
          ライセンス講習
        </h2>
        <table class="price-list__table">
          <?php $group = SCF::get('license');
          foreach ($group as $license):
          ?>
          <tr>
            <td><?php echo $license['license-course']; ?></td>
            <td>¥<?php echo $license['license-price']; ?></td>
          </tr>
          <?php
          endforeach;
          ?>
        </table>
      </section>
      <section class="price-lists__item price-list" id="diving">
        <h2 class="price-list__header">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/whale__white.png" alt="">
          体験ダイビング
        </h2>
        <table class="price-list__table">
          <?php $group = SCF::get('diving');
          foreach ($group as $diving):
          ?>
          <tr>
            <td><?php echo $diving['diving-course']; ?></td>
            <td>¥<?php echo $diving['diving-price']; ?></td>
          </tr>
          <?php
          endforeach;
          ?>
        </table>
      </section>
      <section class="price-lists__item price-list" id="fundiving">
        <h2 class="price-list__header">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/whale__white.png" alt="">
          ファンダイビング
        </h2>
        <table class="price-list__table">
          <?php $group = SCF::get('fun');
          foreach ($group as $fun):
          ?>
          <tr>
            <td><?php echo $fun['fun-course']; ?></td>
            <td>¥<?php echo $fun['fun-price']; ?></td>
          </tr>
          <?php
          endforeach;
          ?>
        </table>
      </section>
      <section class="price-lists__item price-list">
        <h2 class="price-list__header">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/whale__white.png" alt="">
          スペシャルダイビング
        </h2>
        <table class="price-list__table">
          <?php $group = SCF::get('special');
          foreach ($group as $special):
          ?>
          <tr>
            <td><?php echo $special['special-course']; ?></td>
            <td>¥<?php echo $special['special-price']; ?></td>
          </tr>
          <?php
          endforeach;
          ?>
        </table>
      </section>
    </div>
  </div>
  <?php get_footer(); ?>