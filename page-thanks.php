<?php get_header(); ?>

    <!-- -----------------------------------
    ---------------- pankuzu ----------------
    ------------------------------------ -->
    <?php get_template_part('template-parts/breadcrumb');?>


<section class="cta-form">
  <div class="cta-form_inner">
    <?php while(have_posts()):the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <a href="<?php echo esc_url(home_url()); ?>">ホームへ戻る</a>
  </div>
</section><!-- /.cta-form -->

<?php get_footer(); ?>