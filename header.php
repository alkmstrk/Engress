<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="robots" content="noindex">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link href="<?php do_shortcode('[dir_url]'); ?>/css/styles.min.css" rel="stylesheet">
  <link href="<?php do_shortcode('[dir_url]'); ?>/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css">
  <script src="https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js"></script>
  <?php
    wp_enqueue_script('jquery');
    wp_enqueue_script('engress',get_template_directory_uri().'/js/main.js');
    wp_enqueue_script('engress',get_template_directory_uri().'/js/hamburger.js');
    wp_enqueue_script('engress',get_template_directory_uri().'/js/accordion.js');
    wp_enqueue_script('engress',get_template_directory_uri().'/js/init.js');
    wp_head(); 
  ?>
  <?php wp_head(); ?>
</head>

<body>
<?php wp_body_open();?>
  <div id="bg-wrapper"></div><!-- /.bg-wrapper -->
  <!-- -----------------------------------
  ---------------- header ----------------
  ------------------------------------ -->

  <header class="header">
    <div class="header-inner">
      <div class="header-left">
        <div class="header-logo">
          <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo@2x.png" alt=""></a>
        </div><!-- /.header-logo -->
        <nav class="header-nav">
          <?php
          $args = array(
            'menu' => 'global-navigation',//管理画面で作成したメニューの名前
            'menu_class' => 'header-nav-list',//メニューを構成するulタグのクラス名
            'container' => false,//ulタグを囲んでいる<div>を削除
          );
          wp_nav_menu($args);
          ?>
        </nav><!-- /.header-nav -->
      </div>
      <!-- ハンバーガーメニュー -->
      <button type="button" id="js-hamburger" class="button hamburger" aria-controls="js-glabal-menu" aria-expanded="false" area-label="メニューを開閉する">
        <span class="hamburger__line"></span>
      </button>
      <div class="sp-global-menu" id="js-global-menu" area-hidden="true">
        <nav>
          <div class="sp-header-logo">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo@2x.png" alt="">
          </div><!-- /.header-logo -->
          <?php
          $args = array(
            'menu' => 'global-navigation',//管理画面で作成したメニューの名前
            'menu_class' => 'sp-header-nav-list',//メニューを構成するulタグのクラス名
            'container' => false,//ulタグを囲んでいる<div>を削除
          );
          wp_nav_menu($args);
          ?>
          <div class="sp-header-btns">
            <a href="<?php echo esc_url(home_url()); ?>/contact/" class="sp-header-btn sp-request-btn">資料請求</a><!-- /.request -->
            <a href="<?php echo esc_url(home_url()); ?>/contact/" class="sp-header-btn sp-contact-btn">お問い合わせ</a><!-- /.request -->
          </div>
          <div class="sp-header-info">
            <div class="phone-num">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/phone@2x.png" alt="">
              <p>0123-456-7890</p>
            </div>
            <p class="business-hours">平日08:00〜20:00</p>
          </div><!-- /.header-info -->
        </nav>
      </div><!-- /.sp-header-menu -->

      <div class="header-right">
        <div class="header-info">
          <p class="business-hours">平日08:00〜20:00</p>
          <div class="phone-num">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/phone@2x.png" alt="">
            <p>0123-456-7890</p>
          </div>
        </div><!-- /.header-info -->
        <a href="<?php echo esc_url(home_url()); ?>/contact/" class="header-btn request-btn">資料請求</a><!-- /.request -->
        <a href="<?php echo esc_url(home_url()); ?>/contact/"class="header-btn contact-btn">お問い合わせ</a><!-- /.request -->
      </div><!-- /.header-right -->
    </div><!-- /.header-inner -->
  </header><!-- /.header -->