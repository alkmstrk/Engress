  <!-- -----------------------------------
  ---------------- footer ----------------
  ------------------------------------ -->
  <footer>
    <div class="footer">
      <div class="footer-inner">
        <div class="footer-nav">
        <?php
          $args = array(
            'menu' => 'global-navigation',//管理画面で作成したメニューの名前
            'menu_class' => 'footer-nav-list',//メニューを構成するulタグのクラス名
            'container' => false,//ulタグを囲んでいる<div>を削除
          );
          wp_nav_menu($args);
          ?>
        </div><!-- /.footer-nav -->
        <div class="footer-right">
          <div class="footer-logo">
            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo@2x.png" alt=""></a>
          </div><!-- /.footer-logo -->
          <div class="footer-info">
            <div class="phone-num">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/phone2@2x.png" alt="">
              <p>0123-456-7890</p>
            </div>
            <p>平日　08:00〜20:00</p>
          </div><!-- /.footer-info -->
        </div><!-- /.footer-company-info -->
      </div><!-- /.footer-inner -->
    </div>
    <div class="footer-bottom">
      <div class="footer-bottom-inner">
        <small>© 2020 Engress. </small>
      </div>
    </div><!-- /.footer-bottom -->
  </footer>
  


  <?php wp_footer(); ?>
</body>
</html>