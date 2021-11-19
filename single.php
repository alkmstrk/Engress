<?php get_header(); ?>

  <!-- -----------------------------------
    ---------------- main ----------------
    ------------------------------------ -->
    <main>
      
      <!-- -----------------------------------
      ---------------- pankuzu ----------------
      ------------------------------------ -->
      <?php get_template_part('template-parts/breadcrumb');?>


    <!-- -----------------------------------
    ---------------- show ----------------
    ------------------------------------ -->
    <section class="single">
      <div class="section-inner single-inner">
        <div class="single-left">

        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
            <div class="single-content">
              <span class="single-content-category"><?php the_category(); ?></span><!-- /.single-content-category -->
              <h1 class="single-content-ttl"><?php the_title(); ?></h1><!-- /.index-list_item-ttl -->
              <div class="single-content-sns-date">
                <div class="single-content-sns">
                <?php echo do_shortcode('[socialBtns]');  ?>
                </div><!-- /.single-content-sns -->
                <div class="single-content-date">
                  <p><?php the_time("Y-m-d"); ?></p><!-- /.index-list_item-date -->
                </div><!-- /.single-content-date -->
              </div><!-- /.single-content_sns-date -->
              <div class="single-content-img">
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri();?>/img/noimage_600x400.png" alt="">
                <?php endif; ?>
              </div><!-- /.single-content-img -->
              <p class="index-list_item-txt"><?php the_content(); ?></p><!-- /.index-list_item-txt -->
            </div><!-- /.single-content -->
          <?php endwhile; ?>
        <?php endif; ?>
          <div class="single-recommend">
            <h3 class="single-recommend-ttl">おすすめの記事</h3><!-- /.single-recommend-ttl -->
          

          <?php  
            $args = array(
                'post_type' => 'post',//投稿記事だけを指定
                'posts_per_page' => 3,//最新記事を5件表示
                'tag' => 'pick_up'
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()):
          ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
              <div class="single-recommend-blog">
                <div class="single-recommend-blog-img">
                  <span for="" class="single-recommend-blog-category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span><!-- /.blog-category -->
                  <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri();?>/img/noimage_600x400.png" alt="">
                  <?php endif; ?>
                </div><!-- /.blog-img -->
                <div class="single-recommend-blog-copy">
                  <p class="single-recommend-blog-date"><?php the_time('Y-m-d'); ?></p><!-- /.blog-date -->
                  <p class="single-recommend-blog-ttl">
                    <?php
                    if(mb_strlen($post->post_title)>20) {
                      $title= mb_substr($post->post_title,0,20) ;
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </p><!-- /.blog-ttl -->
                </div><!-- /.blog-copy -->
              </div><!-- /.blog-item -->
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php endif; ?>
          </div><!-- /.single-recommend -->

        </div><!-- /.single-left -->
        
        <div class="single-right">
          <div class="single-sidebar">
            <h3 class="single-sidebar-ttl">関連記事</h3><!-- /.single-sidebar-blog-ttl -->
            <?php
            $args = array(
              // 関連記事を表示する最大件数
                'limit'    => 3, 
                // 使用するテンプレートの名前を指定
                'template' => 'yarpp-template-my-template.php',
            );
            yarpp_related($args);
            ?>
          </div><!-- /.single-sidebar -->
          
          <div class="single-sidebar">
            <h3 class="single-sidebar-ttl">カテゴリー</h3><!-- /.single-sidebar-blog-ttl -->
            <ul class="single-sidebar-categories">
              <?php  
                $args = array(
                  'title_li' => '',
                );
                wp_list_categories($args);
              ?>
            </ul><!-- /.single-sidebar-categories -->
          </div><!-- /.single-sidebar -->
        </div><!-- /.single-right -->
      </div><!-- /.section-inner -->
    </section><!-- /.single -->

<?php get_template_part('request_box'); ?>
<?php get_template_part('contact-info'); ?>
              </main>
<?php get_footer(); ?>