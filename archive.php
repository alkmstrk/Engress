<?php get_header(); ?>



  <!-- -----------------------------------
  ---------------- main ----------------
  ------------------------------------ -->
  <main>



    <!-- -----------------------------------
    ---------------- fv ----------------
    ------------------------------------ -->
    <div class="other-fv other-fv-blog">
      <div class="other-fv-inner">
        <h2 class="other-fv-ttl small-ttl">ブログ</h2>
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
      <div class="section-inner index-inner blog-index-inner">
        <h2 class="index-ttl small-ttl"><?php wp_title(''); ?></h2><!-- /.index-ttl -->
        <div class="index-contents">
          <ul class="index-list">

            <?php if(have_posts()): ?>
              <?php while(have_posts()):the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                  <li class="index-list_item">
                    <div class="index-list_item-img">
                      <span class="index-list_item-category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span><!-- /.index-list_item-category -->
                      <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium'); ?>
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri();?>/img/noimage_600x400.png" alt="">
                      <?php endif; ?>
                    </div><!-- /.index-list_item-img -->
                    <div class="index-list_item-copy">
                      <p class="index-list_item-date"><?php the_time('Y-m-d'); ?></p><!-- /.index-list_item-date -->
                      <h3 class="index-list_item-ttl">
                      <!-- 文字数制限 -->
                        <?php
                        if(mb_strlen($post->post_title)>30) {
                          $title= mb_substr($post->post_title,0,30) ;
                            echo $title . '...';
                          } else {
                            echo $post->post_title;
                          }
                        ?>
                      </h3><!-- /.index-list_item-ttl -->
                      <p class="index-list_item-txt">
                        <?php the_excerpt(); ?>
                      </p><!-- /.index-list_item-txt -->
                    </div><!-- /.index-list_item-copy -->
                  </li><!-- /.index-list_item -->
                </a>
              <?php endwhile; ?>
            <?php endif; ?>

          </ul><!-- /.index-list -->
        </div><!-- /.index-contents -->
      </div>
      <?php get_template_part('template-parts/pagination');?>
    </section><!-- /.index -->


  <?php get_template_part('request_box'); ?>
  <?php get_template_part('contact-info'); ?>

  </main>


<?php get_footer(); ?>