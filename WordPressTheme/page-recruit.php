<?php get_header(); ?>
<main>
  <section class="page-head">
    <h1 class="page-head__title">Recruit</h1>
    <div class="page-head__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/recruit/recruit-head.jpg" alt="海に潜る写真"
          media="(min-width: 768px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/recruit/recruit-head_sp.jpg" alt="海に潜る写真" />
      </picture>
    </div>
  </section>
  <?php get_template_part('template/parts', 'breadcrumbs'); ?>
  <div class="recruit-page recruit-page-margin">
    <div class="recruit-page__inner inner">
      <div class="recruit-page__mv">
        <div class="recruit-page__image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-mv.jpg" alt="">
        </div>
        <div class="recruit-page__box">
          <p class="recruit-page__catch">未来をつくる仕事を、ここで。</p>
          <p class="recruit-page__message">Hygieia
            Systemsでは、食品製造を清潔で安全、そして効率的にする革新的なソリューションを提供しています。私たちと一緒に、食品業界の未来を形作りませんか？社員一人ひとりが活躍できる環境を整え、あなたの成長を全力でサポートします。
          </p>
        </div>
      </div>
      <section class="recruit-page__charm">
        <h2 class="recruit-page__charm-title">3つの魅力</h2>
        <div class="recruit-page__charm-contents">
          <div class="recruit-page__charm-item">
            <div class="recruit-page__charm-icon"><img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/charm01.png" alt=""></div>
            <p class="recruit-page__charm-name">清潔で安全な食品製造</p>
            <p class="recruit-page__charm-text">世界基準を満たす衛生的なソリューションを
              提供しています。</p>
          </div>
          <div class="recruit-page__charm-item">
            <div class="recruit-page__charm-icon"><img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/charm02.png" alt=""></div>
            <p class="recruit-page__charm-name">グローバルな活躍の場</p>
            <p class="recruit-page__charm-text">国内外で活躍できるプロジェクトに参加可能</p>
          </div>
          <div class="recruit-page__charm-item">
            <div class="recruit-page__charm-icon"><img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/charm03.png" alt=""></div>
            <p class="recruit-page__charm-name">成長できる環境</p>
            <p class="recruit-page__charm-text">スキルアップやキャリア形成を支援する制度を
              整えています。</p>
          </div>
        </div>
      </section>
      <section class="recruit-page__jobs">
        <ul class="recruit-page__tabs job-tabs">
          <li class="job-tabs__button tab tab--active js-tab">
            <a href="#engineer">
              エンジニア
            </a>
          </li>
          <li class="job-tabs__button tab js-tab">
            <a href="#sales">
              セールスコンサルタント
            </a>
          </li>
          <li class="job-tabs__button tab js-tab">
            <a href="#maintenance">
              メンテナンススタッフ
            </a>
          </li>
        </ul>
        <div class="recruit-page__contents">
          <section id="engineer-content" class="recruit-page__content job-content job-content--active js-tab-content">
            <p class="job-content__title">先輩の声</p>
            <div class="job-content__inner">
              <div class="job-content__voices">
                <div class="job-content__voice">
                  <div class="job-content__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit01.jpg" alt="">
                  </div>
                  <p class="job-content__text">自分が設計した機器が食品製造ラインで稼働する瞬間に達成感を感じます。Hygieia
                    Systemsでは挑戦的なプロジェクトに参加でき、成長を実感できる環境が魅力です。</p>
                </div>
                <div class="job-content__voice">
                  <div class="job-content__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit02.jpg" alt="">
                  </div>
                  <p class="job-content__text">自分が設計した機器が食品製造ラインで稼働する瞬間に達成感を感じます。Hygieia
                    Systemsでは挑戦的なプロジェクトに参加でき、成長を実感できる環境が魅力です。</p>
                </div>
              </div>
              <div class="job-content__wrapper">
                <p class="job-content__name">機械設計</p>
                <div class="job-content__row">
                  <div class="job-content__column">
                    <p class="job-content__list-title">業務内容</p>
                    <ul class="job-content__list">
                      <li>食品製造機器の設計</li>
                      <li>製品のプロトタイプ開発</li>
                      <li>製造プロセスのサポート</li>
                      <li>既存製品の改良</li>
                    </ul>
                  </div>
                  <div class="job-content__column">
                    <p>必要なスキル・資格</p>
                    <ul class="job-content__list">
                      <li>機械工学や関連分野の学位</li>
                      <li>CADソフトウェアの操作経験</li>
                      <li>機械設計の知識と経験</li>
                      <li>問題解決能力とチームワークスキル</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="job-content__wrapper">
                <p class="job-content__name">電気設計</p>
                <div class="job-content__row">
                  <div class="job-content__column">
                    <p class="job-content__list-title">業務内容</p>
                    <ul class="job-content__list">
                      <li>食品製造機器の設計</li>
                      <li>製品のプロトタイプ開発</li>
                      <li>製造プロセスのサポート</li>
                      <li>既存製品の改良</li>
                    </ul>
                  </div>
                  <div class="job-content__column">
                    <p>必要なスキル・資格</p>
                    <ul class="job-content__list">
                      <li>機械工学や関連分野の学位</li>
                      <li>CADソフトウェアの操作経験</li>
                      <li>機械設計の知識と経験</li>
                      <li>問題解決能力とチームワークスキル</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="job-content__point">
                <h2 class="job-content__title">募集要項</h2>
                <dl class="job-content__point-list table-list">
                  <div class="table-list__item table-item">
                    <dt class="table-item__title">2024.01</dt>
                    <dd class="table-item__text">Hygieia Systems（ハイジア システムズ）</dd>
                  </div>
                  <div class="table-list__item table-item">
                    <dt class="table-item__title">20xx.01</dt>
                    <dd class="table-item__text">2003年</dd>
                  </div>
                  <div class="table-list__item table-item">
                    <dt class="table-item__title">20xx.01</dt>
                    <dd class="table-item__text">東京都千代田区丸の内1-1-1　Hygieiaビル</dd>
                  </div>
                  <div class="table-list__item table-item">
                    <dt class="table-item__title">20xx.01</dt>
                    <dd class="table-item__text">代表取締役社長 山田太郎</dd>
                  </div>
                  <div class="table-list__item table-item">
                    <dt class="table-item__title">20xx.01</dt>
                    <dd class="table-item__text">150名</dd>
                  </div>
                  <div class="table-list__item table-item">
                    <dt class="table-item__title">20xx.01</dt>
                    <dd class="table-item__text">1億円</dd>
                  </div>
                  <div class="table-list__item table-item">
                    <dt class="table-item__title">2024.12</dt>
                    <dd class="table-item__text">国内拠点: 東京、名古屋、大阪<br>国内拠点: 東京、名古屋、大阪<br>
                      海外拠点: シンガポール、ドイツ（フランクフルト）</dd>
                  </div>
                </dl>
              </div>
            </div>
          </section>
          <section id="sales-content" class="recruit-page__content tab-content js-tab-content">
            <div class="tab-content__inner">
              <h2 class="tab-content__title">PackProシリーズ</h2>
              <p class="tab-content__text">
                PackProシリーズは、Hygieia Systemsが提供する食品製造業界向けの次世代包装機器の製品群です。正確で効率的な包装を実現し、食品の品質維持、衛生、安全性を最適化することを目的としています。
              </p>
              <ul class="tab-content__list">
                <li>1. 高度な衛生管理</li>
                <li>2. 生産効率の向上</li>
                <li>3. データ駆動型の管理</li>
                <li>4. 持続可能性</li>
              </ul>
            </div>
            <div class="tab-content__image"><img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/product/packpro.jpg" alt="ライセンス講習の写真">
            </div>
          </section>
          <section id="maintenance-content" class="recruit-page__content tab-content js-tab-content">
            <div class="tab-content__inner">
              <h2 class="tab-content__title">SanitiFlowシステム</h2>
              <p class="tab-content__text">
                SanitiFlowシステムは、食品製造現場向けにHygieia
                Systemsが開発した次世代の衛生管理および自動化ソリューションです。食品の安全性と効率性を最大化するために設計されており、以下のような特長があります。
              </p>
              <ul class="tab-content__list">
                <li>1. 高度な衛生管理</li>
                <li>2. 生産効率の向上</li>
                <li>3. データ駆動型の管理</li>
                <li>4. 持続可能性</li>
              </ul>
            </div>
            <div class="tab-content__image"><img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/product/sanitiflow.jpg" alt="ライセンス講習の写真"></div>
          </section>
        </div>
      </section>
    </div>
  </div>
  <?php get_footer(); ?>