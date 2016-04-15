<?php
require($_SERVER[‘DOCUMENT_ROOT’].’/wp-load.php’);

if ( isset( $_POST['submitted'] ) ) {
	
	$pds = $_POST['postday'];
	$pmn = $_POST['posttime'];
	$pid = $_POST['pid'];
	$title= $_POST['title'];
	$content= $_POST['content'];
/*
$dtums = '2014-12-'.$pds.' '.$pmn.':00';
$postdd = date('Y-m-d H:i:s', strtotime($dtums));
$timezone_offset = get_option( 'gmt_offset' );
$date= $postdd;
$post_date = date_create($postdd);
$post_date_gmt = date_create($postdd);	
*/
         $the_post = array();
        $the_post['ID'] = $pid;
        $the_post['post_title'] = $title;
        $the_post['post_content'] = $content;

        $post_id = wp_update_post($the_post);
	

echo print_r($_POST);
} 

?>


<?php

global $post;
global $wpdb;
 
if ( isset( $_POST['submitted'] ) ) {}
 
$data = $_POST['serialize'];

	$pds = $data['postday'];
	$pmn = $data['posttime'];
	$pid = $data['pid'];


$dtums = '2014-12-'.$pds.' '.$pmn.':00';
$postdd = date('Y-m-d H:i:s', strtotime($dtums));


$timezone_offset = get_option( 'gmt_offset' );
$post_date = date_create($dtums);
$post_date_gmt = date_create($dtums);

$title= $data['title'];
$content= $data['content'];

$date= $dtums; 

$my_post = array(
  'ID'  => $pid,
  'post_title'        => $title,
  'post_content'      => $content,
  'post_date'      => $post_date->format('Y-m-d H:i:s'), 
  'post_date_gmt'  => $post_date_gmt->format('Y-m-d H:i:s'), 
);
$post_id = wp_insert_post( $my_post );
	


?>