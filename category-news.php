<?php get_header(); ?>


<!-- тут верхнее изображение -->
<div class="block">
<div class="pure-g">
<div class="pure-u-1" >

<div class="singttl">Новости</div>
<a id="navline"></a>
</div>
</div>
</div>

<div class="block">
<div class="pure-g">
<div class="pure-u-1-2" >
    <div class="category-news_archive">

        <?php if (have_posts()) : while (have_posts()) : the_post();  include(TEMPLATEPATH . '/tp/postloop.php'); endwhile; else : endif; ?>

    </div>
</div>

<div class="pure-u-1-4">
<div class="categories">	 
<ul>	
<?php wp_list_categories('title_li=&orderby=id&exclude=114,189');?>	
</ul>
</div>

<div class="rss"><a href="/category/news/?feed=rss2" class="">RSS <i class="icon-rss"></i></a></div>    
</div>
<div class="pure-u-1-4">

<div class="fano_rss">	 
<h4 class="center">Новости из ФАНО</h4>
<?php 
include_once(ABSPATH . WPINC . '/feed.php');
$rss = fetch_feed('http://fano.gov.ru/ru/press-center/rss/index.php');

if( !is_wp_error( $rss ) ){
	$maxitems = $rss->get_item_quantity(8); 
	$rss_items = $rss->get_items(0, $maxitems); 
}
?>

<ul>
	<?php 
	if( $maxitems == 0 ) 
		echo '<li><i class="icon-body-cut"></i></li>';
	else
	foreach ( $rss_items as $item ){ ?>
		<li>
		
<span>
<?php echo $item->get_date('j F Y | g:i a'); ?>
</span>

<a href='<?php echo esc_url( $item->get_permalink() ); ?>'>
			<?php echo esc_html( $item->get_title() ); ?>
</a>
		</li>
	<?php } ?>
</ul>
</div>

</div>

</div>
</div>



<?php if (function_exists('wp_corenavi')) :?> 
<div class="pure-g">
<div class="pure-u-1" >

<div class="navigation center">
 <?php wp_corenavi(); ?>
</div>

</div>
</div>
<?php else : endif; ?>

	
<?php get_footer(); ?>