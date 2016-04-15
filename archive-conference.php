<?php get_header(); ?>
<style>
#navig.gettop,
#navig.gettop #searchform,
#navig.gettop #searchform input[type=search]
		{background:transparent; color:#fff;} 
#navig.gettop a { color:#fff;}	
.logoblock a.logo {
  border-left: 4px solid #fff;
}
</style>
<div class="archive-conference">
    <div class="block">
        
        <div class="conference-head center">
            <h1>Архив</h1>
            <h3>конференций ИПРИМ РАН</h3>
<a id="navline"></a>
        </div>
 
 <div class="pure-g">
    
  <?php 
$args = array( 
	'post_type'=>'conference',
	'posts_per_page' => 20, 
	'order'=> 'DESC',
	'orderby' =>'date', );
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); 
     $conyer = get_the_time( 'Y', $post->ID );?>
      
     <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 pure-u-xl-1-3 ">
     
   
    <div class="conference-year">
      <span><?php echo $conyer; ?></span>
    </div>      
     <div class="conferece-item">
 
 <div class="conference-title">
     <div class="conference-name">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>
       
      <div class="conference-date">
<?php if( get_field('dates') ): the_field('dates');  else : endif; ?>
      </div>
     </div>
         
     </div>
     </div>
 
 <?php endwhile; else : ?>
<?php endif; ?>    
     

<?php if (function_exists('wp_corenavi')) :?> 

<div class="pure-u-1" >

<div class="navigation center">
 <?php wp_corenavi(); ?>
</div>

</div>

<?php else : endif; ?>       
    
  <div class="pure-u-1">
      
<div class="mailchimp">

<div class="suscribe">
    Подписка
</div>

<div class="mfo clearfix">
<?php echo do_shortcode( '[mc4wp_form]' ); ?>
</div>

<div class="mchwhy mfo">
<p>После подтверждения подписки вы будете получать информацию о всех проводимых в ИПРИМ РАН конференциях.

Подписка осущетсвляется через сервис <a href="http://mailchimp.com"><img src="<?php bloginfo("template_url"); ?>/img/mailchimps.svg" class="mailchimp-img"></a></p>
</div>
</div>
      
  </div>      
 </div>       
                      
    </div>
</div>




<?php get_footer(); ?>