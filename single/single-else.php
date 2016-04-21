<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/template/css/science.css">

<?php if( get_field('postphoto') ):
    $image = get_field('postphoto'); ?>
<style>
.sc_single-head { background-image: url(<?php echo $image; ?>); }
</style>
<?php else : endif; ?>


<div class="sc_single-txt sc_single-head">
<div class="sc_single-title novideo">

    <div class="sc_single-name">
      
       <?php the_title(); ?>
       
       <a href="/news" class="hprew">/Новости</a>
        
    </div>
</div>
    
 
<div class="shadows"></div>
</div>
<div class="sc_single-footer">
        
       <div class="pure-g">
       <div class="block">
        <div class="pure-u-1-3">
            
        <div class="science-date">
           <span><?php the_time('j F, Y | G:i'); ?></span>	 
        </div>
            
        </div>
  <div class="pure-u-1-3 center">

    <div class="likely likely-small" data-single-title="Поделиться">
		<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
		<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
		<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
		<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
    </div>
    
 </div>
        <div class="pure-u-1-3">
            <div class="scs right">

   <?php 
$category = get_the_terms( $post->ID, 'category' );

foreach( $category as $caty ){
    
   if($caty->name != 'Новости') {    
echo '<a href="'. get_term_link( (int)$caty->term_id, $caty->taxonomy ) .'">'. $caty->name .'</a>';
    }     
}      
    
  

		
                
   ?>        
           
           
            </div>
       </div>
       </div>
    </div>  
   
        
    </div>    

 

<div class="sc_single-content" id="content">
    
<div class="block">
       
       <div class="pure-g">
           <div class="pure-u-2-3">
        <div class="sc_single-exerpt">
            <?php the_excerpt(); ?>
        </div>           
        <div class="sc_single-block">
            <?php the_content(); ?>
        </div>
          </div>
           <div class="pure-u-1-3">
              
<?php 
$poid = array( $post->ID );    
if( has_term( '', 'post_tag', $post->ID ) ){
?> 
<div class="sc_single-related">

    <div class="rblock">
<h4 class="sc_single-header"><span>Похожие</span></h4>

 <?php

    $gettages = get_the_tags($post->ID);
    $tags = array();
    foreach($gettages as $tag){
        $tag_id = $tag->term_id;
        $tags[] = $tag_id;
    }
      
    
    $rel = array( 
	
    'posts_per_page' => 5, 
    'orderby'=> 'date',
    'order'=> 'DESC', 
    'exclude' => $post->ID,
    'tax_query' => array(
		'relation' => 'OR',
		array(
			'taxonomy' => 'post_tag',
			'field' => 'id',
			'terms' => $tags ,
            'operator' => 'IN'
		),
	),
    );     
    $screl = get_posts( $rel );  
foreach ($screl as $post) :  setup_postdata($post);
?>

            
<?php if( get_field('postphoto') ):
    $image = get_field('postphoto'); ?>
<style>.sc-related-pic.id<?php the_ID();?> {background-image: url(<?php echo $image; ?>);}</style>
<?php else : endif; ?>         

            

<a class="sc-related-block" href="<?php the_permalink(); ?>" class="">
<!--<div class="sc-related-pic id<?php the_ID();?>"></div>-->
<div class="sc-related-title">
<div class="sc-related-authors"><?php the_time('j F, Y | G:i'); ?></div>
       <div class="sc-related-names"><?php the_title(); ?></div>
</div>
</a>
           
            
            <?php wp_reset_postdata(); ?>
            <?php endforeach;  ?>

   
   </div>
</div>  
<?php } ?>             
               
           </div>
       </div>

        


</div>  
</div>



<div class="science-single_comment">
     <div class="block">
     <h3 class="center">Коментарии</h3>
     <?php comments_template(); ?>
     </div>
</div> 