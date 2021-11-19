<?php

/***<title>タグを出力する*/
add_theme_support('title-tag');


// アイッキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');
// アイキャッチ画像の切り抜き(縦横比を統一させるため)
// set_post_thumbnail_size(150,110,true);



function shortcode_url() {
  echo get_template_directory_uri();
}
add_shortcode('dir_url','shortcode_url');



function twpp_change_excerpt_length( $length ) {
  return 70; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

function new_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blogs'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


// 管理画面の投稿を任意の名前に変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'プログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

// MW WP Formで入力画面、確認画面、送信完了画面の全てでpタグが自動挿入されるのを無効にする
add_filter( 'mwform_content_wpautop_mw-wp-form-103', '__return_false' );

/***カスタムメニュー機能を使用可能にする*/
add_theme_support('menus');

function wpSns() {
  if (function_exists("wp_social_bookmarking_light_output_e")) {
    wp_social_bookmarking_light_output_e();
  }
}
add_shortcode('socialBtns', 'wpSns');



