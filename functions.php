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

//タイトルタグの取得
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

//アーカイブページの作成
function post_has_archive($args, $post_type){
  if('post'== $post_type){
    $args['rewrite']=true;
    $args ["label"] = '製作物';
    $args['has_archive']='works'; 
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);

//それぞれのアーカイブページの表示数
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() ) 
      return;

  if ( $query->is_archive() ) { 
    $query->set( 'posts_per_page', '6' ); 
  }

  if ( $query->is_post_type_archive('banners') ) { 
    $query->set( 'posts_per_page', '-1' ); 
  }

}
add_action( 'pre_get_posts', 'change_posts_per_page' );

//パンクズにアーカイブページを追加
function bcn_add($bcnObj) {
	if (is_post_type_archive('post')) {
		$bcnObj->add(new bcn_breadcrumb('<i class="fa fa-folder"></i>製作物一覧', null, array('archive', 'post-clumn-archive', 'current-item')));
		$trail_tmp = clone $bcnObj->trail[1];
		$bcnObj->trail[1] = clone $bcnObj->trail[0];
		$bcnObj->trail[0] = $trail_tmp;
	}
	return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');



