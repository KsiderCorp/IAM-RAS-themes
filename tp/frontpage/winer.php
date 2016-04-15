<?php 
$gift = array( 
'post_type'=>'gift',
'bookgift' =>  'gift', 
'posts_per_page' => 5, 
'order'=> 'DESC', ); 

$book = array( 
'post_type'=>'gift',
'bookgift' =>  'book', 
'posts_per_page' => 5, 
'order'=> 'DESC', ); 

$patent = array( 
'post_type'=>'gift',
'bookgift' =>  'patents', 
'posts_per_page' => 5, 
'order'=> 'DESC', ); 
?>


<div class="pure-g">

<div class="pure-u-1-3 rewardblock" >

<h2 class="winers">
<i class="icon-book-1"></i> <a href="/bookgift/book/">Книги</a></h2>
<?php $postslist = get_posts( $book );  
foreach ($postslist as $post) :  setup_postdata($post);?>
<?php include(TEMPLATEPATH . '/tp/booktemp.php'); ?>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div>

<div class="pure-u-1-3 rewardblock" >

<h2 class="winers"><i class="icon-patent"></i> <a href="/bookgift/patents/">Патенты</a></h2>
<?php $postslist = get_posts( $patent );  
foreach ($postslist as $post) :  setup_postdata($post);?>
<?php include(TEMPLATEPATH . '/tp/booktemp.php'); ?>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div>

<div class="pure-u-1-3 rewardblock" >

<h2 class="winers"><i class="icon-reward"></i> <a href="/bookgift/gift/">Награды</a></h2>
<?php $postslist = get_posts( $gift );  
foreach ($postslist as $post) :  setup_postdata($post);?>
<?php include(TEMPLATEPATH . '/tp/booktemp.php'); ?>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div>


</div>