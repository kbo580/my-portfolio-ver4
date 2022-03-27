<?php

// css,jquery,fontaweasomeの読み込み
function my_files() {
  wp_enqueue_style('style-name', get_template_directory_uri() . '/css/styles.css' , array(), '1.0.0',);
  // wp_enqueue_style('icon', 'https://use.fontawesome.com/releases/v6.1.0/css/all.css');
  wp_enqueue_script('script-name', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0',);
  // <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  //   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
}

add_action('wp_enqueue_scripts', 'my_files');


