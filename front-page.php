<?php get_header(); ?>

<!--<style>
#navig.gettop,
#navig.gettop #searchform,
#navig.gettop #searchform input[type=search]{
    background:transparent; 
    color:#fff;
} 
#navig.gettop a { color:#fff;}	
#navig #searchform input[type=search] {border: 1px solid #fff;}
#searchform input[type=submit] {
    color: #fff;
}

</style>-->


<?php include(TEMPLATEPATH . '/tp/frontpage/header.php'); ?> 


<?php include(TEMPLATEPATH . '/tp/frontpage/news.php'); ?> 
 
  
<div id="administration" class="adm">
<div class=" block">
<?php include(TEMPLATEPATH . '/tp/frontpage/adm.php'); ?>
</div>
</div>     
 
<?php include(TEMPLATEPATH . '/tp/frontpage/mkmk.php'); ?>

<?php // include(TEMPLATEPATH . '/tp/frontpage/scienceblog.php');?>

 

<?php get_footer(); ?>