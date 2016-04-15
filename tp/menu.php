<div class="side-menu" id="side_menu">
<div class="closepost"><i class="icon-close-empty"></i></div>
<div class="sider">



<div class="pure-g">
    <div class="pure-u-1-2">
<div class="listblock">
<div class="h">
<a class="h4link">Карта сайта:</a>
</div>
<ul class="mainmenu">	
 <?php $kinde = array(  
		'container' => false,
		'theme_location'  => 'kind', 
		'items_wrap' => '%3$s'		);  
wp_nav_menu($kinde);  
?>
</ul>
</div>        
    </div>  
     
    <div class="pure-u-1-2">
 
<div class="listblock">

<a href="/category/news/" class="h4link">
Все новости
</a>
   
<div class="side_news">

<?php 
$snews = array( 
'posts_per_page' => 4, 
'order'=> 'DESC',
'orderby' =>'date', 

'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => 'news',
            'include_children' => false,)
    ),
); ?>
<?php $newslist = get_posts( $snews );  
foreach ($newslist as $post) :  setup_postdata($post);?>
<div class="side_news-line">

<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a> 
 <div class="side_news-fdates">
<?php the_time('d.m.Y '); ?>
</div>   
<div class="side_news-exerpt">
         <?php the_excerpt(); ?>
</div>


</div>

<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div>          
       
</div>  
     

        
    </div>
    
  <div class="pure-u-1">
  	<div class="sider_copyright">
<img src="<?php bloginfo('template_url'); ?>/img/space.svg" alt="">
  	</div>
  </div>  
</div>


</div>
</div>