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

        <?php if(have_posts()): ?>
          <?php while(have_posts()):the_post(); ?>
            <div class="single-news">
              <h1 class="single-news-ttl"><?php the_title(); ?></h1><!-- /.single-news-ttl -->
              <p class="single-news-date"><?php the_time("Y-m-d"); ?></p><!-- /.single-news-date -->
              <p class="single-news-txt">
                <?php the_content(); ?>
              </p><!-- /.single-news-txt -->
            </div><!-- /.single-news -->
            
            <?php endwhile; ?>
            <?php endif; ?>
          </div><!-- /.section-inner -->
        </section><!-- /.single -->

<?php get_template_part('request_box'); ?>
<?php get_template_part('contact-info'); ?>
              </main>
<?php get_footer(); ?>