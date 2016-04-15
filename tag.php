<?php get_header(); ?>
<!-- тут верхнее изображение -->
<div class="block">
<div class="pure-g">
<div class="pure-u-1" >

<div class="singttl"><h1><i class="icon-news"></i> <?php single_cat_title(''); ?> </h1></div>
<a id="navline"></a>
</div>
</div>
</div>

<div class="block">
<div class="pure-g">
<div class="pure-u-3-4" >
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php  include(TEMPLATEPATH . '/tp/postloop.php'); ?>

<?php endwhile; else : ?>
<?php endif; ?>
</div>
<div class="pure-u-1-4">

<div class="categories">	 
<ul>	
<?php wp_list_categories('title_li=&orderby=id');?>	
</ul>
</div>

<div class="rss"><a href="/category/news/?feed=rss2" class="">RSS <i class="icon-rss"></i></a></div>

<div class="tags">	 
<ul>
<?php 
$arttags = array(
	'smallest'                  => 8,
	'largest'                   => 34,
	'unit'                      => 'px',
	'number'                    => 10,
	'format'                    => 'flat',
	'separator'                 => "\n",
	'orderby'                   => 'name',
	'order'                     => 'ABC',
	'exclude'                   => null,
	'include'                   => null,
	'topic_count_text_callback' => default_topic_count_text,
	'link'                      => 'view',
	'taxonomy'                  => 'post_tag',
	'echo'                      => true,
); 
?>	
<?php wp_tag_cloud( $arttags ); ?>
</ul>
</div>
</div>

</div>
</div>


<?php if (function_exists('wp_corenavi')) :?> 
<div class="block"><div class="pure-g">
<div class="pure-u-1" >

<div class="navigation center">
 <?php wp_corenavi(); ?>
</div>

</div>
</div></div>
<?php else : endif; ?>

	
<?php get_footer(); ?>