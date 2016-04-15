<?php

add_theme_support( 'post-thumbnails' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function new_excerpt_length($length) {
	return 20; }
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
	return ' ';}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');


function wp_corenavi() {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '<i class=" icon-caret-left"></i>'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '<i class=" icon-caret-right"></i>'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="pag-nav">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">&nbsp</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}


/** remove_filter( 'the_content', 'wpautop' ); */
add_filter( 'wpcf7_load_css', '__return_false' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
function my_wp_nav_menu_args( $args = '' ){
	$args['container'] = false;
	return $args;
}


/* 
 * Данные о количестве запросов к базе данных в подвале админки
 */
function wp_usage(){
	printf( ('SQL: %d за %s сек. '), get_num_queries(), timer_stop(0, 3) );
	if ( function_exists('memory_get_usage') ) echo round( memory_get_usage()/1024/1024, 2 ) . ' mb ';
}
add_filter('admin_footer_text', 'wp_usage');


add_filter('user_contactmethods', 'my_user_contactmethods');
 
function my_user_contactmethods($user_new_meta){
 
  $user_new_meta['position'] = 'Редакция';
 
  return $user_new_meta;
}