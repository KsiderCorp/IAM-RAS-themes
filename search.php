<?php get_header(); ?>


<div class="block">
<div class="pure-g">
<div class="pure-u-1">

<div class="searchform">

<form method="get" id="headsearch" class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<input  class="headsearch" id="headsearch" type="text" name="s" <?php echo 'value="' . $_GET['s'] .'"' ?> autofocus />
<input type="submit" id="searchsubmit" class="hide" value="" />
</form>

</div>



<a id="navline"></a>
</div>
</div>
</div>
	

<?php 
if(empty($_GET['s'])) {
    $args = array(  
    's' => '+++',
    'posts_per_page' => 0, 
    'order' => 'date', 
    'orderby' => 'DESC',	
    ); 
} else {
   $args = array(  
    's' => $_GET['s'],
    'posts_per_page' => 15, 
    'order' => 'date', 
    'orderby' => 'DESC',	
    ); 
}
   query_posts( $args ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="search block">
<?php $post_type = get_post_type( $post_id ) ?> 
<? if ($post_type == 'units') :  ?>
<?php get_template_part( 'template/search/search', 'units' ); ?>
<?php elseif($post_type == 'equipment'):?>
<?php get_template_part( 'template/search/search', 'equipment' ); ?>
<?php elseif($post_type == 'conference'):?>
<?php get_template_part( 'template/search/search', 'conference' ); ?>
<?php elseif($post_type == 'employees'):?>
<?php get_template_part( 'template/search/search', 'employees' ); ?>
<?php elseif($post_type == 'gift'):?>
<?php get_template_part( 'template/search/search', 'gift' ); ?>
<?php elseif($post_type == 'post'):?>
<?php get_template_part( 'template/search/search', 'post' ); ?>
<?php elseif($post_type == 'science'):?>
<?php get_template_part( 'template/search/search', 'science' ); ?>
<?php else : ?>
<?php get_template_part( 'template/search/search', 'page' ); ?>
<?php endif; ?>

</div>

<?php endwhile; else : ?>


<div class="pure-g">
<div class="block">
<div class="pure-u-1">
Ничего не найдено.<br>
Можно уточнить запрос, или вернуться на главную</a>. 
</div>

</div>
</div>
<hr>
<?php endif; ?>



<?php if (function_exists('wp_corenavi')) :?> 
<div class="pure-g">
<div class="pure-u-1">
<div class="block">
<div class="navigation center">
 <?php wp_corenavi(); ?>
</div>
</div>
</div>
</div>
<?php else : endif; ?>



	
<?php get_footer(); ?>