<?php get_header(); ?>



  <!-- -----------------------------------
  ---------------- main ----------------
  ------------------------------------ -->
  <main>



    <!-- -----------------------------------
    ---------------- fv ----------------
    ------------------------------------ -->
    <div class="other-fv other-fv-news">
      <div class="other-fv-inner">
        <h2 class="other-fv-ttl small-ttl">お知らせ</h2>
      </div><!-- /.fv-inner -->
    </div><!-- /.fv -->


    <!-- -----------------------------------
    ---------------- pankuzu ----------------
    ------------------------------------ -->
    <?php get_template_part('template-parts/breadcrumb');?>


    
    <!-- -----------------------------------
    ---------------- index ----------------
    ------------------------------------ -->
    <section class="index">
      <div class="section-inner index-inner">
        <h2 class="index-ttl small-ttl">お知らせ一覧</h2><!-- /.index-ttl -->

        <div class="index-contents">
          <?php  
              $args = array(
                  'post_type' => 'news',//投稿記事だけを指定
                  'posts_per_page' => 10,//最新記事を5件表示
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()):
          ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

              <div class="index-item">
                <p class="date"><?php the_time('Y-m-d'); ?></p><!-- /.date -->
                <a href="<?php the_permalink(); ?>">
                <p class="news-content">
                <?php
                  if(mb_strlen($post->post_title)>45) {
                    $title= mb_substr($post->post_title,0,45) ;
                    echo $title . '...';
                  } else {
                    echo $post->post_title;
                  }
                ?>
                </p><!-- /.news --></a>
              </div><!-- /.index-item -->

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

          <?php endif; ?>
        </div><!-- /.index-items -->

      </div><!-- /.section-inner index-inner -->

      <?php get_template_part('template-parts/pagination');?>

    </section><!-- /.index -->



  <?php get_template_part('request_box'); ?>
  <?php get_template_part('contact-info'); ?>

  </main>


<?php get_footer(); ?>