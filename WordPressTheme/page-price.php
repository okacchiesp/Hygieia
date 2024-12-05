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
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <div class="price-lists price-lists--top-margin page-body">
    <div class="price-lists__inner inner">
      <?php $group = SCF::get('license');
      if (!empty($group) && is_array($group)):
        $check = false;
        foreach ($group as $item) {
          if (!empty($item['license-course']) && !empty($item['license-price'])) {
            $check = true;
            break;
          }
        }
      endif; ?>
      <?php if ($check): ?>
      <section class="price-lists__item price-list" id="license">
        <h2 class="price-list__header">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/whale__white.png" alt="">
          ライセンス講習
        </h2>
        <table class="price-list__table">
          <?php foreach ($group as $license): if (!empty($license['license-course']) && !empty($license['license-price'])): ?>
          <tr>
            <td><?php echo $license['license-course']; ?></td>
            <td>¥<?php echo $license['license-price']; ?></td>
          </tr>
          <?php endif;
            endforeach; ?>
        </table>
      </section>
      <?php endif;
      ?>
      <?php $group = SCF::get('diving');
      if (!empty($group) && is_array($group)):
        $check = false;
        foreach ($group as $item) {
          if (!empty($item['diving-course']) && !empty($item['diving-price'])) {
            $check = true;
            break;
          }
        }
      endif; ?>
      <?php if ($check): ?>
      <section class="price-lists__item price-list" id="diving">
        <h2 class="price-list__header">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/whale__white.png" alt="">
          体験ダイビング
        </h2>
        <table class="price-list__table">
          <?php foreach ($group as $diving): if (!empty($diving['diving-course']) && !empty($diving['diving-price'])): ?>
          <tr>
            <td><?php echo $diving['diving-course']; ?></td>
            <td>¥<?php echo $diving['diving-price']; ?></td>
          </tr>
          <?php endif;
            endforeach;
            ?>
        </table>
      </section>
      <?php endif; ?>
      <?php $group = SCF::get('fun');
      if (!empty($group) && is_array($group)):
        $check = false;
        foreach ($group as $item) {
          if (!empty($item['fun-course']) && !empty($item['fun-price'])) {
            $check = true;
            break;
          }
        }
      endif; ?>
      <?php if ($check): ?>
      <section class="price-lists__item price-list" id="fundiving">
        <h2 class="price-list__header">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/whale__white.png" alt="">
          ファンダイビング
        </h2>
        <table class="price-list__table">
          <?php foreach ($group as $fun): if (!empty($fun['fun-course']) && !empty($fun['fun-price'])): ?>

          <tr>
            <td><?php echo $fun['fun-course']; ?></td>
            <td>¥<?php echo $fun['fun-price']; ?></td>
          </tr>
          <?php endif;
            endforeach;
            ?>
        </table>
      </section>
      <?php endif; ?>
      <?php $group = SCF::get('special');
      if (!empty($group) && is_array($group)):
        $check = false;
        foreach ($group as $item) {
          if (!empty($item['special-course']) && !empty($item['special-price'])) {
            $check = true;
            break;
          }
        }
      endif; ?>
      <?php if ($check): ?>
      <section class="price-lists__item price-list">
        <h2 class="price-list__header">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/whale__white.png" alt="">
          スペシャルダイビング
        </h2>
        <table class="price-list__table">
          <?php foreach ($group as $special): if (!empty($special['special-course']) && !empty($special['special-price'])): ?>
          <tr>
            <td><?php echo $special['special-course']; ?></td>
            <td>¥<?php echo $special['special-price']; ?></td>
          </tr>
          <?php endif;
            endforeach;
            ?>
        </table>
      </section>
      <?php endif; ?>
    </div>
  </div>
  <?php get_footer(); ?>