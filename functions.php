
<?php

/**************************************************
CSSファイルの読み込み
**************************************************/
function my_enqueue_styles() {
  wp_enqueue_style('typekit', 'https://use.typekit.net/ipa8xsu.css', array(), false, 'all');
  wp_enqueue_style('style', get_template_directory_uri().'/assets/main-ClUZCVi3.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
JSファイルの読み込み
**************************************************/
function st_enqueue_scripts() {
  wp_enqueue_script('module', get_template_directory_uri().'/assets/main-B7oO6B-m.js', array(), false, false);
}
add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

/*************************************************
 記事contentのpタグ削除
 ***************/
remove_filter('the_title', 'wpautop'); 
remove_filter('the_content', 'wpautop'); 