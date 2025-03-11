<?php get_header(); ?> <!-- ヘッダーを読み込む -->

<body>
  <!-- コンセプト -->
  <div class="l-concept" id="concept">
    <div class="c-width">
      <div class="p-conceptWrapper">
        <div class="p-concept__item-img--first">
          <picture class="p-concept__item-img--01">
            <!-- PC用の画像 -->
            <source
              media="(min-width:768px)"
              srcset="
               <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic3.webp')); ?> 1x,
                <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic3@2x.webp')); ?> 2x,
                                  " />
            <!-- SP用の画像 -->
            <source
              media="(max-width:767px)"
              srcset="
               <?php echo esc_url(get_theme_file_uri('images/concept/sp-concept_pic3.webp')); ?> 1x,
           " />

            <!-- フォールバック用画像 -->
            <img src="
            <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic3.webp')); ?> 1x,
           " />
          </picture>
          <picture class="p-concept__item-img--02">
            <source
              media="(min-width:768px)"
              srcset="
               <?php echo esc_url(get_theme_file_uri(' images/concept/concept_pic1.webp')); ?> 1x,
                <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic1@2x.webp')); ?> 2x,
                  
                " />
            <source
              media="(max-width:767px)"
              srcset="
               <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic1.webp')); ?> 1x,
           " />

            <img src="
             <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic1.webp')); ?> 1x,
           " />

          </picture>
        </div>
        <div class="p-concept__item-content">
          <div class="p-section c-width">
            <div class="p-concept__item-content--titleSection">
              <h2 class="p-concept__title">Concept</h2>
              <p class="p-concept__catch">
                忙しいあなたに、上質な休息を<br />
                シンプル＆モダンなビジネスホテル
              </p>
            </div>
            <p class="p-concept__item-content--description c-section only_pc">
              JR姫路駅北出口から徒歩8分の好立地。機能性とデザイン性を両立した現代的なビジネスホテルです。全室に高品質ベッドを完備し、快適な睡眠をサポートする羽毛布団のデュベスタイルを採用。ビジネスマンの体調管理に配慮し、個別空調制御システムを導入しています。洗練された室内環境が、出張の疲れを癒し、翌日のパフォーマンス向上をサポートします。
            </p>
            <p
              class="p-concept__item-content--description--sp c-section only_sp">
              <span>
                JR姫路駅北出口から徒歩8分の好立地。<br />機能性とデザイン性を両立した現代的なビジネスホテルです。</span>
              <span>
                全室に高品質ベッドを完備し、<br />
                快適な睡眠をサポートする羽毛布団のデュベスタイルを採用。
              </span>
              <span>ビジネスマンの体調管理に配慮し、<br />個別空調制御システムを導入しています。</span>
              <span>洗練された室内環境が、出張の疲れを癒し、<br />翌日のパフォーマンス向上をサポートします。</span>
            </p>
          </div>
        </div>
        <div class="p-concept__item-img--second">
          <picture class="p-concept__item-img--03">
            <source
              media="(min-width:768px)"
              srcset="
               <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic2.webp')); ?> 1x,
                <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic2@2x.webp')); ?> 2x,            
                " />
            <source
              media="(max-width:767px)"
              srcset="
               <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic2.webp')); ?> 1x,
              " />
            <img src="
              <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic2.webp')); ?> 1x,
            
   " />
          </picture>
          <picture class="p-concept__item-img--04">
            <source
              media="(min-width:768px)"
              srcset="
                <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic4.webp')); ?> 1x,
                <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic4@2x.webp')); ?> 2x,            
                " />

            <source
              media="(max-width:767px)"
              srcset="
               <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic4.webp')); ?> 1x,
             " />
            <img src="
             <?php echo esc_url(get_theme_file_uri('images/concept/concept_pic4.webp')); ?> 1x,
           " />
          </picture>
        </div>
      </div>
    </div>
  </div>
  <!-- 客室 -->
  <section class="l-section" id="top-room">
    <div class="c-width">
      <div class="top-room__contentWrapper">
        <h3 class="c-section-title p-section">
          <span class="c-section-title--en">Rooms</span> 客室
        </h3>
        <p class="p-top-room__item-content--description c-section only_pc">
          当ホテルは、ビジネスパーソンの多様なニーズに応える5タイプ、全61室の客室をご用意しております。<br />
          全室に高品質ベッドと個別空調を完備し、効率的な仕事と質の高い睡眠をサポートいたします。
        </p>
        <p
          class="p-top-room__item-content--description--sp c-section only_sp">
          <span>当ホテルは、ビジネスパーソンの多様なニーズに応える5タイプ、<br />全61室の客室をご用意しております。</span><br />
          <span>全室に高品質ベッドと個別空調を完備し、<br />効率的な仕事と質の高い睡眠を<br />サポートいたします。</span>
        </p>
      </div>

      <!-- Swiperのスライダー -->
      <div class="swiper">
        <!-- Wrapper for slides -->
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture>
              <source
                media="(min-width:768px)"
                srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/single.webp')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('images/room/single@2x.webp')); ?> 2x
          "
                sizes="700px" />
              <source
                media="(max-width:767px)"
                srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/single.webp')); ?> 1x
          "
                sizes="(max-width: 767px) 100vw" />
              <img src="<?php echo esc_url(get_theme_file_uri('images/room/single.webp')); ?>" alt="シングル" />
            </picture>
          </div>

          <div class="swiper-slide">
            <picture>
              <source
                media="(min-width:768px)"
                srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/double_204.webp')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('images/room/double_204@2x.webp')); ?> 2x
          "
                sizes="700px" />
              <source
                media="(max-width:767px)"
                srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/double_204.webp')); ?> 1x
          "
                sizes="(max-width: 767px) 100vw" />
              <img src="<?php echo esc_url(get_theme_file_uri('images/room/double_204.webp')); ?>" alt="ダブル" />
            </picture>
          </div>

          <div class="swiper-slide">
            <picture>
              <source
                media="(min-width:768px)"
                srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/twin.webp')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('images/room/twin@2x.webp')); ?> 2x
          "
                sizes="700px" />
              <source
                media="(max-width:767px)"
                srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/twin.webp')); ?> 1x
          "
                sizes="(max-width: 767px) 100vw" />
              <img src="<?php echo esc_url(get_theme_file_uri('images/room/twin.webp')); ?>" alt="ツイン" />
            </picture>
          </div>

          <div class="swiper-slide">
            <picture>
              <source
                media="(min-width:768px)"
                srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/smoking.webp')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('images/room/smoking@2x.webp')); ?> 2x
          "
                sizes="700px" />
              <source
                media="(max-width:767px)"
                srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/smoking.webp')); ?> 1x
          "
                sizes="(max-width: 767px) 100vw" />
              <img src="<?php echo esc_url(get_theme_file_uri('images/room/smoking.webp')); ?>" alt="喫煙可" />
            </picture>
          </div>

          <div class="swiper-slide">
            <picture>
              <source
                media="(min-width:768px)"
                srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/nonsmoking.webp')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('images/room/nonsmoking@2x.webp')); ?> 2x
          "
                sizes="700px" />
              <source
                media="(max-width:767px)"
                srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/nonsmoking.webp')); ?> 1x
          "
                sizes="(max-width: 767px) 100vw" />
              <img src="<?php echo esc_url(get_theme_file_uri('images/room/nonsmoking.webp')); ?>" alt="禁煙" />
            </picture>
          </div>
        </div>
      </div>

      <a href="#" class="button-roomDetail">客室の詳細はこちら</a>
  </section>

  <!-- ホテルの特徴 -->
  <section class="l-section" id="features">
    <div class="c-width">
      <h2 class="c-section-title p-section">
        <span class="c-section-title--en">Features</span> ホテルの特徴
      </h2>
      <div class="p-features-introduction">
        <!-- 1つ目 -->
        <div class="p-features-introduction__item">
          <div class="p-features-introduction__img">
            <picture>
              <source
                media="(min-width:768px)"
                srcset="<?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_1@2x.webp')); ?> 2x"
                sizes="580px" />
              <source
                media="(max-width:767px)"
                srcset="
                        <?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_1@2x.webp')); ?>,
                        <?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_1.webp')); ?>
                    "
                sizes="(max-width: 767px) 100vw" />
              <img src="<?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_1@2x.webp')); ?>" alt="外観" />
            </picture>
          </div>
          <div class="p-features-introduction__DocumentItem p-section">
            <p class="p-features-introduction__DocumentItem-number">01</p>
            <div class="p-features-introduction__DocumentItem__content">
              <h3 class="p-features-introduction__DocumentItem-title">
                便利な立地で、時間を有効活用
              </h3>
              <p
                class="p-features-introduction__DocumentItem-text c-section only_pc">
                <span>JR姫路駅から徒歩8分、山陽姫路駅から徒歩6分の好立地。</span>
                <span>繁華街へも徒歩1分でアクセス可能です。</span><br />
                <span>24時間常駐のフロントスタッフが、</span><br />
                <span>深夜や早朝の対応も万全にサポートします。</span>
              </p>
              <p
                class="p-features-introduction__DocumentItem-text--sp c-section only_sp">
                <span>姫路駅から徒歩8分、<br />山陽姫路駅から徒歩6分の好立地。<br />繁華街へも徒歩1分でアクセス可能です。
                </span>
                <span>24時間常駐のフロントスタッフが、<br />
                  深夜や早朝の対応も万全にサポートします。</span>
              </p>
            </div>
          </div>
        </div>
        <!-- 2つ目 -->
        <div
          class="p-features-introduction__item p-features-introduction__item--reverse">
          <div class="p-features-introduction__img">
            <picture>
              <source
                media="(min-width:768px)"
                srcset="<?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_2@2x.webp')); ?> 2x"
                sizes="580px" />
              <source
                media="(max-width:767px)"
                srcset="
                            <?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_2@2x.webp')); ?>,
                            <?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_2.webp')); ?>
                        "
                sizes="(max-width: 767px) 100vw" />
              <img src="<?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_2@2x.webp')); ?>" alt="チェックイン受付" />
            </picture>
          </div>
          <div class="p-features-introduction__DocumentItem p-section">
            <p class="p-features-introduction__DocumentItem-number">02</p>
            <div class="p-features-introduction__DocumentItem__content">
              <h3 class="p-features-introduction__DocumentItem-title">
                快適な空間で、アイデアが湧き出す
              </h3>
              <p
                class="p-features-introduction__DocumentItem-text c-section only_pc">
                シンプル＆モダンなスタイリッシュデザインが、ビジネスマインドを刺激します。<br />
                全室にNURO光の高速Free
                Wi-Fiを完備し、どんな作業も快適に。機能的な作業スペースで生産性の向上をサポートし、スマートな空間があなたのビジネスアイデアを引き出します
              </p>
              <p
                class="p-features-introduction__DocumentItem-text--sp c-section only_sp">
                <span>シンプル＆モダンな<br />スタイリッシュデザインが、ビジネスマインドを刺激します。</span><br />
                <span>全室にNURO光の高速FreeWi-Fiを完備し、<br />どんな作業も快適に。</span>
                <span>機能的な作業スペースで<br />生産性の向上をサポートし、スマートな空間があなたの
                  ビジネスアイデアを引き出します。</span>
              </p>
            </div>
          </div>
        </div>
        <!-- 3つ目 -->
        <div class="p-features-introduction__item">
          <div class="p-features-introduction__img">
            <picture>
              <source
                media="(min-width:768px)"
                srcset="<?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_3@2x.webp')); ?> 2x"
                sizes="580px" />
              <source
                media="(max-width:767px)"
                srcset="
                            <?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_3@2x.webp')); ?>,
                            <?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_3.webp')); ?>
                        "
                sizes="(max-width: 767px) 100vw" />
              <img src="<?php echo esc_url(get_theme_file_uri('images/feature/feature-pic_3@2x.webp')); ?>" alt="客室" />
            </picture>
          </div>
          <div class="p-features-introduction__DocumentItem p-section">
            <p class="p-features-introduction__DocumentItem-number">03</p>
            <div class="p-features-introduction__DocumentItem__content">
              <h3 class="p-features-introduction__DocumentItem-title">
                心地よい眠りで、元気に目覚める
              </h3>
              <p
                class="p-features-introduction__DocumentItem-text c-section only_pc">
                フランス産羽毛の掛け布団による上質な睡眠環境を提供します。<br />
                快適な寝具と個別空調制御システムにより、最適な休息をお約束。チェックアウトは11時まで可能で、朝のひとときもゆったりとお過ごしいただけます。
              </p>
              <p
                class="p-features-introduction__DocumentItem-text--sp c-section only_sp">
                <span>フランス産羽毛の掛け布団による上質な睡眠環境を提供します。<br /></span>
                <span>快適な寝具と個別空調制御システムにより、最適な休息をお約束。</span>
                <span>チェックアウトは11時まで可能で、<br />朝のひとときも<br />ゆったりとお過ごしいただけます。</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- p-features-introduction -->
    </div>
    <!-- p-section c-width -->
  </section>
  <!-- バナー -->
  <div class="feature_banner">

    <picture>
      <source
        media="(min-width:768px)"
        srcset="
            <?php echo esc_url(get_theme_file_uri('images/room/feature-pic_4.webp')); ?> 1x,
            <?php echo esc_url(get_theme_file_uri('images/room/feature-pic_4@2x.webp')); ?> 2x
        " />
      <source
        media="(max-width:767px)"
        srcset="<?php echo esc_url(get_theme_file_uri('images/room/feature-pic_4.webp')); ?> 1x" />
      <img src="<?php echo esc_url(get_theme_file_uri('images/room/feature-pic_4.webp')); ?>" alt="外観" />
    </picture>

  </div>
  <!-- アクセス -->
  <section class="l-section c-width--onlyAccess" id="access">
    <div class="p-section">
      <h2 class="c-section-title">
        <span class="c-section-title--en">Access</span> アクセス
      </h2>
    </div>
    <div class="bl_sectionCont">
      <div class="iframe-container">
        <iframe
          class="animate p-section"
          src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1637.508689878766!2d134.68562295671725!3d34.830655543190154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5YW15bqr55yM5aer6Lev5biC5Y2B5LqM5omA5YmN6ZW3NTQ!5e0!3m2!1sja!2sjp!4v1731928501765!5m2!1sja!2sjp"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
          style="border: 0" allowfullscreen=" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        </iframe>
      </div>
      <div class="bl_accessCont_info animate p-section">
        <div class="bl_accessCont_info_container">
          <div class="bl_accessCont_info_icon">
            <img src="images/icon/map-icon.svg" alt="" />
            <p>住所</p>
          </div>
          <p class="bl_accessCont_info_text">
            <span class="info-item info-item--block">
              <span class="info-label">〒670-0911 </span>
              <span class="info-detail c-section">
                兵庫県姫路市十二所前町54
              </span>
            </span>
          </p>
        </div>
        <div class="bl_accessCont_info_container">
          <div class="bl_accessCont_info_icon">
            <img src="images/icon/trans_icon.svg" alt="" />
            <p>交通機関</p>
          </div>
          <p class="bl_accessCont_info_text">
            <span class="info-item">
              <span class="info-label">徒歩の方：</span>
              <span class="info-detail c-section">
                JR姫路駅　徒歩８分<br />
                繁華街徒歩1分
              </span>
            </span>
            <span class="info-item">
              <span class="info-label">電車の方：</span>
              <span class="info-detail c-section">山陽電鉄山陽姫路駅　徒歩6分</span>
            </span>
            <span class="info-item">
              <span class="info-label">お車の方：</span>
              <span class="info-detail c-section">姫路バイパス南ランプから９分</span>
            </span>
          </p>
        </div>
        <div class="bl_accessCont_info_container">
          <div class="bl_accessCont_info_icon">
            <img src="images/icon/group.svg" alt="" />
            <p>駐車場</p>
          </div>
          <p class="bl_accessCont_info_text">
            <span class="info-item info-item--block">
              <span class="info-label">提携駐車場のみ </span>
              <span class="info-detail c-section">
                1泊 (15:00-翌11:00) 1,500円
              </span>
              <span class="info-detail c-section">
                ※ 20:00-9:30 入出庫不可
              </span>
            </span>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- ホテルの詳細-->
  <section
    class="l-section bl_accessCont_details"
    id="bl_accessCont_details ">
    <div class="p-section c-width">
      <h2 class="c-section-title">
        <span class="c-section-title--en">Hotel Details</span> ホテル詳細
      </h2>
      <ul>
        <li>
          <div>総客室数</div>
          <div>61室</div>
        </li>
        <li>
          <div>チェックイン</div>
          <div>15：00<br />（最終チェックイン：29：00）</div>
        </li>
        <li>
          <div>チェックアウト</div>
          <div>11：00</div>
        </li>
        <li>
          <div>フロント<br />営業時間</div>
          <div>24時間</div>
        </li>
        <li>
          <div>Wi-Fi</div>
          <div>全客室、共用エリア（無料）</div>
        </li>
        <li>
          <div>館内設備</div>
          <div>
            自動販売機、コインランドリー（有料）、パソコン利用可、ファックス送信可、マッサージサービス、宅急便
          </div>
        </li>
        <li>
          <div>部屋設備</div>
          <div>
            有料テレビ、テレビ、有料ビデオ、インターネット接続（LAN形式、）インターネット接続（無線LAN形式）湯沸かしポット、冷蔵庫、
            ドライヤー、個別空調、洗浄機付トイレ
          </div>
        </li>
        <li>
          <div>アメニティ</div>
          <div>
            お茶セット、ボディーソープ、シャンプー、コンディショナー、洗顔ソープ、ハミガキセット、カミソリ、ブラシ、タオル、<br />
            バスタオル、ナイトガウン、スリッパ
          </div>
        </li>
        <li>
          <div>レンタルサービス</div>
          <div>
            ズボンプレッサー（貸出）、アイロン（貸出）、加湿器（貸出）
          </div>
        </li>
        <li>
          <div>支払い方法</div>
          <div>
            [クレジットカード]VISA、JCB、Amerikan Express、UC、DC、Master
            Card、Saison、LIFE、楽天カード、ANA、JAL、銀聯カード使用可<br />
            [QRコード決済]PayPay、R Pay、d払い、auPAY、Alipay、Union Pay、
            WeChat Pay [その他決済]<br />交通系電子マネー、ID、QUIC
            Pay、UnionPay、Apple Pay
          </div>
        </li>
        <li>
          <div>その他</div>
          <div>
            館内禁煙<br />※喫煙ルームと5階に喫煙所のご用意がございます。
          </div>
        </li>
      </ul>
    </div>
  </section>
  <div class="book-now_Cont">
    <div class="p-section c-width">
      <p class="book-now_txt only_pc">
        姫路の中心で、スマートステイ。<br />
        心身をリフレッシュする快適な滞在をサポートします。
      </p>
      <p class="book-now--sp_txt only_sp">
        姫路の中心で、<br />スマートステイ。<br />
        心身をリフレッシュする<br />快適な滞在をサポートします。
      </p>
      <a href="#" class="button-book-now"><span>BOOK NOW</span><br />
        <span>宿泊予約</span></a>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {

      loop: true, // 無限ループ
      centeredSlides: false, // 


      autoplay: {
        delay: 3000, // 自動スライドの間隔（ミリ秒）
        disableOnInteraction: false, // ユーザー操作後も自動再生を継続
      },


      pagination: false, // ドットを無効化
      navigation: false, // 矢印を無効化

      // レスポンシブ設定
      breakpoints: {
        768: {
          slidesPerView: 1.5, // PCサイズ：左右少し見切れる
          spaceBetween: 20,
          centeredSlides: false,
        },
        0: {
          slidesPerView: 1.2, // スマホサイズ：右側に少し次の画像が見える
          spaceBetween: 10, // スライド間の余白を少し狭く
          centeredSlides: false, // 左揃えにする
        },

      },
    });
  </script>

  <script src="js/main.js"></script>
</body>

</html>