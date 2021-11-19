<?php get_header(); ?>

<div class="other-fv other-fv-cta">
  <div class="other-fv-inner">
    <h2 class="other-fv-ttl small-ttl">お問い合わせ・資料請求</h2>
  </div><!-- /.fv-inner -->
</div><!-- /.fv -->

    <!-- -----------------------------------
    ---------------- pankuzu ----------------
    ------------------------------------ -->
    <?php get_template_part('template-parts/breadcrumb');?>


<section class="cta-form">
  <div class="cta-form_inner">
    <p class="cta-form_txt">
        弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
    </p><!-- /.cta-form_txt -->
    <div class="cta-form_area">
      <?php while(have_posts()):the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
    </div>
  </div><!-- /.cta-form_inner -->
</section><!-- /.cta-form -->

<?php get_footer(); ?>