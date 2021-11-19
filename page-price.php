<?php get_header(); ?>


  <!-- -----------------------------------
  ---------------- main ----------------
  ------------------------------------ -->
  <main>



    <!-- -----------------------------------
    ---------------- fv ----------------
    ------------------------------------ -->
    <div class="other-fv other-fv-price">
      <div class="other-fv-inner">
        <h2 class="other-fv-ttl small-ttl">コース・料金</h2>
      </div><!-- /.fv-inner -->
    </div><!-- /.fv -->


    <!-- -----------------------------------
    ---------------- pankuzu ----------------
    ------------------------------------ -->
    <?php get_template_part('template-parts/breadcrumb');?>



    <!-- -----------------------------------
    ---------------- structure ----------------
    ------------------------------------ -->
    <section class="structure">
      <div class="section-inner structure-inner">
        <h2 class="structure-ttl small-ttl">料金体系</h2><!-- /.structure-ttl -->
        <div class="structure-content">
          <div class="structure-box">入会金 39,800円</div><!-- /.structure-box -->
          <div class="structure-plus"></div><!-- /.structure-box_plus -->
          <div class="structure-box">月額費用</div><!-- /.structure-box -->
        </div><!-- /.structure-content -->
        <p class="structure-copy">
          Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
        </p><!-- /.structure-copy -->
      </div><!-- /.section-inner structure-inner -->
    </section><!-- /.structure -->


    <!-- -----------------------------------
    ---------------- price-table ----------------
    ------------------------------------ -->
    <?php if(have_posts()) : ?>
    <?php while(have_posts()):the_post(); ?>
    <div class="price-table">
      <div class="section-inner price-table_inner">
        <h2 class="price-table_ttl small-ttl">料金表</h2><!-- /.price-table_ttl -->

        <ul class="price-table_list js-scrollable">
          <li class="price-table_list-card">
            <div class="price-table_list-card-ttl"><p>基礎プラン</p></div><!-- /.price-table_card-ttl -->
            <div class="price-table_list-card-body">
              <div class="price-table_list-card-price">
                <?php
                  $price = get_field('基礎プラン'); 
                  echo number_format($price);
                ?>円~
              </div><!-- /.price-table_card-price -->
              <p class="price-table_list-card-copy">*月額（税抜価格）</p><!-- /.price-table_list-card-copy -->
              <ul class="price-table_feature">
                <li class="price-table_feature-item">カリキュラム作成</li><!-- /.price-table_feature-item -->
                <li class="price-table_feature-item">TOEFL学習サポート</li><!-- /.price-table_feature-item -->
                <li class="price-table_feature-item">週一回のビデオMTG</li><!-- /.price-table_feature-item -->
              </ul><!-- /.price-table_card-feature -->
            </div><!-- /.price-table_card-body -->
          </li><!-- /.prie-table_card -->

          <li class="price-table_list-card">
            <div class="price-table_list-card-ttl"><p>演習プラン</p></div><!-- /.price-table_card-ttl -->
            <div class="price-table_list-card-body">
              <div class="price-table_list-card-price">
              <?php
                $price = get_field('演習プラン'); 
                echo number_format($price);
              ?>円~
              </div><!-- /.price-table_card-price -->
              <p class="price-table_list-card-copy">*月額（税抜価格）</p><!-- /.price-table_list-card-copy -->
              <ul class="price-table_feature">
                <li class="price-table_feature-item">カリキュラム作成</li><!-- /.price-table_feature-item -->
                <li class="price-table_feature-item">TOEFL学習サポート</li><!-- /.price-table_feature-item -->
                <li class="price-table_feature-item">週一回のビデオMTG</li><!-- /.price-table_feature-item -->
                <li class="price-table_feature-item">月二回の模試（解説付き）</li><!-- /.price-table_feature-item -->
              </ul><!-- /.price-table_card-feature -->
            </div><!-- /.price-table_card-body -->
          </li><!-- /.prie-table_card -->

          <li class="price-table_list-card">
            <div class="price-table_list-card-ttl price-table_list-card_recommend-ttl">
              <p>おすすめ</p>
              <p>志望校対策プラン</p>
            </div><!-- /.price-table_card-ttl -->
            <div class="price-table_list-card-body">
              <div class="price-table_list-card-price price-table_list-card_recommend-price">
              <?php
                $price = get_field('志望校対策プラン'); 
                echo number_format($price);
              ?>円~
              </div><!-- /.price-table_card-price -->
              <p class="price-table_list-card-copy">*月額（税抜価格）</p><!-- /.price-table_list-card-copy -->
              <ul class="price-table_feature">
                <li class="price-table_feature-item">カリキュラム作成</li><!-- /.price-table_feature-item -->
                <li class="price-table_feature-item">TOEFL学習サポート</li><!-- /.price-table_feature-item -->
                <li class="price-table_feature-item">週一回のビデオMTG</li><!-- /.price-table_feature-item -->
                <li class="price-table_feature-item">月二回の模試（解説付き）</li><!-- /.price-table_feature-item -->
                <li class="price-table_feature-item">週一の英語面接対策</li><!-- /.price-table_feature-item -->
              </ul><!-- /.price-table_card-feature -->
            </div><!-- /.price-table_card-body -->
          </li><!-- /.prie-table_card -->

          <li class="price-table_list-card">
            <div class="price-table_list-card-ttl"><p>フレックスプラン</p></div><!-- /.price-table_card-ttl -->
            <div class="price-table_list-card-body">
              <div class="price-table_list-card-price">
              <?php
                $price = get_field('フレックスプラン'); 
                echo number_format($price);
              ?>円~
              </div><!-- /.price-table_card-price -->
              <p class="price-table_list-card-copy">*月額（税抜価格）</p><!-- /.price-table_list-card-copy -->
              <ul class="price-table_feature">
                <li class="price-table_feature-item_annotation">＊別途ご相談ください</li><!-- /.price-table_feature-item -->
              </ul><!-- /.price-table_card-feature -->
            </div><!-- /.price-table_card-body -->
          </li><!-- /.prie-table_card -->
        </ul><!-- /.price-table_list -->
      </div><!-- /.section-inner price-table_inner -->
    </div><!-- /.price-table -->
    <?php endwhile; ?>
    <?php endif; ?>
    


  <?php get_template_part('request_box'); ?>
  <?php get_template_part('contact-info'); ?>

  </main>


<?php get_footer(); ?>