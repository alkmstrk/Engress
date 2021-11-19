<a href="<?php the_permalink(); ?>">
<div class="blog-item">
  <div class="blog-img">
    <!-- カテゴリーの名称だけを出力 -->
    <span for="" class="blog-category"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span><!-- /.blog-category -->
      <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('medium'); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri();?>/img/noimage_600x400.png" alt="">
      <?php endif; ?>
    </div><!-- /.blog-img -->
    <div class="blog-copy">
      <p class="blog-ttl">
        <!-- 文字数制限 -->
      <?php
      if(mb_strlen($post->post_title)>30) {
        $title= mb_substr($post->post_title,0,30) ;
        echo $title . '...';
      } else {
        echo $post->post_title;
      }
      ?>
    </p><!-- /.blog-ttl -->
    <p class="blog-date"><?php the_time('Y-m-d'); ?></p><!-- /.blog-date -->
  </div><!-- /.blog-copy -->
</div><!-- /.blog-item -->
</a>