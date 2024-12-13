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
      <section class="recruit-page__jobs" id="engineer">
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
            </div>
          </section>
          <section id="sales-content" class="recruit-page__content job-content js-tab-content">
            <p class="job-content__title">先輩の声</p>
            <div class="job-content__inner">
              <div class="job-content__voices">
                <div class="job-content__voice">
                  <div class="job-content__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit01.jpg" alt="">
                  </div>
                  <p class="job-content__text">お客様の課題を解決し、信頼を築けたときの達成感は格別です。製品知識や提案力が磨かれ、自分自身の成長を実感しています。</p>
                </div>
                <div class="job-content__voice">
                  <div class="job-content__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit02.jpg" alt="">
                  </div>
                  <p class="job-content__text">
                    お客様の課題を解決し、信頼を築けたときの達成感は格別です。製品知識や提案力が磨かれ、自分自身の成長を実感しています。お客様の課題を解決し、信頼を築けたときの達成感は格別です。製品知識や提案力が磨かれ、自分自身の成長を実感しています。
                  </p>
                </div>
              </div>
              <div class="job-content__wrapper">
                <p class="job-content__name">セールスコンサルタント</p>
                <div class="job-content__row">
                  <div class="job-content__column">
                    <p class="job-content__list-title">業務内容</p>
                    <ul class="job-content__list">
                      <li>クライアント対応と提案</li>
                      <li>営業活動</li>
                      <li>製品知識の活用</li>
                      <li>業績管理</li>
                      <li>チーム連携</li>
                    </ul>
                  </div>
                  <div class="job-content__column">
                    <p>必要なスキル・資格</p>
                    <ul class="job-content__list">
                      <li>コミュニケーション能力</li>
                      <li>営業力</li>
                      <li>技術知識</li>
                      <li>問題解決力</li>
                      <li>ビジネス感覚</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="maintenance-content"
            class="recruit-page__content job-content js-tab-content">
            <p class="job-content__title">先輩の声</p>
            <div class="job-content__inner">
              <div class="job-content__voices">
                <div class="job-content__voice">
                  <div class="job-content__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit01.jpg" alt="">
                  </div>
                  <p class="job-content__text">現場での対応力が求められる仕事ですが、機械が正常に稼働しお客様に感謝されると、大きなやりがいを感じます。</p>
                </div>
                <div class="job-content__voice">
                  <div class="job-content__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit02.jpg" alt="">
                  </div>
                  <p class="job-content__text">
                    現場での対応力が求められる仕事ですが、機械が正常に稼働しお客様に感謝されると、大きなやりがいを感じます。現場での対応力が求められる仕事ですが、機械が正常に稼働しお客様に感謝されると、大きなやりがいを感じます。
                  </p>
                </div>
              </div>
              <div class="job-content__wrapper">
                <p class="job-content__name">メンテナンススタッフ</p>
                <div class="job-content__row">
                  <div class="job-content__column">
                    <p class="job-content__list-title">業務内容</p>
                    <ul class="job-content__list">
                      <li>設備の点検・保守</li>
                      <li>トラブルシューティング</li>
                      <li>設置・導入サポート</li>
                      <li>書類作成・報告</li>
                    </ul>
                  </div>
                  <div class="job-content__column">
                    <p>必要なスキル・資格</p>
                    <ul class="job-content__list">
                      <li>技術知識</li>
                      <li>問題解決能力</li>
                      <li>コミュニケーション能力</li>
                      <li>体力</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="job-content__point" id="point">
          <h2 class="job-content__title">募集要項</h2>
          <dl class="job-content__point-list table-list">
            <?php
            $checkbox = get_field('employment');
            if ($checkbox):
            ?>
              <div class="table-list__item table-item">
                <dt class="table-item__title">雇用形態</dt>
                <dd class="table-item__text">
                  <?php foreach ($checkbox as $index => $value): ?><?php echo esc_html($value); ?><?php if ($index < count($checkbox) - 1) echo ', '; ?><?php endforeach; ?>
                </dd>
              </div>
            <?php endif; ?>
            <?php
            $checkbox = get_field('place');
            if ($checkbox):
            ?>
              <div class="table-list__item table-item">
                <dt class="table-item__title">勤務地</dt>
                <dd class="table-item__text">
                  <?php foreach ($checkbox as $index => $value): ?><?php echo esc_html($value); ?><?php if ($index < count($checkbox) - 1) echo ', '; ?><?php endforeach; ?>
                </dd>
              </div>
            <?php endif; ?>
            <?php
            $time = get_field('time');
            if ($time):
            ?>
              <div class="table-list__item table-item">
                <dt class="table-item__title">勤務時間</dt>
                <dd class="table-item__text"><?php echo $time['start']; ?>〜<?php echo $time['end']; ?></dd>
              </div>
            <?php endif; ?>
            <?php
            $salary = get_field('salary');
            if ($salary):
            ?>
              <div class="table-list__item table-item">
                <dt class="table-item__title">給与</dt>
                <dd class="table-item__text">
                  年収<?php echo $salary['min']; ?>〜<?php echo $salary['max']; ?>万円（経験・スキルに応じて優遇）<br>
                  昇給年<?php echo $salary['salaryraise']; ?>回 賞与年<?php echo $salary['bonus']; ?>回</dd>
              </div>
            <?php endif; ?>
            <?php
            $welfare = get_field('welfare');
            if ($welfare)
            ?>
            <div class="table-list__item table-item">
              <dt class="table-item__title">福利厚生</dt>
              <dd class="table-item__text"><?php echo $welfare; ?></dd>
            </div>
            <?php
            $holiday = get_field('holiday');
            if ($holiday)
            ?>
            <div class="table-list__item table-item">
              <dt class="table-item__title">休日・休暇</dt>
              <dd class="table-item__text"><?php echo $holiday; ?></dd>
            </div>
            <?php
            $flow = get_field('flow');
            if ($flow)
            ?>
            <div class="table-list__item table-item">
              <dt class="table-item__title">選考フロー</dt>
              <dd class="table-item__text"><?php echo $flow; ?></dd>
            </div>
          </dl>
        </div>
      </section>
    </div>
  </div>
  <?php get_footer(); ?>