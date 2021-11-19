<?php if(have_posts()): ?>
  <?php while(have_posts()):the_post(); ?>
    <a href="<?php the_permalink(); ?>">
      <div class="single-sidebar-blog">
        <div class="single-sidebar-blog-img">
          <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('medium'); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri();?>/img/fv@2x.jpg" alt="">
          <?php endif; ?>
        </div><!-- /.blog-img -->
        <div class="single-sidebar-blog-copy">
          <p class="single-sidebar-blog-ttl">
          <!-- 文字数制限 -->
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
      </div><!-- /.single-sidebar-blog -->
    </a>
  <?php endwhile; ?>
<?php else: ?>
  <p>関連する記事はありません</p>
<?php endif; ?>