<?php
// slickの読み込み
function slick_slider() {
  wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
  wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
  wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery') );
}

add_action('wp_enqueue_scripts', 'slick_slider');

// css,jquery,fontaweasomeの読み込み
function my_files() {
  wp_enqueue_style('style-name', get_template_directory_uri() . '/css/styles.css' , array(), '1.0.0',);
  wp_enqueue_style('icon', 'https://use.fontawesome.com/releases/v6.1.0/css/all.css');
  wp_enqueue_script('script-name', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0',);
}

add_action('wp_enqueue_scripts', 'my_files');


add_theme_support('title-tag');
function top_only_title($title) {
  if (is_home()) {
      $title['tagline'] = '';
    }
  return $title;
  }
add_filter('document_title_parts', 'top_only_title');


//サムネイルの追加
add_theme_support('post-thumbnails');

function post_has_archive($args, $post_type){
  if('post'== $post_type){
    $args['rewrite']=true;
    $args ["label"] = '製作物';
    $args['has_archive']='works'; 
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/* 特定のページの１ページあたりの表示数を変更する */
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() ) /* メインクエリでの表示数 */
      return;
  if ( $query->is_archive() ) { //アーカイブページの場合
      $query->set( 'posts_per_page', '6' ); /* 表示件数を指定する。-1で全件表示できる */
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );




