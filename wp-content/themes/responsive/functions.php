<?php

// ウィジェット
//register_sidebar();

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

// WordPress管理画面にサムネイル機能のインターフェース追加
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );




//記事本文の文字数の指定抜出し関数
function len_excerpt($length) {
global $post;
$content =  mb_substr(strip_tags($post->post_content),0,$length);
return $content;
}


//ショートコード
//ディレクトリーパス　呼び出し：[tplpass]
function tplDirectryPass() {
	return get_bloginfo('template_directory');
}
add_shortcode('tplpass', 'tplDirectryPass');

//NEXT/PREV
add_filter('next_post_link', 'post_next_attributes');
add_filter('previous_post_link', 'post_prev_attributes');
  
function post_next_attributes($output1) {
    $code1 = 'class="next"';
    return str_replace('<a href=', '<a '.$code1.' href=', $output1);
}
 
function post_prev_attributes($output2) {
    $code2 = 'class="back"';
    return str_replace('<a href=', '<a '.$code2.' href=', $output2);
}

//投稿画面内画像置換パス
function replaceImagePath($arg) {
	$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
	return $content;
}  
add_action('the_content', 'replaceImagePath');

//固定ページの<br>タグ自動挿入停止
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
    global $post;
    $remove_filter = false;
      
    $arr_types = array('page');
    $post_type = get_post_type( $post->ID );
    if (in_array($post_type, $arr_types)) $remove_filter = true;
      
    if ( $remove_filter ) {
        remove_filter('the_content', 'wpautop');
        remove_filter('the_excerpt', 'wpautop');
    }
      
    return $content;
}


add_filter( 'category_template', 'my_category_template' );

function my_category_template( $template ) {
	$category = get_queried_object();
	if ( $category->parent != 0 &&
		( $template == "" || strpos( $template, "category.php" ) !== false ) ) {
		$templates = array();
		while ( $category->parent ) {
			$category = get_category( $category->parent );
			if ( !isset( $category->slug ) ) break;
			$templates[] = "category-{$category->slug}.php";
			$templates[] = "category-{$category->term_id}.php";
		}
		$templates[] = "category.php";
		$template = locate_template( $templates );
	}
	return $template;
}

function post_is_in_descendant_category( $cats, $_post = null ){
   foreach ( (array) $cats as $cat ) {
         $descendants = get_term_children( (int) $cat, 'category');
          if ( $descendants && in_category( $descendants, $_post ) )
              return true;
   }
   return false;
}

//記事IDを表示
add_filter('manage_posts_columns', 'posts_columns_id', 5);
    add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
    add_filter('manage_pages_columns', 'posts_columns_id', 5);
    add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);
function posts_columns_id($defaults){
    $defaults['wps_post_id'] = __('ID');
    return $defaults;
}
function posts_custom_id_columns($column_name, $id){
	if($column_name === 'wps_post_id'){
        	echo $id;
    }
}

function exclude_different_child_category_posts() {
  $same_parent_category_ids = array();
  $current_categories = get_the_category();
  foreach($current_categories as $category){
    $args = array('parent'  => $category->term_id);
    $cate_children = get_categories($args);
    foreach($cate_children as $cate_child){
      array_push($same_parent_category_ids, $cate_child->term_id);
    }
  }

  //重複を避ける
  $same_parent_category_ids = array_unique($same_parent_category_ids);

  $current_category_ids = array_map(function($v){ return $v->term_id; }, $current_categories);

  $excluded_category_ids = array_diff($same_parent_category_ids, $current_category_ids);

  return $excluded_category_ids;
}

/**********************
記事一覧に文字数を表示
**********************/
 
function manage_posts_columns($columns) { //項目を追加
	$columns['main_wordcount'] = "本文文字数";
	$columns['title_wordcount'] = "タイトル文字数";
	return $columns;
}
function add_column($column_name, $post_id) {
	global $post;
 
	if( $column_name == 'main_wordcount' ) {
		$main_word = str_replace( array("\r\n","\r","\n"), '', strip_tags( $post -> post_content)) ;
		$main_word = mb_strlen( $main_word);
		echo $main_word;
	}
	if( $column_name == 'title_wordcount' ) { //SJISに変換してカウント
		$title_word = (strlen(mb_convert_encoding($post -> post_title,'SJIS', 'UTF-8')))/2;
		echo $title_word;
	}
}
 
add_filter( 'manage_posts_columns', 'manage_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_column', 10, 2 );


// お見積りはこちらのバナーを出力するショートコード
function get_contact_block() {
  $output = '  <aside class="contact-s-block">';
  $output .= '    <h3 class="title title-ja"><span>納得の高価格で買い取ります！</span></h3>';
  $output .= '    <div class="information">';
  $output .= '      <div class="photo"><img src="' . get_bloginfo('template_directory') . '/img/purchase/p_contact_s.png" alt=""/></div>';
  $output .= '      <div class="tel-button"><a href="tel:0120027740"><img src="' . get_bloginfo('template_directory') . '/img/purchase/btn_tel_s.png" alt="最短３分今すぐ電話でお見積り 0120-027-740 営業時間10:00～22:00"/></a></div>';
  $output .= '      <div class="mail-button"><a href="' . get_site_url() . '/inquiry"><img src="' . get_bloginfo('template_directory') . '/img/purchase/btn_contact_s.png" alt="メールで無料お見積り 365日・24時間、お見積り受付中"/></a></div>';
  $output .= '    </div>';
  $output .= '  </aside>';

  return $output;
}
add_shortcode('contact-block', 'get_contact_block');




/**********************
特集・コラムをネットショップのDBから表示する
**********************/
/**
 * upload_dir書きかえ
 */
// function _column_upload_dir($upload_dir) {
//   $pattern = '/^(https?:\/\/[^\/]+)/';
//   $replacement = home_url();
//   $upload_dir['url'] = preg_replace($pattern, $replacement, $upload_dir['url']);
//   $upload_dir['baseurl'] = preg_replace($pattern, $replacement, $upload_dir['baseurl']);

//   return $upload_dir;
// }

// /**
//  * permalink書きかえ
//  */
// function _column_post_link( $url, $post, $leavename=false ) {
//   $url = str_replace("https://fivestarcamera.net/shop/", "https://fivestarcamera.net/column/detail/", $url);
//   return $url;
// }

// /**
//  * pagenaviのlink書きかえ
//  */
// function _column_pagenav_link( $output ) {
//   $output = str_replace("https://fivestarcamera.net/shop/", "/", $output);
//   return $output;
// }

/**
 * DB切り替え
 */
function switch_shop_db() {
  global $wpdb, $backup_wpdb;
  $backup_wpdb = $wpdb;
  $wpdb = new wpdb(
    'iijapan',
    'nNyy1fa2',
    'fivestar_shop_wp',
    'localhost'
  );

  wp_set_wpdb_vars();
  wp_cache_init();

  add_filter('upload_dir', '_column_upload_dir', 10);
  add_filter('post_link', '_column_post_link', 10, 3);
  // add_filter('wp_pagenavi', '_column_pagenav_link', 10);
}

/**
 * 本サイト用に設定を戻す
 */
function restore_current_site() {
  global $wpdb, $backup_wpdb;
  $wpdb = $backup_wpdb;
  wp_cache_init();
  remove_filter('upload_dir', '_switch_shop_upload_dir', 10);
  remove_filter('post_link', 'column_post_link', 10);
  // remove_filter('wp_pagenavi', 'column_pagenav_link', 10);
}

// 特集・コラム用にリライトルールを追加
// function add_column_rewrite_rule($rules) {
//   add_rewrite_rule('^column/detail/([0-9]+)/?', 'index.php?pagename=column/detail&column_id=$matches[1]', 'top');
//   add_rewrite_rule('^column/category/([0-9a-zA-Z]+)/page/?([0-9]{1,})/?$','index.php?pagename=column/category&column_category=$matches[1]&paged=$matches[2]','top');
//   add_rewrite_rule('^column/category/([0-9a-zA-Z]+)/?', 'index.php?pagename=column/category&column_category=$matches[1]', 'top');
// }
// add_action('wp_loaded', 'add_column_rewrite_rule', 1);

// // 特集・コラム用にquery_varを追加
// function add_column_query_vars($query_vars){
//   $query_vars[] = 'column_id';
//   $query_vars[] = 'column_category';
//   return $query_vars;
// }
// add_filter('query_vars', 'add_column_query_vars');


// 
add_action('init', 'column');
function column(){
  $args = array(
    'label' => '特集・コラム',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','revisions'),
    'rewrite' => array(
      'slug' => 'column',
      'with_front' => false
    ),
    'menu_icon' => 'dashicons-format-aside',
  );
  register_post_type('column',$args);

  //分類を追加
  $args = array(
    'label' => 'カテゴリー',
    'public' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'query_var'=> true,
    'rewrite' => array(
      'slug' => 'category',
      'with_front' => true
    )
  );
  register_taxonomy('column_cat','column',$args);
}

// ================= Convert Slug =================
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    $posttime = get_post_time('Ymd');
    $today = date('Ymd');
    if($today <= $posttime){
        if($post_type == 'column') {
            $slug = 'post-' . $post_ID;
        }
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );

// feedにサムネイル追加
function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
  $content = '<p>' . get_the_post_thumbnail($post->ID) . '</p>' . $content;
}
$column_terms = get_the_terms($post->ID, 'column_cat');
$column_terms_name = $column_terms[0] -> name;
if($column_terms_name) {
  $content = '<span>' . $column_terms_name . '</span>' . $content;
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');