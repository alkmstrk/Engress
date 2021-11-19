<?php get_header(); ?>

  <!-- -----------------------------------
  ---------------- main ----------------
  ------------------------------------ -->
  <main>


    <!-- -----------------------------------
    ---------------- fv ----------------
    ------------------------------------ -->
    <div class="fv">
      <div class="fv-inner">
        <h1 class="fv-ttl">TOEFL対策はEngress</h1>
        <p class="fv-copy">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p><!-- /.fv-copy -->
        <a href="contact/" class="fv-btn">資料請求</a><!-- /.request_btn -->
        <a href="contact/" class="fv-link">お問い合わせ</a>
      </div><!-- /.fv-inner -->
    </div><!-- /.fv -->

    <!-- -----------------------------------
    ---------------- about ----------------
    ------------------------------------ -->
    <section class="about">
      <div class="section-inner about-inner">
        <h2 class="about-ttl">
            TOEFL学習でこんな<br class="sp_br">悩みありませんか？
        </h2><!-- /.section-ttl -->
        <ul class="about-items">
          <li class="about-item">
              勉強の習慣が<br class="pc_br">
              身についていない
          </li><!-- /.about-item -->
          <li class="about-item">
              勉強しているはず<br class="pc_br">
              なのに点数が伸びない
          </li><!-- /.about-item -->
          <li class="about-item">
              正しい勉強方法が<br class="pc_br">
              わからない
          </li><!-- /.about-item -->
        </ul><!-- /.about-items -->
        <div class="about-box">
          <div class="about-box-inner">
            <div class="about-box-content">
              <h2 class="about-box-ttl">
                Engressは<br>
                <span class="about-box-ttl_under-line">TOEFLに特化したスクール</span>です
              </h2><!-- /.about-box-ttl -->
              <p class="about-box-copy">
                  完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で
                  TOEFLの苦手分野を克服します。
              </p><!-- /.about-box-copy -->
            </div>
          </div><!-- /.about-box-inner -->
        </div><!-- /.about-box -->
      </div><!-- /.section-inner -->
    </section><!-- /.about -->



    <!-- -----------------------------------
    ---------------- feature ----------------
    ------------------------------------ -->
    <section class="feature">
      <div class="section-inner feature-inner">
        <h2 class="feature-ttl">TOEFL対策に特化したEngress3つの強み</h2><!-- /.feature-ttl -->

        <div class="feature-item">
          <div class="feature-item-content">
            <p class="feature-item-logo">特徴1</p><!-- /.feature-item-logo -->
            <h3 class="feature-item-ttl">
              TOEFLに最適化された<br class="pc_br">
              無駄のないカリキュラム
            </h3><!-- /.feature-item-ttl -->
            <p class="feature-item-copy">
              TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
            </p><!-- /.feature-item-copy -->
          </div><!-- /.feature-item-content -->
          <div class="feature-item-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature1@2x.jpg" alt="">
          </div><!-- /.feature-item-img -->
        </div><!-- /.feture-item -->

        <div class="feature-item flex-rev">
          <div class="feature-item-content">
            <p class="feature-item-logo">特徴2</p><!-- /.feature-item-logo -->
            <h3 class="feature-item-ttl">
              日本人指導歴10年以上の<br class="pc_br">
              経験豊富な講師陣
            </h3><!-- /.feature-item-ttl -->
            <p class="feature-item-copy">
                Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
            </p><!-- /.feature-item-copy -->
          </div><!-- /.feature-item-content -->
          <div class="feature-item-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature2@2x.jpg" alt="">
          </div><!-- /.feature-item-img -->
        </div><!-- /.feture-item -->

        <div class="feature-item">
          <div class="feature-item-content">
            <p class="feature-item-logo">特徴3</p><!-- /.feature-item-logo -->
            <h3 class="feature-item-ttl">
              平均3ヶ月でTOEFL iBT20点アップ
            </h3><!-- /.feature-item-ttl -->
            <p class="feature-item-copy">
                Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
            </p><!-- /.feature-item-copy -->
          </div><!-- /.feature-item-content -->
          <div class="feature-item-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature3@2x.jpg" alt="">
          </div><!-- /.feature-item-img -->
        </div><!-- /.feture-item -->

      </div><!-- /.section-inner feature-inner -->
    </section><!-- /.feature -->



    <!-- -----------------------------------
    ---------------- price-box ----------------
    ------------------------------------ -->
    <div class="price-box">
      <div class="price-box-inner">
        <div class="price-box-content">
          <h3 class="price-box-ttl">Engressの料金プランはこちら</h3><!-- /.price-box-ttl -->
          <a href="price/" class="price-box-link">料金を見てみる</a><!-- /.price-box-link -->
        </div>
      </div><!-- /.price-box-inner -->
    </div><!-- /.price-box -->


    <!-- -----------------------------------
    ---------------- success ----------------
    ------------------------------------ -->
    <section class="success">
      <div class="section-inner success-inner">
        <h2 class="success-ttl">TOEFL成功事例</h2><!-- /.success ttl -->
        <div class="success-contents">
          
        <?php  
          $args = array(
              'post_type' => 'story',
              'posts_per_page' => 3,
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()):
        ?>
          <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
            <div class="success-item">
              <p class="success-copy">
                <?php the_field( 'story' ); ?>
              </p><!-- /.success-copy -->
              <div class="success-img">
                <img src="<?php $image = get_field('image'); echo $image['sizes']['medium']; ?>" alt="">
              </div><!-- /.success-img -->
              <div class="success-profile">
                <p class="success-profile-work"><?php the_field( 'work' ); ?></p>
                <p class="success-profile-name"><?php the_field( 'name' ); ?></p>
                <p class="success-profile-score"><?php the_field( 'score' ); ?></p>
              </div><!-- /.success-profile -->
            </div><!-- /.success-item -->
          <?php endwhile; ?>
        <?php endif; ?>
  
        </div><!-- /.success-contents -->
      </div><!-- /.section-inner success-inner -->
    </section><!-- /.success -->




    <!-- -----------------------------------
    ---------------- flow ----------------
    ------------------------------------ -->
    <section class="flow">
      <div class="section-inner flow-inner">
        <h2 class="flow-ttl">ご利用の流れ</h2><!-- /.flow-ttl -->
        <ul class="flow-list">
          <li class="flow-item">
            <div class="flow-num">
              <span>01</span>
            </div><!-- /.flow-num -->
            <div class="flow-bg">
              <p class="flow-inquiry">お問い合わせ</p>
              <p class="flow-detail">まずはフォームまたはお電話からお申し込みください。</p>
            </div>
          </li><!-- /.flow-item -->
          <li class="flow-item">
            <div class="flow-num">
              <span>04</span>
            </div><!-- /.flow-num -->
            <div class="flow-bg">
              <p class="flow-inquiry">ヒアリング</p>
              <p class="flow-detail">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
            </div>
          </li><!-- /.flow-item -->
          <li class="flow-item">
            <div class="flow-num">
              <span>03</span>
            </div><!-- /.flow-num -->
            <div class="flow-bg">
              <p class="flow-inquiry">学習プランのご提供</p>
              <p class="flow-detail">目標達成のために最適な学習プランをご提案致します。</p>
            </div>
          </li><!-- /.flow-item -->
          <li class="flow-item">
            <div class="flow-num">
              <span>04</span>
            </div><!-- /.flow-num -->
            <div class="flow-bg">
              <p class="flow-inquiry">ご入会</p>
              <p class="flow-detail">お申込み完了後、レッスンがスタートします。</p>
            </div>
          </li><!-- /.flow-item -->

        </ul><!-- /.flow-list -->
      </div-><!-- /.section-inner flow-inner -->
    </section><!-- /.flow -->
    

    <!-- -----------------------------------
    ---------------- qa ----------------
    ------------------------------------ -->
    <section class="qa">
      <div class="section-inner qa-inner">
        <h2 class="qa-ttl">よくある質問</h2><!-- /.qa-ttl -->
        <div class="accordion_container">
          <p class="accordion-title jsAccordionTitle">Engressはサラリーマンでも学習を続けられるでしょうか？</p>
          <div class="accordion-content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
          <p class="accordion-title jsAccordionTitle">教材はオリジナルのものを使用しているのでしょうか？</p>
          <div class="accordion-content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
          <p class="accordion-title jsAccordionTitle">講師に日本人はいますか？</p>
          <div class="accordion-content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
          <p class="accordion-title jsAccordionTitle">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
          <div class="accordion-content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
        </div>
      </div>
    </section><!-- /.accordion -->


    <!-- -----------------------------------
    ---------------- blog_news ----------------
    ------------------------------------ -->
    <section class="blog-news">
      <div class="section-inner blog-news-inner">
        <div class="blog">
          <h2 class="blog-news_ttl">ブログ</h2><!-- /.blog-news_ttl -->

          <?php  
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()):
        ?>
            <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
              <?php get_template_part('template-parts/loop','blog') ?>
            <?php endwhile; ?>
          <?php endif; ?>

        </div><!-- /.blog-news_blog -->

        <div class="news">
          <h2 class="blog-news_ttl">お知らせ</h2><!-- /.blog-news_ttl -->

          <?php  
            $args = array(
                'post_type' => 'news',//投稿記事だけを指定
                'posts_per_page' => 4,//最新記事を5件表示
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()):
        ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="news-item">
              <p class="news-date"><?php the_time('Y-m-d'); ?></p><!-- /.news-date -->
              <a href="<?php the_permalink(); ?>">
                <p class="news-ttl">
                  <?php
                    if(mb_strlen($post->post_title)>20) {
                      $title= mb_substr($post->post_title,0,20) ;
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                  ?>
                </p><!-- /.news-ttl -->
              </a>
            </div><!-- /.news-item -->
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        </div><!-- /.blog-news_news -->
      </div><!-- /.section-inner blog_news-inner -->
    </section><!-- /.blog_news -->




  <?php get_template_part('request_box'); ?>
  <?php get_template_part('contact-info'); ?>


  </main>

  <?php get_footer(); ?>

