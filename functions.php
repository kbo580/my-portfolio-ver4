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




